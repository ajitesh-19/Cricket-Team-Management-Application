<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username_db = "root"; 
$password_db = ""; 
$dbname = "user_auth";


$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['email'];



$sql = "SELECT * FROM teams WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);

$stmt->execute();


$stmt->bind_result($id, $email, $player1, $role1, $player2, $role2, $player3, $role3, 
                   $player4, $role4, $player5, $role5, $player6, $role6, $player7, 
                   $role7, $player8, $role8, $player9, $role9, $player10, $role10, 
                   $player11, $role11);


$stmt->fetch();


if ($result->num_rows > 0) {

echo "<h1>Selected Team for $email</h1>";
echo "<ul>";
echo "<li>Player 1: $player1 ($role1)</li>";
echo "<li>Player 2: $player2 ($role2)</li>";
echo "<li>Player 3: $player3 ($role3)</li>";
echo "<li>Player 4: $player4 ($role4)</li>";
echo "<li>Player 5: $player5 ($role5)</li>";
echo "<li>Player 6: $player6 ($role6)</li>";
echo "<li>Player 7: $player7 ($role7)</li>";
echo "<li>Player 8: $player8 ($role8)</li>";
echo "<li>Player 9: $player9 ($role9)</li>";
echo "<li>Player 10: $player10 ($role10)</li>";
echo "<li>Player 11: $player11 ($role11)</li>";
echo "</ul>";
}else {
    
    header("Location: select_team.html");
    exit();
}

$stmt->close();
$conn->close();
?>
