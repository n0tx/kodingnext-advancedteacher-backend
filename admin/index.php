<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("location:index.php");
    exit();
}

// Mengambil nama pengguna dari session
$username = $_SESSION['username'];
?>
    <h2>Admistrator Page</h2>
    <h1>Welcome <?php echo htmlspecialchars($username); ?>!</h1>
    <!-- Tombol Logout -->
    <a href="../logout.php">Logout</a>
</body>
</html>