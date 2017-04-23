<?php
 if(!session_id()){
    session_start();
 }
 
 
include 'dbh.php';


$email = $_POST['email'];
$parool = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$parool'";

$result = $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Vale kasutajanimi või parool";
	$_SESSION['vale'] = "vale parool";
} else {
	$_SESSION['id'] = $row['username'];
	
}
header("Location: ../sisselogimine.php");
 

?>

