<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../frontend/index.php');
} else {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $department = $_POST['department'];
    $biography = $_POST['biography'];
    $email = $_POST['email'];
    $office_location = $_POST['office_location'];
    $office_hours = $_POST['office_hours'];
    $profile_image_url = $_POST['profile_image_url'] ?? null;

    try {      

        require_once 'db.php';

        $query = "INSERT INTO faculty 
            (name, title, department, biography, email, office_location, office_hours, profile_image_url) 
        VALUES 
            (:name, :title, :department, :biography, :email, :office_location, :office_hours, :profile_image_url);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":department", $department) ?: null;
        $stmt->bindParam(":biography", $biography) ?: null;
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":office_location", $office_location) ?: null;
        $stmt->bindParam(":office_hours", $office_hours) ?: null;
        $stmt->bindParam(":profile_image_url", $profile_image_url);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header('Location: ../frontend/index.php');

        exit();

    } catch (PDOException $e) {
        die('Database error: ' . $e->getMessage());
    }
}
?>
