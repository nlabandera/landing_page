jQuery(document).ready(function($) {
	
	$('.card').hover(function() {
		$(this).children('.info').fadeIn(200);
	}, function() {
		$(this).children('.info').fadeOut(200);
	});
});