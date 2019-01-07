<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Hoe het begon</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="MC2 is gespecialiseerd in het begeleiden van ziekteverzuim, arbeidsreïntegratie en onbegrepen lichamelijke klachten (OLK). Neem contact op voor meer info!" />
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
		<a href="index.php"><img src="IMG/logo_white2.png" alt="over" width="160" height="47"></a>
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
					<li><a href="OverMC2.php"><strong>Over MC<sup>2</sup></strong></a></li>
					<li class="indent"><a href="Psychologie.php">Psychologie</a></li>
					<li class="indent"><a href="Fysiotherapie.php">Fysiotherapie</a></li>
					<li class="indent"><a href="Reintegratie.php">Reïntegratie</a></li>
					<li><a href="Kwaliteit.php">Kwaliteit</a></li>
					<li><a href="HetTeam.php">Het Team</a></li>
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
	<div id="left_container" class="red_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable" id="untitled-region-1">Hoe het begon</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-2">Over MC<sup>2</sup></span>
		</div>
	</div>
	<!-- Right container - Red -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<!-- <h1 class="title_red editable">Title here</h1>
					<span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
				<div class="big_content">
					<div class="big_content_text editable" id="untitled-region-3"><p class="standard_text">Marco van Hooff, eigenaar MC<sup>2</sup>: “Op de middelbare school werd ik, bleek achteraf, getriggerd door een pracht van een film "An Early Frost" waar ik een groep mensen in therapie zag bewegen door een simpel "iets". Ik werd in beweging gezet, maar onbewust. Op dat moment was ik vrij "exact" van aard: ik deed wiskunde, natuurkunde, scheikunde. Vakken waarbij logica de boventoon voeren. Ik zou astronomie gaan studeren in Leiden en heb dat gedaan, voor 1 week. Ik heb toen bewust de keuze gemaakt op zoek te gaan naar dat “iets”: Wat beweegt mensen? Hoe zit een mens in elkaar? Wat maakt dat mensen soms vast komen te zitten? Ik ontdekte dat psychologie (het werken met “het hoofd” alleen) wel een basis kon bieden voor bepaalde vraagstukken, maar dat het lichaam ook veel doet tijdens zo’n proces. Ik verwonderde mij over de vele aanwezige koppelingen tussen lijf en leden, die ik ging onderzoeken, toepaste en wat ik meer en meer als “eigen” ging beschouwen. Daarnaast zag ik de invloed van systemen op mensen waarin ze verkeren, o.a. op het thuisfront, op school, in het werk, in de maatschappij of cultuur. Maar draaide die gedachte al vrij snel om: wat kun jij doen om invloed te hebben? Wat kun jij doen om de kwaliteit van je eigen functioneren te verbeteren? <br><br> Juist door het werken als psycholoog, met name binnen diverse Reïntegratie-bureaus, stuitte ik op dat wat ik als een bijzonder speelvlak ervaar: een combinatie van alles wat zich rondom de mens beweegt en hoe dit systeem te optimaliseren. Middels filosoferen, anders-denken , veel proberen en te doen en creatief daarmee bezig te zijn werd een idee ontwikkeld: Multi Disciplinair werken met een waanzinnig close contact tussen zowel collega’s als cliënten!”</p></div>
					<div class="big_content_img"><img id="untitled-region-4" class="editable" src="IMG/hoehetbegon.jpg" alt="over" /></div>					
				</div>
				<!-- button -->
				<a class="button_red" href="OverMC2.php">Terug</a>
			</div>			
			<div class="break"></div>
		</div>
		<!-- Footer -->
		<div class="footer">
			<?php include 'inc_footer.php'; ?>
		</div>
	</div>
</body>
</html>
