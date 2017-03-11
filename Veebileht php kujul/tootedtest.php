<?php
$servername = "localhost";
$username = "root";
$password = "Samurai1989";
$database = "tooted";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT Brand FROM tooted";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


echo $row["Brand"];


?>

