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
                    <h2>Sucessful Ordering!</h2>

                    <label>Company Name:</label>
                    <input type="text" class="readonly-input" value="<?php echo $_SESSION['company_name']; ?>" readonly>

                    <label>Company Phone Number:</label>
                    <input type="text" class="readonly-input" value="<?php echo $_SESSION['phone_number']; ?>" readonly>

                    <label>Company Email:</label>
                    <input type="text" class="readonly-input" value="<?php echo $_SESSION['email']; ?>" readonly>

                    <label>Company Country:</label>
                    <input type="text" class="readonly-input" value="<?php echo $_SESSION['country']; ?>" readonly>

                    <label>Company City:</label>
                    <input type="text" class="readonly-input" value="<?php echo $_SESSION['city']; ?>" readonly>

                    <div class="button-bawah">
                        <button type="button" onclick="window.location.href='home.php'">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
