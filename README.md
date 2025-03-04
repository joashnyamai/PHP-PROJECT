**Campaign Feedback Web Application**

**Overview**

This web application captures feedback from users about a political campaign. It includes:

An HTML form for feedback submission.

A PHP script to store feedback in a MySQL database.

A PHP script to retrieve and display feedback.

Features
Feedback Form: Collects user feedback with fields for name, email, feedback, and rating.

Database Storage: Stores feedback in a MySQL database.

Feedback Display: Retrieves and displays feedback in a table.

Prerequisites
Local Server: XAMPP or WAMP with PHP and MySQL.

Web Browser: Chrome, Firefox, or any modern browser.

Setup Instructions
1. Set Up the Database
Open PHPMyAdmin (http://localhost/phpmyadmin).

Create a database named campaign_feedback.

Run the following SQL query to create the feedback table:

sql

CREATE TABLE feedback (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    feedback TEXT NOT NULL,
    rating INT NOT NULL,
    submission_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
2. Configure the Project
Place the project folder in the htdocs directory (for XAMPP) or www directory (for WAMP).

Update the database connection details in submit_feedback.php and view_feedback.php:

php

$servername = "localhost";
$username = "root";
$password = ""; // Leave empty if no password is set
$dbname = "campaign_feedback";
3. Run the Application
Start Apache and MySQL from your local server control panel (e.g., XAMPP or WAMP).

Open your browser and navigate to:


http://localhost/project 2/feedback_form.html
Submit feedback through the form and view it at:


http://localhost/project 2/view_feedback.php
File Structure

project-folder/
│
├── feedback_form.html       # HTML form for feedback submission
├── submit_feedback.php      # PHP script to handle form submission
├── view_feedback.php        # PHP script to display feedback
└── README.md                # Project documentation
Usage
Submit Feedback:

Open feedback_form.html in your browser.

Fill out the form and click Submit.

View Feedback:

Open view_feedback.php in your browser.

View all submitted feedback in a table.

Technologies Used
Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL

License
This project is licensed under the MIT License.
