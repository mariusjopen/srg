jQuery( document ).ready(function() {

if (jQuery('.technische-beratung').length > 0) {

	var navi_height = jQuery(".sticky .box.navigation-blocks").outerHeight();

	jQuery( ".nav-1" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".technische-beratung").offset().top-navi_height
    }, 500);
	});

	jQuery( ".nav-2" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".material").offset().top-navi_height
    }, 500);
	});

	jQuery( ".nav-3" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".elektronik-fertigung").offset().top-navi_height
    }, 500);
	});

	jQuery( ".nav-4" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".elektronik-fertigung").offset().top-navi_height
    }, 500);
	});

	jQuery( ".nav-5" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".montage").offset().top-navi_height
    }, 500);
	});

	jQuery( ".nav-6" ).click(function() {
		jQuery('html, body').animate({
        scrollTop: jQuery(".logistik").offset().top-navi_height
    }, 500);
	});

}

});
