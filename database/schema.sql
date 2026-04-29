CREATE DATABASE IF NOT EXISTS faculty_web_presence;
USE faculty_web_presence;

CREATE TABLE IF NOT EXISTS faculty (
    faculty_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    biography TEXT,
    email VARCHAR(100) NOT NULL,
    office_location VARCHAR(100),
    office_hours VARCHAR(255),
    profile_image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO faculty 
(name, title, department, biography, email, office_location, office_hours, profile_image_url)
VALUES
(
    'Dr. Whiskers',
    'Professor, Computer and Information Technology',
    'Computer Science',
    'Dr. Whiskers is a dedicated professor specializing in software development and web technologies.',
    'Whiskers@spcollege.edu',
    'St. Petersburg Campus',
    'Monday/Wednesday 2:00 PM - 4:00 PM',
    '../images/DrWhiskers.jpg'
);