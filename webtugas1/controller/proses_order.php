<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['company_name'] = $_POST['company_name'];
    $_SESSION['phone_number'] = $_POST['phone_number'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['city'] = $_POST['city'];

    header("Location: ../view/berhasilorder.php");
    exit();
}
?>
