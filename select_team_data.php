<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "user_auth";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM teams WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

$players = array_fill(0, 11, ["player" => "", "role" => ""]);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    for ($i = 1; $i <= 11; $i++) {
        $players[$i - 1]["player"] = $row["player$i"];
        $players[$i - 1]["role"] = $row["role$i"];
    }
}

$stmt->close();
$conn->close();
?>
