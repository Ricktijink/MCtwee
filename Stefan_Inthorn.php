<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Stefan Inthorn - MC2</title>
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
	<div id="person_container" class="stefan">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container_person">
		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_blue editable">Stefan Inthorn</h1>
			<span class="subtitle_person editable">Basis Psycholoog</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="person_text">
				Hallo! Stefan Inthorn, aangenaam. Sinds juni 2016 ben ik werkzaam als basispsycholoog binnen het MC<sup>2</sup>-team. Voordat ik aan mijn 
				opleiding psychologie begon ben ik afgestudeerd in het vakgebied PsychoMotorische Therapie. Bij deze opleiding was 1 ding direct duidelijk: het lichaam is 
				van invloed op je geest en je geest is van invloed op je lichaam. Dat betekent ook dat je door middel van bewegen en ervaren meer over jezelf kunt leren.
				<br/><br/>
				Ik ben de opleiding psychologie begonnen om meer te leren over de mens, deze keer met name over het ‘denken’. Het kunnen herkennen 
				van negatieve gedachten en, wat we uiteindelijk willen bereiken, het omdenken van negatieve gedachten naar een meer positievere kijk. Ik vind het fantastisch 
				om te zien hoe mensen zich ontwikkelen en een positievere kijk krijgen op hun eigen vaardigheden en de wereld om hen heen!
				<br/><br/>
				Nu kan ik deze ervaringen en ideeën uitoefenen als Basis Psycholoog binnen MC<sup>2</sup>. Denken, bewegen en ervaren waarbij jijzelf centraal staat, 
				dat is de uitdaging.
				<br/><br/>
				Je ziet mij op de dinsdagen. Tot in de praktijk!
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
