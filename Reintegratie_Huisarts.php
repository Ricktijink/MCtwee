<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Reïntegratie Huisarts</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="My personal portfolio to showcase my work." />
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
					<li class="indent"><a href="Psychologie.php">Psychologie</a></li>
					<li class="indent"><a href="Fysiotherapie.php">Fysiotherapie</a></li>
					<li class="indent"><a href="Reintegratie.php"><strong>Reïntegratie</strong></a></li>
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
			<h1 class="main_title editable">Huisarts</h1><br/>
			<span class="main_subtitle editable">Reïntegratie</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<h1 class="title_red editable">De Huisarts</h1>
					<span class="subtitle editable">“Als huisarts blijf je onderdeel van het gezondheidsproces van onze gezamenlijke cliënt”</span>
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
						<p class="standard_text">
							Zowel de psychologen als fysiotherapeuten staan voor de cliënt klaar, op verwijzing van u als huisarts of via DTF (Directe Toegankelijkheid 
							Fysiotherapie). Wij hebben met nagenoeg alle zorgverzekeraars een contract. Afhankelijk van de verzekering van uw cliënt worden de disciplines 
							vergoed. MC<sup>2</sup> als ondersteuner voor uw cliënt; dus ook voor u!
						</p><br/>
						<p class="standard_text">
							Ons team is gespecialiseerd in de zogenaamde Onbegrepen Lichamelijke Klachten (OLK). Cliënten met psychosomatische, chronische en / of complexe 
							klachtbeelden zijn bij MC<sup>2</sup> aan het juiste adres. Vaak is het zo dat ziekteverzuim een veel voorkomend aspect is bij deze klachtbeelden. Vandaar 
							dat mensen ook voor arbeid gerelateerde zorg naar ons verwezen kunnen worden. Wanneer u een cliënt treft die te maken heeft, of dreigt te krijgen, 
							met de ziektewet staan we graag voor u beiden klaar. De samenwerking tussen MC<sup>2</sup>, huisarts en bedrijfsarts is namelijk erg belangrijk voor het 
							herstel in gezondheid en duurzame re-integratie.
							MC<sup>2</sup> ondersteunt zowel cliënt als huisarts op eerstelijnsvlak, arbeid gerelateerd vlak en OLK-vlak.
						</p>
					</div>
				</div>
				<!-- button -->
				<a class="button_red" href="Reintegratie.php">Terug</a>
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
