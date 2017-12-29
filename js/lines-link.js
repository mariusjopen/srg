jQuery( document ).ready(function() {

	if (jQuery('.navigation-blocks').length > 0) {

		var data = jQuery( ".maschinen-linien" ).attr('data');
		var res = data.split("-");

		var name = res[0];
		var id = res[1];

		var navi_height = jQuery(".sticky .box.navigation-blocks").outerHeight();
		var data_difference = jQuery("#" + name ).offset().top;

		jQuery("body").removeClass("active-linie-1");
		jQuery("body").removeClass("active-linie-2");
		jQuery("body").removeClass("active-linie-3");

		jQuery("body").addClass("active-linie-" + id);


		jQuery("html, body").animate({
			scrollTop: data_difference - 20
		}, 500);



	}

});
