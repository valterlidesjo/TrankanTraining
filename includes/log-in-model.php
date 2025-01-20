<?php

declare(strict_types=1);

function getUser(object $pdo, string $email){
    $query = "SELECT * FROM trainingusers WHERE email = :email;";

    $stmt = $pdo->prepare($query);


    $stmt->bindParam(":email", $email);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// function getInfo(object $pdo, string $email){
//     $stmt = $pdo->prepare("SELECT firstName, lastName, email FROM users WHERE email = :email;");

//     $stmt->bindParam(":email", $email);

//     $stmt->execute();

//     return $stmt->fetch(PDO::FETCH_ASSOC);
// }