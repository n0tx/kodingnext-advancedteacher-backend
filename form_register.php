<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Create a new account</h1>
    <?php
    // Periksa apakah ada parameter 'message' di URL
    if (isset($_GET['message'])) {
        $message = $_GET['message'];

        // Menampilkan pesan sesuai dengan nilai 'message'
        if ($message == "registration_successful") {
            echo "<p style='color: green;'>Registration successful! You can now log in.</p>";
        } elseif ($message == "failed") {
            echo "<p style='color: red;'>Registration failed. Please try again.</p>";
        } elseif ($message == "username_taken") {
            echo "<p style='color: red;'>Username already taken. Please choose another one.</p>";
        }
    }
    ?>
    <form method="post" action="register_proses.php">
        <div>
            <label>Username</label>
            <input type="text" name="user" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="pass" required>
        </div>
        <div>
            <label>Role</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>

        <!-- Link back to the login form -->
        <div>
            <p>Already have an account? <a href="index.php">Login here</a></p>
        </div>
    </form>
</body>
</html>