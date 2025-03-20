<?php
session_start();

// Database Configuration
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = ""; // Default is empty
$dbname = "contact_db"; // Your database name

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
