<?php
require_once "../backend/db.php";

$stmt = $pdo->query("SELECT * FROM faculty LIMIT 1");
$faculty = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profile</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faculty-profile.php">Faculty Profile</a></li>
        </ul>
        <img src="../images/logo.png" alt="Logo" class="logo">
    </nav>

    <main>
        <section class="search-row">
            <h1><?= htmlspecialchars($faculty['name']) ?></h1>
            <p>Faculty Profile</p>
        </section>

        <section class="profile-overview">
            <div class="profile-left">
                <img src="<?= htmlspecialchars($faculty['profile_image_url']) ?>" alt="Faculty Headshot">
            </div>

            <div class="profile-right">
                <h2><?= htmlspecialchars($faculty['department']) ?></h2>
                <p><strong>Title:</strong> <?= htmlspecialchars($faculty['title']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($faculty['email']) ?></p>
                <p><strong>Location:</strong> <?= htmlspecialchars($faculty['office_location']) ?></p>
                <p><strong>Office Hours:</strong> <?= htmlspecialchars($faculty['office_hours']) ?></p>

                <a class="contact-button" href="contact.php">
                    Contact <?= htmlspecialchars($faculty['name']) ?>
                </a>
            </div>
        </section>

        <hr>

        <section class="profile-overview">
            <div class="profile-left">
                <h3>Biography</h3>
                <p><?= htmlspecialchars($faculty['biography']) ?></p>
            </div>

            <div class="profile-right">
                <h3>Courses Taught</h3>
                <ul>
                    <li>COP2839 - ASP.NET Programming w/ C#</li>
                    <li>COP2251 - Java Programming II</li>
                    <li>COP4523 - Algorithmic Design and Development</li>
                </ul>

                <h3>Education</h3>
                <p>Ph.D. in Computer Science</p>
                <p>M.S. in Software Engineering</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-section">
            <h3>St. Petersburg College</h3>
            <p>P.O Box 13489<br>St.Petersburg, FL 33733</p>
        </div>

        <div class="footer-section">
            <p>&copy; 2026 St. Petersburg College. All rights reserved.</p>
        </div>

        <div class="footer-section">
            <h3>Disclaimer</h3>
            <p>This website is for informational purposes only. Content may not be reproduced without permission.</p>
        </div>
    </footer>
</body>
</html>