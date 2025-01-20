<?php

declare(strict_types=1);

function getFirstName(object $pdo, string $firstName){

    $query = "SELECT firstName FROM trainingusers WHERE firstName = :firstName;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":firstName", $firstName);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getLastName(object $pdo, string $lastName){

    $query = "SELECT lastName FROM trainingusers WHERE lastName = :lastName;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":lastName", $lastName);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo, string $email){

    $query = "SELECT email FROM trainingusers WHERE email = :email;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":email", $email);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $firstName, string $lastName, string $pswrd, string $email){

    $query = "INSERT INTO trainingusers (firstName, lastName, pswrd, email) VALUES (:firstName, :lastName, :pswrd, :email);";
    $stmt = $pdo->prepare($query);

    $options = [
        "cost" => 12
    ];
    
    $hashedPswrd = password_hash($pswrd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":firstName", $firstName);
    $stmt->bindParam(":lastName", $lastName);
    $stmt->bindParam(":pswrd", $hashedPswrd);
    $stmt->bindParam(":email", $email);

    $stmt->execute();
}