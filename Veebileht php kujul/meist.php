<!DOCTYPE html>

<?php
putenv("LANG=en_US"); 
setlocale('LC_ALL', "en_US"); 
bindtextdomain("translation", dirname(__FILE__)."/Locale");  
textdomain("translation");
?>

<?php
session_start();
?>


<html lang="en">

<head>

<title>Meist</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>


<script src="skript.js"> </script>
<body onload="laaditud();">



	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-8">
					Toiduveeb
					<a href="kasutajaprofiil.php"><div id="kasutaja"></div></a>
				</div>
				<div class="col-sm-2">
					<a class="keelevalik" href="ostukorv.php"><div id="ostukorvinupp"> Ostukorv </div></a>
					<p id="tervitus"><?php
								if (isset($_SESSION['id'])){
									include 'profiil.php';
								} 
							?></p>
				</div>
			</div>
		</div>
		
		<div id="menüü" class="row">	
			<nav class="navbar navbar-default">
				<ul id="menu" class="nav navbar-nav" >
					<li class="aktiivne"><a href="meist.php">Meist</a></li>
					<li><a href="pealeht.php"><?php echo gettext("Tooted") ?></a></li>
					<li><a href="kuidasosta.php">Kuidas osta?</a></li>
					<li><a href="tarne.php">Tarne</a></li>
					<li><a href="registreerimine.php">Registreeri kasutajaks</a></li>
					<li><a href="sisselogimine.php">Logi sisse</a></li>
				</ul>
			</nav>
		</div>	
		
		<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<div id="reklaam" class="panel panel-default">
					<div class="panel-body">
						<img id="pilt" />
					</div>
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
	</div>
	
	

<div id="map"></div>

    <script src="kaart.js">
		initMap();
    </script>
	
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbhRJCV-nsdPFkikf-yNPYm_fZ5kgZE3A&callback=initMap"
    async defer></script>

</body>


</html>