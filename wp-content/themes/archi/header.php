<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gte IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>    
<![endif]-->    
<!--[if !(IE 7) | !(gte IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $archi_option; ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	
    <!-- Favicons
    ================================================== -->
    <?php archi_custom_favicon() ?>	
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php 
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/headers/header-sidenav'); 
    }else{  
?>
<div id="wrapper">
    <!-- header begin -->
    <header class="<?php archi_header_class(); ?>"> 
    <?php if($archi_option['topbar-allpage']!=false){ ?>        
        <!-- top header begin -->
        <div class="info">
            <div class="<?php if($archi_option['header-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
                <div class="row">
                    <?php if($archi_option['topbar_col_left'] != 'none'){ ?>
                        <div class="col-md-<?php echo esc_attr($archi_option['topbar_col_left']); ?>">
                            <?php echo wp_specialchars_decode( do_shortcode( $archi_option['info_list_text'] ) ); ?>                        
                        </div>    
                    <?php } ?>

                    <?php if($archi_option['topbar_col_right'] != 'none'){ ?>
                        <div class="col-md-<?php echo esc_attr($archi_option['topbar_col_right']); ?>">                             
                            <?php if($archi_option['switch_header_social']!=false){ ?>
                                <!-- social icons -->
                                <ul class="social-list">
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
                                    <?php 
                                        if($archi_option['social_extend']!=''){ 
                                            echo wp_specialchars_decode( do_shortcode( $archi_option['social_extend'] ) );
                                        } 
                                    ?>                                     
                                </ul>
                                <!-- social icons close -->
                            <?php } ?>    

                            <?php 
                                if($archi_option['topbar-woo-loginout-link'] == true){
                                    echo '<ul class="topbar-login">';
                                    if (class_exists('woocommerce')) {
                                        topbar_loginout_link();
                                    }
                                    echo '</ul>';
                                }   
                            ?>                                                    
                            
                            <?php if($archi_option['multi_languages_shortcode']!=''){ 
                                echo wp_specialchars_decode( do_shortcode( $archi_option['multi_languages_shortcode'] ) );
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>   
        <!-- top header close -->
        <?php } ?>

        <div class="<?php if($archi_option['header-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
            <div class="row">
                <div class="col-md-12">
                    <div id="logo">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img <?php if ($archi_option['logo_scroll']['url'] != '') { ?>class="logo-static"<?php } ?> src="<?php echo esc_url($archi_option['logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
                            <?php if ($archi_option['logo_scroll']['url'] != '') { ?>
                                <img class="logo-scroll" src="<?php echo esc_url($archi_option['logo_scroll']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
                            <?php } ?>
                        </a>
                    </div>
                    <span id="menu-btn"></span>
                    <!-- mainmenu begin -->
                    <nav>
                        <?php 
                            $menu_type_class = ''; 
                            if($archi_option['menu_type']=='dotted'){ 
                                $menu_type_class = '';
                            }elseif ($archi_option['menu_type']=='line') {
                                $menu_type_class = 'class="line-separator"';
                            }elseif ($archi_option['menu_type']=='circle') {
                                $menu_type_class = 'class="circle-separator"';
                            }elseif ($archi_option['menu_type']=='square') {
                                $menu_type_class = 'class="square-separator"';
                            }elseif ($archi_option['menu_type']=='plus') {
                                $menu_type_class = 'class="plus-separator"';
                            }elseif ($archi_option['menu_type']=='strip') {
                                $menu_type_class = 'class="strip-separator"'; 
                            }else{
                                $menu_type_class = 'class="no-separator"';
                            }    
                        ?>
                        <?php
                            $primary = array(
                                'theme_location'  => 'primary',
                                'menu'            => '',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="mainmenu" '.$menu_type_class.'>%3$s</ul>',
                                'depth'           => 0,
                            );
                            if ( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( $primary );
                            }
                        ?>                       
                    </nav>
                </div>
                <!-- mainmenu close -->
            </div>
        </div>
    </header>
    <!-- header close -->

<?php } ?>    