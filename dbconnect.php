<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registrations";

$firstname = $_POST[firstname];
$lastname = $_POST[lastname];
$email = $_POST[email];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO entrants (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br /><br />" . "entry listed as fname:<strong> " . $firstname . "</strong> lname:<strong> " .  $lastname . "</strong> email:<strong> " . $email . "</strong>";
    echo "<br /><br /><a href='index.html'><img src='assets/soo27r.png' width='50' height='50' alt='logo' id='logo' /></a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
