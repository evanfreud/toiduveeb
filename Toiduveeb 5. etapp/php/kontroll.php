<?php

if (empty($_POST["eesnimi"])) {
				$errEesnimi = $lang['Eesnime sisestus on kohustuslik'];
				}
				if (empty($_POST["email"])) {
				$errEmail = $lang['E-maili sisestus on kohustuslik'];
				}
				if (empty($_POST["parool"])) {
				$errParool = $lang['Parool on kohustuslik'];
				}
				if (empty($_POST["parooluuesti"])) {
				$errParool = $lang['Parool on kohustuslik'];
				}
				if (!empty($_POST["eesnimi"]) && !empty($_POST["email"]) && !empty($_POST["parool"]) && !empty($_POST["parooluuesti"]) 
					&& ($_POST["parool"] == $_POST["parooluuesti"])){
					include 'signup.php';
				}
				if ($_POST["parool"] != $_POST["parooluuesti"]){
					$errParool = $lang['Paroolid ei kattu'];
				
}	

?>