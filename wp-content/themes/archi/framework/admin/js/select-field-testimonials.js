!( function($) {
	'use strict';

	// testimonials
	$( function() {
		var $selectCat_testimonials = $( '.select-category_testimonials-post' ),
			$inputCat_testimonials = $( '.wpb-input-category_testimonials' );

		if( ! $( 'body' ).find( $selectCat_testimonials ).length > 0 )  {
			return;
		}

		$( 'body' ).find( '.wpb_el_type_select_category_testimonials' ).each( function( ) {
						
			$( this ).find( $selectCat_testimonials ).attr( 'multiple', 'multiple' );
		
			$( this ).find( $selectCat_testimonials ).select2();

			var category_testimonials = [],
				mutiValue = $(this).find( $inputCat_testimonials ).val();

			if( mutiValue.indexOf( ',' ) ) {
				mutiValue = mutiValue.split( ',' );
			}
			if( mutiValue.length > 0 ) {
				for( var i = 0; i < mutiValue.length; i++ ) {
					category_testimonials.push( mutiValue[i] );
				}
			}

			$(this).find( $selectCat_testimonials ).val( category_testimonials ).trigger("change");

			$(this).find( $selectCat_testimonials ).on( 'change', function( e ) {
				$(this).parent().find( $inputCat_testimonials ).val( $(this).val() );
			} );
		} );
	} );

} )(window.jQuery);
