<?php

if ($_COOKIE['lang'] == "eng"){
	include 'eng.php';
} else {
	include 'est.php';
}

function muudaKeelt(){
	$GLOBALS['lang'] = "eng";
}

?>