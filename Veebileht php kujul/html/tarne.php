<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>

<title>Tarne</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../javascript/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" />


</head>

<script src="../javascript/skript.js"> </script>
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
					<a href="ostukorv.php"><img id="ostukorvinupp" src="../meedia/UI/scart.png" /></a>
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
				<ul id="menu" class="nav navbar-nav" >
					<li><a href="meist.php">Meist</a></li>
					<li><a href="pealeht.php">Tooted</a></li>
					<li><a href="kuidasosta.php">Kuidas osta?</a></li>
					<li class="aktiivne"><a href="tarne.php">Tarne</a></li>
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
					<img id="pilt" />
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<div class="panel panel-default infopaneel">
					<div class="panel-body">
						<h1>Tarne</h1>
						<figure id="imapc">
					<object data="../meedia/UI/estonia_map.svg" type="image/svg+xml" id="imap" width="300" height="250"></object>
					</figure>
					
	<table id="areas">
      <thead>
        <tr>
         <th>Regioon</th>
        </tr>
      </thead>
      <tbody>
       <tr id='tallinn'> 
         <td>Tallinn</td>
        </tr> 
       <tr id='tartu'> 
          <td>Tartu</td> 
        </tr> 
       <tr id='parnu'> 
          <td>Pärnu</td> 
        </tr> 
       <tr id='narva'> 
          <td>Narva</td> 
        </tr> 
       <tr id='harjumaa'> 
          <td>Harjumaa</td> 
        </tr>
       <tr id='tartumaa'> 
          <td>Tartumaa</td>
	   </tr>
       <tr id='parnumaa'> 
          <td>Pärnumaa</td>
	   </tr>
       <tr id='vostokmaa'> 
          <td>Ida-Virumaa</td>
	   </tr>
       <tr id='laanevirumaa'> 
          <td>Lääne-Virumaa</td>
	   </tr>
       <tr id='viljandimaa'> 
          <td>Viljandimaa</td>
	   </tr>
       <tr id='raplamaa'> 
          <td>Raplamaa</td>
       <tr id='verumaa'> 
          <td>Võrumaa</td> 
        </tr>
       <tr> 
          <td>Saaremaa</td> 
        </tr>
       <tr id='jegevamaa'> 
          <td>Jõgevamaa</td> 
        </tr>
       <tr id='jarvamaa'> 
          <td>Järvamaa</td> 
        </tr>
       <tr id='valgamaa'> 
          <td>Valgamaa</td> 
        </tr>
       <tr id='pelvamaa'> 
          <td>Põlvamaa</td> 
        </tr>
       <tr id='laanemaa'> 
          <td>Läänemaa</td> 
        </tr>
       <tr id='hiiumaa'> 
          <td>Hiiumaa</td> 
        </tr>
		
      </tbody>
	  </table>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		
	</div>
	<script src="../javascript/script2.js"></script>

</body>


</html>