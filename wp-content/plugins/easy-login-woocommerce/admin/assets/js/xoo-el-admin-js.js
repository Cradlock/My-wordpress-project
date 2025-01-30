jQuery(document).ready(function($){
	'use strict';
	
	$('select[name="xoo-el-sy-options[sy-popup-height-type]"]').on( 'change', function(){

		var $setting = $( '.xoo-as-setting:has(input[name="xoo-el-sy-options[sy-popup-height]"])' );

		if( $(this).val() === 'auto' ){
			$setting.hide();
		}
		else{
			$setting.show();
		}
		
	} ).trigger('change');

	var changedOnLoad = false;

	$('select[name="xoo-el-gl-options[m-form-pattern]"]').on( 'change', function(){

		var $setting 		= $('select[name="xoo-el-gl-options[m-nav-pattern]"]'),
			$shortcodeInfo 	= $('select[data-fname="xoo-elscg-poptype"] + span.xoo-el-scgdesc');


		if( $(this).val() === 'single' ){
			if( changedOnLoad ){
				$setting.find('option[value="links"]').prop( 'selected', true );
				$setting.trigger('change');
			}
			$shortcodeInfo.show();
		}

		if( $(this).val() === 'separate' ){
			if( changedOnLoad ){
				$setting.find('option[value="tabs"]').prop( 'selected', true );
				$setting.trigger('change');
			}
			$shortcodeInfo.hide();
		}
		changedOnLoad = true;
	}).trigger('change');


	$('select[name="xoo-el-sy-options[sy-popup-style]"]').on( 'change', function(){

		var $setting = $( '.xoo-as-setting:has(select[name="xoo-el-sy-options[sy-popup-height-type]"]), .xoo-as-setting:has(input[name="xoo-el-sy-options[sy-popup-height]"])' );

		if( $(this).val() === 'slider' ){
			$setting.hide();
		}
		else{
			$setting.show();
		}
		
	} ).trigger('change');


	$('input[name="xoo-el-gl-options[m-en-myaccount]"]').on( 'change', function(){

		var $setting = $('textarea[name="xoo-el-gl-options[m-myacc-sc]"]').closest('.xoo-as-setting');


		if( $(this).is(':checked') ){
			$setting.show();
		}
		else{
			$setting.hide();
		}
	})


	$('input[name="xoo-el-gl-options[m-en-chkout]"]').on( 'change', function(){

		var $setting = $('textarea[name="xoo-el-gl-options[m-chkout-sc]"]').closest('.xoo-as-setting');


		if( $(this).is(':checked') ){
			$setting.show();
		}
		else{
			$setting.hide();
		}
	})


	function generate_shortcode(){

		var shortcode = {};

		$('[data-fname]:visible').each(function(index, el){

			var $cont 	= $(this).closest('.xoo-el-scgroup'),
				attr 	= $cont.data('attr'),
				val 	= $(this).val();

			if( ( $(this).attr('type') === 'checkbox' || $(this).attr('type') === 'radio' ) && !$(this).prop('checked') ) return;

			if( shortcode[attr] && $cont.data('multiple') === 'yes' ){
				if( Array.isArray( shortcode[attr] ) ){
					shortcode[attr].push( val );
				}
				else{
					shortcode[attr] = [ shortcode[attr], val ];
				}
			}
			else{
				shortcode[attr] = val;
			}

		})


		var shortcodeType = shortcode.sctype;

		if( !shortcodeType ) return;

		if( shortcode.login_redirect === 'global' ){
			delete shortcode.login_redirect;
		}

		if( shortcode.register_redirect === 'global' ){
			delete shortcode.register_redirect;
		}


		if( shortcode.redirect_to === 'global' ){
			delete shortcode.redirect_to;
		}

		delete shortcode.sctype;


		var shortcodeString = shortcodeType === 'inline' ? '[xoo_el_inline_form' : '[xoo_el_action';

		$.each( shortcode, function(attr,val ){
			if( Array.isArray(val) ){
				val = val.join(',');
			}
			shortcodeString += ' '+attr+'="'+val+'"';
		})


		var $shortcodeCont = $('.xoo-elscg-shortcode');

		$shortcodeCont.find('.xoo-elscg-sctext').html(shortcodeString+']');
		$shortcodeCont.addClass('xoo-elscg-active').show();

		setTimeout(function(){
			$shortcodeCont.removeClass('xoo-elscg-active');
		},200)
	};

	$('[data-showval]').each(function(index, el){

		var $parentOption 	= $(this).siblings('[data-fname="'+$(this).data('fname')+'"]'),
			$dependant 		= $(this);

		$parentOption.on('change', function(){
			if( $(this).val() === $dependant.data('showval') ){
				$dependant.show();
			}
			else{
				$dependant.hide();
			}
		});
	})

	$('input[type="radio"][data-fname]').on('change',function(){
		$('input[type="radio"][data-fname="'+$(this).attr('data-fname')+'"').not(this).prop('checked',false);
	});


	$('[data-fname="xoo-elscg-sctype"]').on('change', function(){
		$('.xoo-elscg-fields').hide();
		$('.xoo-elscg-fields[data-type="'+$(this).val()+'"]').show();
	})

	$('[data-fname]').on('change', function(){
		generate_shortcode();
	})

	generate_shortcode();

	 $('.xoo-elscg-copy').click(function () {
		// Create a temporary textarea to hold the text
		var tempInput = $('<textarea>');
		$('body').append(tempInput);

		// Get the text to copy
		tempInput.val($('.xoo-elscg-sctext').text()).select();

		// Copy the text to the clipboard
		document.execCommand('copy');

		// Remove the temporary textarea
		tempInput.remove();

		// Provide feedback (optional)
		alert('Shortcode copied!');
	});

	

});
