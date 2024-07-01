<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: ../login.html');
    exit;
}

echo "Selamat datang, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Logout</a>
