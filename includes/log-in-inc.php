<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pswrd = $_POST["pswrd"];
    $email = $_POST["email"];

    try {
        require_once "dbh-inc.php";
        require_once "log-in-model.php";
        require_once "log-in-contr.php";

        // Error handlers

        $errors = [];

        if (isInputEmpty($pswrd, $email)){
            $errors["emptyInput"] = "Fill in all fields!";

        };
        $result = getUser($pdo, $email);


        if(isEmailWrong($result)){
            $errors["Incorrect email"] = "Wrong login info!";
        };

        if(isEmailWrong($result) && isPasswordWrong($pswrd, $result["pswrd"])){
            $errors["Incorrect email"] = "Wrong login info!";
        };

       
        

        require_once "config-session.php";

        if($errors){
            $_SESSION["errorsLogin"] = $errors;


            header("Location: ../training-login.php");
            die();
        };

        session_start();


        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);


        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_email"] = htmlspecialchars($result["email"]);
        $_SESSION["user_firstName"] = htmlspecialchars($result["firstName"]);
        $_SESSION["user_lastName"] = htmlspecialchars($result["lastName"]);
        $_SESSION["user_goal"] = htmlspecialchars($result["goal"]);
        $_SESSION["user_height"] = htmlspecialchars($result["height"]);
        $_SESSION["user_weight"] = htmlspecialchars($result["weight"]);

        $_SESSION["last_generation"] = time();


        header("Location: ../training-profile.php");

        $pdo = null;
        $statement = null;
        die();
        
    } catch (PDOException $e) {
        die("Query failed; " . $e->getMessage());
    };



} else {
    header("Location: ../training-login.php");
    die();
}
