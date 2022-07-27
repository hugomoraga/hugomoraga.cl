!( function($) {
	'use strict';
	// Portfolio
	$(function() {
		var $selectCat = $( '.select-categories-post' ),
			$inputCat = $( '.wpb-input-categories' );
		if( ! $( 'body' ).find( $selectCat ).length > 0 )  {
			return;
		}

		$( 'body' ).find( '.wpb_el_type_select_categories' ).each( function( ) {
						
			$( this ).find( $selectCat ).attr( 'multiple', 'multiple' );
			$( this ).find( $selectCat ).select2();
			var categories = [],
				mutiValue = $(this).find( $inputCat ).val();
			if( mutiValue.indexOf( ',' ) ) {
				mutiValue = mutiValue.split( ',' );
			}
			if( mutiValue.length > 0 ) {
				for( var i = 0; i < mutiValue.length; i++ ) {
					categories.push( mutiValue[i] );
				}
			}

			$(this).find( $selectCat ).val( categories ).trigger("change");
			$(this).find( $selectCat ).on( 'change', function( e ) {
				$(this).parent().find( $inputCat ).val( $(this).val() );
			} );
		} );
	});
})(window.jQuery);
