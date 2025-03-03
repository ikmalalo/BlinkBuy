<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlinkBuy | Order</title>
    <link rel="stylesheet" href="orderstyle.css">
    <link rel="icon" type="image/png" href="../image/blinkbuy.png">
</head>
<body>

    <div class="order-container">
        <div class="content-wrapper">
            <div class="left-side">
                <div class="left-content">
                <img src="../image/ordering.png" alt="Order Image" class="order-image">
                </div>
            </div>
        
            <div class="right-side">
                <div class="right-content">
                    <div class="rigt-form">
                        <img src="../image/logoapp.png" alt="Logo App" class="logo-app">
                        <h2>Get Started With Us</h2>
                        <p>Fill All the Form Below Here</p>
                        <form action="../controller/proses_order.php" method="POST">
                            <input type="text" id="company_name" name="company_name" placeholder="Enter your Company Name" required>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Enter your Phone Number" required>
                            <input type="email" id="email" name="email" placeholder="Enter your Company Email" required>
                            <select id="country" name="country" required>
                                <option value="" disabled selected>Select your country</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                            </select>
                            <input type="text" id="city" name="city" placeholder="Enter your Company City" required>
                            <div class="button-bawah">
                                <button type="submit">Submit</button>
                                <button type="button" onclick="window.location.href='home.php'">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
