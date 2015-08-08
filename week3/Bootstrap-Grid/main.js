// Basic Function for the hero banner h1 fadeIn, called in the document ready
function hero_text_fadeIn() {
	$('.hero-text h1').fadeIn(3000);	
}

//basic function for the rest of the text and the down arrow fadeIn, called in the document ready
function hero_second_fade() {
	$('.hero-text h4').fadeIn(2000);
	$('.hero-text a.glyphicon-menu-down.text-center').fadeIn(2000);
}

$('.indiv-project').on('mouseenter', function(){
	$(this).find('p').fadeIn(2000);
});

var project_row_height = $('.project-row').height();
$('.work-block ul.list-unstyled').css('height', project_row_height);

function project_vert_scroll() {
	//jquery animate for movement. think -100%, 0%, 100%. Dan mentioned 
	//that you might not want to do the hiding stuff your doing now.
}


$(document).ready(function(){
	setTimeout(hero_second_fade, 2000);
	hero_text_fadeIn();
});