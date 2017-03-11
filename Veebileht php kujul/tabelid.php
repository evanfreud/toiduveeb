<?php


$servername = "localhost";
$username = "root";
$password = "Samurai1989";
$dbname = "minuAndmebaas";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
	die ("Ei ühendunud ". $connection->connect_error);
}
else {
	echo "Ühendus on loodud";
}



$sql = "SELECT * FROM Autod LIMIT 2";
$tulemus = $connection->query($sql);

if ($tulemus->num_rows >0){
	while ($row = $tulemus->fetch_assoc()){
		echo "eesnimi: " . $row["eesnimi"]. " perenimi: " . $row["perenimi"]. "<br/>";
	}
}


$connection->close();



?>