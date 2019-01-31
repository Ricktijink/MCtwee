<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Marco van Hooff - MC2</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Marco van Hooff – Eigenaar en Psycholoog – aanwezig van maandag t/m vrijdag" />
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
	<div id="person_container" class="marco bg_centertop">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container_person">
		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_blue editable">Marco van Hooff</h1>
			<span class="subtitle_person editable">Reïntegratie- / MDP- / GZ-psycholoog, Directeur &amp; Eigenaar</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="person_text">
				Gewoon 'Marco', de meest voorkomende benaming bij de persoon die ik ben: eigenaar, directeur, collega, teamplayer, knokker, psycholoog, denker, doener en 
				grondlegger van een onconventionele vorm van hulpverlening die gestart is binnen de muren van een kleine eerstelijnspraktijk in de psychologie. Aan huis. 
				Nu, bijna 25 jaren later, is er door allerlei bewegingen een multidisciplinair gezondheidscentrum ontstaan waar middels een combinatie van fysiek en 
				psychologisch onderzoek, fysieke en psychologische training en therapie, allerlei hulpvragen getackeld kunnen worden. Graag houd ik me bezig met arbeid &amp; 
				gezondheid en onbegrepen lichamelijke klachtbeelden. Het liefst met anderen: ik ga vol enthousiasme samen met mijn teamleden de vloer op!
				<br/><br/>
				Als team staan we bekend om onze eigenwijsheid, weinig geprotocolleerde aanpak met een personal touch, waarin we dat "iets" inzetten waar ik, jaren geleden, 
				al een start mee heb gemaakt en wat nog steeds in beweging is. 
				<br/><br/>
				Ik ben ingeschreven bij het BIG register, ben geregistreerd GZ-Psycholoog en lid van o.a. het NIP. Ik ben aanwezig van maandag tot en met vrijdag, en houd, op afspraak, ook buiten kantooruren, spreekuren.
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
