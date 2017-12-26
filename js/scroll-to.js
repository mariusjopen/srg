jQuery( document ).ready(function() {

	if (jQuery('.navigation-blocks').length > 0) {

		jQuery( ".navi-block .item" ).click(function() {
			var data = jQuery(this).attr("data");

			var navi_height = jQuery(".sticky .box.navigation-blocks").outerHeight();


			var data_difference = jQuery("#" + data ).offset().top;

			jQuery("html, body").animate({
				scrollTop: data_difference - navi_height
			}, 1000);
		});

	}

});
