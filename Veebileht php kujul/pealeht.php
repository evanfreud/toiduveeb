<!DOCTYPE html>

<html lang="en">

<head>

<title>Toiduveeb</title>

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
					<div class="panel-body">
						
						<img id="pilt" />
					</div>
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
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>
				
				<nav class="navbar navbar-default">
					<ul class="nav nav-pills nav-stacked tootemenüü">
						
						<li><a href="#">Teraviljatooted</a></li>
						<li><a href="#">Piimatooted</a></li>
						<li><a href="#">Lihatooted</a></li>
						<li><a href="#">Puu- ja juurviljad</a></li>
						<li><a href="#">Külmutatud tooted</a></li>
						<li><a href="#">Joogid</a></li>
						<li><a href="#">Maiustused</a></li>
						<li><a href="#">Majapidamistarbed</a></li>
                    </ul>
				</nav>
			</div>
			
			<div class="col-sm-6">
				<div class="panel panel-default tootepaneel"> 
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div id="muutus" class="panel panel-default tootepilt">
						Tekst
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
						<img src="logo.png" width="80%" height="80%" />
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					<div class="panel panel-default tootepilt">
					</div>
					
				</div>
			</div>
			<div class="col-sm-3">
				<div id="reklaam2" style="display: flex;" class="panel panel-default">
					<div class="panel-body">
						<img id="pilt2" />
					</div>
				</div>
			</div>
		
		</div>
		
	</div>

</body>


</html>