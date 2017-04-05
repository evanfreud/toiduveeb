<?php

$conn = mysqli_connect("localhost", "root", "", "authentication");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}



?>