<!-- <?php include 'header.php'; ?> -->

<!-- <?php
// session_start();
// if (isset($_SESSION['user_id'])) {
//     header("Location: index.html");
//     exit();
// }
// ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RozzgarSetu</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <style>
        /* Import Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #d9f3ff, #ffffff);
        }

        /* Main Container */
        .container {
            display: flex;
            width: 800px;
            height: 450px;
            border-radius: 25px;
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Left Panel (Login) */
        .left-panel {
            width: 50%;
            background: #388e3c;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            text-align: center;
        }

        .left-panel h2 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .left-panel p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .login-btn {
            padding: 10px 20px;
            background: transparent;
            border: 2px solid white;
            color: white;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: white;
            color: #388e3c;
        }

        /* Right Panel (Sign Up) */
        .right-panel {
            width: 50%;
            background: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .right-panel h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .right-panel p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 12px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            background: #f1f1f1;
            border-radius: 20px;
            font-size: 16px;
            text-align: center;
            outline: none;
        }

        .signup-btn {
            width: 100%;
            padding: 12px;
            background: #388e3c;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .signup-btn:hover {
            background: #388e3c;
        }

        /* Login Link */
        .link p {
            margin-top: 15px;
            font-size: 14px;
        }

        .link a {
            color: #388e3c;
            text-decoration: none;
            font-weight: bold;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Left Panel (Login) -->
        <div class="left-panel">
            <h2>Login</h2>
            <p>Login here if you already have an account</p>
            <button class="login-btn">LOGIN</button>
        </div>

        <!-- Right Panel (Sign Up) -->
        <div class="right-panel">
            <h2>Sign Up</h2>
            <p>Or use your email for registration</p>
            <form action="save_login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="signup-btn">SIGN UP</button>
            </form>
            <div class="link">
                <p>You have't an account? <a href="register.html">Register here</a></p>
            </div>
        </div>
    </div>

</body>

</html>