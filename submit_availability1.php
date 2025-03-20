<?php
// submit_availability.php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = ""; // Update with your database password
$dbname = "workers_db"; // Update with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = trim($_POST['name']);
$aadhaar = trim($_POST['aadhaar']);
$phone = trim($_POST['phone']);
$location = trim($_POST['location']);
$work_area = trim($_POST['work_area']);
$available_today = isset($_POST['available_today']) ? 1 : 0;

// Get the current date
$created_at = date('Y-m-d');

// Validate required fields
if (empty($name) || empty($aadhaar) || empty($phone) || empty($location) || empty($work_area)) {
    echo "<script>
        alert('Please fill out all required fields.');
        window.history.back();
    </script>";
    exit;
}

// Insert data into the database
$sql = "INSERT INTO workers (name, aadhaar, phone, location, work_area, available_today,created_at)VALUES ('$name', '$aadhaar', '$phone', '$location', '$work_area', '$available_today','$created_at')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Your application has been submitted successfully!');
        window.location.href = 'index.php'; // Redirect to home page
    </script>";
} else {
    echo "<script>
        alert('There was an error submitting your application. Please try again later.');
        window.history.back();
    </script>";
}

// Close the database connection
$conn->close();
?>

<!-- CREATE TABLE workers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    aadhaar VARCHAR(14) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    location VARCHAR(100) NOT NULL,
    work_area VARCHAR(100) NOT NULL,
    available_today TINYINT(1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->
