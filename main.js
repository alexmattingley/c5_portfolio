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


function break_apart_word(){
	var hero_h1 = $('.hero-text h1').text();
	for(var i = 0; i < hero_h1.length; i++){
		var hero_h1_letter = hero_h1[i]; //each indiv letter in hello
		console.log(hero_h1_letter);
		var letter_one = hero_h1[0];
		var letter_two = hero_h1[1];
	}
	function display_letter_one() {
		$('.hero-text h2').append(letter_one);
	}

	setTimeout(display_letter_one,500);

	function display_letter_two() {
		$('.hero-text h2').append(letter_two);
	}

	setTimeout(display_letter_two,1000);
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
});


//Function for creating and adding email address and phone to document
function add_contact_info() {
	email_add.html(e_icon + e_name + server_name);
	phe_class.html(phe_icon + pNum);
}


$(document).ready(function(){

	break_apart_word();

	//adds email addresses throughout
	add_contact_info();
});