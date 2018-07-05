<?php
include_once './dbh.php';

$userGitHubID = $_POST['enter'];
$userName = $_POST['userName'];
$userLocation = $_POST['userLocation'];
$userBio = $_POST['userBio'];
$userLangList = $_POST['userLangList'];
$userGitHubLangList = $_POST['userGitHubLangList'];
$userOS = $_POST['userOS'];
$userBrowser = $_POST['userBrowser'];

  $sql = "INSERT INTO magnet_survey (userID,userName, userLocation, userBio, userGitHubID, userLangList, userOS, userBrowser) VALUES ('2', '$userName', '$userLocation', '$userBio', '$userGitHubID', '$userGitHubLangList', '$userOS', '$userBrowser');";
  $result = mysqli_query($conn, $sql);

  //header("Location:../index.php?submittion=sucess");
///////////////////////////////////////////
