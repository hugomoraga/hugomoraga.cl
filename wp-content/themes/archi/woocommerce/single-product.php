<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $archi_option;

get_header( 'shop' ); ?>

	<?php if($archi_option['subpage-switch']!=false){ ?>

	    <!-- subheader -->
	    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" <?php if($archi_option['product_thumbnail'] != ''){ ?> style="background-image: url('<?php echo esc_url($archi_option['product_thumbnail']['url']); ?>');" <?php } ?> >
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">   
		                <div class="title-wrap">                 
							<h1><?php the_title(); ?></h1>		
						</div>						
	                    <?php do_action('breadcrumb_before_main_content'); ?>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- subheader close -->

	<?php }else{ ?>
	    <section class="no-subpage"></section>
	<?php } ?>	

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] == 2 ){ ?>
        <div class="col-md-3 sidebar-left">
			<?php
				/**
				 * woocommerce_sidebar hook
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>
		</div>
    <?php } ?>

	<div class="<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] != 1 ){echo 'col-md-9';}else{echo 'col-md-12';}?>">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>	

	<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] == 3 ){ ?>
        <div class="col-md-3">
			<?php
				/**
				 * woocommerce_sidebar hook
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>
		</div>
    <?php } ?>	

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
