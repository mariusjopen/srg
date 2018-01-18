
jQuery( document ).ready(function() {

	jQuery("body").addClass("navi-hide-active");
	var lastScrollTop = 0;

	jQuery(window).scroll(function(event){
	   var st = jQuery(this).scrollTop();

	   if (st > lastScrollTop){
			 jQuery("body").removeClass("navi-hide-active");
	   }

		 else {
	     jQuery("body").addClass("navi-hide-active");
	   }

	   lastScrollTop = st;
	});

});
