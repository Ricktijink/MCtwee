<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aukje Timmermans - MC2</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Aukje Timmermans – Office Manager – aanwezig in de ochtenden behalve woensdag" />
	<meta name="keywords"  content="Website, Logo, Code, Animation, Design, Animation" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/main.css" />
	
	<!-- Javascript library & Custom code -->
	<script type="text/javascript" src="JS/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="JS/custom.js"></script>
</head>

<body>
	<div id="landscape-block"><div id="smalllogo"><img src="IMG/logo.png" alt="over" width="160" height="47"></div><h1>Voor de beste mobiele ervaring is deze website alleen in portret modus te bekijken</h1></div>
	<!-- Google Analytics -->
	<?php include_once("analyticstracking.php") ?>
	<!-- Logo -->
	<div id="logo">
		<a href="index.php"><img src="IMG/logo.png" alt="over" width="160" height="47"></a>
	</div>
	<!-- Menu overlay (Left part) -->
	<div class="menu_overlay_left"></div>
	<!-- Menu overlay (Right part) -->
	<div class="menu_overlay_right">
		<!-- Menu overlay (Left part) -->
		<div id="menu_container">
			<!-- Exit menu button -->
			<div id="close_menu">X</div>
			<!-- Menu left side -->
			<div id="menu_left">
				<span class="testy">Menu</span>
				<div class="divideline">---</div>
				<ul>
					<li><a href="OverMC2.php">Over MC<sup>2</sup></a></li>
					<li class="indent"><a href="Psychologie.php">Psychologie</a></li>
					<li class="indent"><a href="Fysiotherapie.php">Fysiotherapie</a></li>
					<li class="indent"><a href="Reintegratie.php">Reïntegratie</a></li>
					<li><a href="Kwaliteit.php">Kwaliteit</a></li>
					<li><a href="HetTeam.php"><strong>Het Team</strong></a></li>
					<li><a href="Nieuws.php">Nieuws</a></li>
					<li><a href="Media.php">Media</a></li>
					<li><a href="Contact.php">Contact</a></li>
				</ul>
			</div>
			<!-- Menu right side -->
			<div id="menu_right">
				<?php include 'inc_menu.php'; ?>
			</div>
		</div>
	</div>
	<!-- TopRight Menu button -->
	<div id="menu_button" class="red">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="person_container" class="aukje">
	<!-- TopRight Mobile Menu button -->
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container_person">

		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_red editable" id="untitled-region-1">Aukje Timmermans</h1>
			<span class="subtitle_person editable" id="untitled-region-2">Office Manager</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="person_text">
				Mijn naam is Aukje Timmermans en sinds oktober 2016 ben ik het team komen versterken. 
				MC<sup>2</sup> is een vooruitstrevende en een op de cliënt gerichte organisatie. 
				Deze persoonlijke benadering en de dynamiek binnen MC<sup>2</sup> maakt het werken bij deze organisatie zo prettig.
				<br/><br/>
				De afgelopen jaren heb ik al meerdere kanten van de gezondheidszorg mogen ontdekken als verpleegkundige. 
				Als office manager binnen deze vooruitstrevende organisatie belicht ik een andere kant maar neem ik mijn schat aan ervaringen mee. 
				Ik ben er verantwoordelijk voor dat alles zowel voor als achter de schermen goed verloopt. Tevens ben ik voor de cliënten en/of opdrachtgevers bereikbaar voor alle administratieve vragen. 
				<br/><br/>
				Jullie zullen mij zien/spreken op de maandag-, dinsdag-, donderdag-, en vrijdagochtend!
			</p>
			<div class="break"></div>
			<a class="button_red" href="HetTeam.php">Overzicht</a>
			<div class="break"></div>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<?php include 'inc_footer.php'; ?>
	</div>
</body>
</html>
