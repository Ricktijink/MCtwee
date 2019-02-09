<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Psychologie Tilburg</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Niet lekker in je vel? De psychologen van MC2, Marco en Lisette, kunnen jou misschien wel helpen of begeleiden. Neem contact op om kennis te maken en/of een intake in te plannen." />
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
					<li class="indent"><a href="#"><strong>Psychologie</strong></a></li>
					<li class="indent"><a href="Fysiotherapie.php">Fysiotherapie</a></li>
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
	<div id="menu_button" class="blue">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="left_container" class="blue_container">
	<!-- TopRight Mobile Menu button -->
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable" id="untitled-region-1">Psychologie</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-2">"Ik ben toch niet gek!! Ik ga niet naar een psycholoog"</span>
			<div class="line"></div>
			<p class="main_text editable" id="psyintro">Als je dit leest, zit je misschien niet zo lekker in je vel. Je weet niet goed wat er met je aan de hand is. Of je weet het prima, maar je komt er alleen even niet uit. Een psycholoog kan je hierbij helpen. Samen je gevoelens en gedachten op een rijtje zetten, samen uitzoeken waar die angst vandaan komt, samen komen tot effectieve oplossingen. Psychische klachten kunnen lichamelijke klachten veroorzaken. Hoofdpijn, vermoeidheid, duizeligheid en spanningsklachten zijn hier voorbeelden van. Andersom krijgen mensen soms psychische klachten door lichamelijke klachten. Chronisch pijn hebben, kan psychisch heel moeilijk zijn. Een gezonde geest in een gezond lichaam. Dat is waar wij samen met jou naartoe willen werken.</p>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="quicklinks-container">
				Quicklinks:
				<br>
				<a href="#ql_klachtbeeld" class="quicklink">Klachtbeeld</a>
				<a href="#ql_traject" class="quicklink">Traject</a>
				<a href="#ql_specialismen" class="quicklink">Specialismen</a>
				<a href="#ql_zorgkaart" class="quicklink">Zorgkaart</a>
				<a href="#ql_spreekuur" class="quicklink">Spreekuur</a>
			</div>
			<!-- Column 1 -->
			<div class="column margin-column-right">
				<!-- Block 1 - Klachtenbeeld -->
				<div class="block" id="ql_klachtbeeld">
					<div class="block_title">
						<h1 class="title_blue editable" id="untitled-region-3">Klachtbeeld</h1>
						<span class="subtitle editable" id="untitled-region-4">Voor elke klacht is een oplossing te vinden!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_img editable" id="untitled-region-5"><p><img src="IMG/hetbrein.jpg" alt="het brein"></p></div>
						<div class="block_text editable" id="psyklachtbeeld">
							<p class="standard_text">
								Er zijn een groot aantal klachten / klachtbeelden / symptomen die te maken hebben met de psyche. Sterker nog: wij van MC<sup>2</sup> zijn van mening dat alles rondom gezondheid te maken heeft met de psyche. Of het nu gaat om dat wat je weet over je eigen klachtbeeld, hoe je erover denkt, wat je ermee doet, maar ook hoe de klachten zich uiten bij je...
							</p>
						</div>
						<div class="block_button">
							<hr/>
							<!-- button -->
							<a class="button_blue" href="Psychologie_Klachtbeeld.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
				<!-- Block 4 - Zorgkaart Nederland -->
				<div class="block margin-column-top" id="ql_traject">
					<div class="block_title">
						<h1 class="title_blue editable">Het behandeltraject</h1>
						<span class="subtitle editable">“hoe ziet een behandeltraject eruit?”</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="behandeltraject">
							<p class="standard_text">
								Voor meer informatie over ons behandelstraject kunt u zich hier in lezen.
							</p>
						</div>
						<div class="block_button">
							<hr/>
							<!-- button -->
							<a class="button_blue" href="Psychologie_Behandeltraject.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				<!-- Block 2 - Specialismen -->
				<div class="block" id="ql_specialismen">
					<div class="block_title">
						<h1 class="title_blue editable" id="untitled-region-6">Specialismen</h1>
						<span class="subtitle editable" id="untitled-region-7">Wij zijn veelvoudig gespecialiseerd bij MC<sup>2</sup>.</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="psyspecialismen"><p class="standard_text">De Psychologen van MC<sup>2</sup> zijn gespecialiseerd op een aantal gebieden. Marco richt zich bijvoorbeeld onder andere op arbeid gerelateerde vraagstukken, terwijl Lisette zich heeft gespecialiseerd op het gebied van EMDR, een therapie om bijvoorbeeld vraagstukken rondom angsten of herbelevingen te begeleiden. Wil niet zeggen dat zij zich alleen op die gebieden begeven,&nbsp;zij kijken graag wat ze voor je kunnen betekenen, op welk gebied ook.</p></div>
						<div class="block_button">
							<hr/>
							<!-- button -->
							<a class="button_blue" href="Psychologie_Specialismen.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
				<!-- Block 4 - Zorgkaart Nederland -->
				<div class="block margin-column-top" id="ql_zorgkaart">
					<div class="block_title">
						<h1 class="title_blue editable">Zorgkaart Nederland</h1>
						<span class="subtitle editable">Laat uw waardering achter!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text1 editable" id="psyzorgkaart">
							<div class="zkn-widget-type-2" id="zkn-score-widget-3045443">
            		<div class="zkn-widget-body">
                		<a href="https://www.zorgkaartnederland.nl/zorginstelling/psychologiepraktijk-en-psychotherapiepraktijk-mc2-reintegratie-psychologie-fysiotherapie-psychologen-tilburg-3045443" target="_blank">MC2 Reïntegratie Psychologie Fysiotherapie, Psychologen</a> is gewaardeerd op ZorgkaartNederland.
                		<a href="https://www.zorgkaartnederland.nl/zorginstelling/psychologiepraktijk-en-psychotherapiepraktijk-mc2-reintegratie-psychologie-fysiotherapie-psychologen-tilburg-3045443/waardering" target="_blank">Bekijk alle waarderingen</a> of
                		<a href="https://www.zorgkaartnederland.nl/zorginstelling/psychologiepraktijk-en-psychotherapiepraktijk-mc2-reintegratie-psychologie-fysiotherapie-psychologen-tilburg-3045443/waardeer" target="_blank">plaats een waardering</a>
            		</div>
            		<script type="text/javascript" async="async" src="//www.zorgkaartnederland.nl/zkn/widget/score/t/2/v/2/organisatie/3045443"></script>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Column 3 -->
			<div class="column">
				<!-- Block 3 - Inloopspreekuur (ISU) -->
				<div class="block" id="ql_spreekuur">
					<div class="block_title">
						<h1 class="title_blue editable" id="untitled-region-10">Inloopspreekuur (ISU)</h1>
						<span class="subtitle editable" id="untitled-region-11">Wij hebben een vrijblijvend spreekuur. Kom langs!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="psyinloop"><p class="standard_text">Het inloopspreekuur is bedoeld voor iedereen die vragen heeft over lichamelijke en/of mentale klachten en hiervoor (actief) op zoek is naar een gepaste oplossing. Of dit nu bijvoorbeeld fysieke klachten, sombere gevoelens of problemen op het werk betreft, MC<sup>2</sup> kan je middels dit inloopspreekuur snel en adequaat ondersteunen. Onze psycholoog en fysiotherapeut kunnen individueel of juist samen de klachten analyseren en na een screening een passend en gericht advies geven. Als blijkt dat wij iets voor je kunnen betekenen, kan er indien gewenst direct een afspraak gemaakt worden voor een vervolg. Dit zal, met jouw toestemming, gebeuren met een terugkoppeling naar en/of in samenspraak met de huisarts. Op die manier blijft de hulpvraag, het advies en de begeleiding transparant en kunnen we je de beste zorg bieden. Het inloopspreekuur is een gratis en geheel vrijblijvende service van MC<sup>2</sup>. Het inloopspreekuur is iedere woensdag van 17.00 tot 18.00 en iedere vrijdag van 9.00 tot 10.00 in onze praktijk.</p></div>
						<div class="break"></div>
					</div>
				</div>
				<div class="block_img editable" id="untitled-region-12"><p><img src="IMG/image2.jpg" alt="image2"></p></div>
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
