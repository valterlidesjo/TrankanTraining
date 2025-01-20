<?php

require_once 'includes/config-session.php';
require_once 'includes/sign-up-view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/training-signup.css">
    <script src="javascript/training-signup.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>



    <!-- New nav bar responsive -->
<div class="navbar-container flex">
    <div class="img-container flex">
        <img src="bilder/golds-gym.png" alt="Golds Gym">
    </div>


<button type="button" class="mobile-nav-toggle" aria-controls="primary-nav" aria-expanded="false">
    ☰
</button>

 <nav>
    <ul id="primary-nav" class="primary-nav flex" data-visible="false">
        <li >
            <a href="training.php" class="flex menu-text">
                <div>00</div>Home
            </a>
        </li>
        <li>
            <a href="#contact" class="flex menu-text">
                <div>01</div>Contact
            </a>
        </li>
        <li>
            <a href="training-signup.php" class="flex menu-text">
                <div>02</div>Sign Up
            </a>
        </li>
        <li>
            <a href="training-login.php" class="flex menu-text">
                <div>03</div>Log In
            </a>
        </li>
        <li>
            <a href="training-cart.php" class="flex menu-text">
                <div>04</div>Products
            </a>
        </li>

    </ul>
 </nav>
</div>
<!-- New responsive navbar ends here -->
<div class="modal-blur">

        
    
<div class="sign-up-container flex">
    <div class="big-img-container flex">
        <div class="big-logo-img-container flex">
            <img src="bilder/teletech.jpg" alt="Teletech">
        </div>
    </div>
    <div class="sign-up-frame flex">
        <div class="logo-img-container">
            <img src="bilder/teletech.jpg" alt="Teletech" class="logo-img">
        </div>
        <div class="sign-up-header-container flex">
            <div class="sign-up-header">
                Create an account
            </div>
            <div class="account-text">
            Already have an account? <a href="training-login.php">Log in</a>
            </div>
        </div>
    

        <div class="sign-up-input-container flex">
        <form action="includes/sign-up-inc.php" method="post" class="flex">
            <?php
            signupInput();
            ?>
            <button type="submit" class="submit-btn">Create Account</button>
        </form>
            <?php
            checkSignupErrors();
            ?>
        </div>

        <div class="line-container">
            <div class="line"></div>
            <span class="line-text">or register with</span>
            <div class="line"></div>
        </div>

        <div class="sign-up-with-container flex">
            <div class="sign-up-with-google flex">
                <div class="google flex">
                    <img src="bilder/Google-Symbol.png" alt="Google">
                </div>

                <div class="google-text">
                    Google
                </div>
            </div>

            <div class="sign-up-with-apple flex">
                <div class="apple flex">
                    <img src="bilder/apple-logo.png" alt="Apple">
                </div>

                <div class="apple-text">
                    Apple
                </div>
            </div>
        </div>
    </div>

</div>


<div class="contact-container flex" id="contact">
    <div class="contact-header-container flex">
        <div class="contact-header">
      
            Contact
        </div>
        <div class="contact-info">
            Bollywood Boulevard 69 <br>
            Venice, CA <br>
            +90210 - 6969 <br>
            trånkantraining@gmail.com
        </div>
        <div class="support-container" >
            <button class="support-btn">Support</button>
        </div>
    </div>
</div>


</div> <!-- div for blur with modal open-->
<!-- support modal here -->
<div class="support-modal-container">
    <div class="support-modal-container-2 flex">
        <div class="support-modal-container-3 flex">
            <div class="modal-header-container flex">
                <div class="modal-header">
                    Support
                </div>
                <button class="close-modal">X</button>
            </div>

            <div class="modal-content">
                <!-- Bild till vänster -->
                <img src="bilder/teletech.jpg" alt="Left Image" class="modal-image">

                <form class="modal-form-container flex">
                    <input type="text" placeholder="Name" required class="modal-input-name">
                    <input type="email" placeholder="Your Email" required class="modal-input-mail">
                    <textarea rows="10" cols="10" placeholder="Write your support message here..."></textarea>
                    <button type="submit" class="modal-submit-btn">Send Message</button>
                </form>

                <img src="bilder/teletech.jpg" alt="Right Image" class="modal-image modal-image-bottom">
            </div>
        </div>
    </div>
</div>
<!-- support modal ends here -->






</body>

</html>