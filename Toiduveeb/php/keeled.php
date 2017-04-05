<?php

if ($_COOKIE['lang'] == "est"){
	include 'est.php';
} else {
	include 'eng.php';
}

function muudaKeelt(){
	$GLOBALS['lang'] = "eng";
}

?>