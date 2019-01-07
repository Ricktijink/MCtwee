<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Het Team</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="MC2 heeft een hecht en persoonlijk team wat jou kan helpen en of begeleiden om je beter te voelen op mentaal of fysiek vlak." />
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
					<li><a href="#"><strong>Het Team</strong></a></li>
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
	<div id="left_container_team" class="team_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container1">
			<!-- Column 1 -->
			<div class="column1 margin-column-right1 mob_row1">
				<!-- Block 1 - Marco -->
				<div class="person">
					<div class="person_name editable" id="untitled-region-1">Marco van Hooff</div>
					<div class="person_title editable" id="untitled-region-2">Reïntegratie / MDP / GZ-psycholoog, Directeur &amp; Eigenaar</div>
					<div class="person_img bottom_blue editable" id="untitled-region-3"><a href="Marco_van_Hooff.php"><img src="IMG/marco.jpg" alt="Marco van Hooff" width="180" height="180"></a></div>
				</div>
				<!-- Block 7 - Jeanette -->
				<div class="person bottom_red">
					<div class="person_name editable" id="untitled-region-16">Jeanette van der Vorst</div>
					<div class="person_title editable" id="untitled-region-17">Facilitair Medewerker</div>
					<div class="person_img editable" id="untitled-region-18"><a href="Jeanette_vandervorst.php"><img src="IMG/jeanette.jpg" alt="Jeanette van der Vorst" width="180" height="180"></a></div>
				</div>
			</div>
			<!-- Column 2 -->
			<div class="column1 margin-column-right1 mob_row2">
				<!-- Block 2 - Lisette -->
				<div class="person bottom_blue">
					<div class="person_name editable" id="untitled-region-7">Lisette Wardekker</div>
					<div class="person_title editable" id="untitled-region-8">GZ Psycholoog</div>
					<div class="person_img editable" id="untitled-region-9"><a href="Lisette_Wardekker.php"><img src="IMG/lisette.jpg" alt="Lisette Wardekker" width="180" height="180"></a></div>
				</div>
				<!-- Block 5 - Ans -->
				<div class="person bottom_red">
					<div class="person_name editable" id="untitled-region-10">Ans Kuijpers</div>
					<div class="person_title editable" id="untitled-region-11">Office Manager</div>
					<div class="person_img editable" id="untitled-region-12"><a href="Ans_Kuijpers.php"><img src="IMG/ans.jpg" alt="Ans Kuijpers" width="180" height="180"></a></div>
				</div>
			</div>
			<!-- Column 3 -->
			<div class="column1 mob_row3">
				<!-- Block 2 - Kaz -->
				<div class="person bottom_blue">
					<div class="person_name editable" id="untitled-region-7">Kaz Steijvers</div>
					<div class="person_title editable" id="untitled-region-8">Toegepast Psycholoog</div>
					<div class="person_img editable" id="untitled-region-9"><a href="Kaz_Steijvers.php"><img src="IMG/kaz.jpg" alt="Kaz Steijvers" width="180" height="180"></a></div>
				</div>
				<!-- Block 2 - Tim Melis -->
				<div class="person bottom_yellow">
					<div class="person_name editable" id="untitled-region-7">Tim Melis</div>
					<div class="person_title editable" id="untitled-region-8">Oefentherapeut Mensendieck</div>
					<div class="person_img editable" id="untitled-region-9"><a href="Tim_Melis.php"><img src="IMG/vacature2.jpg" alt="Tim Melis" width="180" height="180"></a></div>
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
