!( function($) {
	'use strict';

	// Process
	$( function() {
		var $selectCat_process = $( '.select-category_process-post' ),
			$inputCat_process = $( '.wpb-input-category_process' );

		if( ! $( 'body' ).find( $selectCat_process ).length > 0 )  {
			return;
		}

		$( 'body' ).find( '.wpb_el_type_select_category_process' ).each( function( ) {
						
			$( this ).find( $selectCat_process ).attr( 'multiple', 'multiple' );
		
			$( this ).find( $selectCat_process ).select2();

			var category_process = [],
				mutiValue = $(this).find( $inputCat_process ).val();

			if( mutiValue.indexOf( ',' ) ) {
				mutiValue = mutiValue.split( ',' );
			}
			if( mutiValue.length > 0 ) {
				for( var i = 0; i < mutiValue.length; i++ ) {
					category_process.push( mutiValue[i] );
				}
			}

			$(this).find( $selectCat_process ).val( category_process ).trigger("change");

			$(this).find( $selectCat_process ).on( 'change', function( e ) {
				$(this).parent().find( $inputCat_process ).val( $(this).val() );
			} );
		} );
	} );

} )(window.jQuery);
