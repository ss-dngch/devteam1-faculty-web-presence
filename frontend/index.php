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
        <!-- Page content goes here -->
        <form class="search-form" action="#" method="get">
            <input type="text" name="search" placeholder="Search..." aria-label="Search">
            <button type="submit">Search</button>
        </form>
    </section>

    <section class="profile-overview">
        <div class="profile-left">
            <div class="photo-placeholder">
                <img src="../images/DrWhiskers.jpg" alt="Faculty Headshot">
            </div>
        </div>
        <div class="profile-right">
            <h2>Dr. Whiskers</h2>
            <p><strong>Department:</strong> Computer Science</p>
            <p><strong>Location:</strong> St. Petersburg Campus</p>
            <p><strong>Office Hours:</strong> Mon/Wed 2:00 PM – 4:00 PM</p>
            <a class="profile-button" href="faculty-profile.php">View Profile</a>
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