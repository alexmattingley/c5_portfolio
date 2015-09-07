/****************
Globals
*****************/

var project_load_click = 0;



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

/**************
 * functionName: set_work_block_height
 * @purpose: This sets the height of the work block (called in doc load)
 */
function set_work_block_height(){
	var project_row_height = $('.project-row').height();
	$('.work-block ul.list-unstyled').css('height', project_row_height);
}

/*************
 This function is the meat and potatoes of the vert scroll. On the click of the
 more-projects button, it animates the rows to scroll up or down depending on
 if the user is currently looking at the first or the second row of projects.
 NOTE: There is probably a better way to do this so it adjusts depending on the number of
 rows. I will consider making this dynamic.
 *************/
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


/**********************
 * functionName: set_skill_row_height();
 * @purpose: set skill block height intially and define the second height for the container which is used in the skills_expand
 * @params: N/A;
 * @globals: second_container_height
 * @return: N/A;
 */
var second_container_height;
function set_skill_block_height() {
	var skill_row_height_1 = $('#skill-row-1').height();
	var skill_row_height_2 = $('#skill-row-2').height();
	var skill_header_height = $('.skills-block-header').height();
	var first_container_height = skill_row_height_1 + skill_header_height;
	second_container_height = first_container_height + skill_row_height_2;
	$('.skills-block .container-fluid').css('height', first_container_height);
}

/**********************
 * functionName: skills_expand();
 * @purpose: expand the height of the container by the height of the second skill set, there might be a better way to do this
 * @params: N/A;
 * @globals: second_container_height
 * @return: N/A;
 */

function skills_expand(){
	$('.skills-block .container-fluid').animate({height: second_container_height}, 2000);
}

$('.more-skills').on('click', function(){
	skills_expand();
});

/**********************
 * functionName: add_contact_info();
 * @purpose: dynamically adds contact information
 * @params: N/A;
 * @globals: N/A
 * @return: N/A;
 */

function add_contact_info() {
	var email_add = $('.email_add');
	var e_icon = '<span class="glyphicon glyphicon-envelope"></span>';
	var e_name = ' alexmattingley';
	var server_name = '@gmail.com';
	var phe_class = $('.p_Num');
	var phe_icon = '<span class="glyphicon glyphicon-phone-alt"></span>';
	var pNum = ' (949) 280-6557';
	email_add.html(e_icon + e_name + server_name);
	phe_class.html(phe_icon + pNum);
}


$(document).ready(function(){

	break_apart_word();

	//adds email addresses throughout
	set_work_block_height();
	set_skill_block_height();
	add_contact_info();
});