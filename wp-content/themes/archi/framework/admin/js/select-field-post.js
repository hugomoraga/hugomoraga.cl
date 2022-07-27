!( function($) {
	'use strict';

	// Process
	$( function() {
		var $selectCat_blog_post = $( '.select-category-post' ),
			$inputCat_blog_post = $( '.wpb-input-category' );

		if( ! $( 'body' ).find( $selectCat_blog_post ).length > 0 )  {
			return;
		}

		$( 'body' ).find( '.wpb_el_type_select_category' ).each( function( ) {
						
			$( this ).find( $selectCat_blog_post ).attr( 'multiple', 'multiple' );
		
			$( this ).find( $selectCat_blog_post ).select2();

			var category = [],
				mutiValue = $(this).find( $inputCat_blog_post ).val();

			if( mutiValue.indexOf( ',' ) ) {
				mutiValue = mutiValue.split( ',' );
			}
			if( mutiValue.length > 0 ) {
				for( var i = 0; i < mutiValue.length; i++ ) {
					category.push( mutiValue[i] );
				}
			}

			$(this).find( $selectCat_blog_post ).val( category ).trigger("change");

			$(this).find( $selectCat_blog_post ).on( 'change', function( e ) {
				$(this).parent().find( $inputCat_blog_post ).val( $(this).val() );
			} );
		} );
	} );

} )(window.jQuery);
