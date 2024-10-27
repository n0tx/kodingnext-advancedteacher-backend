<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login for account</h1>
    <?php
        // Periksa apakah ada parameter 'message' di URL
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            // Menampilkan pesan sesuai dengan nilai 'message'
            if ($message == "failed") {
                echo "<p style='color: red;'>Login failed. Please try again.</p>";
            }
            if ($message = "logged_out") {
                echo "<p style='color: green;'>You have been logged out successfully.</p>";
            }
        }
    ?>
    <form method="post" action="login_proses.php">
        <div>
            <label>username</label>
            <input type="text" name="user">
        </div>
        <div>
            <label>password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <!-- Link to the register form -->
        <div>
            <p>Don't have an account? <a href="form_register.php">Register here</a></p>
        </div>
    </form>
</body>
</html>