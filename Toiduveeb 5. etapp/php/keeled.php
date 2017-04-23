<?php

if (isset($_COOKIE["lang"])){
	if ($_COOKIE['lang'] == "eng"){
	include 'eng.php';
} else {
	include 'est.php';
} 
} else {
	include 'est.php';
}


function muudaKeelt(){
	$GLOBALS['lang'] = "eng";
}

?>