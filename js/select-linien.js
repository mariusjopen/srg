jQuery( document ).ready(function() {

	jQuery("body").addClass("active-linie-1");

	jQuery( ".linie-nav-1" ).click(function() {
    jQuery("body").removeClass("active-linie-1");
		jQuery("body").removeClass("active-linie-2");
		jQuery("body").removeClass("active-linie-3");

		jQuery("body").addClass("active-linie-1");
  });

	jQuery( ".linie-nav-2" ).click(function() {
    jQuery("body").removeClass("active-linie-1");
		jQuery("body").removeClass("active-linie-2");
		jQuery("body").removeClass("active-linie-3");

		jQuery("body").addClass("active-linie-2");
  });

	jQuery( ".linie-nav-3" ).click(function() {
		jQuery("body").removeClass("active-linie-1");
		jQuery("body").removeClass("active-linie-2");
		jQuery("body").removeClass("active-linie-3");

		jQuery("body").addClass("active-linie-3");
	});

});
