var ssvp_float_check = true;
jQuery(window).load(function(){
	
	var ssvp_vid = jQuery('.ssvpvideo');	
	var ssvp_vid_height = jQuery('.ssvpvideo').height();
	var ssvp_empty_div = jQuery('.ssvp-wrapper');
    var ssvp_top = ssvp_vid.offset().top - parseFloat(ssvp_vid.css('margin-top').replace(/auto/, 0));
    var ssvp_bottom = ssvp_top + ssvp_vid.outerHeight();    
    var ssvp_documentheight= jQuery(document).height();
    var ssvp_float_close_div= jQuery('.ssvp-float-close-div');
	
	jQuery(window).on('scroll', function(event) {
		if(ssvp_float_check){
			var ssvp_windowheight= jQuery(window).height();
			var ssvp_bottom_footer_space = ssvp_documentheight - ssvp_bottom;

			//only move widget if window size is not big enough for document size.		
			if(jQuery(window).width()>500){
				// what the y position of the scroll is
				var y = jQuery(this).scrollTop();

				// whether that's below the form

				if (y >= ssvp_top+300) {
					// if so, ad the fixed class
					if ( ssvp_vid.is('.ssvpaside') ) {
						return;
					}
					ssvp_vid.addClass('ssvpaside');
					ssvp_empty_div.css({"height":ssvp_vid_height+"px"});
					ssvp_float_close_div.addClass('ssvp-float-close-show');

				} else {
					// otherwise remove it
					ssvp_vid.removeClass('ssvpaside');
					ssvp_empty_div.css({"height":"auto"});
					ssvp_float_close_div.removeClass('ssvp-float-close-show');
				}
			}
		}
	});
	
});
