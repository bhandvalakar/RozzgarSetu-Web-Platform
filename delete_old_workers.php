<?php
// delete_old_workers.php

include 'workers_db.php';

// Delete workers who were available before today
$sql = "DELETE FROM workers WHERE created_at < CURDATE()";

if ($conn->query($sql) === TRUE) {
    echo "Old workers' availability deleted successfully.";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
?>
