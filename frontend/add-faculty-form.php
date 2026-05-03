<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Faculty</title>
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
        <h1>Add Faculty</h1>
        <p>Enter a new faculty member to add them to the directory.</p>
    </section>

    <form action="../backend/add-faculty.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="left">
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="right">
                <label>Title:</label>
                <input type="text" name="title" required>
            </div>
        </div>

        <div class="form-row">
            <div class="left">
                <label>Department:</label>
                <input type="text" name="department" required>
            </div>
            <div class="right">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div class="left">
                <label>Office Location:</label>
                <input type="text" name="office_location">
            </div>
            <div class="right">
                <label>Office Hours:</label>
                <input type="text" name="office_hours">
            </div>
        </div>

        <div class="form-row full">
            <label>Biography:</label>
            <textarea name="biography" rows="4"></textarea>
        </div>

        <div class="form-row full">
            <label>Courses Taught:</label>
            <textarea name="courses_taught" rows="4"></textarea>
        </div>

        <div class="form-row full">
            <label>Education:</label>
            <textarea name="education" rows="4"></textarea>
        </div>

        <div class="form-row full">
            <label>Profile Image:</label>
            <input type="file" name="profile_image">
        </div>

        <div class="form-row submit-row">
            <button type="submit">Add Faculty</button>
        </div>
    </form>
</main>

</body>
</html>