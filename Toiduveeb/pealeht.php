<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title>Toiduveeb</title>

<?php
include 'php/keeled.php'; 
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="../javascript/skript.js"> </script>

</head>

<body onload="laaditud();">

	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				
				<div class="col-sm-2">
					<a href="pealeht.php"><img onclick="document.cookie = 'lang=eng'"; src="../meedia/UI/lang_en.png" height="50px"; width="50px"; style="float: left;"/></a>
					<a href="pealeht.php"><img onclick="document.cookie = 'lang=est'"; src="../meedia/UI/lang_et.png" height="50px"; width="50px"; style="float: left;"/></a>
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
							include '/php/profiil.php';
						} 
					?>
					
				</div>
			</div>
		</div>
	
		<div id="menüü" class="row">	
			<nav class="navbar navbar-default">
				<ul id="menu" class="nav navbar-nav">
					<li><a href="meist.php"><?php echo $lang['Meist']; ?></a></li>
					<li class="aktiivne"><a href="pealeht.php"><?php echo $lang['Tooted']; ?></a></li>
					<li><a href="kuidasosta.php"><?php echo $lang['Kuidas osta?']; ?></a></li>
					<li><a href="tarne.php"><?php echo $lang['Tarne']; ?></a></li>
					<li><a href="registreerimine.php"><?php echo $lang['Registreeri kasutajaks']; ?></a></li>
					<li><a href="sisselogimine.php"><?php echo $lang['Logi sisse']; ?></a></li>
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
						
						<a  data-toggle="collapse" href="#collapse1"> <li class="panel-collapse collapse" onclick="vali(1311);"><?php echo $lang["Teraviljatooted"]; ?>
						
						</li></a>
						
						 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
						<li onclick="vali(1010);"><a href="#"><?php echo $lang["Piimatooted"]; ?></a></li>
						<li onclick="vali(1212);"><a href="#"><?php echo $lang["Lihatooted"]; ?></a></li>
						<li onclick="vali(1119);"><a href="#"><?php echo $lang["Puu- ja juurviljad"]; ?></a></li>
						<li onclick="vali(1116);"><a href="#"><?php echo $lang["Külmutatud tooted"]; ?></a></li>
						<li onclick="vali(1110);"><a href="#"><?php echo $lang["Joogid"]; ?></a></li>
						<li onclick="vali(1410);"><a href="#"><?php echo $lang["Maiustused"]; ?></a></li>
						<li onclick="vali(0);"><a href="#"><?php echo $lang["Majapidamistarbed"]; ?></a></li>
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
	
</body>


</html>