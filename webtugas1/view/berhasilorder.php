<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlinkBuy | Success Order</title>
    <link rel="stylesheet" href="orderstyle.css">
    <link rel="icon" type="image/png" href="../image/blinkbuy.png">


</head>
<body>

<div class="order-container">
        <div class="content-wrapper">
            <!-- Bagian Kiri: Gambar -->
            <div class="left-side">
                <div class="left-content">
                    <img src="../image/berhasilorder.png" alt="Order Image" class="order-image">
                </div>
            </div>
        
            <!-- Bagian Kanan: Hasil Inputan -->
            <div class="right-side">
                <div class="right-content">
                    <div class="result-form">
                        <img src="../image/logoapp.png" alt="Logo App" class="logo-app">
                        <h2>Submission Successful!</h2>
                        <p><strong>Company Name:</strong> <?php echo $_SESSION['company_name']; ?></p>
                        <p><strong>Phone Number:</strong> <?php echo $_SESSION['phone_number']; ?></p>
                        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
                        <p><strong>Country:</strong> <?php echo $_SESSION['country']; ?></p>
                        <p><strong>City:</strong> <?php echo $_SESSION['city']; ?></p>
                        
                        <div class="button-bawah">
                            <button type="button" onclick="window.location.href='order.php'">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
