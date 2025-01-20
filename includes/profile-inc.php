<?php
declare(strict_types=1);

session_start();

require_once 'dbh-inc.php'; 

// Kontrollera om användaren är inloggad
if (!isset($_SESSION["user_id"])) {
    // Om inte inloggad, omdirigera till inloggningssidan
    header("Location: training-login.php");
    exit();
}

// Hämta användarens information från sessionen
$userId = $_SESSION["user_id"];
$userEmail = $_SESSION["user_email"];
$userFirstName = $_SESSION["user_firstName"];
$userLastName = $_SESSION["user_lastName"];
$userGoal = $_SESSION["user_goal"];
$userHeight = $_SESSION["user_height"];
$userWeight = $_SESSION["user_weight"];



if (isset($_POST['logout'])) {
    
    session_start();
    session_unset();  
    session_destroy();

    header("Location: training-login.php");
    exit();
};

function profileHeader(string $userFirstName, string $userLastName){
    echo "<div class='profile-header'>" . htmlspecialchars($userFirstName) . " " . htmlspecialchars($userLastName) . "</div>";
};

function profileGoal(string $userGoal){
    echo "<div class='personal-goal'>" . htmlspecialchars($userGoal) . "</div>";
};

function profileHeight(int $userHeight){
    echo "<div class='height-num'>" . $userHeight ."</div>";
};

function profileWeight(int $userWeight){
    echo "<div class='weight-num'>" . $userWeight ."</div>";
};



$stmt = $pdo->prepare("SELECT profile_image FROM trainingusers WHERE id = :id");
$stmt->bindParam(':id', $userId);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$profileImage = !empty($user['profile_image']) ? '../profile_pictures/' . $user['profile_image'] : '../profile_pictures/default.jpg';

