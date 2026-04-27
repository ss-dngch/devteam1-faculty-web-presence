<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
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
        <h1 style="text-align: center;">Contact Us</h1>
        <p style="text-align: center;">Want to know more information? Fill out this form and we will be in touch soon!</p>

        <form>
            <div class="form-row">
                <div class="left">
                    <label for="firstName">First Name:</label><br>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="right">
                    <label for="lastName">Last Name:</label><br>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-row">
                <div class="left">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="right">
                    <label for="phone">Phone Number:</label><br>
                    <input type="tel" id="phone" name="phone">
                </div>
            </div>
            <div class="form-row full">
                <label for="subject">Message Subject:</label><br>
                <select id="subject" name="subject" required>
                    <option value="">Select a subject</option>
                    <option value="general">General Inquiry</option>
                    <option value="academic">Academic Question</option>
                    <option value="technical">Technical Support</option>
                    <option value="feedback">Feedback</option>
                </select>
            </div>
            <div class="form-row full">
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-row full">
                <label for="attachments">Attachments:</label><br>
                <input type="file" id="attachments" name="attachments" multiple>
            </div>
            <div class="form-row">
                <div class="left"></div>
                <div class="right">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

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