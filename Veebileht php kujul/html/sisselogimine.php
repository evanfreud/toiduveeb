<?php
	session_start();
?>

<!DOCTYPE html>

<html>

<head>
<title>Sisselogimine</title>

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
				
				<div class="col-sm-2 nupupaneel" id="nupupaneel">
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
				<div class="col-sm-1">
				<form action="../php/logout.php">
				<p></p>
				<button type="submit" class="btn btn-default center-block" style="height:50px;width:100px">Logi välja</button>
				</form>
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
					<img id="pilt" src="pilt.jpg" alt="Pilt" />
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
							<form class="vorm" action="../php/login.php" method="POST">
								
								<div class="form-group">
									<label>E-mail:</label>
									<input type="email" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label>Salasõna:</label>
									<input type="password" class="form-control" name="password">
								</div>
								
								<div class="checkbox">
									<label><input type="checkbox"> Jäta meelde</label>
								</div>
								<button type="submit" class="btn btn-default center-block" style="height:50px;width:100px">Logi sisse</button>
								

							
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