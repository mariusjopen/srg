jQuery(document).ready(function() {

	jQuery( ".burger-wrapper" ).click(function() {
    jQuery("body").toggleClass("active-navi");
  });

jQuerywindow = jQuery(window);
	var logotouch = jQuery(".logo-big img").offset().top;
	var logoheight = jQuery(".logo-big img").height();

	var distance = 20;

	var logo_distance = logotouch + logoheight;




	jQuerywindow.scroll(function() {
		if ( jQuerywindow.scrollTop() >= distance ) {
				jQuery("body").addClass("hide-logo");
		}

		if ( jQuerywindow.scrollTop() < distance ) {
				jQuery("body").removeClass("hide-logo");
		}



		if ( jQuerywindow.scrollTop() >= logo_distance ) {
				jQuery("body").addClass("show-logo");
		}

		if ( jQuerywindow.scrollTop() < logo_distance ) {
				jQuery("body").removeClass("show-logo");
		}
	});

});
