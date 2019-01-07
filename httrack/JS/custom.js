
$(document).ready(function (){
    $( "#mobile_menu_button" ).click(function() {
        $( "#mobile_menu" ).animate({
        	display: block},350);
    });

    $('#close_mobile_menu').click(function(){
        $('#mobile_menu').animate({
        	display: none},100);
    });
});


/* Overlay with fade in / fade out effect */

$(document).ready(function (){
    $( "#menu_button" ).click(function() {
        $( ".menu_overlay_left" ).animate({
        	left: '0%'},100).animate({
        	opacity: '0.8'},350);
    });
    $( "#menu_button" ).click(function() {
        $( ".menu_overlay_right" ).animate({
        	right: '0%'},300);
    });
    $('#close_menu').click(function(){
        $('.menu_overlay_left').animate({
        	opacity: '0'},100).delay( 300 ).animate({
        	left: '-25%'}, 200);
    });
    $('#close_menu').click(function(){
        $('.menu_overlay_right').animate({
        	right: '-75%'}, 200);
    });
});


$(document).on('keyup',function(evt) {
    if (evt.keyCode == 77) {
       $( ".menu_overlay_left" ).delay( 300 ).animate({
        	left: '0%'},300);
       $( ".menu_overlay_right" ).animate({
        	right: '0%'},300);
    }
});

$(document).on('keyup',function(evt) {
    if (evt.keyCode == 78) {
       $( ".menu_overlay_left" ).animate({
        	left: '-25%'},300);
       $( ".menu_overlay_right" ).animate({
        	right: '-75%'},300);
    }
});


$(document).ready(function(){
	 		// $('#Keuze1').addClass('optionhighlight');
			$("#Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			
	$("#Keuze1").click(function(){
			$("#Inhoud1").css({ 'display': 'block' });
			$('#Keuze2, #Keuze3, #Keuze4, #Keuze5, #Keuze6, #Keuze7, #Keuze8').removeClass('optionhighlight');
			$('#Keuze1').addClass('optionhighlight');
			$("#Inhoud0, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
	});
	
	$("#Keuze2").click(function(){			
			$("#Inhoud0, #Inhoud1, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud2").css({ 'display': 'block' });
			$("#Keuze1, #Keuze3, #Keuze4, #Keuze5, #Keuze6, #Keuze7, #Keuze8").removeClass('optionhighlight');
			$('#Keuze2').addClass('optionhighlight');			   
	});
	
	$("#Keuze3").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud3").css({ 'display': 'block' });
			$("#Keuze1, #Keuze2, #Keuze4, #Keuze5, #Keuze6, #Keuze7, #Keuze8").removeClass('optionhighlight');
			$('#Keuze3').addClass('optionhighlight');	      
	});
	
	$("#Keuze4").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud4").css({ 'display': 'block' });
			$("#Keuze1, #Keuze2, #Keuze3, #Keuze5, #Keuze6, #Keuze7, #Keuze8").removeClass('optionhighlight');
			$('#Keuze4').addClass('optionhighlight');	      
	});
});	

