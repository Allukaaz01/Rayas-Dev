<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Removed Labels for better visuals in CSS -->
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or fill out the form to register</span>
                    <div class="name">
                        <input type="text" name="nom" placeholder="Last Name" required>  
                        <input type="text" name="prenom" placeholder="First Name" required> 
                    </div>
                     
                    <input type="text" placeholder="DD/MM/YYYY" pattern="\d{2}/\d{2}/\d{4}" name="dat" id="dns" required>
                
                    <!-- Fixed email pattern for flexibility hit machi kulchi 3do ghir gmail -->
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}" placeholder="Email" title="Example@domain.com" id="email" required>
                
                    <input type="password" name="pass_1" placeholder="Password" id="mdp1" required>    
                
                    <input type="password" name="pass_2" placeholder="Confirm Your Password" id="mdp2" required>
                
                    <input type="submit" value="Sign Up" id="signup-btn">
               
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email and password</span>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}" placeholder="Email" title="Example@domain.com" id="email" required>
               
                    <input type="password" name="pass_1" placeholder="Password" id="mdp1" required>    
                
                    <span>Forgot your password ? <a href="#">Reset it !</a></span>
               
                    <input type="submit" value="Sign In" id="signin-btn">
                
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_SESSION['message'])) {
        echo "<p class='msg'>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
    ?>

    <script src="script.js"></script>
</body>
</html>
