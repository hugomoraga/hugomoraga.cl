<?php get_header(); ?>
<?php global $archi_option; $subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true); ?>
<?php if($archi_option['subpage-switch']!=false){ ?>

	<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
		<?php if( function_exists( 'rwmb_meta' ) ) { ?>       
	        <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
	        <?php if($images){ foreach ( $images as $image ) { ?>
	        <?php $img =  $image['full_url']; ?>
	          style="background-image: url('<?php echo esc_url($img); ?>');"
	        <?php } } ?>
	    <?php } ?>
	>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">                
	                <div class="title-wrap">
                        <h1><?php the_title(); ?></h1>
                        <?php if ($subtitle != '') { echo '<h4>' . esc_attr($subtitle) . '</h4>'; } ?>
                    </div> 
	                <?php 
	                  	if(function_exists('archi_breadcrumbs')): 
	                    	archi_breadcrumbs();
	                  	endif;
	                ?> 
	            </div>
	        </div>
	    </div>
	</section>
	<!-- subheader close -->

<?php }else{ ?>
    <section class="no-subpage"></section>
<?php } ?>

<?php echo wp_specialchars_decode( do_shortcode( $archi_option['top_page_contact_info'] ) ); ?>

<?php if(isset($archi_option['service_fullwidth']) and $archi_option['service_fullwidth']!='no' ){ ?>

	<?php while (have_posts()) : the_post()?>
		<?php the_content(); ?>
	<?php endwhile; ?>

<?php }else{ ?>

	<div id="content">
		<div class="container">
			<div class="row">
				<?php if(isset($archi_option['single-service-layout']) && $archi_option['single-service-layout']== 2 ){ ?>
					<div class="col-md-3">
						<?php wp_nav_menu( array( 'theme_location' => 'service-menu', 'container' => '', 'menu_id' => 'services-list' ) ); ?> 										
					</div>
				<?php } ?>
				
				<div class="<?php if(isset($archi_option['single-service-layout']) && $archi_option['single-service-layout']== 2 || $archi_option['single-service-layout']== 3 ){ echo 'col-md-9'; }else{ echo 'col-md-12'; } ?>">
					
					<?php while (have_posts()) : the_post()?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					
				</div>

				<?php if(isset($archi_option['single-service-layout']) && $archi_option['single-service-layout']== 3 ){ ?>
					<div class="col-md-3">
						<?php wp_nav_menu( array( 'theme_location' => 'service-menu', 'container' => '', 'menu_id' => 'services-list' ) ); ?> 				
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
<?php get_footer(); ?>