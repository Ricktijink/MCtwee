<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Reïntegratie</title>
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
			<h1 class="main_title editable">Reïntegratie</h1><br/>
			<span class="main_subtitle editable">"Arbeid en Gezondheid"</span>
			<div class="line"></div>
			<p class="main_text editable" id="reinintro">Als je dit leest, zit je misschien 'ziek thuis'. Je hebt klachten waardoor je niet kunt werken. Hoofdpijn, slapeloosheid, moeite met 
			concentreren en angst zijn voorbeelden van dergelijke klachten. Zou het niet fijn zijn om ‘gewoon’ je leven weer op te kunnen pakken? Gewoon energie hebben 
			voor leuke dingen. Gewoon werken en daar plezier in hebben.
			<br/><br/>
			Bij MC<sup>2</sup> zijn we gespecialiseerd in Arbeid en Gezondheid! Dat houdt in dat we cliënten begeleiden met Arbeidgerelateerde klachten en 
			Arbeidrelevante klachten. Dit doen wij middels een door ons ontwikkeld programma: MDP (Multi Disciplinair Programma). Een programma op maat gemaakt voor 
			elk individu.</p> 
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="quicklinks-container">
				Quicklinks:
				<br>
				<a href="#ql_mdp" class="quicklink">MDP</a>
				<a href="#ql_werknemer" class="quicklink">Werknemer</a>
				<a href="#ql_werkgever" class="quicklink">Werkgever</a>
				<a href="#ql_bedrijfsarts" class="quicklink">Bedrijfsarts</a>
				<a href="#ql_huisarts" class="quicklink">Huisarts</a>
			</div>
			<!-- Column 1 -->
			<div class="column margin-column-right">
				<!-- Block 1 - MDP -->
				<div class="block" id="ql_mdp">
					<div class="block_title">
						<h1 class="title_red editable">MultiDisciplinair Programma (MDP)</h1>
						<span class="subtitle editable">“Een duurzaam traject waarbij cliënt en reïntegratie samenkomen”</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_mdp">
							<p class="standard_text">
								Voor complexe, chronische klachtbeelden van mentale, fysieke en emotionele aard heeft MC<sup>2</sup> een vijftal multidisciplinaire trajecten 
								(Preventief – Flexibel – Basis – Regulier – Intensief). Afhankelijk van de ernst van de klachten die in kaart worden gebracht middels een 
								persoonlijke Intake Arbeid &amp; Gezondheid (Intake AG) wordt bepaald welk traject het meest passend voor je is. Dit zijn allen cliënt specifieke 
								trajecten, die aan de hand van de klachten en de behoeften van de cliënt ingevuld worden. Je wordt, individueel of in groepsverband...
							</p>
						</div>
							<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Reintegratie_MDP.php">Lees Meer</a>
						</div>				
						<div class="break"></div>
					</div>
				</div>
				<!-- Block 2 - Werknemer -->
				<div class="block margin-column-top" id="ql_werknemer">
					<div class="block_title">
						<h1 class="title_red editable">De Werknemer</h1>
						<span class="subtitle editable">"Ik wil graag weer aan het werk, maar wel verantwoord."</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_werknemer">
							<p class="standard_text">
								Niet alléén het terugkeren naar werk is belangrijk; maar juist de kwaliteit van leven, met daarin plezier in werk als essentieel component. 
								Daaraan gekoppeld: niet alléén snel weer aan het werk, maar vooral duurzaam. Wat heb je eraan als je na 2 weken weer aan het werk bent en 
								je klachten zijn nog niet over of komen weer terug?...
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Reintegratie_Werknemer.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				<!-- Block 3 - Werkgever -->
				<div class="block" id="ql_werkgever">
					<div class="block_title">
						<h1 class="title_red editable">De Werkgever</h1>
						<span class="subtitle editable">"Dus als werkgever mag ik wél geïnformeerd worden..?"</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_werkgever">
							<p class="standard_text">
								U wilt uw werknemer niet alleen snel, maar vooral juist duurzaam weer aan de slag hebben. Onze psycholoog, fysiotherapeut en oefentherapeut 
								Cesar zetten zich hiervoor in.  Tijdens een intake brengen we middels een uitgebreide rapportage in kaart waar de (gezondheids) problematiek 
								van de cliënt, uw werknemer, ligt. Tijdens een multidisciplinair traject, waarin alle therapeuten op unieke wijze nauw samenwerken...
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Reintegratie_Werkgever.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
				<!-- Block 4 - Bedrijfarts -->
				<div class="block margin-column-top" id="ql_bedrijfsarts">
					<div class="block_title">
						<h1 class="title_red editable">De Bedrijfsarts</h1>
						<span class="subtitle editable">“Een belangrijke schakel van de Multi Disciplinaire aanpak”</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_bedrijfsarts">
							<p class="standard_text">
								Zowel de psycholoog als de fysiotherapeuten staan klaar voor cliënten met uiteenlopende arbeid gerelateerde klachtbeelden, onder andere op 
								verwijzing van u als bedrijfsarts. De “enkelvoudige” problematiek, zoals rugklachten, nekklachten, angsten wordt monodisciplinair behandeld / 
								begeleid maar... Chronisch, complex en onbegrepen? Voor ons een uitdaging! Ons team is namelijk vooral gespecialiseerd in het verlenen van 
								multidisciplinaire zorg...
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Reintegratie_Bedrijfsarts.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
			</div>
			<!-- Column 3 -->
			<div class="column">
				<!-- Block 5 - Huisarts -->
				<div class="block" id="ql_huisarts">
					<div class="block_title">
						<h1 class="title_red editable">De Huisarts</h1>
						<span class="subtitle editable">“Als huisarts blijf je onderdeel van het gezondheidsproces van onze gezamenlijke cliënt”</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="re_huisarts">
							<p class="standard_text">
								Zowel de psychologen als fysiotherapeuten staan voor de cliënt klaar, op verwijzing van u als huisarts of via DTF (Directe Toegankelijkheid 
								Fysiotherapie). Wij hebben met nagenoeg alle zorgverzekeraars een contract. Afhankelijk van de verzekering van uw cliënt worden de disciplines 
								vergoed. MC<sup>2</sup> als ondersteuner voor uw cliënt; dus ook voor u!...
							</p>
						</div>
						<!-- button -->
						<div class="block_button">
							<hr/>
							<a class="button_red" href="Reintegratie_Huisarts.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
				<div class="break"></div>
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
