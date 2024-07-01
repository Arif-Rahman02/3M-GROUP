<?php
session_start();

// Data login admin
$admin = "fathur";
$password = "123";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    if ($username == $admin && $pass == $password) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header('Location: ../Kritik/kritik.php');
        exit;
    } else {
        // Login gagal
        echo "Username atau password salah!";
    }
}
?>
