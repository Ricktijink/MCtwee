<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Fysiotherapie Tilburg</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Fysieke klachten? De fysiotherapeuten van MC2, Martin en Maarten, kunnen jou daarin begeleiden. Neem contact op om kennis te maken en/of een intake in te plannen." />
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
		<a href="index.php"><img src="IMG/logo_grey.png" alt="over" width="160" height="47"></a>
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
					<li class="indent"><a href="#"><strong>Fysiotherapie</strong></a></li>
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
	<div id="menu_button" class="yellow">
		<img src="IMG/menu3.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="left_container" class="yellow_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu1.png" alt="Mobile menu"></a>  
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable" id="untitled-region-1">
				Fysiotherapie
			</h1><br/>
			<h3 class="intro_block_subtitle">Oefentherapie</h3> <br>
			<span class="main_subtitle editable" id="untitled-region-2">"Oefening baart kunst!"</span>
			<div class="line_yellow"></div>
			<p class="main_text editable" id="fysintro">Een fysiotherapeut begeleidt bij het verhelpen én voorkomen van lichamelijke klachten. Het kan bijvoorbeeld gaan om hoofdpijn, nekklachten of herstel na een operatie (zie voor andere voorbeelden ook het kopje "Klachtbeelden"). Tijdens de intake wordt door de fysiotherapeut een specifiek beeld gevormd omtrent je lichamelijke (pijn)klacht. Daarnaast kijken we niet alleen naar de botten, spieren, zenuwen, etc. maar indien geïndiceerd ook naar het psychosociale aspect van de klacht. We kijken ook naar hoe je in het dagelijks leven omgaat met lichamelijke klachten. En andersom: of de fysieke klachten voortkomen uit mentale (over)belasting. Iets dat bijvoorbeeld het geval kan zijn bij een burn-out. <br><br> Voor het maken van een afspraak bij MC<sup>2</sup> heb je geen verwijzing van de huisarts nodig. De fysiotherapeut informeert de huisarts wel, met jouw goedkeuren.</p>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<!-- Column 1 -->
			<div class="column margin-column-right">
				<!-- Block 1 - Klachtenbeeld -->
				<div class="block">
					<div class="block_title">
						<h1 class="title_yellow editable" id="untitled-region-3">Belangrijk:</h1>
						<span class="subtitle editable" id="untitled-region-4">MC2 gaat contractvrij</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="fysklachtbeeld">
							<p class="standard_text">
								MC2 gaat per 1 januari 2019 CONTRACTVRIJ, dat heeft gevolgen voor de fysiotherapie bij MC2. Deze pagina krijgt daarom een update met nieuwe informatie.
								Mocht u alvast meer willen weten, bel dan onze office voor extra informatie. MC2 biedt fysio aan maar in een andere vorm dan u van ons gewend bent!
							</p>
						</div>
						<!-- <div class="block_button">
							<hr/> -->
							<!-- button -->
							<!-- <a class="button_yellow" href="Fysiotherapie_Klachtbeeld.php">Lees Meer</a> -->
						<!-- </div> -->
						<div class="break"></div>
						<!-- <div class="block_img editable" id="untitled-region-5"><p><img src="IMG/image3.jpg"></p></div> -->
					</div>
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				
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
