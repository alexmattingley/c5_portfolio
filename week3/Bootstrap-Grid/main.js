$(document).ready(function(){


	$('.hero-text h1').fadeIn(3000);

	function second_fade() {
		$('.hero-text h4').fadeIn(3000);
		$('.hero-text a.glyphicon-menu-down.text-center').fadeIn(3000);
	}

	setTimeout(second_fade, 2000);
});