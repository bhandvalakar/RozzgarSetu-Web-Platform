<?php
session_start();

$response = [];
if (isset($_SESSION['user_name'])) {
    $response['logged_in'] = true;
    $response['user_name'] = $_SESSION['user_name'];
} else {
    $response['logged_in'] = false;
}

echo json_encode($response);
?>
