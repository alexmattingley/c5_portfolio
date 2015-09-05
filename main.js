/****************
Globals
*****************/

var project_load_click = 0;

// Globals for the email/phone generation
var email_add = $('.email_add')
var e_icon = '<span class="glyphicon glyphicon-envelope"></span>';
var e_name = ' alexmattingley';
var server_name = '@gmail.com';
var phe_class = $('.p_Num');
var phe_icon = '<span class="glyphicon glyphicon-phone-alt"></span>'
var pNum = ' (949) 280-6557';

// Basic Function for the hero banner h1 fadeIn, called in the document ready
function hero_text_fadeIn() {
	$('.hero-text h1').fadeIn(3000);	
}

//basic function for the rest of the text and the down arrow fadeIn, called in the document ready
function hero_second_fade() {
	$('.hero-text h4').fadeIn(2000);
	$('.hero-text a.glyphicon-menu-down.text-center').fadeIn(2000);
}

//basic function for fadein of text in the individual projects
$('.indiv-project').on('mouseenter', function(){
	$(this).find('p').fadeIn(2000);
});

//This sets the project rows the correct height in order that the vertical carousel
//below will work properly. 
var project_row_height = $('.project-row').height();
$('.work-block ul.list-unstyled').css('height', project_row_height);

/*************
This function is the meat and potatoes of the vert scroll. On the click of the 
more-projects button, it animates the rows to scroll up or down depending on
if the user is currently looking at the first or the second row of projects.
NOTE: There is probably a better way to do this so it adjusts depending on the number of
rows. I will consider making this dynamic.
*************/
$('.more-projects').on('click', function(){
	vert_scroll();
});


function vert_scroll() {
	project_load_click = ++project_load_click;
	if (project_load_click < 2) {
		$('#proj-row-1').animate({top: '-=100%'}, 2000);
		$('#proj-row-2').animate({top: '-=100%'}, 2000);
	}else {
		$('#proj-row-1').animate({top: '0%'}, 2000);
		$('#proj-row-2').animate({top: '0%'}, 2000);
		project_load_click = 0;
	}
	console.log(project_load_click);
}
var skill_row_height = $('#skill-row-1').height();
var skill_header_height = $('.skills-block-header').height();
var correct_container_height = skill_row_height + skill_header_height;
console.log(correct_container_height);
$('.skills-block .container-fluid').css('height', correct_container_height);

$('.more-skills').on('click', function(){
	skills_expand();
});

function skills_expand(){
	$('.skills-block .container-fluid').animate({'height': 'auto'}, 2000);
}

//Function for creating and adding email address and phone to document
function add_contact_info() {
	email_add.html(e_icon + e_name + server_name);
	phe_class.html(phe_icon + pNum);
}


$(document).ready(function(){
	setTimeout(hero_second_fade, 2000);
	hero_text_fadeIn();

	//adds email addresses throughout
	add_contact_info();
});