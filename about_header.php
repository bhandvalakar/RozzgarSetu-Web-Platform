<?php
session_start();
?>

<header>
    <h1>RozzgarSetu</h1>

    <nav class="header-menu">
        <a href="index.php">Home</a>
        <a href="about_page.php">About</a>
        <a href="contact_us.php">Contact Us</a>
    </nav>

    <div class="auth-buttons">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.html">Register</a>
        <?php endif; ?>
    </div>
</header>
