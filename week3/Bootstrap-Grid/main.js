$(document).ready(function(){

	function hero_text_fadeIn() {
		$('.hero-text h1').fadeIn(3000);

		function second_fade() {
			$('.hero-text h4').fadeIn(2000);
			$('.hero-text a.glyphicon-menu-down.text-center').fadeIn(2000);
		}

		setTimeout(second_fade, 2000);
	}

	hero_text_fadeIn();
});