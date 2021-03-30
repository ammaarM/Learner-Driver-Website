
function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {
	
	/*
	    Navigation
	*/
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), $('nav').outerHeight());
	});
	
    /*
        Background slideshow
    */
	$('.top-content').backstretch("https://www.thesun.co.uk/wp-content/uploads/2019/07/NINTCHDBPICT000504832617-e1562980210607.jpg");
	//$('.top-content').backstretch("assets/img/backgrounds/2.jpg");
    $('.section-4-container').backstretch("assets/img/backgrounds/1.jpg");
	
    
    /*
	    Wow
	*/
	new WOW().init();
	
});
