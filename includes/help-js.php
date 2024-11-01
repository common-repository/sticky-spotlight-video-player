<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
    <script type="text/javascript">
    	var type 				= "select";
    	var cta_text_status 	= "ON";
    	var cta_button_status 	= "ON";
    	var follow_user 		= "ON";
		var float_side  		= "RIGHT";
		var mobile_scroll 		= "ON";

		var ssvp_auto_play 		= "OFF";
		var ssvp_fullscreen		= "OFF";
		var ssvp_pin_screen		= "OFF";
		var ssvp_pin_side		= "RIGHT";
		var ssvp_start_stop		= "OFF";
		var ssvp_timed_cta		= "OFF";

		jQuery('.cta-text-status').on('click', function(){
	   		$this = jQuery(this);
	     	cta_text_status = $this.text();
	  	});
	  	jQuery('.cta-button-status').on('click', function(){
	   		$this = jQuery(this);
	     	cta_button_status = $this.text();
	  	});  	
	  	jQuery('.follow-user-status').on('click', function(){
	   		$this = jQuery(this);
	     	follow_user = $this.text();
	  	});
	  	jQuery('.float-status').on('click', function(){
	   		$this = jQuery(this);
	     	float_side = $this.text();
	  	});	  	
	  	jQuery('.mobile-status').on('click', function(){
	   		$this = jQuery(this);
	     	mobile_scroll = $this.text();
	  	});

	  	jQuery('.ssvp-auto-play').on('click', function(){
	   		$this = jQuery(this);
	     	ssvp_auto_play = $this.text();
	  	});
	  	jQuery('.ssvp-fullscreen').on('click', function(){
	   		$this = jQuery(this);
	     	ssvp_fullscreen = $this.text();
	  	});
	  	jQuery('.ssvp-pin-screen').on('click', function(){
	   		$this = jQuery(this);
	     	ssvp_pin_screen = $this.text();
	  	});
	  	jQuery('.ssvp-pin-side').on('click', function(){
	   		$this = jQuery(this);
	     	ssvp_pin_side = $this.text();
	  	});
	  	// jQuery('.ssvp-start-stop').on('click', function(){
	   // 		$this = jQuery(this);
	   //   	ssvp_start_stop = $this.text();
	  	// });
	  	jQuery('.ssvp-timed-cta').on('click', function(){
	   		$this = jQuery(this);
	     	ssvp_timed_cta = $this.text();
	  	});

    	function ssvp_select_type(video_type){
			type = video_type;
		}		
    	
    	function ssvpgenerate_shortcode()
		{
			var shortcode_youtube_url = '';
			var shortcode_vimeo_url = '';
			var shortcode_wistia_url = '';
			var shortcode_mp4_upload = '';
			var shortcode_mp4_url = '';

			var youtube_url = jQuery('#youtube_url').val();									
			var vimeo_url = jQuery('#vimeo_url').val();									
			var wistia_url = jQuery('#wistia_url').val();									
			var mp4_upload = jQuery('#upload_image').val();
			var mp4_url = jQuery('#mp4_url').val();									

			if(type=='youtube'){
				shortcode_youtube_url = ' youtube_url="'+youtube_url+'" ';
			}
			else if(type=='vimeo'){
				shortcode_vimeo_url = ' vimeo_url="'+vimeo_url+'" ';
			}
			else if(type=='wistia'){
				shortcode_wistia_url = ' wistia_url="'+wistia_url+'" ';
			}
			else if(type=='mp4_upload'){
				shortcode_mp4_upload = ' mp4_upload="'+mp4_upload+'" ';
			}
			else if(type=='mp4_url'){
				shortcode_mp4_url = ' mp4_url="'+mp4_url+'" ';
			}

			var cta_headline 	= jQuery('#cta_headline').val();
			var cta_text 		= jQuery('#cta_text').val();
			var cta_image 		= jQuery('#upload_image_overlay').val();
			var cta_image_url	= jQuery('#cta_url_overlay').val();
			var cta_image_time  = jQuery('#cta_time_overlay').val();
			var cta_url_text 	= jQuery('#cta_url_text').val();
			var cta_url 		= jQuery('#cta_url').val();
			var ssvp_timed_time	= jQuery('#ssvp_timed_time').val();

			var shortcode_start = '[video_embed';
			var shortcode_end = ']';
			var shortcode_type = ' type="'+type+'" ';			
			
			if(cta_headline != '')
				var shortcode_cta_headline = ' cta_headline="'+cta_headline+'" ';
			else
				var shortcode_cta_headline = '';			

			if(cta_text != '')
				var shortcode_cta_text = ' cta_text="'+cta_text+'" ';
			else
				var shortcode_cta_text = '';			

			if(cta_image != '')
				var shortcode_cta_image = ' cta_text="'+cta_image+'" ';
			else
				var shortcode_cta_image = '';			

			if(cta_url_text != '')
				var shortcode_cta_url_text = ' cta_url_text="'+cta_url_text+'" ';
			else
				var shortcode_cta_url_text = '';			

			if(cta_url != '')
				var shortcode_cta_url = ' cta_url="'+cta_url+'" ';
			else
				var shortcode_cta_url = '';			

			if(cta_image_url != '')
				var shortcode_cta_image_url = ' cta_image_url="'+cta_image_url+'" ';
			else
				var shortcode_cta_image_url = '';			

			if(cta_image_time != '')
				var shortcode_cta_image_time = ' cta_image_time="'+cta_image_time+'" ';
			else
				var shortcode_cta_image_time = '';			

			if(ssvp_timed_time != '')
				var shortcode_ssvp_timed_time = ' ssvp_timed_time="'+ssvp_timed_time+'" ';
			else
				var shortcode_ssvp_timed_time = '';			


			var shortcode_cta_text_status  = ' cta_text_status="'+cta_text_status+'" ';
			var shortcode_cta_button_status = ' cta_button_status="'+cta_button_status+'" ';
			
			var shortcode_cta_box_color		='';
			var shortcode_cta_button_color		='';
			var shortcode_cta_heading_color		='';
			var shortcode_cta_para_color		='';

			var shortcode_cta_button_size		='';
			var shortcode_cta_heading_size		='';
			var shortcode_cta_para_size		='';

			var cta_box_color = "";
			var cta_button_color = "";			
			var cta_heading_color = "";
			var cta_para_color = "";

			var cta_button_size = "";			
			var cta_heading_size = "";
			var cta_para_size = "";

			cta_box_color = jQuery( '#cta_box_color' ).wpColorPicker( 'color' );
			shortcode_cta_box_color = ' cta_box_color="'+cta_box_color+'" ';

			cta_button_color = jQuery( '#cta_button_color' ).wpColorPicker( 'color' );
			shortcode_cta_button_color = ' cta_button_color="'+cta_button_color+'" ';
			
			
			cta_heading_color = jQuery( '#cta_heading_color' ).wpColorPicker( 'color' );
			shortcode_cta_heading_color = ' cta_heading_color="'+cta_heading_color+'" ';

			cta_para_color = jQuery( '#cta_para_color' ).wpColorPicker( 'color' );
			shortcode_cta_para_color = ' cta_para_color="'+cta_para_color+'" ';


			cta_button_size = jQuery( '#cta_button_size' ).val();
			shortcode_cta_button_size = ' cta_button_size="'+cta_button_size+'" ';
			
			
			cta_heading_size = jQuery( '#cta_heading_size' ).val();
			shortcode_cta_heading_size = ' cta_heading_size="'+cta_heading_size+'" ';

			cta_para_size = jQuery( '#cta_para_size' ).val();
			shortcode_cta_para_size = ' cta_para_size="'+cta_para_size+'" ';

			var shortcode_follow_user = ' follow_user="'+follow_user+'" ';
			var shortcode_float_side = ' float_side="'+float_side+'" ';
			var shortcode_mobile_scroll = ' mobile_scroll="'+mobile_scroll+'" ';
			var browser_padding = jQuery("#browser_padding").val();
			var shortcode_browser_padding = ' browser_padding="'+browser_padding+'" ';

			var shortcode_ssvp_auto_play  = ' ssvp_auto_play="' +ssvp_auto_play  +'" ';
			var shortcode_ssvp_fullscreen = ' ssvp_fullscreen="'+ssvp_fullscreen +'" ';
			var shortcode_ssvp_pin_screen = ' ssvp_pin_screen="'+ssvp_pin_screen +'" ';
			var shortcode_ssvp_pin_side = ' ssvp_pin_side="'+ssvp_pin_side +'" ';
			var shortcode_ssvp_start_stop = ' ssvp_start_stop="'+ssvp_start_stop +'" ';
			var shortcode_ssvp_timed_cta  = ' ssvp_timed_cta="' +ssvp_timed_cta  +'" ';

			var shortcode_name = jQuery('#shortcode_name').val();
			var shortcode_names = ' shortcode_name="'+shortcode_name+'" ';

			var shortcode = shortcode_start+shortcode_type+shortcode_youtube_url+shortcode_vimeo_url+shortcode_wistia_url+shortcode_mp4_upload+shortcode_mp4_url+shortcode_cta_text_status+shortcode_cta_headline+shortcode_cta_text+shortcode_cta_image+shortcode_cta_image_url+shortcode_cta_image_time+shortcode_cta_url_text+shortcode_cta_url+shortcode_follow_user+shortcode_float_side+shortcode_browser_padding+shortcode_mobile_scroll+shortcode_cta_button_status+shortcode_cta_box_color+shortcode_cta_button_color+shortcode_cta_heading_color+shortcode_cta_para_color+shortcode_cta_button_size+shortcode_cta_heading_size+shortcode_cta_para_size+shortcode_ssvp_auto_play+shortcode_ssvp_fullscreen+shortcode_ssvp_pin_screen+shortcode_ssvp_pin_side+shortcode_ssvp_start_stop+shortcode_ssvp_timed_cta+shortcode_ssvp_timed_time+shortcode_names+shortcode_end;

			
			//alert(shortcode);


			// process the form
	        var data = {
	        	'action': 'ssvp_generate_shortcode',
	            'type'       	  	: type,
	            'youtube_url'   	: youtube_url,
	            'vimeo_url'         : vimeo_url,
	            'wistia_url' 	 	: wistia_url,
	            'mp4_upload'   	    : mp4_upload,
	            'mp4_url'     		: mp4_url,
	            'cta_text_status'	: cta_text_status,	            
	            'cta_headline'  	: cta_headline,
		        'cta_text' 			: cta_text,
		        'cta_image'			: cta_image,
		        'cta_image_url'		: cta_image_url,
		        'cta_image_time'	: cta_image_time,
		        'cta_url_text' 		: cta_url_text,
		        'cta_url' 			: cta_url,
		        'cta_button_status'	: cta_button_status,
		        'cta_box_color' 	: cta_box_color,
		        'cta_heading_color' : cta_heading_color,
		        'cta_para_color'	: cta_para_color,
		        'cta_button_color' 	: cta_button_color,		        
		        'cta_heading_size' 	: cta_heading_size,
		        'cta_para_size'		: cta_para_size,
		        'cta_button_size' 	: cta_button_size,		        
		        'follow_user'		: follow_user,
		        'float_side'		: float_side,
		        'mobile_scroll'		: mobile_scroll,
		        'browser_padding'	: browser_padding,
		        'ssvp_auto_play'		: ssvp_auto_play,
		        'ssvp_fullscreen'	: ssvp_fullscreen,
		        'ssvp_pin_screen'	: ssvp_pin_screen,
		        'ssvp_pin_side'		: ssvp_pin_side,
		        'ssvp_start_stop'	: ssvp_start_stop,
		        'ssvp_timed_cta'		: ssvp_timed_cta,
		        'ssvp_timed_time'	: ssvp_timed_time,
		        'shortcode_name'	: shortcode_name

	        };
	        // process the form
	        jQuery.post(ajaxurl, data, function(response) {
	        	if(response == 'exists'){
	        		jQuery('#ssvp-exists').html('A shortcode with this title already exists, Please try a different Shortcode Name.');
	        	}
	        	else{
	        		jQuery('#ssvp-exists').html('');
	        		jQuery('#shortcode-ready').val('[video_embed name="'+response+'"]');
	        	}				
			});

		} //End generate_shortcode()
		
		jQuery(document).ready(function(jQuery){
			var myOptions = {
				// you can declare a default color here,
				// or in the data-default-color attribute on the input
				defaultColor: false,
				// a callback to fire whenever the color changes to a valid color
				change: function(event, ui){
					var id = jQuery(this).attr('id');
					var id_check = id+'-check';
					jQuery('#'+id_check).attr('checked',false);
					//generate_shortcode();
				},
				// a callback to fire when the input is emptied or an invalid color
				clear: function(event, ui) {
					//generate_shortcode();
				},
				// hide the color picker controls on load
				hide: true,
				// show a group of common colors beneath the square
				// or, supply an array of colors to customize further
				palettes: true
			};
			jQuery('.color-picker').wpColorPicker(myOptions);
			
			jQuery('.wp-picker-clear').click(function(){
				var id = jQuery(this).prev().attr('id');
				var check_id = id+'-check';
				jQuery('#'+check_id).attr('checked',true);
				//generate_shortcode();
			});
		});

		// copy shortcode to clipboard
		document.getElementById("copyButton").addEventListener("click", function() {
		    copyToClipboard(document.getElementById("shortcode-ready"));
		});

		function copyToClipboard(elem) {
			  // create hidden text element, if it doesn't already exist
		    var targetId = "_hiddenCopyText_";
		    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
		    var origSelectionStart, origSelectionEnd;
		    if (isInput) {
		        // can just use the original source element for the selection and copy
		        target = elem;
		        origSelectionStart = elem.selectionStart;
		        origSelectionEnd = elem.selectionEnd;
		    } else {
		        // must use a temporary form element for the selection and copy
		        target = document.getElementById(targetId);
		        if (!target) {
		            var target = document.createElement("textarea");
		            target.style.position = "absolute";
		            target.style.left = "-9999px";
		            target.style.top = "0";
		            target.id = targetId;
		            document.body.appendChild(target);
		        }
		        target.textContent = elem.textContent;
		    }
		    // select the content
		    var currentFocus = document.activeElement;
		    target.focus();
		    target.setSelectionRange(0, target.value.length);
		    
		    // copy the selection
		    var succeed;
		    try {
		    	  succeed = document.execCommand("copy");
		    } catch(e) {
		        succeed = false;
		    }
		    // restore original focus
		    if (currentFocus && typeof currentFocus.focus === "function") {
		        currentFocus.focus();
		    }
		    
		    if (isInput) {
		        // restore prior selection
		        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
		    } else {
		        // clear temporary content
		        target.textContent = "";
		    }
		    return succeed;
		}

		jQuery(".ssvp-close-pro-offer").click(function(){
			jQuery(".ssvp-pro-offer").hide();
			jQuery(".ssvp-pro-offer-details").hide();
		});
    </script>