$(document).ready(function(){
	 		// $('#KeuzeA').addClass('optionhighlight_yellow');
			$("#Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			
	$("#KeuzeA").click(function(){
			$("#Inhoud1").css({ 'display': 'block' });
			$('#KeuzeB, #KeuzeC, #KeuzeD, #KeuzeE, #KeuzeF, #KeuzeG, #KeuzeH').removeClass('optionhighlight_yellow');
			$('#KeuzeA').addClass('optionhighlight_yellow');
			$("#Inhoud0, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
	});
	
	$("#KeuzeB").click(function(){			
			$("#Inhoud0, #Inhoud1, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud2").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeC, #KeuzeD, #KeuzeE, #KeuzeF, #KeuzeG, #KeuzeH").removeClass('optionhighlight_yellow');
			$('#KeuzeB').addClass('optionhighlight_yellow');			   
	});
	
	$("#KeuzeC").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud3").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeB, #KeuzeD, #KeuzeE, #KeuzeF, #KeuzeG, #KeuzeH").removeClass('optionhighlight_yellow');
			$('#KeuzeC').addClass('optionhighlight_yellow');	      
	});
	
	$("#KeuzeD").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud4").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeB, #KeuzeC, #KeuzeE, #KeuzeF, #KeuzeG, #KeuzeH").removeClass('optionhighlight_yellow');
			$('#KeuzeD').addClass('optionhighlight_yellow');	      
	});
	$("#KeuzeE").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud5").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeB, #KeuzeC, #KeuzeD, #KeuzeF, #KeuzeG, #KeuzeH").removeClass('optionhighlight_yellow');
			$('#KeuzeE').addClass('optionhighlight_yellow');	      
	});
	$("#KeuzeF").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud6").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeB, #KeuzeC, #KeuzeD, #KeuzeE, #KeuzeG, #KeuzeH").removeClass('optionhighlight_yellow');
			$('#KeuzeF').addClass('optionhighlight_yellow');	      
	});
	$("#KeuzeG").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud7").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeB, #KeuzeC, #KeuzeD, #KeuzeE, #KeuzeF, #KeuzeH").removeClass('optionhighlight_yellow');
			$('#KeuzeG').addClass('optionhighlight_yellow');	      
	});
	$("#KeuzeH").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7").css({ 'display': 'none' });
			$("#Inhoud8").css({ 'display': 'block' });
			$("#KeuzeA, #KeuzeB, #KeuzeC, #KeuzeD, #KeuzeE, #KeuzeF, #KeuzeG").removeClass('optionhighlight_yellow');
			$('#KeuzeH').addClass('optionhighlight_yellow');	      
	});
});	


 $(document).ready(function(){
	 		// $('#MediaA').addClass('optionhighlight_red');
			$("#Inhoudx, #Inhoudxx").css({ 'display': 'none' });
			
	$("#MediaA").click(function(){
			$("#Inhoudx").css({ 'display': 'block' });
			$('#MediaB').removeClass('optionhighlight_red');
			$('#MediaA').addClass('optionhighlight_red');
			$("#Inhoud0, #Inhoudxx").css({ 'display': 'none' });
	});
	
	$("#MediaB").click(function(){			
			$("#Inhoud0, #Inhoudx").css({ 'display': 'none' });
			$("#Inhoudxx").css({ 'display': 'block' });
			$("#MediaA").removeClass('optionhighlight_red');
			$('#MediaB').addClass('optionhighlight_red');			   
	});

		$("#MediaU").click(function(){
			$("#Inhoudx").css({ 'display': 'block' });
			$('#MediaB').removeClass('optionhighlight_red');
			$('#MediaA').addClass('optionhighlight_red');
			$("#Inhoud0, #Inhoudxx").css({ 'display': 'none' });
	});
	
	$("#MediaI").click(function(){			
			$("#Inhoud0, #Inhoudx").css({ 'display': 'none' });
			$("#Inhoudxx").css({ 'display': 'block' });
			$("#MediaA").removeClass('optionhighlight_red');
			$('#MediaB').addClass('optionhighlight_red');			   
	});
});


$(document).ready(function(){
	$("#choices1").hide();

	$("#choicebutton2").click(function(){
	    $("#choices1").toggle();
	});
});

//  Mobile Fysio menu voor specialisme en klachtbeeld

$(document).ready(function(){
	$("#choices1").hide();

	$("#choicebutton").click(function(){
	    $("#choices1").toggle();
	});
});

