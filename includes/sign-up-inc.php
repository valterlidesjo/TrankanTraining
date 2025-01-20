<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $pswrd = $_POST["pswrd"];
    $email = $_POST["email"];
    

    try {
        require_once "dbh-inc.php";
        require_once "sign-up-model.php";
        require_once "sign-up-contr.php";

        // Error handlers

        $errors = [];

        if (isInputEmpty($firstName, $lastName, $pswrd, $email)){
            $errors["emptyInput"] = "Fill in all fields!";

        }
        if (isEmailInvalid($email)){
            $errors["emailInvalid"] = "Invalid email!";

        }
        if (isEmailRegistered($pdo, $email)){
            $errors["emailUsed"] = "The email is already registered!";

        }

        require_once "config-session.php";

        if($errors){
            $_SESSION["errorsSignup"] = $errors;

            $signupData = [
                "firstName" => $firstName,
                "lastName" => $lastName,
                "email" => $email
            ];
            $_SESSION["signupData"] = $signupData;

            header("Location: ../training-signup.php");
            die();
        }

        createUser($pdo, $firstName, $lastName, $pswrd, $email);


        header("Location: ../training-signup.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed; " . $e->getMessage());
    }
}
else {
    header("Location: ../training-signup.php");
    die();
}