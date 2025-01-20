<?php

declare(strict_types=1);

function isEmailWrong(bool|array $result){
    if(!$result){
        return true;
    } else {
        return false;
    }
};

function isPasswordWrong(string $pswrd, ?string $hashedPswrd){
    if ($hashedPswrd === null) {
        return true;
    }
    if(!password_verify($pswrd, $hashedPswrd)){
        return true;
    } else {
        return false;
    }
};

function isInputEmpty(string $email, string $pswrd){
    if(empty($email) || empty($pswrd)){
        return true;
    } else {
        return false;
    }

};