<?php

declare(strict_types=1);

function signupInput(){

    echo '<div class="sign-up-input-container-2 flex">
                <input type="name" name="firstName" class="input-1" placeholder="First name">
                <input type="name" name="lastName" class="input-2" placeholder="Last name">
          </div>';

    if(isset($_SESSION["signupData"]["email"]) && !isset($_SESSION["errorsSignup"]["emailInvalid"]) && !isset($_SESSION["errorsSignup"]["emailUsed"])){
        echo '<input type="email" name="email" class="input-3" placeholder="Email" value="' . $_SESSION["signupData"]["email"] . '">';
    } else {
        echo '<input type="email" name="email" class="input-3" placeholder="Email">';
    }

    echo '<input type="password" name="pswrd" class="input-4" placeholder="Enter your password">';
}


function checkSignupErrors(){
    if(isset($_SESSION["errorsSignup"])){
        $errors = $_SESSION["errorsSignup"];

        foreach ($errors as $error){
            echo "<p class='form-error'>" . $error . "</p>";
        }

        unset($_SESSION["errorsSignup"]);

    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<p class='form-success'> Sign up success! Thank you! </p>";
        // echo "<a href='training-login.php' class='form-success-login'> Log in here now! </a>";

    }
}