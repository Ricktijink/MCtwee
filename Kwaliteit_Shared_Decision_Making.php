<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Shared Decision Making</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Misschien zit je nu ziek thuis? Bij MC2 zijn we gespecialiseerd in Arbeid en Gezondheid, zowel arbeidsgerelateerde- als arbeidrelevante klachten." />
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
			<h1 class="main_title editable">Kwaliteit</h1><br/>
			<span class="main_subtitle editable">Shared Decision Making</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<h1 class="title_red editable">Shared Decision Making</h1>
					<span class="subtitle editable">Samen beslissen we hoe we de behandeling vorm gaan geven</span>
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
						<p class="standard_text">
							Omdat wij als MC<sup>2</sup> het belangrijk vinden cliëntgericht te werken, de cliënt wordt gezien als regisseur van een eigen traject (daarin de ondersteuning geniet van onze behandelaars). De cliënt beslist mee over het eigen te doorlopen behandeltraject (we noemen dit “shared decision making”: behandelaar en cliënt geven samen invulling aan het proces van de behandeling aan de start van het traject middels het bespreken van het behandelplan). Om dit zo optimaal te kunnen laten verlopen, vragen wij de cliënt om na de behandeling voor ons de CQi-vragenlijst in te vullen (op de computer bij ons op MC<sup>2</sup>). Deze vragenlijst betreft of het “samen beslis model” ook de vorm heeft gekregen zoals is afgesproken. Uiteraard worden resultaten uit deze vragenlijst teruggekoppeld/besproken met de cliënt om te komen tot (mogelijke) verbeteracties. Want zoals gezegd willen wij van MC<sup>2</sup> werken op een zo’n hoog mogelijk niveau van cliëntgericht werken en zijn we continu bezig met verbetering van kwaliteit van zorg.
						</p><br/>
						<p class="standard_text">
							De resultaten/gegevens die voortvloeien uit deze vragenlijst worden maandelijks besproken tussen behandelaar en directie. Ze worden verwerkt om de kwaliteit van zorg continu te kunnen blijven toetsen en kunnen, mocht daar naar gevraagd worden, overlegd worden aan derden (uiteraard in volstrekte anonimiteit) ter borging van kwaliteit op het gebied van cliëntgericht werken.
						</p>
					</div>
				</div>
				<!-- button -->
				<a class="button_red" href="Kwaliteit.php">Terug</a>
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
