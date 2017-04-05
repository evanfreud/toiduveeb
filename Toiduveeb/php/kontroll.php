<?php

if (empty($_POST["eesnimi"])) {
				$errEesnimi = "Eesnime sisestus on kohustuslik";
				}
				if (empty($_POST["email"])) {
				$errEmail = "Emaili sisestus on kohustuslik";
				}
				if (empty($_POST["parool"])) {
				$errParool = "Parool on kohustuslik";
				}
				if (empty($_POST["parooluuesti"])) {
				$errParool = "Parool on kohustuslik";
				}
				if (!empty($_POST["eesnimi"]) && !empty($_POST["email"]) && !empty($_POST["parool"]) && !empty($_POST["parooluuesti"]) 
					&& ($_POST["parool"] == $_POST["parooluuesti"])){
					include 'signup.php';
				}
				if ($_POST["parool"] != $_POST["parooluuesti"]){
					$errParool = "Paroolid ei kattu";
				
}	

?>