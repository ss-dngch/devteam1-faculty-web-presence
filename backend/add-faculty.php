<?php

try {
    require_once 'db.php';

    $query = "INSERT INTO faculty 
        (name, title, department, biography, email, office_location, office_hours, profile_image_url) 
    VALUES 
        (:name, :title, :department, :biography, :email, :office_location, :office_hours, :profile_image_url);";

    $target_dir = '../images/';
    $target_file = $target_dir . basename($_FILES['profile_image']['name']);
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_file);

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':title', $data['title']);
    $stmt->bindParam(':department', $data['department']);
    $stmt->bindParam(':biography', $data['biography']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':office_location', $data['office_location']);
    $stmt->bindParam(':office_hours', $data['office_hours']);
    $stmt->bindParam(':profile_image_url', $target_file);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

    die('Faculty added successfully');

} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
