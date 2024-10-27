<?php
session_start();
include ('config.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

// Cek apakah username ada di database
$login = mysqli_query($host,"SELECT * FROM tb_user WHERE user='$user'");
$data = mysqli_fetch_assoc($login);

// Verifikasi password yang di-hash
if ($data && password_verify($pass, $data['pass'])) {
    // Menyimpan nama pengguna ke dalam session setelah login berhasil
    $_SESSION['username'] = $data['user'];
    
    // Cek peran pengguna
    if ($data['role'] == "admin") {
        header("location:admin/index.php");
    } elseif ($data['role'] == "user") {
        header("location:user/index.php");
    }
} else {
    // Gagal login
    header("location:index.php?message=failed");
}
?>