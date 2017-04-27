<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />


<title><?php echo $lang['Tooted']; ?>Tooted</title>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="/javascript/skript.js"> </script>
 <script src="/javascript/tootevalik.js"> </script>


<?php
include 'php/keeled.php';  
?>
</head>

<body onload="laaditud2();">

	

	<div class="container-fluid">
	
		<div class="row">
			<div class="panel panel-default peapaneel">
				<div class="col-sm-2">
					<a href="pealeht.php"><img onclick="document.cookie = 'lang=eng'" src="meedia/UI/lang_en.png" height="50" width="50" style="float: left;" alt="Est"/></a>
					<a href="pealeht.php"><img onclick="document.cookie = 'lang=est'" src="meedia/UI/lang_et.png" height="50" width="50" style="float: left;" alt="Eng"/></a>
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
		
<nav id="menyy" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand">Toiduveeb</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="meist.php"><?php echo $lang['Meist']; ?></a></li>
		<li class="aktiivne"><a href="pealeht.php"><?php echo $lang['Tooted']; ?></a></li>
		<li><a href="kuidasosta.php"><?php echo $lang['Kuidas osta?']; ?></a></li>
		<li><a href="tarne.php"><?php echo $lang['Tarne']; ?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="registreerimine.php"><?php echo $lang['Registreeri kasutajaks']; ?></a></li>
		<li><a href="sisselogimine.php"><?php echo $lang['Logi sisse']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

		<div class="row">
			<div class="col-sm-1">
			</div>
			<div  id="nupp1" class="col-sm-10">
				<div id="reklaam" class="panel panel-default">
					
						<img class="reklaampilt" src="meedia/UI/ninasarvikup.png" alt="Pilt" />
					
				</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		
		<div class="row">
		
			<div class="col-sm-3 otsing">
				<form>
					<div class="input-group otsing1">
						<input type="text" class="form-control" placeholder="Otsi toodet..." />
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon-search"></i></button>
						</div>
					</div>
				</form>
				<div id="result"></div>
				<div id="nupp"></div> 
				
				<script>
					uuedTooted();
					loeToode();
                </script>
				
				<script>
					keskmine();
				</script>
				
				
				<nav class="navbar navbar-default">
					<ul id="tootemenuu" class="nav nav-pills nav-stacked tootemenyy">
						<li onclick="vali(1311,1310,1333,1113,1114,1115,0); aktiivseks(0);"><a href="#nupp1"><?php echo $lang["Teraviljatooted"]; ?></a></li>
						<li onclick="vali(1010,1011,1012,1013,1014,0,0); aktiivseks(1);"><a href="#nupp1"><?php echo $lang["Piimatooted"]; ?></a></li>
						<li onclick="vali(1212,1210,1290,1211,1213,0,0); aktiivseks(2);"><a href="#nupp1"><?php echo $lang["Lihatooted"]; ?></a></li>
						<li onclick="vali(1610,1611,1612,1613,1614,0,0); aktiivseks(3);"><a href="#nupp1"><?php echo $lang["Puu- ja juurviljad"]; ?></a></li>
						<li onclick="vali(1116,1119,1211,1711,1712,0,0); aktiivseks(4);"><a href="#nupp1"><?php echo $lang["Külmutatud tooted"]; ?></a></li>
						<li onclick="vali(1580,1581,1582,1512,1513,0,0); aktiivseks(5);"><a href="#nupp1"><?php echo $lang["Joogid"]; ?></a></li>
						<li onclick="vali(1410,1411,1412,1413,1414,0,0); aktiivseks(6);"><a href="#nupp1"><?php echo $lang["Maiustused"]; ?></a></li>
						<li onclick="vali(1913,1911,1912,1910,0,0,0); aktiivseks(7);"><a href="#nupp1"><?php echo $lang["Majapidamistarbed"]; ?></a></li>
						
                    </ul>
				</nav>
			</div>
			
			<div class="col-sm-6">
				<div class="panel panel-default tootepaneel"> 
					
					<div class="toode">
						<div id="0" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(0);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="1" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(1);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="2" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(2);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="3" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(3);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="4" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(4);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="5" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(5);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="6" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(6);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="7" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(7);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="8" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(8);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="9" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(9);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="10" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(10);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="11" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(11);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="12" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(12);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="13" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(13);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="14" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(14);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="15" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(15);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="16" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(16);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="17" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(17);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="18" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(18);">Lisa ostukorvi</button>
					</div>
					
					<div class="toode">
						<div id="19" class="tootepilt"></div>
						<div class="hinnasilt"></div>
						<button type="button" onclick="lisa(19);">Lisa ostukorvi</button>
					</div>
					
					
					
				</div>
			</div>
			<div class="col-sm-3">
				<div id="reklaam2" style="display: flex;" class="panel panel-default">
					
						<img class="reklaampilt" src="meedia/UI/banner_badumtshh.png" alt="Pilt" />
					
				</div>
			</div>
		
		</div>
		
	</div>
	
	<script>
	peidaNupud();
	
	</script>
	
	
</body>


</html>