<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Media</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Wil je ons alvast een beetje leren kennen? Hier staan foto’s en een filmpje van de praktijk!" />
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
					<li><a href="#"><strong>Media</strong></a></li>
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
	<div id="left_container_media" class="red_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>  
		</div>
		<div id="intro_block">
			<h1 class="main_title editable">MEDIA</h1><br/>
			<span class="main_subtitle editable">"Bekijk onze media om een eerste impressie van onze praktijk, en de leden van het team te krijgen"</span>
			<div class="line"></div>
			<div id="choices" class="mob_hidden">
				<hr>
				<!-- Option 1 -->
				<a id="MediaA" class="option_red editable" name="MediaA">Foto's</a>
	            <hr>
	            <!-- Option 2 -->
	            <a id="MediaB" class="option_red editable" name="MediaB">Video's</a>
	            <hr>
            </div>
		</div>
	</div>
	<div id="choicebutton2" class="standard_text">Klik hier om een type media te selecteren</div>
	<div id="choices1">
		<hr>
		<!-- Option 1 -->
		<a id="MediaU" class="option_red editable" name="MediamobA">Foto's</a>
        <hr>
        <!-- Option 2 -->
        <a id="MediaI" class="option_red editable" name="MediamobB">Video's</a>
        <hr>
    </div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<div id="content_container">
			<!-- Content 0 -->
			<div class="block_big" id="Inhoud0">
				<div class="block_title">
					<h1 class="title_red editable">Maak uw keuze</h1>
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
	    		    	<div id="fysafspraak1">
	                		<p class="standard_text">
	                			Maak een selectie uit het menu om een keuze te maken tussen afbeeldingen van de praktijk of onze intro video!
	                		</p>
	                	</div>	       
	                </div>                    
            	</div>
        	</div>
			<!-- Content 1 -->
			<div class="block_big" id="Inhoudx">
				<div class="big_content2">
					<div class="big_content_text1">
	    		    	<div class="gallery">
							<div class="preview">
								<img name="preview" src="IMG/media1.jpg" alt="het gebouw"/>
							</div>
							<br />
							<div class="thumbnails">
								<img onmouseover="preview.src=media1.src" name="media1" src="IMG/media1.jpg" alt="Het gebouw"/>
								<img onmouseover="preview.src=media2.src" name="media2" src="IMG/media2.jpg" alt="De wachtkamer"/>
								<img onmouseover="preview.src=media3.src" name="media3" src="IMG/media3.jpg" alt="Zaal"/>
								<img onmouseover="preview.src=media4.src" name="media4" src="IMG/media4.jpg" alt="Zaal"/>
								<img onmouseover="preview.src=media5.src" name="media5" src="IMG/media5.jpg" alt="Spreekkamer"/>
								<img onmouseover="preview.src=media6.src" name="media6" src="IMG/media6.jpg" alt="Spreekkamer"/>
								<img onmouseover="preview.src=media7.src" name="media7" src="IMG/media7.jpg" alt="Spreekkamer"/>
								<img onmouseover="preview.src=media8.src" name="media8" src="IMG/media8.jpg" alt="Spreekkamer"/>
							</div>
						</div>                      
	            	</div>
            	</div>
            	<a class="button_red gallerybutton" href="index.php">Terug</a>
       		</div>
        	<!-- Content 2 -->
        	<div class="block_big" id="Inhoudxx">
			<!-- 	<div class="block_title">
					<h1 class="title_red editable">Video youtube</h1>
					<span class="subtitle editable">Intro filmpje van het team</span>
				</div> -->
          		<div class="big_content2">
          			<div class="big_content_text">
          	    		<iframe class="videosize" src="https://www.youtube.com/embed/Qoph3_FDpL8" frameborder="0" allowfullscreen></iframe>
          	    	</div>
            	</div>
            	<a class="button_red gallerybutton" href="index.php">Terug</a>
        	</div>
		</div>
		<!-- Footer -->
		<div class="footer">
			<?php include 'inc_footer.php'; ?>
		</div>
	</div>
</body>
</html>
