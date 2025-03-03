<?php
session_start();

$valid_username = "admin";
$valid_password = "12345";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username; 
    header("Location: ../view/home.php");
    exit();
} else {
    $_SESSION['error'] = "Username atau Password salah!"; 
    header("Location: ../view/login.php"); 
    exit();
}
?>
