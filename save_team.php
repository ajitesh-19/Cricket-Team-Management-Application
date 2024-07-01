<?php
session_start();


if (!isset($_SESSION['email'])) {
    header("Location: login.html"); 
    exit();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_auth";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $player1 = $_POST['player1'];
    $role1 = $_POST['role1'];

    $sql = "INSERT INTO teams (email, player1, role1, player2, role2, player3, role3, player4, role4, player5, role5, 
                               player6, role6, player7, role7, player8, role8, player9, role9, player10, role10, 
                               player11, role11)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssssss", $_SESSION['email'], $player1, $role1, $player2, $role2, $player3, $role3,
                      $player4, $role4, $player5, $role5, $player6, $role6, $player7, $role7, $player8, $role8,
                      $player9, $role9, $player10, $role10, $player11, $role11);

    if ($stmt->execute()) {
        echo "Team saved successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


$email = $_SESSION['email'];
$sql = "SELECT * FROM teams WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Previous team data found.";
}else {
    echo "No previous team data found.";
}

$stmt->close();
$conn->close();
?>
