<?php
session_start();
require_once 'dbh-inc.php'; // Databasanslutning

// Kontrollera om användaren är inloggad
if (!isset($_SESSION["user_id"])) {
    header("Location: training-login.php");
    exit();
}

$userId = $_SESSION["user_id"];

// Kolla om formuläret har skickats
if (isset($_FILES["profileImage"]) && $_FILES["profileImage"]["error"] == 0) {
    $targetDir = 'C:/xampp/htdocs/profile_pictures/';
    $fileName = basename($_FILES["profileImage"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Tillåtna filtyper
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileType, $allowTypes)) {
        // Flytta filen till rätt plats
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFilePath)) {
            // Uppdatera användarens profilbild i databasen
            $stmt = $pdo->prepare("UPDATE trainingusers SET profile_image = :profile_image WHERE id = :id;");
            $stmt->bindParam(':profile_image', $fileName);
            $stmt->bindParam(':id', $userId);
            $stmt->execute();

            // Spara den nya profilbildens sökväg i sessionen
            $_SESSION["profile_image"] = $fileName;

            // Omdirigera tillbaka till profilsidan
            header("Location: ../training-profile.php?upload=success");
            exit();
        } else {
            echo "Fel: Kunde inte ladda upp filen.";
        }
    } else {
        echo "Fel: Endast JPG, JPEG, PNG och GIF-filer är tillåtna.";
    }
} else {
    echo "Fel: Inget formulär skickat.";
}