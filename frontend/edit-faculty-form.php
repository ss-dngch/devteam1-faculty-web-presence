<?php
require '../backend/db.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: faculty-directory.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM faculty WHERE faculty_id = ?");
$stmt->execute([$id]);
$faculty = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$faculty) {
    echo "Faculty not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Faculty</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="faculty-directory.php">Faculty Directory</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <img src="../images/logo.png" alt="Logo" class="logo">
</nav>

<main>
    <section class="contact-header">
        <h1>Edit Faculty</h1>
        <p>Update faculty information below.</p>
    </section>

    <form action="../backend/edit-faculty.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="faculty_id" value="<?= htmlspecialchars($faculty['faculty_id']) ?>">
        <input type="hidden" name="current_image" value="<?= htmlspecialchars($faculty['profile_image_url']) ?>">

        <div class="form-row">
            <div class="left">
                <label>Name:</label>
                <input type="text" name="name" value="<?= htmlspecialchars($faculty['name']) ?>" required>
            </div>
            <div class="right">
                <label>Title:</label>
                <input type="text" name="title" value="<?= htmlspecialchars($faculty['title']) ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="left">
                <label>Department:</label>
                <input type="text" name="department" value="<?= htmlspecialchars($faculty['department']) ?>" required>
            </div>
            <div class="right">
                <label>Email:</label>
                <input type="email" name="email" value="<?= htmlspecialchars($faculty['email']) ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="left">
                <label>Office Location:</label>
                <input type="text" name="office_location" value="<?= htmlspecialchars($faculty['office_location']) ?>">
            </div>
            <div class="right">
                <label>Office Hours:</label>
                <input type="text" name="office_hours" value="<?= htmlspecialchars($faculty['office_hours']) ?>">
            </div>
        </div>

        <div class="form-row full">
            <label>Biography:</label>
            <textarea name="biography" rows="4"><?= htmlspecialchars($faculty['biography']) ?></textarea>
        </div>

        <div class="form-row full">
            <label>Courses Taught:</label>
            <textarea name="courses_taught" rows="4"><?= htmlspecialchars($faculty['courses_taught']) ?></textarea>
        </div>

        <div class="form-row full">
            <label>Education:</label>
            <textarea name="education" rows="4"><?= htmlspecialchars($faculty['education']) ?></textarea>
        </div>

        <div class="form-row full">
            <label>Profile Image:</label>
            <input type="file" name="profile_image">
        </div>

        <div class="form-row submit-row">
            <button type="submit">Save Changes</button>
        </div>
    </form>
</main>

</body>
</html>