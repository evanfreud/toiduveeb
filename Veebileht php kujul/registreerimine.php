<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

<title>Registreerimine</title>

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
				<ul id="menu" class="nav navbar-nav" >
					<li><a href="meist.php">Meist</a></li>
					<li><a href="pealeht.php">Tooted</a></li>
					<li><a href="kuidasosta.php">Kuidas osta?</a></li>
					<li><a href="tarne.php">Tarne</a></li>
					<li class="aktiivne"><a href="registreerimine.php">Registreeri kasutajaks</a></li>
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
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
			
			<script src="kontroll.php"></script>
			<?php 
			$errEesnimi = $errPerenimi = $errEmail = $errParool = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				include 'kontroll.php';
			}?> 
				
				<div id="registreerimispaneel" class="panel panel-default">
					<p>Registreerimine</p>
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<form style="padding: 20px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
								<div class="form-group">
									<label for="eesnimi">Eesnimi:</label>
									<input type="text" class="form-control" name="eesnimi">
									
									<span><?php echo $errEesnimi;?></span>
									
								</div>
								<div class="form-group">
									<label for="perenimi">Perenimi:</label>
									<input type="text" class="form-control" name="perenimi">
									<span><?php echo $errPerenimi;?></span>
								</div>
								<div class="form-group">
									<label for="email">E-mail:</label>
									<input type="email" class="form-control" name="email">
									<span><?php echo $errEmail;?></span>
								</div>
								<div class="form-group">
									<label for="pwd">Salasõna:</label>
									<input type="password" class="form-control" name="parool">
									<span><?php echo $errParool;?></span>
								</div>
								<div class="form-group">
									<label for="pwd">Salasõna uuesti:</label>
									<input type="password" class="form-control" name="parooluuesti">
									<span><?php echo $errParool;?></span>
								</div>
								
								<button name="registerbtn" type="submit" class="btn btn-default center-block">Registreeri kasutajaks</button>
							</form>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
				</div>
					
			</div>
			<div class="col-sm-3">
			</div>
			
		</div>
		
	</div>

</body>


</html>