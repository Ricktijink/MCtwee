<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Fysiotherapie Specialismen</title>
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
					<li class="indent"><a href="Fysiotherapie.php"><strong>Fysiotherapie</strong></a></li>
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
			<h1 class="main_title editable" id="untitled-region-1">Specialismen</h1><br/>
			<span class="main_subtitle editable" id="untitled-region-2">Fysiotherapie</span>
			<div class="line_yellow"></div>
			<div id="choices" class="mob_hidden">
				<hr>
				<!-- Option 1 -->
				<a id="KeuzeA" class="option_yellow editable" name="KeuzeA">Psychosomatische werkwijze</a>
	            <hr>
	            <!-- Option 2 -->
	            <a id="KeuzeB" class="option_yellow editable" name="KeuzeB">Chroniciteit</a>
	            <hr>
	            <!-- Option 3 -->
	            <a id="KeuzeC" class="option_yellow editable" name="KeuzeC">OLK</a>
	            <hr>
            </div>
		</div>
	</div>
	<div id="choicebutton" class="standard_text">Klik hier om een specialisme te selecteren</div>
	<div id="choices1">
		<hr>
		<!-- Option 1 -->
		<a id="KeuzeZ" class="option_yellow editable" name="KeuzeZ">Psychosomatische werkwijze</a>
        <hr>
        <!-- Option 2 -->
        <a id="KeuzeY" class="option_yellow editable" name="KeuzeY">Chroniciteit</a>
        <hr>
        <!-- Option 3 -->
        <a id="KeuzeX" class="option_yellow editable" name="KeuzeX">OLK</a>
        <hr>
    </div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<!-- Content 0 -->
			<div class="block_big" id="Inhoud0">
				<div class="block_title">
					<h1 class="title_yellow editable" id="untitled-region-3">Kies een Specialisme</h1>
					<!-- <span class="subtitle editable">Bij psychosomatiek is vaak sprake van lichamelijke klachten, met een zeer sterke link naar “het denken”.</span> -->
				</div>
				<div class="big_content">
					<div class="big_content_text editable" id="untitled-region-4">
	    		    	<div id="fysafspraak1">
	                		<p class="standard_text">
	                			Als U meer informatie wilt hebben over de specialismen van MC<sup>2</sup> op het gebied van Fysiotherapie, dan kunt u een keuze maken uit het specialisme menu.
	                		</p>
	                	</div>	       
	                </div>                    
            	</div>
            	<!-- button -->
				<a class="button_yellow" href="Fysiotherapie.php">Terug</a>
        	</div>
			<!-- Content 1 -->
			<div class="block_big" id="Inhoud1">
				<div class="block_title">
					<h1 class="title_yellow editable" id="untitled-region-5">Psychosomatische werkwijze</h1>
					<!-- <span class="subtitle editable">Bij psychosomatiek is vaak sprake van lichamelijke klachten, met een zeer sterke link naar “het denken”.</span> -->
				</div>
				<div class="big_content">
					<div class="big_content_text editable" id="untitled-region-6">
	    		    	<div id="fysafspraak1">
	                		<p class="standard_text">
	                			Je hoort zo vaak: “het zal wel tussen de oren zitten”. Dat wil níet zeggen dat je gek bent, maar dat je onbewust bijvoorbeeld een bepaalde 
	                			vorm van focus hebt gecreëerd op jouw lichamelijke klacht. Je kunt bijvoorbeeld maanden achtereen klachten hebben aan de rug. Je beweegt 
	                			daardoor anders en beweegt minder graag. Je gaat je leefstijl er misschien op aanpassen, kortom: je gaat je anders gedragen om de pijn te 
	                			omzeilen. “Gedrag” is dan ook een psychologische component. Of andersom: er zijn te weinig dagen in het jaar, te weinig uren in de dag, voor 
	                			alles wat jij wil / kan / móet doen…Hierdoor kun je vermoeid raken, of andere lichamelijke klachten krijgen, meestal uiten zich deze “op de 
	                			zwakke plek”.
	                			<br/><br/> 
	                			Dat er zaken zijn die spelen en zo de klachten maken of onderhouden, zoals bijvoorbeeld stress op de werkplek, pestgedrag, een spanningsvolle 
	                			relatie, moeite hebben met je kinderen, geen “nee” kunnen zeggen…. Al deze zaken spelen door op denk- en doe-niveau, waardoor klachten kunnen 
	                			ontstaan. Men spreekt niet voor niets over een “juk op je schouders voelen….”. Maar zie je dan een juk te liggen op die pijnlijke schouders?
	                			<br/><br/>
	                			Hoe dan ook…In onze optiek kun je de psyche en het fysieke bij psychosomatische klachten niet los van elkaar zien. Dat is dan ook de reden 
	                			dat bij MC<sup>2</sup> zowel de psycholoog als de fysiotherapeut een belangrijk onderdeel kunnen vormen van de behandeling. 
	                			<br/><br/>
	                			Wanneer je bij ons komt voor begeleiding, ben je meer dan “de persoon met de knieklachten”. We kijken naar het totale systeem: wie ben je, 
	                			wie en wat heb je dichtbij je, wat voor dingen in het algemeen dagelijks leven bevallen je goed, welke zaken heb je altijd al willen 
	                			aanpassen? Want als er toch iets is dat die knie overbelast, dan moet dát aangepakt worden!  Ook wanneer dat bijvoorbeeld jouw “oude” 
	                			manier van omgaan met alledaagse dingen is.
	                			<br/><br/>
	                			Klachtbeelden als chronische vermoeidheid of fybromyalgie, maar ook burnout-achtige processen vallen, ons inziens, in die categorie psychosomatiek.
								We helpen je om actief je eigen herstelproces vorm te geven: jij krijgt de regie over de klachten en de veroorzakers van je klachten, 
								zodat je je “eigen therapeut” kunt worden.
	                		</p>
	                	</div>	       
	                </div>                    
            	</div>
            	<!-- button -->
				<a class="button_yellow" href="Fysiotherapie.php">Terug</a>
        	</div>
        	<!-- Content 2 -->
        	<div class="block_big" id="Inhoud2">
				<div class="block_title">
					<h1 class="title_yellow editable" id="untitled-region-7">Chroniciteit</h1>
					<!-- <span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
          		<div class="big_content">
          			<div class="big_content_text editable" id="untitled-region-8">
	          	    	<div id="fysafspraak2">
	                    	<p class="standard_text">
	                    		Chronisch betekent: “langzaam”, “langdurig” en “voortdurend”. Dit, in tegenstelling tot acuut. Chronisch geeft een indicatie van hoe lang de 
	                    		klachten tot nu toe duren. Vaak wordt gesproken over een klacht langer dan 3 maanden die maar niet weg lijkt te gaan. Wij zien vaak mensen die 
	                    		minimaal al 3 maanden klachten hebben maar ook mensen die jarenlang klachten hebben. Met onze werkwijze kijken we net iets verder dan alleen de 
	                    		fysieke klacht, denk bijvoorbeeld aan beweeggedrag: hoe ga je om met je klacht. Zoals je omgaat met je klachten, zo ga je om met je herstel. We 
	                    		helpen je graag met puzzelen hoe je de chroniciteit van de klachten zou kunnen doorbreken en hoe herstel mogelijk zal zijn.
	                    		<br/><br/> 
	                    		Let op! Er is een verschil tussen chroniciteit en chronische aandoeningen, zoals COPD of Claudicatio Intermittens (etalagebenen). Wij zijn 
	                    		gespecialiseerd in chroniciteit en helpen je graag om jouw klachten te verminderen.
	                    	</p>
	                	</div>
	                </div>
            	</div>
            	<!-- button -->
				<a class="button_yellow" href="Fysiotherapie.php">Terug</a>
        	</div>
        	<!-- Content 3 -->
        	<div class="block_big" id="Inhoud3">
				<div class="block_title">
					<h1 class="title_yellow editable" id="untitled-region-9">OLK</h1>
					<!-- <span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
         		<div class="big_content">
         			<div class="big_content_text editable" id="untitled-region-10">
	                	<div id="fysafspraak3">
	                    	<p class="standard_text">
	                    		Onbegrepen Lichamelijke Klachten (O.L.K) of Somatisch Onvoldoende verklaarde Lichamelijke Klachten (S.O.L.K.) zijn beschrijvingen van klachten 
	                    		waarbij de oorzaak moeilijk aan te wijzen is. Je bent bijvoorbeeld altijd moe, zonder dat uit de onderzoeken een reden is gekomen. Of pijn in 
	                    		rug, nek of maag, die na vele vormen van hulp / behandeling toch blijft aanhouden of terugkomen. Deze klachten worden als “onbegrepen” 
	                    		geduid: het is er wel, maar hoe het is ontstaan kan met moeite verklaard worden. Of, de verklaring die men zoekt/heeft, past niet bij degene 
	                    		die de last ervaart. Soms moet er aandacht worden besteed aan een verandering in denk- of leefstijl.
							</p><br/> 	
							<p class="standard_text">
								Het feit dat je bij de fysiotherapeut van MC<sup>2</sup> komt wil zeggen dat er niet alleen fysiek naar de klacht gekeken wordt, maar ook naar de wijze 
								waarop je ermee om gaat: beweeggedrag. Juist het proces dat er lange tijd geen duidelijke diagnose gesteld wordt kan extra klachten opleveren. 
								Heel vaak horen we mensen aangeven: “Wísten de artsen maar wat ik had, want het begint er voor de mensen om me heen op te lijken dat ik het 
								allemaal verzin…”
	                    	</p>
	                	</div> 
	                </div>                           
            	</div>
            	<!-- button -->
				<a class="button_yellow" href="Fysiotherapie.php">Terug</a>
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
