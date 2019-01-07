<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Samenwerking</title>
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
			<h1 class="main_title editable">Kwaliteit</h1><br/>
			<span class="main_subtitle editable">Samenwerking</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<h1 class="title_red editable">Samenwerking</h1>
					<!-- <span class="subtitle editable">Subtitel hier</span> -->
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
						<p class="standard_text">
							MC2 gaat voor verbinden en werkt samen met diverse huisartsen en hun POH-GGZ. O.a. de praktijken van huisartsen Spoorlaan (praktijk van dkt. Lovenich) en Huisartsen Perron 1 (praktijkhouder dkt. Groot) en Huisartsen Hoefstraat (dkt. Groot & dkt. Wedemeijer) staan welbekend in de samenwerking met MC2. Ook hun POH-GGZ zijn frequent aanwezig in cliënt-overlegmomenten. De informatie die gedeeld wordt tijdens deze overleggen, wordt voorafgaand besproken met de cliënt die daardoor ook medezeggenschap heeft in wat er gedeeld wordt. Wordt de verwijzer of gesprekspartner schriftelijk overlegd, wordt dit schrijven, voordat deze de deur uitgaat, eerst voorgelegd aan de cliënt die zijn akkoord geeft op het versturen ervan.

							De informatie vanuit MC2 betreft inhoud en proces aanhangig de behandeling, opmerklijkheden die ter intervisie worden aangeboden of datgene wat er als aanvullend gevraagd wordt (bv. verzoeken vanuit UWV en/of Gemeente, n.a.v. bv. een medische keuring of onderzoek naar uitkeringsgerechtigheid). Ook hier wordt de cliënt in gekend.
							<br/><br/>
							Er wordt samengewerkt met IMW, Veilig Thuis en Thebe door gezamenlijk cliënten te zien en gezamenlijk te overleggen (een combi-sessie met maatschappelijk werk).

							Telefonisch of schriftelijk overleg met SGGZ aangaande overdracht van cliënten of een verzoek te overleggen inzake bijvoorbeeld een expertise, cq. een persoonlijkheidsonderzoek.
							<br/><br/>
							Om ook onze kwaliteit buiten de muren van MC2 te laten gelden hebben wij een samenwerking met Personal Trainer en Voedingcoach Frank Leijtens van Prime PT. Bezoek ook zijn website eens voor meer informatie: <a href="http://www.prime-pt.nl/" target="_blank">www.prime-pt.nl.</a>
						</p>
					</div>
				</div>
				<!-- button -->
				<a class="button_red" href="Kwaliteit.php">Terug</a>
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
