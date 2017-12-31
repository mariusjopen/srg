jQuery(document).ready(function() {

	jQuery( ".burger-wrapper" ).click(function() {
    jQuery("body").toggleClass("active-navi");
  });

jQuerywindow = jQuery(window);
	var distance = 20;

	jQuerywindow.scroll(function() {
		if ( jQuerywindow.scrollTop() >= distance ) {
				jQuery("body").addClass("hide-logo");
		}

		if ( jQuerywindow.scrollTop() < distance ) {
				jQuery("body").removeClass("hide-logo");
		}
	});

});
