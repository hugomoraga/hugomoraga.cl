<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $archi_option;

get_header( 'shop' ); ?>
	
	<?php if($archi_option['subpage-switch']!=false){ ?>

	    <!-- subheader -->
	    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" <?php if($archi_option['shop_thumbnail'] != ''){ ?> style="background-image: url('<?php echo esc_url($archi_option['shop_thumbnail']['url']); ?>');" <?php } ?> >
	        <div class="container">
	            <div class="row">
		            <div class="col-md-12">
	                	<div class="title-wrap">
		                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
								<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
							<?php endif; ?>
							
							<?php
								/**
								 * Hook: woocommerce_archive_description.
								 *
								 * @hooked woocommerce_taxonomy_archive_description - 10
								 * @hooked woocommerce_product_archive_description - 10
								 */
								do_action( 'woocommerce_archive_description' );
							?>
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
		 * Hook: woocommerce_before_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
	?>	

		<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] == 2 ){ ?>
	        <div class="col-md-3 sidebar-left">
				<?php
					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
				?>
			</div>
	    <?php } ?>

		<div class="<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] != 1 ){echo 'col-md-9';}else{echo 'col-md-12';}?>">
			
				<?php if ( woocommerce_product_loop() ) { ?>
					<div class="row">
						<?php
							/**
							 * Hook: woocommerce_before_shop_loop.
							 *
							 * @hooked wc_print_notices - 10
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
						?>
					</div>
					<div class="row">
						<?php woocommerce_product_loop_start(); ?>

							<?php 
								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 *
										 * @hooked WC_Structured_Data::generate_product_data() - 10
										 */
										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'product' );
									}
								}
							?>

						<?php woocommerce_product_loop_end(); ?>
					</div>
					<?php
						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>				
				<?php } else { ?>
					<?php 
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					?>
				<?php } ?>

		</div>

		<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] == 3 ){ ?>
	        <div class="col-md-3">
				<?php
					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
				?>
			</div>
	    <?php } ?>

	<?php
		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	

<?php get_footer( 'shop' ); ?>
