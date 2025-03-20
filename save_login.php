<?php
session_start(); // Start session
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Check if user exists
    $sql = "SELECT id, name, password FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify Password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = explode(" ", $user['name'])[0]; // Store first name
            
            // Redirect to index page after successful login
            echo "<script>alert('Login successful! Welcome, " . $_SESSION['user_name'] . "'); window.location.href='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid email or password!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('User not found! Please register first.'); window.location.href='register.html';</script>";
    }
}
?>
