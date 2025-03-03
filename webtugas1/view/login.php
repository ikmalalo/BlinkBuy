<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blinkbuy | Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/png" href="../image/blinkbuy.png">
</head>
<body>
    <div class="login-container <?php echo isset($_SESSION['error']) ? 'shake' : ''; ?>">
        <div class="content-wrapper">
            <div class="left-side">
                <div class="left-content">
                    <img src="../image/formkiri.png" alt="Login Image" class="login-image">
                </div>
            </div>

            <div class="right-side">
                <div class="right-content">
                    <img src="../image/logoapp.png" alt="Logoapp" class="logo-app">
                    
                    <label class="welcome-text">Welcome Back!</label>
                    <p class="please-text">Please Enter Your Account Below Here</p>
                    
                    <form action="../controller/proses_login.php" method="POST">
                        <input type="text" id="username" name="username" placeholder="                     Enter your username" required>
                        <input type="password" id="password" name="password" placeholder="                     Enter your password" required>
                    
                        <?php if (isset($_SESSION['error'])): ?>
                            <p class="error-msg"><?php echo $_SESSION['error']; ?></p>
                        <?php endif; ?>

                        <div class="button-signin">
                            <button type="submit">Sign In</button>
                        </div>

                        <!-- Tambahan No Account? & Forgot Password -->
                        <div class="extra-options">
                            <p class="no-account"><a href="register.php">No Account?</a></p>
                            <p class="forgot-password"><a href="register.php">Forgot Password</a></p>
                        </div>

                        <div class="social-login">   
                            <div class="social-buttons">
                                <button class="google-btn">
                                    <img src="../image/logogugel.png" alt="Google">
                                </button>
                                <button class="facebook-btn">
                                    <img src="../image/logopesbuk.png" alt="Facebook">
                                </button>
                                <button class="twitter-btn">
                                    <img src="../image/logotwiter.png" alt="Twitter">
                                </button>
                            </div>
                        </div>                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php unset($_SESSION['error']); ?>  
</body>
</html>
