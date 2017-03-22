<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title>Toiduveeb</title>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script src="../javascript/skript.js"> </script>

</head>

<body onload="laaditud();">

	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				<div class="col-sm-2">
					
				</div>
				<div id="veeb" class="col-sm-7">
					<div class="logo"></div>
				</div>
				
				<div class="col-sm-3 nupupaneel" id="nupupaneel">
					<p id="nimetervitus"><?php
						if (isset($_SESSION['id'])){
							echo $_SESSION['id'];
						} 
					?></p>
					<a href="kasutajaprofiil.php"><div id="kasutaja"></div></a>
					<a href="ostukorv.php"><img id="ostukorvinupp" src="../meedia/UI/scart.png" alt="Ostukorv" /></a>
					<?php
						if (isset($_SESSION['id'])){
							include '../php/profiil.php';
						} 
					?>
					
				</div>
			</div>
		</div>
	
		<div id="menüü" class="row">	
			<nav class="navbar navbar-default">
				<ul id="menu" class="nav navbar-nav">
					<li><a href="meist.php">Meist</a></li>
					<li class="aktiivne"><a href="pealeht.php">Tooted</a></li>
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
					
						
						<img id="pilt" src="pilt.jpg" alt="Pilt" />
					
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
		<div class="row">
		
			<div class="col-sm-3 otsing">
				<form>
					<div class="input-group otsing1">
						<input type="text" class="form-control" placeholder="Otsi toodet...">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon-search"></i></button>
						</div>
					</div>
				</form>
				
				<nav class="navbar navbar-default">
					<ul class="nav nav-pills nav-stacked tootemenüü">
						
						<li onclick="vali(1311);"><a href="#">Teraviljatooted</a></li>
						<li onclick="vali(1010);"><a href="#">Piimatooted</a></li>
						<li onclick="vali(1212);"><a href="#">Lihatooted</a></li>
						<li onclick="vali(1119);"><a href="#">Puu- ja juurviljad</a></li>
						<li onclick="vali(1116);"><a href="#">Külmutatud tooted</a></li>
						<li onclick="vali(1110);"><a href="#">Joogid</a></li>
						<li onclick="vali(1410);"><a href="#">Maiustused</a></li>
						<li onclick="vali(0);"><a href="#">Majapidamistarbed</a></li>
                    </ul>
				</nav>
			</div>
			
			<div class="col-sm-6">
				<div class="panel panel-default tootepaneel"> 
					
					
					<div id ="0" class="panel panel-default tootepilt">
					
					</div>
					<div id="1" class="panel panel-default tootepilt">
					</div>
					<div id="2" class="panel panel-default tootepilt">
						
					</div>
					<div id="3" class="panel panel-default tootepilt">
					</div>
					<div id="4" class="panel panel-default tootepilt">
					</div>
					<div id="5" class="panel panel-default tootepilt">
					</div>
					<div id="6" class="panel panel-default tootepilt">
					</div>
					<div id="7" class="panel panel-default tootepilt">
					</div>
					<div id="8" class="panel panel-default tootepilt">
					</div>
					<div id="9" class="panel panel-default tootepilt">
					</div>
					<div id="10" class="panel panel-default tootepilt">
					</div>
					<div id="11" class="panel panel-default tootepilt">
					</div>
					<div id="12" class="panel panel-default tootepilt">
					</div>
					<div id="13" class="panel panel-default tootepilt">
					</div>
					<div id="14" class="panel panel-default tootepilt">
					</div>
					<div id="15" class="panel panel-default tootepilt">
					</div>
					<div id="16" class="panel panel-default tootepilt">
					</div>
					<div id="17" class="panel panel-default tootepilt">
					</div>
					<div id="18" class="panel panel-default tootepilt">
					</div>
					<div id="19" class="panel panel-default tootepilt">
					</div>
					
					
				</div>
			</div>
			<div class="col-sm-3">
				<div id="reklaam2" style="display: flex;" class="panel panel-default">
					
						<img id="pilt2" src="pilt.jpg" alt="Pilt" />
					
				</div>
			</div>
		
		</div>
		
	</div>
	<script src="../javascript/tootevalik.js"> </script>
	<script> vali(); </script>
	<div id="test" class="panel panel-default" width="100px" height="100px">
					</div>
</body>


</html>