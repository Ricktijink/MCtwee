<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lisette Wardekker - MC2</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Lisette Wardekker – Psycholoog – aanwezig op donderdag en vrijdag" />
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
	<div id="menu_button" class="blue">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="person_container" class="lisette">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container_person">
		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_blue editable" id="untitled-region-1">Lisette Wardekker</h1>
			<span class="subtitle_person editable" id="untitled-region-2">GZ Psycholoog</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="person_text">Ik ben Lisette Wardekker en sinds februari 2013 als GZ-psycholoog werkzaam bij MC<sup>2</sup>. Het unieke concept van MC<sup>2</sup>, waarbij er een brug geslagen wordt tussen psyche en lichaam, is iets waar ik in mijn werk al langere tijd naar op zoek ben. Het is mijn ambitie om samen met mijn collega’s van MC<sup>2</sup> de meest optimale vorm van behandeling te vinden voor iedere cliënt, waarbij recht gedaan wordt aan alle aspecten waar wij als mens uit bestaan. <br><br> In 2007 heb ik mijn opleiding in de klinische psychologie afgerond. Hierna heb ik in diverse eerstelijnspraktijken en binnen een grote GGZ-instelling in de regio Utrecht gewerkt. Na een aantal jaren ervaring in de praktijk wilde ik mij verder ontwikkelen. Ik besloot dit te doen door de opleiding tot gezondheidszorgpsycholoog (GZ-psycholoog) te volgen, welke ik eind 2012 heb afgerond. Mijn ervaring ligt op het gebied van diagnostiek en behandeling van jongeren, volwassenen en ouderen met uiteenlopende problemen (o.a. angst, depressie, relatieproblematiek, onzekerheid, overbelasting, werkgerelateerde problemen, cognitieve problemen en lichamelijke klachten). Ik heb mij daarnaast gespecialiseerd in psychodiagnostisch onderzoek en ik heb diverse cursussen gevolgd binnen de mindfulness. <br><br> Ik ben ingeschreven bij het BIG register en NIP. Jullie komen mij tegen op vrijdag.</p>
			<div class="break"></div>
			<a class="button_blue" href="HetTeam.php">Overzicht</a>
			<div class="break"></div>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<?php include 'inc_footer.php'; ?>
	</div>
</body>
</html>
