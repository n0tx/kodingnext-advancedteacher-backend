<?php
    include ('config.php'); // Koneksi ke database

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    // Hashing password (disarankan untuk keamanan)
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Mengecek apakah username sudah ada
    $check_user = mysqli_query($host, "SELECT * FROM tb_user WHERE user='$user'");
    if (mysqli_num_rows($check_user) > 0) {
        // Jika username sudah ada, kembali ke form register dengan pesan error
        header("location:form_register.php?message=username_taken");
        exit();
    }

    // Menyimpan data ke database jika username belum ada
    $register = mysqli_query($host, "INSERT INTO tb_user (user, pass, role) VALUES ('$user', '$hashed_password', '$role')");

    if ($register) {
        // Berhasil register, arahkan ke halaman login atau halaman sukses
        header("location:form_register.php?message=registration_successful");
    } else {
        // Gagal register
        header("location:form_register.php?message=registration_failed");
    }
?>
