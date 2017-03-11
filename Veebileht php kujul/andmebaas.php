<?php

$servername = "localhost";
$username = "root";
$password = "Samurai1989";

//Loo ühendus
$connection = new mysqli($servername, $username, $password);

//Kontrolli ühendust

if ($connection->connect_error) {
	die("Ühendust ei õnnestunud luua: " . $connection->connect_error);
}
echo "Ühendus loodud";

//Andmebaasi loomine

$andmebaas = "CREATE DATABASE minuAndmebaas";
if ($connection->query($andmebaas) === TRUE) {
	echo "Andmebaas loodud";
} else {
	echo "Andmebaasi ei loodud" . $connection->error;
}






?>