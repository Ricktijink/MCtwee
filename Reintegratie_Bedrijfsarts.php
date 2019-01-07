<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Reïntegratie Bedrijfsarts</title>
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
			<h1 class="main_title editable">Bedrijfsarts</h1><br/>
			<span class="main_subtitle editable">Reïntegratie</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<h1 class="title_red editable">De Bedrijfsarts</h1>
					<span class="subtitle editable">“Een belangrijke schakel van de Multi Disciplinaire aanpak”</span>
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
						<p class="standard_text">
							Zowel de psycholoog als de fysiotherapeuten staan klaar voor cliënten met uiteenlopende arbeid gerelateerde klachtbeelden, onder andere op 
							verwijzing van u als bedrijfsarts. De “enkelvoudige” problematiek, zoals rugklachten, nekklachten, angsten wordt monodisciplinair behandeld / 
							begeleid maar... Chronisch, complex en onbegrepen? Voor ons een uitdaging! Ons team is namelijk vooral gespecialiseerd in het verlenen van 
							multidisciplinaire zorg voor de zogenaamde Onbegrepen Lichamelijke Klachten (OLK). Cliënten met psychosomatische, chronische en / of complexe 
							klachtbeelden zijn bij MC<sup>2</sup> aan het juiste adres. Vaak is het zo dat ziekteverzuim een veel voorkomend aspect is bij deze klachtbeelden. Vandaar 
							dat mensen ook voor arbeids-gerelateerde zorg naar ons verwezen kunnen worden. Wanneer u een cliënt treft die een complexer klachtbeeld heeft, 
							zoals bijvoorbeeld burn-out achtige klachten, chronische (pijn / vermoeidheids) klachten, staan wij graag voor u, uw cliënt en ook de werkgever 
							klaar. De samenwerking tussen MC<sup>2</sup> en bedrijfsarts is erg belangrijk voor het herstel in gezondheid en duurzame Reïntegratie. Vandaar dat onderling 
							overleg (zelfs op beroepsethische wijze met de werkgever) hoog in het vaandel staat bij MC<sup>2</sup>. Benieuwd naar wat MC<sup>2</sup> zowel curatief als preventief 
							kan inzetten? Neem dan eens contact met ons op.
						</p><br/>
						<p class="standard_text">
							U zult verrast zijn door de mogelijkheden en onze bereidheid om alles op alles te zetten voor cliënten en betrokkenen.
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
