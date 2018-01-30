
jQuery( document ).ready(function() {

	jQuery("body").addClass("navi-hide-active");
	jQuery("body").addClass("navi-logo-hide");

	var lastScrollTop = 0;

	jQuery(window).scroll(function(event){
	   var st = jQuery(this).scrollTop();

	   if (st >= 10){

		   if (st > lastScrollTop){
				 jQuery("body").removeClass("navi-hide-active");
		   }

			 else {
		     jQuery("body").addClass("navi-hide-active");
		   }

		 }

		 if (st >= 100){
			 jQuery("body").removeClass("navi-logo-hide");
		 }

		 else {
			 jQuery("body").addClass("navi-logo-hide");
		 }

	   lastScrollTop = st;
	});

});
