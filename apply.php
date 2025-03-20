<?php include 'apply_header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Work</title>
    <link rel="stylesheet" href="styles1.css"> <!-- You can use the same or new CSS -->
</head>
<body>

    <section class="form-container">
        <form action="submit_availability1.php" method="POST" class="apply-form">
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            </div>

            <div class="form-group">
                <label for="aadhaar">Aadhaar Number</label>
                <input type="text" id="aadhaar" name="aadhaar" placeholder="Enter Your Aadhaar Number" pattern="\d{4}\s?\d{4}\s?\d{4}" maxlength="14" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" pattern="\d{3}\s?\d{3}\s?\d{4}" maxlength="12" required>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="Enter Your Current Location" required>
            </div>

            <div class="form-group">
                <label for="work_area">Preferred Work Area</label>
                <input type="text" id="work_area" name="work_area" placeholder="Enter Your Work Area" required>
            </div>

            <div class="form-group center-align">
                <label for="available_today">Available for Work Today</label>
                <input type="checkbox" id="available_today" name="available_today" value="yes" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="submit-button">
            </div>

        </form>
    </section>

    <footer>
        <p>&copy; 2025 RozzgarSetu. All rights reserved.</p>
        <nav class="footer-nav">
            <a href="policy_page.php">Privacy Policy</a> |
            <a href="term_service_page.php">Terms of Service</a> |
            <a href="contact_us.php">Contact Us</a>
        </nav>
    </footer>

</body>
</html>
