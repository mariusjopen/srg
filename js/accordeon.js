jQuery( document ).ready(function() {

	jQuery( ".text-accordeon .link" ).click(function() {

		var right = jQuery(this).parent().attr('class');
		var right_class = "." + right;

		if ( jQuery(".right").hasClass( "open" ) ) {
			jQuery(".right").removeClass("open");
		}

		else {
			jQuery(right_class).addClass("open");
		}

  });

});
