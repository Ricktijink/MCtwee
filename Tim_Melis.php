<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tim Melis - MC2</title>
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
	<div id="menu_button" class="yellow">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Yellow -->
	<div id="person_container" class="tim bg_centertop">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
	</div>
	<!-- Right container - yellow -->
	<div id="right_container_person">
		<!-- Content container -->
		<div id="content_container_person">
			<h1 class="title_person_yellow editable" id="untitled-region-1">Tim Melis</h1>
			<span class="subtitle_person editable" id="untitled-region-2">Oefentherapeut Mensendieck</span>
			<div class="line_person"></div>
			<p class="standard_text editable" id="untitled-region-3">
				Mijn naam is Tim Melis en ik ben vanaf januari 2019 werkzaam bij MC2 als oefentherapeut Mensendieck. Een helpende hand kunnen bieden aan mensen die klachten en/of beperkingen ervaren, 
				vind ik enorm eervol en dankbaar werk. Dit is dan ook één van de redenen waarom ik in 2012 heb besloten de opleiding tot oefentherapeut Mensendieck te volgen en me te specialiseren in 
				houding- en bewegingskunde.
				<br><br>
				Het interessante bij MC2 vind ik dat er een sterke link wordt gelegd tussen het fysieke en de psyche. Het lichaam, gedachten en gevoelens zijn een drie-eenheid die onlosmakelijk met elkaar 
				verbonden zijn. Hierdoor kan een van oorsprong fysieke klacht overgaan naar een psychische klacht, of omgekeerd. Met deze gegevens in het achterhoofd vind ik het super om bij MC2 te mogen werken, 
				naast dat ik ook mijn ervaringen kan inzetten die ik heb opgedaan in diverse takken van andersoortig werk. Door de combinatie van allerlei zaken kunnen wij van MC2 meer voor onze mensen betekenen, 
				door een meer completere behandeling aan te bieden.
				<br><br>
				Voor mij zal dit zijn op dinsdagavond en donderdagochtend tijdens het MDP of oefentherapie-sessies. Ook ga ik mensen ondersteunen in het behalen van persoonlijke (met name fysieke) doelstellingen 
				tijdens de medische fitness. 
				<br><br>
				Voor fysieke vraagstukken, sta ik graag voor jou klaar!
			</p>
			<div class="break"></div>
			<a class="button_yellow" href="HetTeam.php">Overzicht</a>
			<div class="break"></div>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<?php include 'inc_footer.php'; ?>
	</div>
</body>
</html>
