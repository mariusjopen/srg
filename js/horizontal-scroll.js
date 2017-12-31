jQuery(document).ready(function() {

  jQuery(window).resize(function() {

    if(jQuery(window).width() >= 800) {

			jQuery(".inside").css("width", "auto");

    } else {

			var item = jQuery(".inside .item").width();
			var number = jQuery(".inside .item").length;
			var length = ( item * number ) + 200;

			jQuery(".inside").css("width", length);

    }

  }).resize();
});
