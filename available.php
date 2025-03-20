<?php
include 'workers_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Workers</title>
    <link rel="stylesheet" href="available.css">
</head>
<body>

    <div class="container">
        <h2>Available Workers Today</h2>

        <!-- Search Form -->
        <form action="available.php" method="GET" class="search-form">
            <label for="location">Worker Location:</label>
            <input type="text" name="location" id="location" placeholder="Enter Location"
                   value="<?php echo isset($_GET['location']) ? htmlspecialchars($_GET['location']) : ''; ?>">

            <label for="work_area">Working Area:</label>
            <input type="text" name="work_area" id="work_area" placeholder="Enter Work Area"
                   value="<?php echo isset($_GET['work_area']) ? htmlspecialchars($_GET['work_area']) : ''; ?>">

            <button type="submit">Search</button>
            <a href="available.php" class="reset-btn">Refresh</a>
        </form>

        <?php
        // Get search filters
        $location = isset($_GET['location']) ? trim($_GET['location']) : '';
        $work_area = isset($_GET['work_area']) ? trim($_GET['work_area']) : '';

        // Base query: workers available today (filter by date if needed)
        $sql = "SELECT name, phone, location, work_area FROM workers WHERE available_today = 1 AND created_at = CURDATE()";

        // Add search filters if provided
        if (!empty($location)) {
            $location = $conn->real_escape_string($location);
            $sql .= " AND location LIKE '%$location%'";
        }

        if (!empty($work_area)) {
            $work_area = $conn->real_escape_string($work_area);
            $sql .= " AND work_area LIKE '%$work_area%'";
        }

        $result = $conn->query($sql);

        if ($result === false) {
            echo "<p class='error'>Error in query: " . $conn->error . "</p>";
        } elseif ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Phone</th><th>Location</th><th>Work Area</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['name']) . "</td>
                        <td>" . htmlspecialchars($row['phone']) . "</td>
                        <td>" . htmlspecialchars($row['location']) . "</td>
                        <td>" . htmlspecialchars($row['work_area']) . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-workers'>No workers available for your search today.</p>";
        }

        $conn->close();
        ?>
    </div>

    <footer>
        <p>&copy; 2025 RozzgarSetu. All rights reserved.</p>
        <a href="index.php">Home</a>
    </footer>

</body>
</html>
