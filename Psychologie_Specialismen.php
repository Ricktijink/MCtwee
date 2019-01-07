<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - Psychologie Specialismen</title>
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
					<li class="indent"><a href="Psychologie.php"><strong>Psychologie</strong></a></li>
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
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable">Specialismen</h1><br/>
			<span class="main_subtitle editable">Psychologie</span>
			<div class="line"></div>
			<div id="choices" class="mob_hidden">
				<hr>
				<!-- Option 1 -->
				<a id="Keuze1" class="option editable" name="Keuze1">EMDR</a>
	            <hr>
	            <!-- Option 2 -->
	            <a id="Keuze2" class="option editable" name="Keuze2">Arbeid &amp; Gezondheid</a>
	            <hr>
	            <!-- Option 3 -->
	            <a id="Keuze3" class="option editable" name="Keuze3">Experiëntiële Therapie</a>
	            <hr>
	            <!-- Option 4 -->
	            <a id="Keuze4" class="option editable" name="Keuze4">OLK</a>
	            <hr>
							<!-- Option 5 -->
	            <a id="Keuze5" class="option editable" name="Keuze5">Werkwijze</a>
	            <hr>
            </div>
		</div>
	</div>
	<div id="choicebutton1" class="standard_text">Klik hier om een specialisme te selecteren</div>
	<div id="choices1">
		<hr>
		<!-- Option 1 -->
		<a id="Keuze9" class="option editable" name="Keuze9">EMDR</a>
        <hr>
        <!-- Option 2 -->
        <a id="Keuze8" class="option editable" name="Keuze8">Arbeid &amp; Gezondheid</a>
        <hr>
        <!-- Option 3 -->
        <a id="Keuze7" class="option editable" name="Keuze7">Experiëntiële Therapie</a>
        <hr>
        <!-- Option 4 -->
        <a id="Keuze6" class="option editable" name="Keuze6">OLK</a>
        <hr>
				<!-- Option 5 -->
        <!-- <a id="Keuze5" class="option editable" name="Keuze5">Werkwijze</a> -->
        <!-- <hr> -->
    </div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<!-- Content 0 -->
			<div class="block_big" id="Inhoud0">
				<div class="block_title">
					<h1 class="title_blue editable">Kies een Specialisme</h1>
					<!-- <span class="subtitle editable">Bij psychosomatiek is vaak sprake van lichamelijke klachten, met een zeer sterke link naar “het denken”.</span> -->
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
	    		    	<div id="fysafspraak1">
	                		<p class="standard_text">
	                			Als U meer informatie wilt hebben over de specialismen van MC<sup>2</sup> op het gebied van Pyschologie, dan kunt u een keuze maken uit het specialisme menu.
	                		</p>
	                	</div>
	                </div>
            	</div>
            	<!-- button -->
				<a class="button_blue" href="Psychologie.php">Terug</a>
        	</div>
			<!-- Content 1 -->
			<div class="block_big" id="Inhoud1">
				<div class="block_title">
					<h1 class="title_blue editable">Wat is EMDR en wanneer is het voor u geschikt?</h1>
					<!-- <span class="subtitle editable">EMDR staat voor Eye Movement Desensitization and Reprocessing</span> -->
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
	    		    	<div id="fysafspraak1">
	                		<p class="standard_text">
								<strong>Wat is EMDR</strong><br/>
								Eye Movement Desensitization and Reprocessing, afgekort tot EMDR, is een therapie voor mensen die last blijven houden van de gevolgen van traumatische of nare ervaringen. Dit kan zijn een schokkende ervaring, zoals een verkeersongeval of een geweldsmisdrijf. Maar ook voor andere ervaringen die veel invloed hebben gehad op de ontwikkeling van iemands leven zoals pesterijen of moeilijke gebeurtenissen in de jeugd, die in het hier-en-nu nog steeds invloed hebben kan de methode gebruikt worden.
								<br/><br/><strong>Wat is het doel?</strong><br/>
								De belangrijkste insteek van de EMDR is de cliënt te helpen de herinneringen aan deze gebeurtenissen te verwerken, met de bedoeling daarmee de klachten te verminderen of te laten verdwijnen. Met verwerken wordt niet bedoeld dat de herinnering verdwijnt, het betekent dat de lading van de herinnering verminderd of de gebeurtenis een andere betekenis krijgt.
								<br/><br/><strong>Wanneer is EMDR bij MC<sup>2</sup> niet geschikt?</strong><br/>
								MC<sup>2</sup> biedt EMDR binnen de generalistische basis GGZ. Dit betekent dat het veelal om korte trajecten gaat. In een intakegesprek kunnen we beoordelen of een kort EMDR traject voldoende is, of dat een verwijzing naar de specialistische GGZ (bijvoorbeeld bij complexe, langdurige of veelvuldige trauma’s) meer passend is.
								<br/><br/><strong>Ervaringen van therapeut en cliënt</strong><br/>
								Lisette (psycholoog MC<sup>2</sup>):<br/>‘Toen ik begon met het geven van EMDR was ik sceptisch: kan dit echt zorgen voor een verlichting van klachten? Wat een raar gedoe dat bewegen met mijn vingers, haalt dat echt iets uit? Zijn mensen wel in staat om zo levendig terug te denken aan zo’n nare ervaring? Omdat mijn opleider en collega’s die reeds EMDR gaven heel enthousiast waren, besloot ik dit met de opleiding in de praktijk te brengen. Mijn praktijkervaring? EMDR werkt. Bij de een sneller dan bij de ander, maar ik durf te zeggen dat EMDR tot nu toe bijna altijd een (positief) effect teweeg gebracht heeft. Mijn ervaring is dat EMDR ook goed kort of zelfs eenmalig ingezet kan worden, om een vastgelopen behandeling weer in beweging te zetten. Kortom, ik ben om en zie EMDR als een mooie aanvulling op het therapieaanbod van MC<sup>2</sup>’.
								<br/><br/>Marlies (cliënte MC<sup>2</sup>):<br/> ‘Ik was in eerste instantie sceptisch t.o.v. EMDR. Omdat ik zo vast zat in het verdriet bij het overlijden van mijn man, heb ik hulp gevraagd bij MC<sup>2</sup>. Het ziekteproces van mijn man was erg intensief en ingrijpend met nare herinneringen / beelden, die ik moeilijk kon verwerken. Door de behandeling, waarvan ik eerst “wilde zien en dan geloven” hebben de beelden, die voor mij emotioneel heel zwaar waren, een andere lading gekregen. Vraag me niet hoe het komt, maar het hielp en helpt mij nog steeds. Het is goed om te ervaren dat EMDR een positieve bijdrage heeft gegeven aan mijn verwerkingsproces’.
	                		</p>
	                	</div>
	                </div>
            	</div>
            	<!-- button -->
				<a class="button_blue" href="Psychologie.php">Terug</a>
        	</div>
        	<!-- Content 2 -->
        	<div class="block_big" id="Inhoud2">
				<div class="block_title">
					<h1 class="title_blue editable">Arbeid &amp; Gezondheid</h1>
					<!-- <span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
          		<div class="big_content">
          			<div class="big_content_text editable">
	          	    	<div id="fysafspraak2">
	                    	<p class="standard_text">
	                    		Eén van de specialismen die MC<sup>2</sup> biedt ligt op het gebied van werk en gezondheid, ook wel te omschrijven als specialistische arbeidsgerelateerde zorg. Met name op het gebied van verzuim en reïntegratie wordt de systeem-therapeutische en multidisciplinaire vorm van handelen ingezet.
													Niet alleen gaan wij bezig met de gezondheid van de werknemer, daarnaast gaan we (in overleg met de werknemer, onze cliënt) samenwerken met de werkgever. We maken contact en houden het contact met alle direct betrokkenen om te kunnen komen tot duurzame veranderingen. Veranderingen die blijven.
													We werken op een systeemgerichte manier (je werkt immers niet in een cocon) en met een multidisciplinaire aanpak (we gebruiken die vormen van therapie en training die op dat moment het beste passen bij je, op fysiek of mentaal vlak).
													Misschien dat men daarom over het algemeen zo tevreden is over de behandeling, die verder reikt dan de training alleen.
	                    	</p>
	                	</div>
	                </div>
            	</div>
            	<!-- button -->
				<a class="button_blue" href="Psychologie.php">Terug</a>
        	</div>
        	<!-- Content 3 -->
        	<div class="block_big" id="Inhoud3">
				<div class="block_title">
					<h1 class="title_blue editable">Experiëntiële Therapie</h1>
					<!-- <span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
         		<div class="big_content">
         			<div class="big_content_text editable">
	                	<div id="fysafspraak3">
	                    	<p class="standard_text">
	                    		Experiëntiële therapie is een vorm van therapie die eigenlijk vrij praktisch ingezet wordt.
								De term “experientieel” is afgeleid van het Engelse “to experience” (ervaren), waarin (eigen) ervaringen centraal staan. De therapie is daarom sterk cliëntgericht,  gericht op “doen” en gaat uit van actuele vraagstukken waar je als cliënt iets mee doet op dit moment.
								De therapie gaat uit van dat wat de cliënt heeft meegemaakt, graag wil meemaken of wil leren en daardoor nieuwe handvatten gaat ontwikkelen, met al die eigenschappen die de cliënt rijk is in nieuwe situaties. De vorm van begeleiden die binnen MC<sup>2</sup> gehanteerd wordt is daarom erg ad-hoc en vrij actueel van aard. We gaan uit van het hier en nu en werken daarbij niet met protocollen. Een vraagstuk dient zich nú aan, waarbij wij proberen te werken met processen die zich nu afspelen in en rondom jou en waar jij regie op kunt pakken.
	                    	</p>
	                	</div>
	                </div>
            	</div>
            	<!-- button -->
				<a class="button_blue" href="Psychologie.php">Terug</a>
        	</div>
      <!-- Content 4 -->
			<div class="block_big" id="Inhoud4">
				<div class="block_title">
					<h1 class="title_blue editable">OLK</h1>
					<!-- <span class="subtitle editable">Subtitle goes here.</span> -->
				</div>
         		<div class="big_content">
         			<div class="big_content_text editable">
      	  	    	<div id="fysafspraak4">
                    	<p class="standard_text">
                    		De term geeft het al aan: je hebt last van fysieke klachten waarbij de oorzaak niet of nauwelijks  terug te vinden is in je lichaam. Je bent vermoeid, maar weet niet waardoor. Je ervaart al tijden pijnklachten en kunt, ondanks de inzet van de medisch specialisten, niet duiden waar die pijn vandaan komt. Met de uitspraak “het zal wel tussen je oren zitten”, ben je al herhaaldelijk geconfronteerd. Maar je weet dat je niet gek bent, maar wat is er dan aan de hand? Het team van MC<sup>2</sup> begeleidt en behandelt dit soort vage klachten middels een combinatie van psychologie en fysiotherapie in een eenvoudige maar werkbare multidisciplinaire vorm.
												Deze manier van begeleiden krijg je inzichten in eigen denken, doen en voelen, want kennelijk doe jij iets waardoor klachten ontstaan. Naast inzichten ontwikkel je tevens handvatten om je oude manier van handelen te “upgraden” naar een voor jou gezondere vorm. We gaan uit van de gedachte dat jij eigenschappen hebt die je niet mag verliezen, ze hebben je gebracht waar je nu staat en hoe je handelt. Maar het idee is om je nieuwe tools te laten ontwikkelen, waardoor je (ook toekomstige) vraagstukken anders gaat bezien en aanpakken. Dat zit “tussen je oren”: een soort supercomputer (je denken) waar oude programma’s werkzaam zijn, die je gaat leren upgraden op een eigen, gezonde, wijze.
                    	</p>
                	</div>
                </div>
          	</div>
          	<!-- button -->
						<a class="button_blue" href="Psychologie.php">Terug</a>
        	</div>
					<!-- Content 5 -->
					<div class="block_big" id="Inhoud5">
						<div class="block_title">
							<h1 class="title_blue editable">Werkwijze</h1>
							<!-- <span class="subtitle editable">Subtitle goes here.</span> -->
						</div>
		         		<div class="big_content">
		         			<div class="big_content_text editable">
		      	  	    	<div id="fysafspraak5">
		                    	<p class="standard_text">
														De werkwijze die met name gehanteerd wordt is met name cliëntgericht en vraag-gestuurd. De cliënt staat bij ons centraal waardoor bijvoorbeeld een ad-hoc-wijze van werken wordt toegepast: actuele vraagstukken worden middels ervaringsgerichte interventies aangepakt (dit noemen we experiëntiële therapie, vanuit het Engels “to experience”: door ervaring leren). Juist door te doen en daarin passende begeleiding in te zetten, blijkt dat mensen nieuwe ervaringen gebruiken om zich makkelijker te kunnen ontwikkelen (bv. middels graded exposure, stapsgewijs mensen laten wennen aan nieuwe ervaringen).
														<br/><br/>
														Middels psycho-educatie trachten we inzichten te verruimen (inzicht-vergrotende therapie): kennis maakt meer duidelijk, waardoor mogelijk meer ruimte gecreëerd wordt ter herkenning, bewustwording of acceptatie van zaken.
														We gebruiken CGT, Cognitieve Gedrags Therapie, om negatief denken en/of ongezond reageren te kenteren, middels de 4G-methode, de Brillenmethode van de Moor, het ABC-model, de RET-methode of NLP (al deze technieken zijn te vinden op het internet).
														Lisette gebruikt de EMDR-techniek voor (met name) trauma-behandeling.
														Marco is meer specialist op systeemgericht werken (bv. in arbeidsgerelateerde problematiek).
														<br/><br/>
														Ter ondersteuning van de behandeling maken wij gebruik van zogenaamde E-health-toepassingen. Dat zijn apps of internetgebruik om trajecten van extra informatie of oefenmomenten te voorzien. Daarbij kun je denken aan mindfulness-apps (“Mindfulness” of “Yoga & meditatie”), apps ter ontspanning (“Ontspanning” “Buteyko Breathing”, “Breethe meditation” of “Ademhaling”) of apps voor bv. "hardlopen" (bv. Evy - Start 2 Run, een 'running'-app). Om dit zo gedegen mogelijk in te zetten, maken onze therapeuten gebruik van de tijd om deze e-health-toepassingen onze cliënten zo passend mogelijk aan te bieden. Daarbij blijven we uitgaan van individuele, op-maat-gemaakte, trajecten, waarbij we deze E-health zo passend en gezond mogelijk trachten te implementeren in de zorgtrajecten.
														<br/><br/>
														Daarnaast wordt er, indien daarom verzocht wordt en/of geïndiceerd, face-time of skype ingezet om face-2-face-contact met de cliënt te kunnen verkrijgen (men kan denken aan het feit dat cliënten soms op vakantie behoefte hebben om even te sparren met hun therapeut).
		                    	</p>
		                	</div>
		                </div>
		          	</div>
		          	<!-- button -->
								<a class="button_blue" href="Psychologie.php">Terug</a>
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
