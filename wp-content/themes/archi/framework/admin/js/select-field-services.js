!( function($) {
	'use strict';

	// Services
	$( function() {
		var $selectCat_services = $( '.select-category_services-post' ),
			$inputCat_services = $( '.wpb-input-category_services' );

		if( ! $( 'body' ).find( $selectCat_services ).length > 0 )  {
			return;
		}

		$( 'body' ).find( '.wpb_el_type_select_category_services' ).each( function( ) {
						
			$( this ).find( $selectCat_services ).attr( 'multiple', 'multiple' );
		
			$( this ).find( $selectCat_services ).select2();

			var category_services = [],
				mutiValue = $(this).find( $inputCat_services ).val();

			if( mutiValue.indexOf( ',' ) ) {
				mutiValue = mutiValue.split( ',' );
			}
			if( mutiValue.length > 0 ) {
				for( var i = 0; i < mutiValue.length; i++ ) {
					category_services.push( mutiValue[i] );
				}
			}

			$(this).find( $selectCat_services ).val( category_services ).trigger("change");

			$(this).find( $selectCat_services ).on( 'change', function( e ) {
				$(this).parent().find( $inputCat_services ).val( $(this).val() );
			} );
		} );
	} );

} )(window.jQuery);
