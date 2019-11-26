jQuery(document).ready(function($) {

	//Efecto para las tarjetas de recorridos
	
	$('.card').hover(function() {
		$(this).children('.info').fadeIn(200);
	}, function() {
		$(this).children('.info').fadeOut(200);
	});



});