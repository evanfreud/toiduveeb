<?php
	session_start();
?>

<!DOCTYPE html>

<html>

<head>
<title>Sisselogimine</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="javascript/skript.js"> </script>
<?php
include 'php/keeled.php'; 
?>
</head>

<body onload="laaditud();">

	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
			
				<div class="col-sm-2">
				<a href="sisselogimine.php"><img onclick="document.cookie = 'lang=eng'"; src="meedia/UI/lang_en.png" height="50px"; width="50px"; style="float: left;"/></a>
					<a href="sisselogimine.php"><img onclick="document.cookie = 'lang=est'"; src="meedia/UI/lang_et.png" height="50px"; width="50px"; style="float: left;"/></a>
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
					<a href="ostukorv.php"><img id="ostukorvinupp" src="meedia/UI/scart.png" alt="Ostukorv" /></a>
					
					<?php
						if (isset($_SESSION['id'])){
							include 'php/profiil.php';
						} 
					?>
					
				</div>
			</div>
		</div>
	
		<div id="menüü" class="row">	
			<nav class="navbar navbar-default">
				<ul id="menu" class="nav navbar-nav" >
					<li><a href="meist.php"><?php echo $lang['Meist']; ?></a></li>
					<li><a href="pealeht.php"><?php echo $lang['Tooted']; ?></a></li>
					<li><a href="kuidasosta.php"><?php echo $lang['Kuidas osta?']; ?></a></li>
					<li><a href="tarne.php"><?php echo $lang['Tarne']; ?></a></li>
					<li><a href="registreerimine.php"><?php echo $lang['Registreeri kasutajaks']; ?></a></li>
					<li class="aktiivne"><a href="sisselogimine.php"><?php echo $lang['Logi sisse']; ?></a></li>
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
					
					<p> <?php echo $lang['Sisselogimine']; ?> </p>
					
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<form class="vorm" action="php/login.php" method="POST">
								
								<div class="form-group">
									<label><?php echo $lang['E-mail']; ?>:</label>
									<input type="email" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label><?php echo $lang['Salasõna']; ?>:</label>
									<input type="password" class="form-control" name="password">
								</div>
								
								<div class="checkbox">
									<label><input type="checkbox"><?php echo $lang['Jäta meelde']; ?></label>
								</div>
								<button type="submit" class="btn btn-default center-block"><?php echo $lang['Logi sisse']; ?></button>
								
							</form>
							<form action="../php/logout.php">
							<button type="submit" class="btn btn-default center-block"><?php echo $lang['Logi välja']; ?></button>
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