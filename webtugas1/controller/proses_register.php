<?php
session_start();

$valid_accounts = [
    "admin" => "12345",
    "user1" => "password1",
    "user2" => "password2"
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($valid_accounts[$username])) {
    $_SESSION['error'] = "Username already exists!"; 
    header("Location: ../view/register.php");
    exit();
}

$_SESSION['valid_accounts'][$username] = $password;

$_SESSION['username'] = $username;
$_SESSION['success'] = "Registration successful! Welcome, $username!";

header("Location: ../view/home.php");
exit();
?>
