<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout page</title>
    <link rel="stylesheet" href="css/training.css">
    <script src="javascript/training.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
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

<body>
<div class="modal-blur">
    <div class="intro-img-container flex">
        
        <div class="top-intro-img-container flex">
            <div class="small-intro-img flex">
                <img src="bilder/teletech.jpg" alt="Teletech">
            </div>
            <div class="small-intro-img flex">
                <img src="bilder/teletech.jpg" alt="Teletech">
            </div>
        </div>

        <div class="intro-img flex">
            <img src="bilder/teletech.jpg" alt="Teletech">
        </div>

        <div class="bottom-intro-img-container flex">
            <div class="small-intro-img flex">
                <img src="bilder/teletech.jpg" alt="Teletech">
            </div>
            <div class="small-intro-img flex">
                <img src="bilder/teletech.jpg" alt="Teletech">
            </div>
        </div>

    </div>

    <div class="intro-container flex">
        <div class="intro-text-header flex">
            <div class="intro-header">
                Trånkan Training
            </div>
        </div>
        <div class="intro-text-container flex">
            <div class="intro-text">
                A real bodybuilding brand, built by professionals for professionals. <br>
                Ronnie Coleman, Arnold Schwarzenegger, Tom Platz and Tren Twins are some of our partners. <br>
                We focus on real results. <br>
                Join TT - Trånkan Training for a real training journey. <br>
                Togheter towards real fucking results. Lets go.
            </div>
        </div>
    </div>







    <div class="site-container-1 flex">
        <div class="site-text-container flex">
            <div class="site-text-header">
            Ronnie Coleman - "The King"
            </div>
            <div class="site-text-1">
                <p>
                All time record holder for most Olympia wins at 8th wins. <br> 
                One of our top bodybuilders. <br> 
                Join TT - Trånkan Training, to get results like him. 
                </p>
            </div>
        </div>
        <div class="site-video-container flex">
            <video src="bilder/yeahbuddy.mp4" loop autoplay muted></video>
        </div>
    </div>


    <div class="site-container-2 flex">
        <div class="site-video-container-2 flex">
                <video src="bilder/trentwins.mp4" loop autoplay muted></video>
        </div>
        <div class="site-text-container-2 flex">
            <div class="site-text-header-2">
            Tren Twins
            </div>
            <div class="site-text-2">
                <p>
                The Infamous bodybuilding twins<br> 
                Two of our top bodybuilders.<br> 
                Join TT - Trånkan Training, to get results like them. 
                </p>
            </div>
        </div>
    </div>


    <div class="site-container-3 flex">
        <div class="site-text-container-3 flex">
            <div class="site-text-header-3">
            Arnold Schwarzenegger
            </div>
            <div class="site-text-3">
                <p>
                Worlds greatest bodybuilder and 7 times Olympia winner<br> 
                Our top bodybuilder. <br> 
                Join TT - Trånkan Training, to get results like him. 
                </p>
            </div>
        </div>
        <div class="site-video-container-3 flex">
            <video src="bilder/ARNOLD SCHWARZENEGGER _ DREAM SPACE (PHONK) - GYM MOTIVATION.mp4" autoplay loop muted></video>
        </div>
    </div>
    <div class="join-container flex">
        <div class="join-btn-container flex">
            <a href="training-signup.php"><button class="join-btn">Join Us Now</button></a>
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
            <div class="support-container">
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