<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../frontend/index.php');
} else {
    try {
        require_once 'db.php';

        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        $query = "UPDATE faculty SET name = :name, 
                                    title = :title, 
                                    department = :department, 
                                    biography = :biography, 
                                    email = :email, 
                                    office_location = :office_location, 
                                    office_hours = :office_hours, 
                                    profile_image_url = :profile_image_url 
                    WHERE id = $id;";

        $data = json_decode(file_get_contents('php://input'), true);

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':department', $data['department']);
        $stmt->bindParam(':biography', $data['biography']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':office_location', $data['office_location']);
        $stmt->bindParam(':office_hours', $data['office_hours']);
        $stmt->bindParam(':profile_image_url', $data['profile_image_url']);
        $stmt->bindParam(':id', $data['id']);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header('Location: ../frontend/index.php');

        exit();

    } catch (PDOException $e) {
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
}
?>