$(document).ready(function(){
	 		// $('#KeuzeZ').addClass('optionhighlight_yellow');
			$("#Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			
	$("#KeuzeZ").click(function(){
			$("#Inhoud1").css({ 'display': 'block' });
			$('#KeuzeY, #KeuzeX, #KeuzeW, #KeuzeV, #KeuzeU, #KeuzeT, #KeuzeS').removeClass('optionhighlight_yellow');
			$('#KeuzeZ').addClass('optionhighlight_yellow');
			$("#Inhoud0, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#choices1").toggle();
	});
	
	$("#KeuzeY").click(function(){			
			$("#Inhoud0, #Inhoud1, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud2").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeX, #KeuzeW, #KeuzeV, #KeuzeU, #KeuzeT, #KeuzeS").removeClass('optionhighlight_yellow');
			$('#KeuzeY').addClass('optionhighlight_yellow');			   
			$("#choices1").toggle();
	});
	
	$("#KeuzeX").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud3").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeY, #KeuzeW, #KeuzeV, #KeuzeU, #KeuzeT, #KeuzeS").removeClass('optionhighlight_yellow');
			$('#KeuzeX').addClass('optionhighlight_yellow');	      
			$("#choices1").toggle();
	});
	
	$("#KeuzeW").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud5, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud4").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeY, #KeuzeX, #KeuzeV, #KeuzeU, #KeuzeT, #KeuzeS").removeClass('optionhighlight_yellow');
			$('#KeuzeW').addClass('optionhighlight_yellow');	      
			$("#choices1").toggle();
	});
	$("#KeuzeV").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud6, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud5").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeY, #KeuzeX, #KeuzeW, #KeuzeU, #KeuzeT, #KeuzeS").removeClass('optionhighlight_yellow');
			$('#KeuzeV').addClass('optionhighlight_yellow');	      
			$("#choices1").toggle();
	});
	$("#KeuzeU").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud7, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud6").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeY, #KeuzeX, #KeuzeW, #KeuzeV, #KeuzeT, #KeuzeS").removeClass('optionhighlight_yellow');
			$('#KeuzeU').addClass('optionhighlight_yellow');	      
			$("#choices1").toggle();
	});
	$("#KeuzeT").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud8").css({ 'display': 'none' });
			$("#Inhoud7").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeY, #KeuzeX, #KeuzeW, #KeuzeV, #KeuzeU, #KeuzeS").removeClass('optionhighlight_yellow');
			$('#KeuzeT').addClass('optionhighlight_yellow');	      
			$("#choices1").toggle();
	});
	$("#KeuzeS").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4, #Inhoud5, #Inhoud6, #Inhoud7").css({ 'display': 'none' });
			$("#Inhoud8").css({ 'display': 'block' });
			$("#KeuzeZ, #KeuzeY, #KeuzeX, #KeuzeW, #KeuzeV, #KeuzeU, #KeuzeT").removeClass('optionhighlight_yellow');
			$('#KeuzeS').addClass('optionhighlight_yellow');	      
			$("#choices1").toggle();
	});
});	
	

//  Mobile Psy menu voor specialisme 

$(document).ready(function(){
	$("#choices1").hide();

	$("#choicebutton1").click(function(){
	    $("#choices1").toggle();
	});
});

$(document).ready(function(){
	 		// $('#Keuze9').addClass('optionhighlight');
			$("#Inhoud1, #Inhoud2, #Inhoud3, #Inhoud4").css({ 'display': 'none' });
			
	$("#Keuze9").click(function(){
			$("#Inhoud1").css({ 'display': 'block' });
			$('#Keuze8, #Keuze7, #Keuze6').removeClass('optionhighlight');
			$('#Keuze9').addClass('optionhighlight');
			$("#Inhoud0, #Inhoud2, #Inhoud3, #Inhoud4").css({ 'display': 'none' });
			$("#choices1").toggle();
	});
	
	$("#Keuze8").click(function(){			
			$("#Inhoud0, #Inhoud1, #Inhoud3, #Inhoud4").css({ 'display': 'none' });
			$("#Inhoud2").css({ 'display': 'block' });
			$("#Keuze9, #Keuze7, #Keuze6").removeClass('optionhighlight');
			$('#Keuze8').addClass('optionhighlight');			   
			$("#choices1").toggle();
	});
	
	$("#Keuze7").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud4").css({ 'display': 'none' });
			$("#Inhoud3").css({ 'display': 'block' });
			$("#Keuze9, #Keuze8, #Keuze6").removeClass('optionhighlight');
			$('#Keuze7').addClass('optionhighlight');	      
			$("#choices1").toggle();
	});
	
	$("#Keuze6").click(function(){
			$("#Inhoud0, #Inhoud1, #Inhoud2, #Inhoud3").css({ 'display': 'none' });
			$("#Inhoud4").css({ 'display': 'block' });
			$("#Keuze9, #Keuze8, #Keuze7").removeClass('optionhighlight');
			$('#Keuze6').addClass('optionhighlight');	      
			$("#choices1").toggle();
	});
});	

