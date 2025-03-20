<!-- index.php -->

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RozzgarSetu</title>
    <link rel="stylesheet" href="styles1.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> SweetAlert2 for modern alerts -->
</head>

<body>

    <!-- <p style="background-image: url('IMG_20240625_185118.jpg');"></p> -->
    <header>

    </header>

    <nav>
        <br>
        <a href="apply.php" class="nav-button">Apply For Work</a>
        <a href="available.php" class="nav-button">Available Workers Today</a>
    </nav>

    <main>
        <section class="hero">
            <h2>Find Farming Workers for Today</h2>
            <p>Click on "Available Workers Today" to see who is ready to work in your area.</p>
        </section>

        <section class="how-it-works">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <h3>1. Register</h3>
                    <p>Create an account to start hiring or applying for work.</p>
                </div>
                <div class="step">
                    <h3>2. Search</h3>
                    <p>Search for available workers or jobs in your area.</p>
                </div>
                <div class="step">
                    <h3>3. Hire</h3>
                    <p>Connect with workers and finalize the job.</p>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <h2>What Our Users Say</h2>
            <blockquote>
                "This platform made finding workers for my farm so easy!" – Farmer John
            </blockquote>
            <blockquote>
                "A great tool for anyone looking for quick farming work." – Worker Priya
            </blockquote>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 RozzgarSetu. All rights reserved.</p>
        <nav class="footer-nav">
            <a href="policy_page.php">Privacy Policy</a> | <a href="term_service_page.php">Terms of Service</a> | <a
                href="contact_us.php">Contact Us</a>
        </nav>
    </footer>
    <!-- <script>
        // Show a styled success message on form submission
        document.getElementById("submitBtn").addEventListener("click", function () {
            Swal.fire({
                title: "Success!",
                text: "Form submitted successfully!",
                icon: "success",
                confirmButtonText: "OK"
            });
        });
    </script> -->
</body>

</html>