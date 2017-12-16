jQuery( document ).ready(function() {

	jQuery( ".nav-1" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".technische-beratung").offset().top
    }, 500);
	});

	jQuery( ".nav-2" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".material").offset().top
    }, 500);
	});

	jQuery( ".nav-3" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".elektronik-fertigung").offset().top
    }, 500);
	});

	jQuery( ".nav-4" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".elektronik-fertigung").offset().top
    }, 500);
	});

	jQuery( ".nav-5" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".montage").offset().top
    }, 500);
	});

	jQuery( ".nav-6" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".logistik").offset().top
    }, 500);
	});

});
