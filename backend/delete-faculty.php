<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM faculty WHERE faculty_id = ?");
    $stmt->execute([$id]);
}

header("Location: ../frontend/index.php");
exit();
?>