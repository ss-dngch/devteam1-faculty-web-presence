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
    <title>Faculty Directory</title>
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
        <div class="directory-header">
            <h1>Faculty Directory</h1>

            <div class="directory-actions">
                <form class="search-form" action="#" method="get">
                    <input type="text" name="search" placeholder="Search faculty..." aria-label="Search">
                    <button type="submit">Search</button>
                </form>

                <a class="profile-button" href="add-faculty-form.php">
                    Add Faculty
                </a>
            </div>
        </div>

        <?php foreach ($faculty as $person): ?>
            <section class="profile-overview">
                <div class="profile-left">
                    <div class="photo-placeholder">
                        <img src="../<?php echo htmlspecialchars($person['profile_image_url']); ?>" alt="Faculty Headshot">
                    </div>
                </div>

                <div class="profile-right">
                    <h2><?php echo htmlspecialchars($person['name']); ?></h2>

                    <p><strong>Title:</strong> <?php echo htmlspecialchars($person['title']); ?></p>
                    <p><strong>Department:</strong> <?php echo htmlspecialchars($person['department']); ?></p>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($person['office_location']); ?></p>
                    <p><strong>Office Hours:</strong> <?php echo htmlspecialchars($person['office_hours']); ?></p>

                    <div class="card-actions">
                        <a class="profile-button" href="faculty-profile.php?id=<?php echo $person['faculty_id']; ?>">
                            View Profile
                        </a>

                        <a class="profile-button"
                           href="../backend/delete-faculty.php?id=<?php echo $person['faculty_id']; ?>"
                           onclick="return confirm('Are you sure you want to delete this faculty member?')">
                            Delete
                        </a>
                    </div>
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