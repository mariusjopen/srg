jQuery( document ).ready(function() {

	jQuery("body").addClass("dienst");

	if (jQuery('.navigation-blocks').length > 0) {

		var navi_height = jQuery(".sticky .box.navigation-blocks").outerHeight();

		var distance = jQuery('.flexible-moduls').offset().top-navi_height-1;

	  jQuerywindow = jQuery(window);

		jQuerywindow.scroll(function() {
	    if ( jQuerywindow.scrollTop() >= distance ) {
	        jQuery("body").addClass("sticky-navi");
	    }

			if ( jQuerywindow.scrollTop() < distance ) {
	        jQuery("body").removeClass("sticky-navi");
	    }
		});

	}

});
