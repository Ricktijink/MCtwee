<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Reïntegratie Werknemer</title>
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
			<h1 class="main_title editable" id="untitled-region-1">Werknemer</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-2">Reïntegratie</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<h1 class="title_red editable" id="untitled-region-3">De Werknemer</h1>
					<span class="subtitle editable" id="untitled-region-4">"Ik wil graag weer aan het werk, maar wel verantwoord."</span>
				</div>
				<div class="big_content">
					<div class="big_content_text editable" id="untitled-region-5">
						<p class="standard_text">
							Niet alléén het terugkeren naar werk is belangrijk; maar juist de kwaliteit van leven, met daarin plezier in werk als essentieel component. 
							Daaraan gekoppeld: niet alléén snel weer aan het werk, maar vooral duurzaam. Wat heb je eraan als je na 2 weken weer aan het werk bent en je 
							klachten zijn nog niet over of komen weer terug?
							<br/><br/>
							Een rugblessure, burn-out achtige klachten, enkelvoudige of complexe klachtbeelden, bij MC<sup>2</sup> ben je aan het juiste adres voor monodisciplinaire of 
							multidisciplinaire behandelingen. Onze specialisaties, kennis en kunde zorgen ervoor dat je herstelproces verantwoord, efficiënt en optimaal 
							verloopt met een resultaat waar jij in de eerste plaats tevreden mee bent.
							<br/><br/>
							MC<sup>2</sup> is gespecialiseerd in het behandelen en begeleiden van cliënten met arbeid gerelateerde én arbeidsrelevante klachten. Arbeid gerelateerde 
							klachten zijn klachten waarvan de oorzaak deels of geheel ligt in het werk. Arbeidsrelevante klachten zijn klachten die niet veroorzaakt zijn door 
							werk, maar wel een nadelige invloed op het werk hebben.
							<br/><br/>
							Informeer eens bij MC<sup>2</sup>, ook voor wat betreft financieringsmogelijkheden. Je zult verrast zijn door de mogelijkheden en onze bereidheid om alles op 
							alles te zetten voor jouw gezondheid.
							<br/><br/>
							MC<sup>2</sup> streeft altijd naar een nauwe samenwerking met intensief overleg, met bedrijfsarts, huisarts, werkgever en andere betrokkenen die belangrijk 
							zijn voor jouw herstel.
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
