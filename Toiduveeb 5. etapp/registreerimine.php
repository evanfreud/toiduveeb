<?php
	session_start();
?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Registreerimine</title>

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
					<a href="registreerimine.php"><img onclick="document.cookie = 'lang=eng'" src="meedia/UI/lang_en.png" height="50" width="50" style="float: left;" alt="Est"/></a>
					<a href="registreerimine.php"><img onclick="document.cookie = 'lang=est'" src="meedia/UI/lang_et.png" height="50" width="50" style="float: left;" alt="Eng"/></a>
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
					<li class="aktiivne"><a href="registreerimine.php"><?php echo $lang['Registreeri kasutajaks']; ?></a></li>
					<li><a href="sisselogimine.php"><?php echo $lang['Logi sisse']; ?></a></li>
				</ul>
			</nav>
		</div>

		<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<div id="reklaam" class="panel panel-default">
					<img id="pilt" src="meedia/UI/banner_badumtshh.png" alt="Pilt" />
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
			
			
			<?php 
			$errEesnimi = $errPerenimi = $errEmail = $errParool = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				include 'php/kontroll.php';
			}?> 
				
				<div id="registreerimispaneel" class="panel panel-default">
					<p><?php echo $lang['Registreerimine']; ?></p>
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<form style="padding: 20px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
								<div class="form-group eesnimi1">
                                                                        <div id="eesnimi1">Eesnimi ei tohi sisaldada numbreid ega erisümboleid</div>
									<label><?php echo $lang['Eesnimi']; ?>:</label>
									<input type="text" class="form-control" name="eesnimi">
									
									<span><?php echo $errEesnimi;?></span>
									
								</div>
								<div class="form-group perenimi">
                                                                        <div id="perenimi">Perenimi ei tohi sisaldada numbreid ega erisümboleid</div>
									<label><?php echo $lang['Perenimi']; ?>:</label>
									<input type="text" class="form-control" name="perenimi">
									<span><?php echo $errPerenimi;?></span>
								</div>
								<div class="form-group email">
                                                                        <div id="email">Sisesta email</div>
									<label><?php echo $lang['E-mail']; ?>:</label>
									<input type="email" class="form-control" name="email">
									<span><?php echo $errEmail;?></span>
								</div>
								<div class="form-group salasona">
                                                                        <div id="salasona">Salasõna peab olema vähemalt 8 sümbolit pikk</div>
									<label><?php echo $lang['Salasõna']; ?>:</label>
									<input type="password" class="form-control" name="parool">
									<span><?php echo $errParool;?></span>
								</div>
								<div class="form-group salasonauuesti">
                                                                        <div id="salasonauuesti">Salasõna peab olema vähemalt 8 sümbolit pikk</div>
									<label><?php echo $lang['Salasõna uuesti']; ?>:</label>
									<input type="password" class="form-control" name="parooluuesti">
									<span><?php echo $errParool;?></span>
								</div>
								
								<button name="registerbtn" type="submit" class="btn btn-default center-block"><?php echo $lang['Registreeri kasutajaks']; ?></button>
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