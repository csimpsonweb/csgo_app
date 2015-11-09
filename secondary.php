<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registrations";

$round1 = $_POST[round1];
$round2 = $_POST[round2];
$round3 = $_POST[round3];
$round4 = $_POST[round4];
$round5 = $_POST[round5];
$round6 = $_POST[round6];
$round7 = $_POST[round7];
$round8 = $_POST[round8];
$round9 = $_POST[round9];
$round10 = $_POST[round10];
$round11 = $_POST[round11];
$round12 = $_POST[round12];
$round13 = $_POST[round13];
$round14 = $_POST[round14];
$round15 = $_POST[round15];
$round16 = $_POST[round16];
$round17 = $_POST[round17];
$round18 = $_POST[round18];
$round19 = $_POST[round19];
$round20 = $_POST[round20];
$round21 = $_POST[round21];
$round22 = $_POST[round22];
$round23 = $_POST[round23];
$round24 = $_POST[round24];
$round25 = $_POST[round25];
$round26 = $_POST[round26];
$round27 = $_POST[firstname];
$round28 = $_POST[firstname];
$round29 = $_POST[firstname];
$round30 = $_POST[firstname];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO demoStore (round1,round2,round3,round4,round5,round6,round7,round8,round9,round10, round11, round12,round13, round14, round15,round16, round17, round18,round19, round20, round21,round22, round23, round24,round25, round26, round27,round28, round29, round30)
VALUES ('$round1','$round2','$round3','$round4','$round5','$round6','$round7','$round8','$round9','$round10','$round11','$round12','$round13','$round14','$round15','$round16','$round17','$round18','$round19','$round20','$round21','$round22','$round23','$round24','$round25','$round26','$round27','$round28','$round29','$round30')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br /><br /><a href='index.html'><img src='assets/soo27r.png' width='50' height='50' alt='logo' id='logo' /></a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
