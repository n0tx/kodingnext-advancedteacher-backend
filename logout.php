<?php
session_start(); // Memulai session

// Menghapus semua session
session_unset();

// Menghancurkan session
session_destroy();

// Redirect ke halaman login (index.php atau halaman login lainnya)
header("location:index.php?message=logged_out");
exit();
?>
