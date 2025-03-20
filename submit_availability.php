<?php
// submit_availability.php

include 'workers_db.php';

$name = $_POST['name'];
$aadhaar = $_POST['aadhaar'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$work_area = $_POST['work_area'];
$available_today = isset($_POST['available_today']) ? 1 : 0;

// Get the current date
$created_at = date('Y-m-d');

// Insert worker data into the database with the current date
$sql = "INSERT INTO workers (name, aadhaar, phone, location, work_area, available_today, created_at)
        VALUES ('$name', '$aadhaar', '$phone', '$location', '$work_area', '$available_today', '$created_at')";

if ($conn->query($sql) === TRUE) {
    echo "Worker availability submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>