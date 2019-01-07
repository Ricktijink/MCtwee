<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Psychologie Behandeltraject</title>
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
					<li><a href="OverMC2.php">Over MC<sup>2</sup></a></li>
					<li class="indent"><a href="Psychologie.php"><strong>Psychologie</strong></a></li>
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
	<div id="menu_button" class="blue">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="left_container" class="blue_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable">Behandeltraject</h1><br/>
			<span class="main_subtitle editable">Psychologie</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<!-- <h1 class="title_blue editable">Title here</h1>
					<span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
				<div class="big_content1">
					<div class="big_content_text editable">
						<p class="standard_text">
							Om te starten met een traject heb je een intake GBGGZ (psychologie) nodig.<br/><br/>
							<ol class="standard_text olist">
								<li>Je neemt contact op met MC2 met de vraag of er binnenkort plek is om met jouw vraag aan de slag te gaan. Onze officemanager informeert jou wat er nodig is om zo’n intake in te zetten en gaat met jou een datum zoeken.</li><br/>
								<li>Wanneer een intake-datum gepland wordt, krijg je een aanmeldformulier gemaild/opgestuurd met de vraag die ingevuld te retourneren. Daarnaast krijg je tevens ons praktijkreglement toegezonden.</li><br/>
								<li>Op de dag van de intake wordt je gevraagd om een kwartiertje eerder aanwezig te zijn om de zogenaamde ROM-vragenlijst in te vullen. Dit betreft een kort onderzoek van waaruit een beginmeting wordt opgesteld.</li><br/>
							  <li>Na het invullen van de ROM-meting krijg je de intake GBGGZ, waarin een van de therapeuten met jou samen in een gesprek jouw hulpvraag, jouw verwachtingen, jouw wensen en jouw doelen worden besproken en genoteerd (onderdeel van het behandelplan). Samen met de therapeut beslis jij hoe de hulpvraag wordt aangepakt en kun je je wensen kenbaar maken (zie “Shared Decision Making”). Een (werk)diagnose wordt gesteld, een behandeltraject voorgesteld, besproken en opgetekend in een zogenaamd behandelplan (inclusief sessie-afspraken) waarvoor jij je akkoord geeft. Dat doen we via de mail.</li><br/>
								<li>Een datum voor een eerste sessie wordt gepland direct na de intake. Natuurlijk wanneer jij een goed gevoel hebt bij dat wat is besproken.</li><br/>
								<li>Dan start het traject en wordt het behandelplan gevolgd zoals is afgesproken. Natuurlijk kan deze worden bijgesteld, doch altijd in overleg samen met jou als cliënt. Te tijden van de behandeling zal jou gevraagd worden of het behandelplan nog steeds loopt naar believen en of je tevreden bent. Dit noemen we tussentijds evalueren.</li><br/>
								<li>Bij beëindiging van het traject wordt een zogenaamde eindevaluatie gepland (het laatste gesprek), waarbij gekeken wordt of dat wat is afgesproken daadwerkelijk gehaald is en of er een vervolg of anderszins nodig is. In overleg met de therapeut wordt besproken wat de vervolgstap wordt wat beschreven wordt in een eindevaluatie voor je verwijzer (overigens gaat alle informatie eerst langs jou ter akkoord).</li><br/>
								<li>Behandelplan, overleg, afspraken, bijstellingen, evaluaties ed. worden door de therapeut bijgehouden in jouw persoonlijk dossier. Gevraagd wordt aan jou om ook je eigen dossier/proces bij te houden als extra ondersteuning inzake je herstel: je kunt altijd zaken teruglezen in jouw tijd. Ervaring leert dat dat enorm werkt!</li>
						</ol>
						</p>
					</div>
				</div>
				<!-- button -->
				<a class="button_blue" href="Psychologie.php">Terug</a>
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
