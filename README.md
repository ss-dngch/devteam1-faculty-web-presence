<h2 align="center">Faculty Web Presence Application</h2>

<p align="center">
A full-stack faculty web application demonstrating CRUD operations using PHP and MySQL.
</p>

<h3 align="center">Team Members</h3>

<p align="center">
Connor Brill, Sydney Gilchrist, Nicholas Lilland, Sophia Sipayboun
</p>

<h2>Purpose</h2>
<p>
This project is a Faculty Web Presence Application created for a course assignment. The project began as a static HTML/CSS prototype and has been expanded into an interactive, database-driven web application with CRUD functionality.
</p>
<p>
The goal is to demonstrate interface planning, frontend structure, backend integration, database interaction, and professional project organization using GitHub.
</p>

<h2>Technologies Used</h2>
<ul>
<li>HTML</li>
<li>CSS</li>
<li>PHP</li>
<li>MySQL</li>
<li>XAMPP</li>
<li>GitHub</li>
</ul>

<h2>Repository Contents</h2>
<ul>
<li><strong>frontend/</strong> – user-facing PHP pages
  <ul>
    <li>index.php – homepage</li>
    <li>faculty-profile.php – faculty profile page</li>
    <li>contact.php – contact form page</li>
  </ul>
</li>
<li><strong>backend/</strong> – backend PHP files for database connection and CRUD functionality
  <ul>
    <li>db.php – database connection</li>
    <li>add-faculty.php – create functionality</li>
    <li>edit-faculty.php – update functionality</li>
    <li>delete-faculty.php – delete functionality</li>
  </ul>
</li>
<li><strong>database/</strong> – database files
  <ul>
    <li>schema.sql – table structure and initial data</li>
  </ul>
</li>
<li><strong>css/</strong> – styling
  <ul>
    <li>styles.css</li>
  </ul>
</li>
<li><strong>images/</strong> – image assets</li>
<li><strong>design/</strong> – wireframes and planning materials</li>
</ul>

<h2>How to Run Locally</h2>
<ol>
<li>Download and install XAMPP.</li>
<li>Open XAMPP Control Panel and start <strong>Apache</strong> and <strong>MySQL</strong>.</li>
<li>Move or clone the project into:
  <pre>C:\xampp\htdocs\</pre>
</li>
<li>Import the database schema:
  <ul>
    <li>Go to http://localhost/phpmyadmin</li>
    <li>Create a database named <strong>faculty_web_presence</strong></li>
    <li>Import the <strong>schema.sql</strong> file into the database</li>
  </ul>
</li>
<li>Open the project in VS Code.</li>
<li>In your browser, go to:
  <pre>http://localhost/devteam1-faculty-web-presence/frontend/index.php</pre>
</li>
</ol>

<h2>GitHub Workflow</h2>
<p>Team members should create a branch before making changes.</p>

<pre>
git checkout -b feature-name
git add .
git commit -m "Describe changes"
git push origin feature-name
</pre>

<p>Then open a pull request before merging into main.</p>

<h2>CRUD Functionality</h2>
<ul>
<li><strong>Create:</strong> Add new faculty information through forms</li>
<li><strong>Read:</strong> Display faculty data dynamically from the database</li>
<li><strong>Update:</strong> Edit existing faculty information</li>
<li><strong>Delete:</strong> Remove faculty entries with confirmation</li>
</ul>

<h2>Testing Plan</h2>
<ul>
<li>Faculty data displays correctly from the database</li>
<li>New entries can be added</li>
<li>Existing entries can be updated</li>
<li>Entries can be deleted</li>
<li>Changes persist after page refresh</li>
<li>Navigation, forms, images, and styling work correctly</li>
</ul>

<h2>Future Improvements</h2>
<ul>
<li>Implement user authentication for secure editing</li>
<li>Expand faculty records (courses, publications, research)</li>
<li>Enhance user interface and interactivity</li>
<li>Deploy application to a live hosting environment</li>
</ul>

<h2>Notes</h2>
<p>
This project has been successfully transitioned from a static prototype into a dynamic PHP/MySQL application. The original design has been maintained while integrating backend functionality and database connectivity.
</p>
