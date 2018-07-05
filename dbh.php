<?php
$dbservername = "zpj83vpaccjer3ah.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername = "sw9tghynk7so1dmg";
$dbpassword = "o6yv58vnjnql183p";
$database = "c6oep2jszwl7byec";

// Create connection
$conn =  mysqli_connect($dbservername, $dbusername, $dbpassword,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

///////////////////////////////////////////
//$userGitHubID = $_POST['enter'];
//$userName = $_POST['userName'];
//$userLocation = $_POST['userLocation'];
//$userBio = $_POST['userBio'];
