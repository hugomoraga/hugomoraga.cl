<?php
/**
 * The Sidebar containing the main widget area
 */
?>
<?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
	<div id="sidebar" class="sidebar">	
		<?php dynamic_sidebar( 'shop-sidebar' ); ?>	
	</div>	
<?php endif; ?>
