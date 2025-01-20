<?php

declare(strict_types=1);

function isInputEmpty(string $firstName, string $lastName, string $pswrd, string $email){
    if(empty($firstName) || empty($lastName) || empty($pswrd) || empty($email)){
        return true;
    } else {
        return false;
    }

};

function isEmailInvalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }

}

function isEmailRegistered(object $pdo, string $email){
    if(getEmail($pdo, $email)){
        return true;
    } else {
        return false;
    }

}

function createUser(object $pdo, string $firstName, string $lastName, string $pswrd, string $email){
    
    setUser($pdo, $firstName, $lastName, $pswrd, $email);
}