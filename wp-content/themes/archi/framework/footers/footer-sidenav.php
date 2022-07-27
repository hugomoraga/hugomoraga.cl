<?php
/**
 * The template for displaying the footer
 */
 global $archi_option; 
?>				
				<footer class="footer-side-nav">
					<div class="mainfooter">
						<div class="<?php if($archi_option['footer-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
							<div class="row">
								<?php get_sidebar('footer');?>
							</div>    
						</div>
					</div>					

					<div class="subfooter">
						<div class="<?php if($archi_option['footer-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
							<div class="row">
								<div class="col-sm-6">
									<?php echo wp_specialchars_decode( do_shortcode( $archi_option['footer_text'] ) ); ?>                      
								</div>
								<?php if($archi_option['switch_footer_social']!=false){ ?>
									<div class="col-md-6 text-right">
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
				                                <?php if($archi_option['rss']!=''){ ?>                                    
				                                    <li><a target="_blank" href="<?php echo esc_url($archi_option['rss']); ?>"><i class="fa fa-rss"></i></a></li>                                    
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
				</footer>
				<a id="back-to-top" href="#" class="show"></a>
    		</div><!-- .main-wrap -->
		</div><!-- .row -->
	</div><!-- .container-fluid -->
</div><!-- #wrapper -->