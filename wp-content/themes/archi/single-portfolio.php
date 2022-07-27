<?php global $archi_option; ?>
<?php if($archi_option['ajax_work']!=false){ ?>
	<div class="container project-view">
		<button title="<?php echo esc_attr( $archi_option['portfolio_closex'] ); ?>" type="button" class="mfp-close">×</button>
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<button title="<?php echo esc_attr( $archi_option['portfolio_closex'] ); ?>" type="button" class="mfp-close popup-exit"><?php echo esc_attr( $archi_option['portfolio_closex'] ); ?></button>		
	</div>		
<?php }else { ?>
	<?php get_header(); ?>

		<?php global $archi_option; ?>
		<?php if($archi_option['subpage-switch']!=false){ ?>

			<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
				<?php if( function_exists( 'rwmb_meta' ) ) { ?>       
			        <?php $images = rwmb_meta( '_cmb_portfolio_subheader', "type=image" ); ?>
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
		                        <?php $subtitle = get_post_meta(get_the_ID(),'_cmb_portfolio_subtitle', true); ?>
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
		
		<?php if(isset($archi_option['single_navigation']) and $archi_option['single_navigation']=="navontop" ){ ?>
			<div id="portfolio-controls"> 

		        <div class="left-right-portfolio"> 
		            <div class="portfolio-icon">
		            	<?php 
			            	if ($archi_option['portfolio_navigation'] == 'samecategory') { 
								previous_post_link('%link', __('<i class="fa fa-angle-double-left"></i>', 'archi'), TRUE, ' ', 'categories');
			            	}else{	
			            		previous_post_link('%link', __('<i class="fa fa-angle-double-left"></i>', 'archi'), $post->max_num_pages );
			            	} 
		            	?>
		            </div>
		        </div>
		   
		        <a href="<?php echo esc_url($archi_option['portfolio_link']); ?>">
		            <div class="center-portfolio"> 
		                <div class="portfolio-icon fa-th"></div>
		            </div> 
		        </a> 

		        <div class="left-right-portfolio">
		            <div class="portfolio-icon">
		            	<?php 
			            	if ($archi_option['portfolio_navigation'] == 'samecategory') { 
								next_post_link('%link', __('<i class="fa fa-angle-double-right"></i>', 'archi'), TRUE, ' ', 'categories');
			            	}else{	
			            		next_post_link('%link', __('<i class="fa fa-angle-double-right"></i>', 'archi'), $post->max_num_pages );
			            	} 
		            	?>
		            </div> 
		        </div>
		    </div>
		<?php } ?>    

		<div id="content">
			<?php if ( have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>			
					<?php the_content(); ?>					
				<?php endwhile; ?>			
			<?php endif; ?>
			<section class="single-portfolio-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if ($archi_option['project_sharing']!=false) { ?>
								<div class="socials-portfolio socials-rounded">
									<h4><?php esc_html_e('Share:', 'archi'); ?></h4>
									<div class="socials-sharing"> 

										<?php 
											$selected_sharing = isset( $archi_option['project_sharing_multi_select'] ) ? $archi_option['project_sharing_multi_select'] : null;
								            if( !is_array( $selected_sharing ) ){
								                $selected_sharing = (array)$selected_sharing;
								            }
								        ?>

										<?php if ( in_array('fb', $selected_sharing) ){ ?>
											<a class="socials-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Facebook"><i class="fa fa-facebook"></i></a> 
										<?php } if ( in_array('tw', $selected_sharing) ) { ?>
											<a class="socials-item" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Twitter"><i class="fa fa-twitter"></i></a> 
										<?php } if ( in_array('gg', $selected_sharing) ) { ?>
											<a class="socials-item" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Google Plus"><i class="fa fa-google-plus"></i></a> 
										<?php } if ( in_array('pinter', $selected_sharing) ) { ?>
											<a class="socials-item" target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" title="Pinterest"><i class="fa fa-pinterest"></i></a> 
										<?php } if ( in_array('digg', $selected_sharing) ) { ?>
											<a class="socials-item" href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-digg" aria-hidden="true"></i></a>
										<?php } if ( in_array('tumb', $selected_sharing) ) { ?>	
											<a class="socials-item" target="_blank" href="http://www.tumblr.com/share/link?url=<?php the_permalink(); ?>&name=<?php the_title(); ?>&description=<?php echo get_the_excerpt(); ?>" title="Tumblr"><i class="fa fa-tumblr"></i></a> 
										<?php } if ( in_array('redd', $selected_sharing) ) { ?>
											<a class="socials-item" href="http://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
										<?php } if ( in_array('linked', $selected_sharing) ) { ?>
											<a class="socials-item" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>" title="LinkedIn"><i class="fa fa-linkedin"></i></a> 
										<?php } if ( in_array('stumb', $selected_sharing) ) { ?>	
											<a class="socials-item" target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" title="StumbleUpon"><i class="fa fa-stumbleupon"></i></a>	
										<?php } if ( in_array('delici', $selected_sharing) ) { ?>
											<a class="socials-item" href="https://delicious.com/save?v=5&provider=<?php bloginfo( 'name' ); ?>&noui&jump=close&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-delicious" aria-hidden="true"></i></a>
										<?php } if ( in_array('vk', $selected_sharing) ) { ?>
											<a class="socials-item" href="http://vk.com/share.php?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-vk"></i></a>
										<?php } ?>
										
									</div>
								</div>
							<?php } ?>

							<?php if(isset($archi_option['single_navigation']) and $archi_option['single_navigation']=="navonbottom" ){ ?>
								<div class="double-divider clearfix"></div>
								<div class="portfolio-navigation clearfix">
									<div class="portfolio-btn-prev">
										<?php 
							            	if ($archi_option['portfolio_navigation'] == 'samecategory') { 
												previous_post_link('%link', __('<i class="fa fa-chevron-left"></i> Prev', 'archi'), TRUE, ' ', 'categories');
							            	}else{	
							            		previous_post_link('%link', __('<i class="fa fa-chevron-left"></i> Prev', 'archi'), $post->max_num_pages );
							            	} 
						            	?>
									</div>
									<div class="portfolio-btn-next">
										<?php 
							            	if ($archi_option['portfolio_navigation'] == 'samecategory') { 
												next_post_link('%link', __('Next <i class="fa fa-chevron-right"></i>', 'archi'), TRUE, ' ', 'categories');
							            	}else{	
							            		next_post_link('%link', __('Next <i class="fa fa-chevron-right"></i>', 'archi'), $post->max_num_pages );
							            	} 
						            	?>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</section>
		</div>
	<?php get_footer(); ?>	
<?php } ?>
