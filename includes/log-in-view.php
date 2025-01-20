<?php

declare(strict_types=1);

function checkLoginErrors(){
    if(isset($_SESSION["errorsLogin"])){
        $errors = $_SESSION["errorsLogin"];

        foreach ($errors as $error) {
            echo "<p class='form-error'>" . $error . "</p>";
        }

        unset($_SESSION["errorsLogin"]);
    } 
    // else if (isset($_GET["login"]) && $_GET["login"] === "success"){
    //     echo "<p class='form-success'> Log in success! Thank you! </p>";
    // }
}