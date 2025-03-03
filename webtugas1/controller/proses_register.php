<?php
session_start();

// Data akun yang sudah tersimpan (mirip dengan login)
$valid_accounts = [
    "admin" => "12345",
    "user1" => "password1",
    "user2" => "password2"
];

// Ambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cek apakah username sudah ada di daftar akun
if (isset($valid_accounts[$username])) {
    $_SESSION['error'] = "Username already exists!"; // Jika username sudah ada
    header("Location: ../view/register.php");
    exit();
}

// Simpan akun baru ke SESSION (simulasi database)
$_SESSION['valid_accounts'][$username] = $password;

// Login otomatis setelah register
$_SESSION['username'] = $username;
$_SESSION['success'] = "Registration successful! Welcome, $username!";

header("Location: ../view/home.php");
exit();
?>
