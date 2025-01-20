<?php
require_once './includes/profile-inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/training-profile.css">
    <script src="javascript/training-login.js" defer></script>
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
                <a href="training-profile.php" class="flex menu-text">
                    <div>03</div>Profile
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
    <div class="blur">
        <div class="profile-img-super-container flex">
            <div class="profile-img-container flex">
                <img class="profile-img" src="<?php echo htmlspecialchars($profileImage); ?>" alt="Profile image">
                <label for="profileImage" class="upload-btn flex">+</label>
            </div>

            <form id="uploadForm" action="includes/upload-profile-image.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="profileImage" id="profileImage" accept="image/*" onchange="uploadFile()">
            </form>
        </div>
        <div class="profile-container flex">
            <div class="profile-content-container flex">
                
                <div class="profile-header-container flex">
                    <?php profileHeader($userFirstName, $userLastName); ?>
                </div>

                <div class="profile-content flex">
                    <div class="profile-content-header">
                        Your profile
                    </div>

                    <div class="training-goal-container flex">
                        <form method="POST" action="includes/update-profile.php" class="goal-form flex">
                            <div class="goal-text">
                                Your Goal: <br>
                                <?php profileGoal($userGoal); ?>
                            </div>
                            <div class="goal-select-div flex">
                                <select name="user_goal" class="change-goal-btn">
                                    <option value="Change goal">Change goal</option>
                                    <option value="Lose weight">Lose weight</option>
                                    <option value="Put on weight">Put on weight</option>
                                    <option value="Put on muscles">Put on muscles</option>
                                    <option value="Better condition">Better condition</option>
                                </select>
                                <button class="change-goal-lockin">Update</button>
                            </div>
                        </form>
                    </div>

                    <div class="hw-container flex">
                        <div class="height flex">
                            Current height:
                            <?php profileHeight($userHeight); ?>
                            cm
                        </div>
                        <div class="weight flex">
                            Current weight:
                            <?php profileWeight($userWeight); ?>
                            kg
                        </div>
                        <button class="update-hw-btn">Update</button>

                        <div class="modal-update-container flex">
                            <div class="modal-update-container-2 flex">
                                <div class="modal-update-container-3">
                                    <div class="modal-update-header-container flex">
                                        <div class="modal-update-header">
                                            Update height and weight
                                        </div>
                                        <button class="close-update-modal">X</button>
                                    </div>

                                    <form action="includes/update-profile.php" method="POST">
                                        <label for="update-height">New height: </label>
                                        <input type="number" class="update-height-num" name="user_height" id="update-height" value="<?php echo htmlspecialchars($_SESSION['user_height']);?>">
                                        <div class="unit">cm</div>
                                        
                                        <label for="update-weight">New weight: </label>
                                        <input type="number" class="update-weight-num" name="user_weight" id="update-weight" value="<?php echo htmlspecialchars($_SESSION['user_height']);?>">
                                        <div class="unit">kg</div>
                                        <button class="update-hw-lockin">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <form method="POST" class="logout-form flex">
                        <button type="submit" name="logout" class="logout-btn">Log out</button>
                    </form>
                </div>

                
            </div> 
        </div>


        <!-- <form action="includes/upload-profile-image.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="profileImage" id="profileImage" accept="image/*">
            <button type="submit" name="upload">Ladda upp bild</button>
        </form> -->

        <!-- <h1>Welcome to your profile!</h1>
        <p>Your email: <?php echo htmlspecialchars($userEmail); ?></p> -->













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

    <div class="support-modal-container">
        <div class="support-modal-container-2 flex">
            <div class="support-modal-container-3 flex">
                <div class="modal-header-container flex">
                    <div class="modal-header">
                        Support
                    </div>
                    <button class="close-modal">X</button>
                </div>

                <div class="modal-content flex">
                    <!-- Bild till vänster -->
                    <img src="bilder/teletech.jpg" alt="Left Image" class="modal-image">

                    <form class="form-container flex">
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
</body>
</html>

