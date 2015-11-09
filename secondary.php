<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registrations";

$demoname = $_POST[demoname];
$dateTime = $_POST[dateTime];
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
$round27 = $_POST[round27];
$round28 = $_POST[round28];
$round29 = $_POST[round29];
$round30 = $_POST[round30];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO demoStore (demoname, dateTime, round1,round2,round3,round4,round5,round6,round7,round8,round9,round10, round11, round12,round13, round14, round15,round16, round17, round18,round19, round20, round21,round22, round23, round24,round25, round26, round27,round28, round29, round30)
VALUES ('$demoname','$dateTime','$round1','$round2','$round3','$round4','$round5','$round6','$round7','$round8','$round9','$round10','$round11','$round12','$round13','$round14','$round15','$round16','$round17','$round18','$round19','$round20','$round21','$round22','$round23','$round24','$round25','$round26','$round27','$round28','$round29','$round30')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost:8888/csgo_app/index.html');
} else {
    
}

$conn->close();

?> 
