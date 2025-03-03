<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlinkBuy | Register</title>
    <link rel="stylesheet" href="registerstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="login-container <?php echo isset($_SESSION['error']) ? 'shake' : ''; ?>">
        <div class="content-wrapper">
            <div class="left-side">
                <div class="left-content">
                    <img src="../image/formkiri.png" alt="Register Image" class="login-image">
                </div>
            </div>

            <div class="right-side">
                <div class="right-content">
                    <label class="createaccount-text">Create Your Account</label>
                    <p class="dontforget-text">Don't Forget Your Account</p>
                    
                    <form action="../controller/proses_register.php" method="POST">
                        <input type="text" id="email" name="email" placeholder="                          Enter your Email" required>
                        <input type="text" id="username" name="username" placeholder="                       Enter your username" required>
                        <input type="password" id="password" name="password" placeholder="                       Enter your password" required>
                        <label for="country" class="birthdate-label"></label>
                        <select id="country" name="country" required>
                            <option value="" disabled selected>Choose your country</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Australia">Australia</option>
                            <option value="Germany">Germany</option>
                            <option value="France">France</option>
                        </select>
                        <label for="birthdate" class="birthdate-label"></label>
                        <input type="date" id="birthdate" name="birthdate" required>
                        <label class="birthdate-label"></label>
                        <div class="radio-container">
                            <input type="radio" id="student" name="status" value="Student" required>
                            <label for="student">Student</label>

                            <input type="radio" id="highschool" name="status" value="High School Student" required>
                            <label for="highschool">High School</label>

                            <input type="radio" id="adult" name="status" value="Adult" required>
                            <label for="adult">Adult</label>
                        </div>

                        <div class="button-signin">
                            <button type="submit">Sign Up</button>
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
