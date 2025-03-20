<?php include 'contact_us_header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles1.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> SweetAlert2 for modern alerts -->
</head>
<body>
    <header>
        <!-- <h1>Contact Us</h1> -->
    </header>
    <main>
        <section>
            <p>If you have any questions or concerns, feel free to reach out to us through the form below:</p>

            <!-- add backhend php page -->
            <form action="save_contact.php" method="post">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name Please" required><br><br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required><br><br>
                <label for="message">Message</label><br>
                <textarea id="message" name="message" rows="5" placeholder="Your Questions or Concerns"></textarea><br>

                <div class="form-group" >
                    <input type="submit" value="Submit" class="submit-button"><br>
                </div>

            </form>
        </section>
        <footer>
            <p>&copy; 2025 RozzgarSetu. All rights reserved.</p>
            <a href="index.php">Home</a>
        </footer>
        
        
    </main>
</body>
</html>
