<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM faculty WHERE faculty_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: ../frontend/index.php");
exit();
?>