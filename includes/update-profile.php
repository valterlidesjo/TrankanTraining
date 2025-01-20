<?php
session_start();
require_once 'dbh-inc.php'; // Databasanslutning

// Kontrollera om användaren är inloggad
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// <?php echo htmlspecialchars($_SESSION['user_height']);

$userId = $_SESSION["user_id"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newHeight = $_POST['user_height'];
    $newWeight = $_POST['user_weight'];

    if (!empty($newHeight) && !empty($newWeight) && is_numeric($newHeight) && is_numeric($newWeight)) {
        
        $_SESSION['user_height'] = (int)$newHeight;
        $_SESSION['user_weight'] = (int)$newWeight;

        // Uppdatera databasen med de nya värdena (om du sparar detta i databasen)
        $stmt = $pdo->prepare("UPDATE trainingusers SET height = :height, weight = :weight WHERE id = :id");

        $stmt->bindParam(':height', $newHeight, PDO::PARAM_INT);
        $stmt->bindParam(':weight', $newWeight, PDO::PARAM_INT);
        $stmt->bindParam(':id', $userId, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Uppdatering lyckades!";
        } else {
            echo "Fel: Kunde inte uppdatera värdena.";
        }

        // Skicka användaren tillbaka till profilsidan eller visa ett meddelande om framgång
        header("Location: ../training-profile.php?update=success");
        exit();
    } else {
        echo "Fel: Var vänlig fyll i alla fält korrekt.";
    }

    if (isset($_POST['user_goal'])) {
        $newGoal = $_POST['user_goal'];

        // Kontrollera att målet är giltigt
        if ($newGoal != 'change') {
            // Spara det nya målet i databasen
            $stmt = $pdo->prepare("UPDATE trainingusers SET goal = :goal WHERE id = :id");

            $stmt->bindParam(':goal', $newGoal, PDO::PARAM_STR);
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                $_SESSION['user_goal'] = $newGoal; // Spara målet i sessionen
                header("Location: ../training-profile.php?update=success");
                exit();
            } else {
                echo "Fel: Kunde inte uppdatera målet.";
            }
        } else {
            echo "Fel: Vänligen välj ett giltigt mål.";
        }
    } else {
        echo "Fel: Ogiltig förfrågan.";
    }



} else {
    echo "Fel: Ogiltig förfrågan.";
}
