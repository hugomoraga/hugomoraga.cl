<?php global $archi_option; ?>
<div id="wrapper"> 
    <div class="container-fluid">
        <div class="row-fluid">        
            <div id="de-sidebar" class="col-md-3">
                <header class="side-header">
                    <span id="menu-btn"></span>
                    <div id="logo">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img class="logo" src="<?php echo esc_url($archi_option['logo2']['url']); ?>" alt="">
                            <img class="logo-2" src="<?php echo esc_url($archi_option['logo']['url']); ?>" alt="">                                
                        </a>
                    </div>

                    <nav>
                        <?php
                            $landing = array(
                                'theme_location'  => 'landing',
                                'menu'            => '',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'mainmenu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                            );
                            if ( has_nav_menu( 'landing' ) ) {
                                wp_nav_menu( $landing );
                            }
                        ?> 
                    </nav>

                    <div class="h-content">
                        <?php if($archi_option['switch_header_social']!=false){ ?>
                            <div class="social-icons-2">
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
                        <?php } ?>
                        <?php if($archi_option['sidenav_contactinfo_extend']!=''){ ?>
                            <div class="working-hours">                                
                                <?php echo wp_specialchars_decode( do_shortcode( $archi_option['sidenav_contactinfo_extend'] ) ); ?>
                            </div>
                        <?php } ?>
                    </div>
                </header>
            </div>
            <div id="main" class="main-wrap col-md-9 no-padding">