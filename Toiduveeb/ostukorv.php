<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title>Ostukorv</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script src="../javascript/skript.js"> </script>
<?php
include 'php/keeled.php'; 
?>
</head>

<body onload="laaditud();">

	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				
				<div class="col-sm-2">
					<a href="ostukorv.php"><img onclick="document.cookie = 'lang=eng'"; src="../meedia/UI/lang_en.png" height="50px"; width="50px"; style="float: left;"/></a>
					<a href="ostukorv.php"><img onclick="document.cookie = 'lang=est'"; src="../meedia/UI/lang_et.png" height="50px"; width="50px"; style="float: left;"/></a>
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
				<ul id="menu" class="nav navbar-nav" >
					<li><a href="meist.php"><?php echo $lang['Meist']; ?></a></li>
					<li><a href="pealeht.php"><?php echo $lang['Tooted']; ?></a></li>
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
		
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
		
			<table id="ostutabel">
		<tr>
			<th class="osturiba" >Toode</th>
			<th class="osturiba2">Kogus</th>
			<th class="osturiba2">Hind</th>
		</tr>
		<tr>
			<td class="osturiba">Toode 1</td>
			<td class="osturiba2">Kogus 1</td>
			<td class="osturiba2">Hind 1</td>
		</tr>
		<tr>
			<td class="osturiba">Toode 2</td>
			<td class="osturiba2">Kogus 2</td>
			<td class="osturiba2">Hind 2</td>
		</tr>
		<tr>
			<td class="osturiba">Toode 3</td>
			<td class="osturiba2">Kogus 3</td>
			<td class="osturiba2">Hind 3</td>
		</tr>
		<tr>
			<td class="osturiba">Toode 4</td>
			<td class="osturiba2">Kogus 4</td>
			<td class="osturiba2">Hind 4</td>
		</tr>
		
		<tr>
			<td class="osturiba">Toode 5</td>
			<td class="osturiba2">Kogus 5</td>
			<td class="osturiba2">Hind 5</td>
		</tr>
		
	
	</table>
		
		</div>
		<div class="col-sm-2">
		</div>
		
	</div>

</body>


</html>