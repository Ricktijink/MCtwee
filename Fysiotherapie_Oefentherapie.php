<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Fysiotherapie Oefentherapie</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Niet lekker in je vel? De psychologen van MC2, Marco en Lisette, kunnen jou misschien wel helpen of begeleiden. Neem contact op om kennis te maken en/of een intake in te plannen." />
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
		<a href="index.php"><img src="IMG/logo_grey.png" alt="over" width="160" height="47"></a>
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
					<li class="indent"><a href="Fysiotherapie.php"><strong>Fysiotherapie</strong></a></li>
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
	<div id="menu_button" class="yellow">
		<img src="IMG/menu3.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Yellow -->
	<div id="left_container" class="yellow_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable">Oefentherapie</h1><br/>
			<span class="main_subtitle editable">Als onderdeel van het MDP</span>
		</div>
	</div>
	<!-- Right container - Yellow -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<!-- <h1 class="title_yellow editable">Title here</h1>
					<span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
				<div class="big_content1">
					<div class="big_content_text editable">
						<p class="standard_text">
							Zo bewegen we de hele dag: we lopen, we bukken, we zitten. We doen dat veelal onbewust. Omdat ieder mens uniek is met eigen gedachten en gevoelens, 
							heeft ook een ieder een eigen houding en beweegt op een eigen manier. Soms gezond en soms ongezond, waarbij bij een ongezonde houding en/of beweging, 
							gewoontes ontstaan die kunnen leiden tot klachten aan het bewegingsapparaat. Er kunnen bijvoorbeeld klachten ontstaan aan rug of schouders, onbedoeld, 
							onbewust. Maar ook door afwijkingen of ziekten kunnen mensen ongemak ervaren in lijf en leden. <br><br>
							De oefentherapeut biedt daarbij hulp bij lichamelijke klachten, waarbij hij probeert de klachten te doen verminderen of te voorkomen, door bijvoorbeeld 
							het geven van inzichten. <br><br>
							Onze MDP-oefentherapeut is specialist in houding & beweging en weet door de nauwe samenwerking met de psychologen van de praktijk de verbinding te 
							maken met de onderliggende gedachten en gevoelens die kunnen leiden tot houdings- en bewegingsklachten. Of andersom: een mentale klacht kan middels 
							oefentherapie concreet worden aangepakt door praktische oefeningen waarbij het lijf meegenomen wordt. <br><br>
							Onze MDP-oefentherapeut is specialist in het aanleren van gezond beweeggedrag. Samen met de psychologen kijkt hij naar allerlei zaken die de mens 
							bezig houdt en hoe deze zaken makkelijker kunnen worden aangepakt. <br><br>
							Het is daarbij ook mogelijk om de oefentherapeut zonder inbreng van MDP of psycholoog te gaan zien. Daarvoor kun je altijd een afspraak maken via 
							ons secretariaat. Zij helpen je verder!
						</p>
					</div>
				</div>
				<!-- button -->
				<a class="button_yellow" href="Fysiotherapie.php">Terug</a>
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
