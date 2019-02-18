<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Contact</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Wil je een afspraak maken of verzetten, kennis met ons maken. Mail of bel ons en maak alvast kennis met Aukje, onze Office Manager!" />
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
					<li><a href="Nieuws.php">Nieuws</a></li>
					<li><a href="Media.php">Media</a></li>
					<li><a href="#"><strong>Contact</strong></a></li>
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
			<h1 class="main_title editable" id="untitled-region-10982">Contact</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-22235">Wij staan voor u klaar!</span>
			<div class="line"></div>
			<p class="main_text editable" id="contactintro">Als je dit leest, zit je misschien 'ziek thuis'. Je hebt klachten waardoor je niet kunt werken. Hoofdpijn, slapeloosheid, moeite met concentreren en angst zijn voorbeelden van dergelijke klachten. Zou het niet fijn zijn om ‘gewoon’ je leven weer op te kunnen pakken? Gewoon energie hebben voor leuke dingen. Gewoon werken en daar plezier in hebben. <br><br> Bij MC<sup>2</sup> zijn we gespecialiseerd in Arbeid en Gezondheid! Dat houdt in dat we cliënten begeleiden met Arbeidgerelateerde klachten en Arbeidrelevante klachten. Dit doen wij middels een door ons ontwikkeld programma: MDP (Multi Disciplinair Programma). Een programma op maat gemaakt voor elk individu.</p>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
		<div class="quicklinks-container">
				Quicklinks:
				<br>
				<a href="#ql_contactgegevens" class="quicklink">Contactgegevens</a>
				<a href="#ql_spreekuren" class="quicklink">Spreekuren</a>
				<a href="#ql_geengehoor" class="quicklink">Geen gehoor?</a>
				<a href="#ql_spoed" class="quicklink">Spoed</a>
				<a href="#ql_overig" class="quicklink">Overig</a>
				<a href="#ql_locatie" class="quicklink">Locatie</a>
			</div>
			<!-- Column 1 -->
			<div class="column margin-column-right">
				<!-- Block 1 - MDP -->
				<div class="block" id="ql_contactgegevens">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-306826">Contactgegevens</h1>
						<span class="subtitle editable" id="untitled-region-4480">Hoe kunt u contact opnemen met ons?</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="contactdata"><p class="standard_text">Ons secretariaat is maandag, dinsdag, donderdag en vrijdag te bereiken van 8:30 tot 17:00. U heeft daarnaast de mogelijkheid van mail en van het inspreken van een boodschap op ons antwoordapparaat.</p>
						<p class="standard_text hide_mob"><br>T: 013 - 544 02 42<br> E: <a id="contactmaillink" href="mailto:Info@mctwee.nl">Info@mctwee.nl</a></p>
						<div id="call_button">Bel ons!</div>

						<div id="mail_button">Mail ons!</div>
						</div>
					</div>
					<div class="block_img editable" id="untitled-region-5890"><p><img src="IMG/office1.jpg" alt="contact"></p></div>
				</div>
				<!-- Block 4 - Bedrijfarts -->
				<div class="block margin-column-top" id="ql_spreekuren">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-6459">Spreekuren</h1>
						<span class="subtitle editable" id="untitled-region-7371">Wanneer kunt u langskomen?</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="spreekuren"><p class="standard_text">Voor actieve cliënten en opdrachtgevers is er iedere werkdag, met uitzondering van woensdag, van 08.30 tot 09.00 een telefonisch spreekuur. <br><br> Elke woensdag hebben wij een inloopspreekuur van 17.00 tot 18.00 en vrijdag van 9.00 tot 10.00, waar je zonder afspraak terecht kunt voor een kennismaking en een vrijblijvend advies.</p></div>
					</div>
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				<!-- Block 3 - Werkgever -->
				<div class="block" id="ql_geengehoor">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-88753">Geen Gehoor?</h1>
						<span class="subtitle editable" id="untitled-region-9906">Kunt u ons niet bereiken? Geen zorgen!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="geengehoor"><p class="standard_text">"De telefoon wordt niet opgenomen, wat nu!?" De voicemail inspreken of een mail sturen zijn de beste en snelste opties! <br><br> Het kan gebeuren dat de telefoon bij MC<sup>2</sup> een keer niet wordt opgenomen. Mocht dit gebeuren dan kun je onze voicemail inspreken. Deze wordt direct afgeluisterd, zodra iemand beschikbaar is. Daarnaast kun je ook altijd een mail sturen. Deze wordt vaak dezelfde dag nog beantwoord.</p></div>
					</div>
				</div>
				<!-- Block - Geen gehoor -->
				<div class="block margin-column-top" id="ql_spoed">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-8126">In geval van spoed</h1>
						<span class="subtitle editable" id="untitled-region-96839">Zowel tijdens als buiten kantooruren</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="geengehoor">
							<p class="standard_text">
								Mocht u tijdens of buiten kantooruren een spoedgeval hebben dan kunt u hier lezen wat u kunt doen.
							</p>
						</div>
						<!-- button -->
					<div class="block_button">
						<hr/>
						<a class="button_red" href="Contact_Spoed.php">Lees Meer</a>
					</div>
					<div class="break"></div>
					</div>
				</div>
				<!-- Block - Geen gehoor -->
				<div class="block margin-column-top" id="ql_overig">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-88848">Overige info</h1>
						<!-- <span class="subtitle editable" id="untitled-region-9">Zowel tijdens als buiten kantooruren</span> -->
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="geengehoor">
							<p class="standard_text">
								Mocht je informatie op deze site missen dan verwijzen we u graag voor aanvullende informatie naar het GGZ kwaliteitstatuut <a href="Kwaliteit.php">hier</a> of ons praktijkregelement <a href="Praktijkreglement.pdf" target="_blank">hier</a> en anders helpt ons secretariaat u graag op weg.
							</p>
						</div>
					</div>
				</div>

			</div>
			<!-- Column 3 -->
			<div class="column">
				<!-- Block 5 - Huisarts -->
				<div class="block" id="ql_locatie">
					<div class="block_title">
						<h1 class="title_red editable" id="untitled-region-101010">Locatie</h1>
						<span class="subtitle editable" id="untitled-region-111123">Waar zijn wij te vinden?</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="locatiemap"><p class="standard_text">MC<sup>2</sup> Reintegratie - Psychologie - Fysiotherapie<br> Kruisstraat 50<br> 5014 HV Tilburg</p></div>
					</div>
					<iframe class="mapsize" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Kruisstraat+50,+5014+HV+Oud-Noord+Tilburg,+Tilburg&amp;aq=0&amp;oq=Kruisstraat+50,+5014+HV&amp;sll=52.469397,5.509644&amp;sspn=4.357349,12.689209&amp;ie=UTF8&amp;hq=&amp;hnear=Kruisstraat+50,+Oud-Noord+Tilburg,+Tilburg,+Noord-Brabant&amp;ll=51.565723,5.092983&amp;spn=0.008683,0.024784&amp;t=m&amp;z=14&amp;iwloc=r1&amp;output=embed"></iframe><br /><small><a href="http://maps.google.nl/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=Kruisstraat+50,+5014+HV+Oud-Noord+Tilburg,+Tilburg&amp;aq=0&amp;oq=Kruisstraat+50,+5014+HV&amp;sll=52.469397,5.509644&amp;sspn=4.357349,12.689209&amp;ie=UTF8&amp;hq=&amp;hnear=Kruisstraat+50,+Oud-Noord+Tilburg,+Tilburg,+Noord-Brabant&amp;ll=51.565723,5.092983&amp;spn=0.008683,0.024784&amp;t=m&amp;z=14&amp;iwloc=r1" style="color:#0000FF;text-align:left">Grotere kaart weergeven</a></small>
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
