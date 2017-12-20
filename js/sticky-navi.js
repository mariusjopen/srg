jQuery( document ).ready(function() {

	if (jQuery('.technische-beratung').length > 0) {

		var navi_height = jQuery(".sticky .box.navigation-blocks").outerHeight();
		var distance = jQuery('.technische-beratung').offset().top-navi_height;
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
