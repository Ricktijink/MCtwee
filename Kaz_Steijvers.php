<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kaz Steijvers - MC2</title>
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
	<div id="person_container" class="kaz">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container_person">
		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_blue editable">Kaz Steijvers</h1>
			<span class="subtitle_person editable">Toegepast Psycholoog</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="person_text">
				Hallo, mijn naam is Kaz Steijvers. Mijn achtergrond ligt in de sociale hulpverlening, 
				een werkveld waarin ik heb mogen ervaren dat het lichaam, gedachten en emoties onafscheidelijk 
				van elkaar verbonden zijn met de mens. En dat ieder mens deze verbinding op zijn eigen, unieke manier 
				mag beleven en naar mag handelen. Tijdens mijn opleiding tot Toegepast Psycholoog heb ik gezien dat deze 
				uniekheid lang niet overal gewaardeerd wordt en er soms zelfs wordt geprobeerd om van mensen eenheidsworsten te maken. 
				MC<sup>2</sup> pakt dit juist andersom aan: Wat maakt jou nu echt jou, en hoe kan je juist dat als kracht gaan inzetten? Ook tijdens 
				momenten waarin het soms zoeken is naar balans. Dit maakt MC<sup>2</sup> een plek waar mensen zichzelf kunnen zijn. Ik ben dan ook blij 
				om te kunnen zeggen dat ik sinds februari 2018 het team mag komen versterken om samen op een persoonlijke en eigenwijze 
				manier ondersteuning te kunnen bieden bij het hervinden van balans in een dynamische wereld. Jullie kunnen mij tegenkomen 
				op woensdagavond en donderdagochtend tijdens het MDP.
			</p>
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
