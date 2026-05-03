<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../frontend/index.php');
    exit();
}

require_once 'db.php';

$name = $_POST['name'];
$title = $_POST['title'];
$department = $_POST['department'];
$biography = $_POST['biography'];
$email = $_POST['email'];
$office_location = $_POST['office_location'];
$office_hours = $_POST['office_hours'];

$profile_image_url = null;

if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
    $file_name = basename($_FILES['profile_image']['name']);
    $target_dir = '../images/';
    $target_file = $target_dir . $file_name;

    move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_file);

    $profile_image_url = 'images/' . $file_name;
}

try {
    $query = "INSERT INTO faculty 
        (name, title, department, biography, email, office_location, office_hours, profile_image_url)
        VALUES 
        (:name, :title, :department, :biography, :email, :office_location, :office_hours, :profile_image_url)";

    $stmt = $pdo->prepare($query);

    $stmt->execute([
        ':name' => $name,
        ':title' => $title,
        ':department' => $department,
        ':biography' => $biography,
        ':email' => $email,
        ':office_location' => $office_location,
        ':office_hours' => $office_hours,
        ':profile_image_url' => $profile_image_url
    ]);

    header('Location: ../frontend/index.php');
    exit();

} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
?>
