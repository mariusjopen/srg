jQuery( document ).ready(function() {

	if (jQuery('.navigation-blocks').length > 0) {

		var data = jQuery( ".maschinen-linien" ).attr('data');
		var res = data.split("-");

		var name = res[0];
		var id = res[1];

		var navi_height = jQuery(".sticky .box.navigation-blocks").outerHeight();
		var data_difference = jQuery("#" + name ).offset().top;
		var lines = jQuery("#elektronik" ).offset().top;

		jQuery("body").removeClass("active-linie-1");
		jQuery("body").removeClass("active-linie-2");
		jQuery("body").removeClass("active-linie-3");



		if(jQuery(window).width() >= 800) {

			if (id <= 3) {
				jQuery("body").addClass("active-linie-" + id);

				jQuery("html, body").animate({
					scrollTop: data_difference - 48
				}, 500);
			}

			if (id == "b") {
				jQuery("body").addClass("active-linie-" + 1);

				jQuery("html, body").animate({
					scrollTop: lines - 48
				}, 500);
			}

		} else {

			if (id <= 3) {
				jQuery("body").addClass("active-linie-" + id);

				jQuery("html, body").animate({
					scrollTop: data_difference - 40
				}, 500);
			}

			if (id == "b") {
				jQuery("body").addClass("active-linie-" + 1);

				jQuery("html, body").animate({
					scrollTop: lines - 40
				}, 500);
			}

		}






	}

});
