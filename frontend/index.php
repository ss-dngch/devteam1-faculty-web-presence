<?php
require '../backend/db.php';

$stmt = $pdo->query("SELECT * FROM faculty");
$faculty = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
        <form class="search-form" action="#" method="get">
            <input type="text" name="search" placeholder="Search..." aria-label="Search">
            <button type="submit">Search</button>
        </form>

        <?php foreach ($faculty as $person): ?>
            <section class="profile-overview">
                <div class="profile-left">
                    <div class="photo-placeholder">
                        <img src="../<?php echo htmlspecialchars($person['profile_image_url']); ?>" alt="Faculty Headshot">
                    </div>
                </div>

                <div class="profile-right">
                    <h2><?php echo htmlspecialchars($person['name']); ?></h2>
                    <p><strong>Department:</strong> <?php echo htmlspecialchars($person['department']); ?></p>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($person['office_location']); ?></p>
                    <p><strong>Office Hours:</strong> <?php echo htmlspecialchars($person['office_hours']); ?></p>

                    <a class="profile-button" href="faculty-profile.php?id=<?php echo $person['faculty_id']; ?>">View Profile</a>

                    <a class="profile-button"
                       href="../backend/delete-faculty.php?id=<?php echo $person['faculty_id']; ?>"
                       onclick="return confirm('Are you sure you want to delete this faculty member?')">
                        Delete
                    </a>
                </div>
            </section>
        <?php endforeach; ?>
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