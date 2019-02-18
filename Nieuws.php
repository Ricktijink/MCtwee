<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Nieuws</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Blijf op de hoogte van het laatste nieuws van MC2!" />
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
					<li class="indent"><a href="Reintegratie.php">Reïntegratie</a></li>
					<li><a href="Kwaliteit.php">Kwaliteit</a></li>
					<li><a href="HetTeam.php">Het Team</a></li>
					<li><a href="#"><strong>Nieuws</strong></a></li>
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
			<h1 class="main_title editable" id="untitled-region-13424">Nieuws</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-2234324325">De laatste updates vindt u hier</span>
			<div class="line"></div>
			<p class="main_text editable" id="newsintro">Welkom bij het laatste nieuws van MC<sup>2</sup>. Hier vind je nieuws over alles wat met MC<sup>2</sup> te maken kan hebben zoals vakanties, medewerkers, werkzaamheden etc. Blijf op de hoogte door af en toe hier te kijken maar ga ook eens naar onze facebook-pagina. Zo blijf je altijd op de hoogte van de laatste ins en outs van MC<sup>2</sup> <br><br>MC<sup>2</sup> gaat per 1 januari 2019 contractvrij <br>maar daarover informeren wij u zo spoedig mogelijk via onze site. <br>Mocht u al info wensen, neemt u dan contact op met onze office.</p>
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
					<h1 class="title_red editable" id="untitled-region-33424">Wachttijden MC<sup>2</sup></h1>
						<span class="subtitle editable" id="untitled-region-46757">4 januari 2019</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="news1">
							<p class="standard_text">
								<strong>ISU (InloopSpreekUur):</strong>
								<br>Momenteel geen wachttijd! Iedere week op dinsdag van 17.00u-18.00u Iedere week op 
								vrijdag van 09.00u-10.00u <br><br><strong>MDP (MultiDisciplinair/Arbeid &amp; Gezondheid):
								</strong> <br>Momenteel geen wachttijd! Intake AG: binnen 5 werkdagen na autorisatie/
								aanvraag intake AG Rapportage: binnen 5 werkdagen na intake Start behandeling: binnen 5 
								werkdagen na autorisatie MDP <br><br><strong>Eerstelijns: <br>Psychologie (contractvrij):
								</strong> <br>Intake en/of behandeling: vanaf 1 februari 2019 <br><strong>Oefentherapie 
								(contractvrij):</strong> Intake en/of start behandeling: vanaf 1 februari 2019 
								<br><br><strong>Fysiotherapie (gecontracteerd):</strong> <br>Check de site van onze 
								samenwerkingspartner: www.fysiobinnenstad.nl <br><strong>Psychologie (gecontracteerd):
								</strong> <br>Tijdens ons ISU kunnen wij u meer vertellen over onze samenwerkingspartners
							</p>
						</div>
						<div class="break"></div>
					</div>
				</div>
				<!-- Block 2 - Werknemer -->
				<!-- <div class="block">
					<div class="block_title margin-column-top">
						<h1 class="title_red editable" id="untitled-region-5">Nieuwe vacature!</h1>
						<span class="subtitle editable" id="untitled-region-6"></span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="news2"><p class="standard_text">Ter uitbreiding van ons team zoeken wij een Office Manager voor 20 uur per week (iedere ochtend van 8:30 t/m 12:30). Voor meer informatie zie de <a href="vacature-officemanager.pdf" target="_blank">vacature</a>. Kijk gerust even op onze site of Facebook om een indruk te krijgen van ons en onze praktijk!</p></div>
						<div class="break"></div>
					</div>
				</div> -->
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				<!-- Block 3 - Werkgever -->
				<div class="block">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-30937">MC<sup>2</sup> gaat CONTRACTVRIJ</h1>
						<span class="subtitle editable" id="untitled-region-409630">4 januari 2019</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="news1">
							<p class="standard_text">
								MC2 gaat vanaf 1 januari 2019 ongecontracteerd verder. We zijn vanaf die datum contractvrij. Dat wil zeggen dat we vanaf die datum geen 
								contracten meer aangaan met zorgverzekeraars.
								Wat houdt dat in?
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="2018en2019.php">Lees Meer</a>
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
