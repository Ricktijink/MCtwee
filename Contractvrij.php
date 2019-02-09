<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Contractvrij</title>
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
					<li class="indent"><a href="#"><strong>Reïntegratie</strong></a></li>
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
			<h1 class="main_title editable" id="untitled-region-1">Contractvrij</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-2">MC2 gaat contractvrij!</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<!-- Column 1 -->
			<div class="column margin-column-right">
				<!-- Block 1 - MDP -->
				<div class="block">
					<div class="block_title">
						<h1 class="title_red editable">2018</h1>
						<span class="subtitle editable">Voor clienten die voor 1 januari 2019 gestart zijn</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_mdp">
							<p class="standard_text">
								Omdat wij als MC<sup>2</sup> het belangrijk vinden cliëntgericht te werken, de cliënt wordt gezien als regisseur van een eigen traject (daarin de ondersteuning geniet van onze behandelaars). De cliënt beslist mee over het eigen te doorlopen behandeltraject (we noemen dit “shared decision making”: behandelaar en cliënt geven samen invulling aan het proces van de behandeling aan de start van het traject middels het bespreken van het behandelplan). Om dit zo optimaal te kunnen laten verlopen, vragen wij de cliënt om na de behandeling voor ons de CQi-vragenlijst in te vullen...
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Temp.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				<!-- Block 4 -->
				<div class="block">
					<div class="block_title">
						<h1 class="title_red editable">2019</h1>
						<span class="subtitle editable">Voor clienten die na 1 januari 2019 een traject opstarten</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_werknemer">
							<p class="standard_text">
								MC<sup>2</sup> gaat voor verbinden en werkt samen met diverse huisartsen en hun POH-GGZ. O.a. de praktijken van huisartsen Spoorlaan (praktijk van dkt. Lovenich) en Huisartsen Perron 1 (praktijkhouder dkt. Groot) en Huisartsen Hoefstraat (dkt. Groot & dkt. Wedemeijer) staan welbekend in de samenwerking met MC<sup>2</sup>. Ook hun POH-GGZ zijn frequent aanwezig in cliënt-overlegmomenten. De informatie die gedeeld wordt tijdens deze overleggen, wordt voorafgaand besproken met de cliënt die daardoor ook medezeggenschap heeft in wat er gedeeld wordt...
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Temp1.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
			</div>
			<!-- Column 3 -->
			<div class="column">
				
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
