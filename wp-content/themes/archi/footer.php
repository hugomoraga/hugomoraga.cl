<?php
/**
 * The template for displaying the footer
 */
global $wp_query, $archi_option; 
$hidden_footer = get_post_meta($wp_query->get_queried_object_id(), '_cmb_footer_widget', true);
?>
<?php 
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/footers/footer-sidenav'); 
    }else{  
?>
	<!-- footer begin -->
	<footer <?php if ( !is_active_sidebar( 'footer-area-1' ) && !is_active_sidebar( 'footer-area-2' ) && !is_active_sidebar( 'footer-area-3' ) && !is_active_sidebar( 'footer-area-4' ) ){ ?>class="no-padding"<?php } ?> >				
			
		<?php if ( $hidden_footer != 1 ){ ?>
			<?php if ( is_active_sidebar( 'footer-area-1' ) || is_active_sidebar( 'footer-area-2' ) || is_active_sidebar( 'footer-area-3' ) || is_active_sidebar( 'footer-area-4' ) ){ ?>
				<div class="main-footer">
		            <div class="<?php if($archi_option['footer-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
		                <div class="row">
		                    <?php get_sidebar('footer');?>
		                </div>    
		            </div>
		        </div>
			<?php } ?>
		<?php } ?>

		<div class="subfooter <?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=="footer2" ){echo 'padtop80 padbottom80 footer-2';} ?>">
			<div class="<?php if($archi_option['footer-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
				<div class="row">
					<?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=="footer2" ){ ?>
						<div class="col-md-3">
	                        <img src="<?php echo esc_url($archi_option['logo_footer']['url']); ?>" class="logo-small" alt=""><br>
	                    </div>
					<?php } ?>
					<div class="col-md-6">
						<?php echo wp_specialchars_decode( do_shortcode( $archi_option['footer_text'] ) ); ?>                     
					</div>

					<?php if($archi_option['switch_footer_social']!=false){ ?>
						<div class="<?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=='footer2' ){echo 'col-md-3';}else{echo 'col-md-6';} ?> text-right">
							<div class="social-icons">
								<ul>
									<?php if($archi_option['facebook']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['facebook']); ?>"><i class="fa fa-facebook"></i></a></li>                                    
									<?php } ?>                                
									<?php if($archi_option['twitter']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['twitter']); ?>"><i class="fa fa-twitter"></i></a></li>                                    
									<?php } ?>                                
									<?php if($archi_option['google']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['google']); ?>"><i class="fa fa-google-plus"></i></a></li>                                    
									<?php } ?>
									<?php if($archi_option['dribbble']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['dribbble']); ?>"><i class="fa fa-dribbble"></i></a></li>
									<?php } ?>
									<?php if($archi_option['pinterest']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['pinterest']); ?>"><i class="fa fa-pinterest"></i></a></li>
									<?php } ?>
									<?php if($archi_option['linkedin']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['linkedin']); ?>"><i class="fa fa-linkedin"></i></a></li>
									<?php } ?>                                
									<?php if($archi_option['youtube']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['youtube']); ?>"><i class="fa fa-youtube"></i></a></li>                                    
									<?php } ?>  
									<?php if($archi_option['vimeo']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['vimeo']); ?>"><i class="fa fa-vimeo-square"></i></a></li>
									<?php } ?>									                                                            
									<?php if($archi_option['skype']!=''){ ?>
										<li><a href="<?php echo esc_attr($archi_option['skype']); ?>"><i class="fa fa-skype"></i></a></li>
									<?php } ?>                               
									<?php if($archi_option['instagram']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['instagram']); ?>"><i class="fa fa-instagram"></i></a></li>
									<?php } ?>  
									<?php if($archi_option['github']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['github']); ?>"><i class="fa fa-github"></i></a></li>
									<?php } ?>
									<?php if($archi_option['tumblr']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['tumblr']); ?>"><i class="fa fa-tumblr-square"></i></a></li>
									<?php } ?>
									<?php if($archi_option['soundcloud']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['soundcloud']); ?>"><i class="fa fa-soundcloud"></i></a></li>
									<?php } ?>
									<?php if($archi_option['behance']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['behance']); ?>"><i class="fa  fa-behance"></i></a></li>
									<?php } ?>
									<?php if($archi_option['lastfm']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['lastfm']); ?>"><i class="fa fa-lastfm"></i></a></li>
									<?php } ?>
									<?php if($archi_option['rss']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['rss']); ?>"><i class="fa fa-rss"></i></a></li>                                    
									<?php } ?>
									<?php if($archi_option['social_extend']!=''){ 
		                                echo wp_specialchars_decode( do_shortcode( $archi_option['social_extend'] ) );
		                            } ?> 
	                            </ul>                                  
							</div>
						</div>  
					<?php } ?>                      
				</div>
			</div>
		</div>

		<a id="back-to-top" href="#" class="show"></a>
	</footer>

</div><!-- #wrapper -->

<?php } ?>

<div id="translate-magnific-popup" data-magnificloading="<?php echo esc_attr( $archi_option['portfolio_loading'] ); ?>" data-magnificclosex="<?php echo esc_attr( $archi_option['portfolio_closex'] ); ?>" ></div> 

<?php wp_footer(); ?>
</body>
</html>