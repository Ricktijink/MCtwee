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
			<h1 class="main_title editable" id="untitled-region-1">Fysiotherapie</h1><br/>
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
						<h1 class="title_yellow editable" id="untitled-region-3">Klachtbeeld</h1>
						<span class="subtitle editable" id="untitled-region-4">Voor elke klacht is een oplossing te vinden!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="fysklachtbeeld"><p class="standard_text">Er zijn een groot aantal klachten / klachtbeelden / symptomen die te maken hebben met de psyche. Sterker nog: wij van MC<sup>2</sup> zijn van mening dat alles rondom gezondheid te maken heeft met de psyche. Of het nu gaat om dat wat je weet over je eigen klachtbeeld, hoe je erover denkt, wat je ermee doet, maar ook hoe de klachten zich uiten bij je, heeft te maken met psychologie.<br><br> Wanneer je bijvoorbeeld last hebt van je knie is het weliswaar niet zo dat de last blijft bestaan wanneer je deze niet op “denk”-niveau aanpakt, maar het inzetten van je denken heeft wel invloed...</p></div>
						<div class="block_button">
							<hr/>
							<!-- button -->
							<a class="button_yellow" href="Fysiotherapie_Klachtbeeld.php">Lees Meer</a>
						</div>
						<div class="break"></div>
						<!-- <div class="block_img editable" id="untitled-region-5"><p><img src="IMG/image3.jpg"></p></div> -->
					</div>
					
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column margin-column-right">
				<!-- Block 2 - Specialismen -->
				<div class="block">
					<div class="block_title">
						<h1 class="title_yellow editable" id="untitled-region-6">Specialismen</h1>
						<span class="subtitle editable" id="untitled-region-7">Wij zijn veelvoudig gespecialiseerd bij MC<sup>2</sup>.</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="fysspecialismen"><p class="standard_text">De Fysiotherapie van MC<sup>2</sup> onderscheid zich op een aantal punten ten opzichte van andere praktijken. Onze benadering is vaak gericht op beweeggedrag, wat op meerdere aspecten van onze specialismen is toe te passen. Wil je meer lezen over onze specialismen, klik dan op Lees Meer hieronder!</p></div>
						<div class="block_button">
							<hr/>
							<!-- button -->
							<a class="button_yellow" href="Fysiotherapie_Specialismen.php">Lees Meer</a>
						</div>
						<div class="break"></div>
					</div>
				</div>
				<!-- Block 4 - Zorgkaart Nederland -->
				<div class="block margin-column-top">
					<div class="block_title">
						<h1 class="title_yellow editable" id="untitled-region-8">Zorgkaart Nederland</h1>
						<span class="subtitle editable" id="untitled-region-9">Laat uw waardering achter!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text1 editable" id="fyszorgkaart"><div id="zkn-score-widget-3045442" class="zkn-widget-type-2">
<div id="zkn-score-widget-3045442" class="zkn-widget-type-2">
<div class="zkn-widget-body">
<div class="zkn-header"><a class="zkn_logo_left" title="ZorgkaartNederland" href="http://www.zorgkaartnederland.nl/" target="_blank" rel="noopener noreferrer"><img src="//www.zorgkaartnederland.nl/bundles/zkncontent/images/elements/logo_zkn.png?v37" alt="Zoek, vind en waardeer zorgaanbieders op ZorgkaartNederland.nl"></a><a class="zkn_logo_right" title="Patiëntenfederatie Nederland" href="http://www.patientenfederatie.nl" target="_blank" rel="noopener noreferrer"><img src="//www.zorgkaartnederland.nl/bundles/zkncontent/images/elements/logo_npcf_widget.png?v37" alt=""></a>
<div class="clearfix">&nbsp;</div>
</div>
<div class="widget_content">
<div class="fractional_number fractional_number_circled pull-left">9<sup>.3</sup></div>
<div class="text_holder">
<p><a title="MC2 Reïntegratie Psychologie Fysiotherapie, Fysiotherapeuten" href="https://www.zorgkaartnederland.nl/zorginstelling/fysiotherapiepraktijk-mc2-reintegratie-psychologie-fysiotherapie-fysiotherapeuten-tilburg-3045442" target="_blank" rel="noopener noreferrer">MC2 Reïntegratie Psychologie Fysiotherapie, Fysiotherapeuten</a> is 13 keer gewaardeerd op ZorgkaartNederland en heeft een gemiddeld cijfer van 9.3.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<p class="text-center"><a title="Bekijk alle waarderingen" href="https://www.zorgkaartnederland.nl/zorginstelling/fysiotherapiepraktijk-mc2-reintegratie-psychologie-fysiotherapie-fysiotherapeuten-tilburg-3045442/waardering" target="_blank" rel="noopener noreferrer">Bekijk alle waarderingen</a> of <a title="plaats een waardering" href="https://www.zorgkaartnederland.nl/zorginstelling/fysiotherapiepraktijk-mc2-reintegratie-psychologie-fysiotherapie-fysiotherapeuten-tilburg-3045442/waardeer" target="_blank" rel="noopener noreferrer">plaats een waardering</a></p>
</div>
</div>
</div></div>
					</div>
				</div>
			</div>
			<!-- Column 3 -->
			<div class="column">
				<!-- Block 3 - Inloopspreekuur (ISU) -->
				<div class="block">
					<div class="block_title">
						<h1 class="title_yellow editable" id="untitled-region-10">Inloopspreekuur (ISU)</h1>
						<span class="subtitle editable" id="untitled-region-11">Wij hebben een vrijblijvend spreekuur. Kom langs!</span>
					</div>
					<div class="block_contentwrapper">
						<div class="block_text editable" id="fysinloop"><p class="standard_text">Het inloopspreekuur is bedoeld voor iedereen die vragen heeft over lichamelijke en/of mentale klachten en hiervoor (actief) op zoek is naar een gepaste oplossing. Of dit nu bijvoorbeeld fysieke klachten, sombere gevoelens of problemen op het werk betreft, MC<sup>2</sup> kan je middels dit inloopspreekuur snel en adequaat ondersteunen. Onze psycholoog en fysiotherapeut kunnen individueel of juist samen de klachten analyseren en na een screening een passend en gericht advies geven. Als blijkt dat wij iets voor je kunnen betekenen, kan er indien gewenst direct een afspraak gemaakt worden voor een vervolg. Dit zal, met jouw toestemming, gebeuren met een terugkoppeling naar en/of in samenspraak met de huisarts. Op die manier blijft de hulpvraag, het advies en de begeleiding transparant en kunnen we je de beste zorg bieden. Het inloopspreekuur is een gratis en geheel vrijblijvende service van MC<sup>2</sup>. Het inloopspreekuur is iedere woensdag van 17.00 tot 18.00 en iedere vrijdag van 9.00 tot 10.00 in onze praktijk.</p></div>
						<div class="break"></div>
					</div>
				</div>
				<!-- <div class="block_img editable" id="untitled-region-12"><p><img src="IMG/image4.jpg" alt="image2"></p></div> -->
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
