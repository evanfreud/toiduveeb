<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
<title>Sisselogimine</title>
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
				<div id="veeb" class="col-sm-8">
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
					<li><a href="meist.php">Meist</a></li>
					<li><a href="pealeht.php">Tooted</a></li>
					<li><a href="kuidasosta.php">Kuidas osta?</a></li>
					<li><a href="tarne.php">Tarne</a></li>
					<li><a href="registreerimine.php">Registreeri kasutajaks</a></li>
					<li class="aktiivne"><a href="sisselogimine.php">Logi sisse</a></li>
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
				
				<div id="logipaneel" class="panel panel-default">
					
					<p> Sisselogimine </p>
					
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<form class="vorm" action="login.php" method="POST">
								
								<div class="form-group">
									<label for="email">E-mail:</label>
									<input type="email" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label for="pwd">Salasõna:</label>
									<input type="password" class="form-control" name="password">
								</div>
								
								<div class="checkbox">
									<label><input type="checkbox"> Jäta meelde</label>
								</div>
								<button type="submit" class="btn btn-default center-block">Logi sisse</button>
								
							</form>
							<form action="logout.php">
							<button type="submit" class="btn btn-default center-block">Logi välja</button>
							</form>
							
							<?php
								if (isset($_SESSION['id'])){
									echo "Sa oled sisse logitud <br/>";
								} else {
									if (isset($_SESSION['vale'])){
										echo $_SESSION['vale'];
										$_SESSION['vale'] = null;
										
									} else {
										echo "Sa ei ole sisse logitud <br/>";
									}
									
									
								}
							  
							?>
							
							
							
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