<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>

<title><?php echo $lang['Meist']; ?>Meist</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="javascript/skript.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include 'php/keeled.php'; 
?>
</head>

<body onload="laaditud();">



	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				<div class="col-sm-2">
					<a href="meist.php"><img onclick="document.cookie = 'lang=eng'" src="meedia/UI/lang_en.png" height="50" width="50" style="float: left;" alt="Est"/></a>
					<a href="meist.php"><img onclick="document.cookie = 'lang=est'" src="meedia/UI/lang_et.png" height="50" width="50" style="float: left;" alt="Eng"/></a>
				</div>
				<div id="veeb" class="col-sm-7">
					<div class="logo"></div>
				</div>
				
				<div class="col-sm-3 nupupaneel" id="nupupaneel">
                                        <p id="nimetervitus"><?php
						if (isset($_SESSION['id'])){
                                                        $x = explode(" ",$_SESSION['id']);
							echo $x[0];
						} 
					?></p>
					<a href="kasutajaprofiil.php"><div id="kasutaja"></div></a>
					<a href="ostukorv.php"><img id="ostukorvinupp" src="meedia/UI/scart.png" alt="Ostukorv" /></a>
					<?php
						if (isset($_SESSION['id'])){
							include 'php/profiil.php';
						} 
					?>
					
				</div>
			</div>
		</div>
		
<nav id="menyy" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand">Toiduveeb</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="aktiivne"><a href="meist.php"><?php echo $lang['Meist']; ?></a></li>
        <li class="mmenu_button"><a href="pealeht.php"><?php echo $lang['Tooted']; ?></a></li>
        <li class="mmenu_button"><a href="kuidasosta.php"><?php echo $lang['Kuidas osta?']; ?></a></li> 
        <li class="mmenu_button"><a href="tarne.php"><?php echo $lang['Tarne']; ?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="registreerimine.php"><?php echo $lang['Registreeri kasutajaks']; ?></a></li>
		<li><a href="sisselogimine.php"><?php echo $lang['Logi sisse']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>	
		
		<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<div id="reklaam" class="panel panel-default">
					<img id="pilt" src="meedia/UI/varupilt.png" alt="Pilt" />
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
	</div>
	
	

<div id="map"></div>

    <script type="text/javascript" src="javascript/kaart.js">
    </script>
    <script> initMap(); </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbhRJCV-nsdPFkikf-yNPYm_fZ5kgZE3A&callback=initMap"
    async defer></script>

</body>


</html>