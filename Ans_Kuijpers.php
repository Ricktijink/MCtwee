<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ans Kuijpers - MC2</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Ans Kuijpers – Office Manager – aanwezig in de ochtenden" />
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
	<div id="menu_button" class="red">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="person_container" class="ans">
	<!-- TopRight Mobile Menu button -->
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container_person">

		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_red editable" id="untitled-region-1">Ans Kuijpers</h1>
			<span class="subtitle_person editable" id="untitled-region-2">Office Manager</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="person_text">
				Mijn naam is Ans Kuijpers en op 1 september ga ik beginnen als Office Manager bij MC<sup>2</sup> 
				De afgelopen jaren heb ik de gezondheidszorg op het gebied van ICT leren kennen door mijn job als directiesecretaresse bij een automatiseringsbedrijf voor de gezondheidszorg in Nederland. 
				Bij MC<sup>2</sup>, een vooruitstrevende en innovatieve praktijk op het gebied van Psychologie, Fysiotherapie en Re-integratie, ga ik de gezondheidszorg van een andere kant meemaken. Een gezonde geest in een gezond lichaam is de missie van deze organisatie die wordt gevormd door een team van   gedreven, vrijzinnige, daadkrachtige en leuke professionals.  
				Als Office manager ben ik beschikbaar voor alle Ins en Outs van de front- en back office van MC<sup>2</sup>, elke ochtend van maandag tot en met vrijdag.
				Vanaf maandag 3 september sta ik u met alle plezier te woord in de praktijk. 
				Heel graag tot ziens bij MC<sup>2</sup>! 
			</p>
			<div class="break"></div>
			<a class="button_red" href="HetTeam.php">Overzicht</a>
			<div class="break"></div>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<?php include 'inc_footer.php'; ?>
	</div>
</body>
</html>
