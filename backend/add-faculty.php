<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../frontend/faculty-directory.php');
    exit();
}

require_once 'db.php';

// Get form data
$name = $_POST['name'];
$title = $_POST['title'];
$department = $_POST['department'];
$biography = $_POST['biography'] ?? '';
$email = $_POST['email'];
$office_location = $_POST['office_location'] ?? '';
$office_hours = $_POST['office_hours'] ?? '';
$courses_taught = $_POST['courses_taught'] ?? '';
$education = $_POST['education'] ?? '';

// Default image
$profile_image_url = 'images/DrWhiskers.jpg';

// Handle image upload
if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
    $file_name = basename($_FILES['profile_image']['name']);
    $target_path = '../images/' . $file_name;

    if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_path)) {
        $profile_image_url = 'images/' . $file_name;
    }
}

try {
    $query = "INSERT INTO faculty 
        (name, title, department, biography, email, office_location, office_hours, profile_image_url, courses_taught, education)
        VALUES 
        (:name, :title, :department, :biography, :email, :office_location, :office_hours, :profile_image_url, :courses_taught, :education)";

    $stmt = $pdo->prepare($query);

    $stmt->execute([
        ':name' => $name,
        ':title' => $title,
        ':department' => $department,
        ':biography' => $biography,
        ':email' => $email,
        ':office_location' => $office_location,
        ':office_hours' => $office_hours,
        ':profile_image_url' => $profile_image_url,
        ':courses_taught' => $courses_taught,
        ':education' => $education
    ]);

    // Redirect back to directory
    header('Location: ../frontend/faculty-directory.php');
    exit();

} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
?>