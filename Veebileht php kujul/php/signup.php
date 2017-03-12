<?php
session_start();

include 'dbh.php';

$eesnimi = $_POST['eesnimi'];
$email = $_POST['email'];
$parool = $_POST['parool'];


$sql = "INSERT INTO users(username, email, password) VALUES ('$eesnimi', '$email','$parool')";

$result = $conn->query($sql);

header("Location: ../html/registreerimine.php");


?>