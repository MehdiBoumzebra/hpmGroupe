/******************************************************************************
	Transforms the basic Twitter Bootstrap Carousel into Fullscreen Mode
	@author Fabio Mangolini
     http://www.responsivewebmobile.com
******************************************************************************/
jQuery(document).ready(function() {
	$('.carousel').carousel({
    	pause: "false",
    	interval: 5000
	});
    var height;
    alert(555);
    if($('body').hasClass('home')){
        height = '700px';
    }else{
        height = '400px';
    }
    

	$('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height':height });
	$('.carousel .item').css({'position': 'fixed', 'width': '100%', 'height': height});
	$('.carousel-inner div.item img').each(function() {
		var imgSrc = $(this).attr('src');
		$(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
		$(this).remove();
	});

	$(window).on('resize', function() {
		$('.carousel').css({'width': $(window).outerWidth(), 'height': height});
	});
}); 