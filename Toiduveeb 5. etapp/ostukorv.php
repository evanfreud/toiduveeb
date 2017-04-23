<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Ostukorv</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="javascript/skript.js"> </script>

<script src="javascript/tootevalik.js"> </script>




<?php
include 'php/keeled.php'; 
?>
</head>

<body onload="laaditud();">

	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				
				<div class="col-sm-2">
					<a href="ostukorv.php"><img onclick="document.cookie = 'lang=eng'" src="meedia/UI/lang_en.png" height="50" width="50" style="float: left;" alt="Est"/></a>
					<a href="ostukorv.php"><img onclick="document.cookie = 'lang=est'" src="meedia/UI/lang_et.png" height="50" width="50" style="float: left;" alt="Eng"/></a>
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
		
		<div id="menyy" class="row">	
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
					<img id="pilt" src="meedia/UI/varupilt.png" alt="Pilt" />
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
		
		
		<a href="#"> <div id="sooritaost" onclick="sooritaOst()">Soorita ost</div> </a>
		
		<script>
			function sooritaOst(){
				
				if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>){
					window.open("sooritaost.php", "width");
					
				} else {
					document.getElementById("logisisseaken").style.visibility = "visible";
				}
			}
		</script>
		
		<div id="logisisseaken" style="visibility: hidden; border: 2px solid blue; background-color: white; height: 300px;
		width: 300px; position: absolute; margin-left: 40%;">
		<div onclick="peida();">Peida</div>
		<form class="vorm" action="/php/loginostukorv.php" method="POST">
								
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
								<button type="submit" class="btn btn-default center-block"><?php echo $lang['Logi sisse']; ?>
                                                                </button>
                                                                
								
                                                                
							</form>
		
		
		
		</div>
		
		
		
			<table id="ostutabel">
		<tr>
			<th class="osturibapilt" style="width: 70px;"><button type="button" onclick="eemalda();">Eemalda kõik</button></th>
			<th class="osturiba" ><?php echo $lang['Toode']; ?></th>
			<th class="osturiba2"><?php echo $lang['Kogus']; ?></th>
			<th class="osturiba2"><?php echo $lang['Hind']; ?></th>
		</tr>
		
	
	</table>
		
		</div>
		<div class="col-sm-2">
		</div>
		
	</div>
	
	
	<script>
			ostukorv(1111);
			
	</script>
	

</body>


</html>