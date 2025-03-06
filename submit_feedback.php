<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure fields exist
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $feedback = isset($_POST['feedback']) ? trim($_POST['feedback']) : '';
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : null;

    // Validate required fields
    if (empty($name) || empty($email) || empty($feedback) || $rating === null) {
        die("Error: All fields are required.");
    }

    // Database connection
    $conn = new mysqli("localhost", "root", "0745", "campaign_feedback");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements for security
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $email, $feedback, $rating);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    die("Invalid request. This page should be accessed via form submission.");
}
?>
