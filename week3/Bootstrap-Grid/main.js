$(document).ready(function(){

	var hero_text = $('.hero-text');
	var hero_h1 = $('<h1>').text('hello.');
	var hero_h4 = $('<h4>').text('My name is Alex Mattingley and I develop websites and applications.');
	var down_arrow = $('<a>',{
		class: "glyphicon glyphicon-menu-down text-center",
		href: "#work"
	});
	

	hero_text.append(hero_h1);
	hero_text.append(hero_h4);
	hero_text.append(down_arrow);

});