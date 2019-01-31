<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Fysiotherapie Bewegingstherapie</title>
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
			<h1 class="main_title editable">Bewegingtherapie <br><br>
			 & -training</h1><br/>
			<span class="main_subtitle editable">In samenwerking met Fysio Binnenstad</span>
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
							Vanaf 1 januari 2019 gaat MC2, in nauwe samenwerking met Fysio Binnenstad, fysiotherapie aanbieden op een andere wijze dan voorheen. 
							Mede gezien het feit dat MC2 in 2019 ongecontracteerd gaat (cq. geen contracten aan gaat voor fysiotherapie in 2019) en wij toch graag 
							onze cliënten fysio willen blijven aanbieden, hebben wij hen bereid gevonden voor ons de fysio-tak op eerstelijnsgebied door te pakken. 
							<br><br>
							De fysiotherapeuten van Fysio Binnenstad kunnen worden ingevlogen voor het inzetten van fysiotherapie op de locatie van MC2 of kunnen worden gevraagd 
							om cliënten van MC2 bij hen op de Spoorlaan te gaan zien. Stijn en Dave zullen daarbij, tezamen met hun collega’s, diagnostiek en/of behandeling gaan 
							verzorgen als onderdeel van het MDP. 
							<br><br>
							Vanuit MC2 wordt de weg vrij gegeven om Fysio Binnenstad te gaan voorzien van een directe ingang voor de psychologie, het MDP, arbeidsgezondheidsvraagstukken 
							en de meer complexere multidisciplinaire casuïstiek, zoals bijvoorbeeld op het gebied van OLK (Onbegrepen Lichamelijke Klachtbeelden).  
							<br><br>
							Voor meer informatie: vraag ons secretariaat naar de mogelijkheden of informeer bij <a href="http://www.fysiobinnenstad.nl" target="_blank">Fysio Binnenstad</a>. 
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
