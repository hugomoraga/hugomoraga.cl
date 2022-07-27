<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "archi_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'archi_option',
        'use_cdn' => TRUE,
        'display_name'     => $theme->get('Name'),
        'display_version'  => $theme->get('Version'),
        'page_title' => 'Archi Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Archi Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => FALSE,
        'dev_mode'   => false,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'archi' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'archi' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'archi' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'archi' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( 'This is the sidebar content, HTML is allowed.', 'archi' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // ACTUAL DECLARATION OF SECTIONS
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-stackoverflow',
        'title' => esc_html__('Miscellaneous Settings', 'archi'),
        'fields' => array(   
            array(
                'id'       => 'animate-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Animation?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use animated effects for both mobile and desktop, just turn it off.', 'archi'),
                'default'  => true,
            ),   
            array(
                'id'       => 'animate-mobile-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Animation for Mobile?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use animated effects on mobile devices, just turn it off.', 'archi'),
                'default'  => true,
            ), 
            array(
                'id' => 'animation_mobile_screen_size',
                'type' => 'text',
                'title' => esc_html__('Select the screen size using animation effects.', 'archi'),
                'subtitle' => esc_html__('You do not want to use animation effects from screen sizes how much go to down?', 'archi'),
                'desc' => esc_html__('Set Mobile Screen Size: 480, 768, 980, etc...', 'archi'),
                'default' => ''
            ),              
            array(
                'id' => 'gmap_api',
                'type' => 'text',
                'title' => esc_html__('Google Map API Key', 'archi'),
                'subtitle' => esc_html__('Add your Google map api key', 'archi'),
                'desc' => esc_html__('Create your Gmap API key here: https://developers.google.com/maps/documentation/javascript/', 'archi'),
                'default' => 'AIzaSyDZJDaC3vVJjxIi2QHgdctp3Acq8UR2Fgk'
            ),                                     
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-repeat',
        'title' => esc_html__('Preload Settings', 'archi'),
        'fields' => array(            
            array(
                'id'       => 'preload-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Preload Off?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use preload, you can turn it off.', 'archi'),
                'default'  => true,
            ),  
            array(
                'id' => 'preloader_mode',
                'type' => 'select',
                'title' => esc_html__('Preloader Style', 'archi'),
                'subtitle' => esc_html__('Preloader style: preload logo or preload progress', 'archi'),
                'desc' => esc_html__('You can choose one of two preload style, Default: Progress Style.', 'archi'),
                'options'  => array(
                    'preloader_progress' => 'Progress Style',                    
                    'preloader_logo' => 'Logo Style',                                                                 
                ),
                'default' => 'preloader_progress',
            ),             
            array(
                'id' => 'preload-text-color',
                'type' => 'color',
                'title' => esc_html__('Preload Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the preload text color (default: #111111).', 'archi'),
                'default' => '#111111',
                'validate' => 'color',
            ), 
            array(
                'id' => 'preload-background-color',
                'type' => 'color',
                'title' => esc_html__('Preload Background Color', 'archi'),
                'subtitle' => esc_html__('Pick the preload background color (default: #000000).', 'archi'),
                'default' => '#000000',
                'validate' => 'color',
            ), 
			array(
                'id' => 'preload-typography',
                'type' => 'typography',
                'output' => array('#royal_preloader.royal_preloader_logo .royal_preloader_percentage, #jprePercentage'),
                'title' => esc_html__('Preloader percentage', 'archi'),
                'subtitle' => esc_html__('Number 100% running', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),	
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Logo Style', 'archi' ),
        'id'         => 'preload-logo-style',               
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'logo_preload',
                'type' => 'media',
                'required' => array( 'preloader_mode', '=', 'preloader_logo' ), 
                'url' => false,
                'title' => __('Logo Preload (Logo Style)', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your logo preload', 'archi'),
                'subtitle' => __('Recommended size: 192px & 28px', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),
            ),
            array(
                'id' => 'prelogo_width',
                'type' => 'text',
                'required' => array( 'preloader_mode', '=', 'preloader_logo' ), 
                'title' => __('Logo width (Logo Style)', 'archi'),
                'subtitle' => __('Input logo width, default: 192', 'archi'),
                'default' => '192'
            ),  
            array(
                'id' => 'prelogo_height',
                'type' => 'text',
                'required' => array( 'preloader_mode', '=', 'preloader_logo' ), 
                'title' => __('Logo height (Logo Style)', 'archi'),
                'subtitle' => __('Input logo height, default: 28', 'archi'),
                'default' => '28'
            ),			
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-picture',
        'title' => esc_html__('Logo & Favicon Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'favicon',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Favicon', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Recommended Size: 32x32', 'archi'),
                'subtitle' => esc_html__('favicon format: .png', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/favicon.png'),                     
            ),
            array(
                'id' => 'logo',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo static on header normal', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.                
                'subtitle' => esc_html__('The logo will be used on header normal and side navigation on mobile version.', 'archi'),
                'desc' => esc_html__('This is the logo you see first when visiting the site.', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),
            array(
                'id' => 'logo_scroll',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo scroll on header normal', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.                
                'subtitle' => esc_html__('Logo for header normal when scroll down page and use this logo.', 'archi'),
                'desc' => esc_html__('If you do not want to use this logo, it will default to using the static logo above instead.', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),    
            array(
                'id' => 'logo2',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo on Header Side Navigation', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.                
                'subtitle' => esc_html__('The logo will be used on header side navigation on desktop version.', 'archi'),
                'desc' => esc_html__('Recommended Size: 148x150', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo-2.png'),                     
            ),                                              
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => esc_html__('Topbar Header Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'topbar-onepage',
                'type'     => 'switch', 
                'title'    => esc_html__('Topbar for One-Page only?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the topbar for Onepage, just turn it off.', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'topbar-allpage',
                'type'     => 'switch', 
                'title'    => esc_html__('Topbar for all pages?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the topbar for all pages, just turn it off.', 'archi'),
                'default'  => true,
            ), 
			array(
                'id'       => 'topbar-woo-loginout-link',
                'type'     => 'switch', 
                'title'    => esc_html__('Show WooCommerce account link on the Topbar?', 'archi'),
                'subtitle' => esc_html__('If you do not want to show login/logout/register/my-account link on the topbar, just turn it off.', 'archi'),
                'default'  => false,
            ), 
            array(
                'id' => 'topbar-text-color',
                'type' => 'color',
                'title' => esc_html__('Topbar Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the topbar text color (default: #ffffff).', 'archi'),
                'default' => '#ffffff',
                'validate' => 'color',
            ),   
            array(
                'id' => 'topbar-border-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Topbar Border Bottom Color', 'archi'),
                'subtitle' => esc_html__('Pick the topbar border bottom color, default: rgba(255, 255, 255, 0.2)', 'archi'),
                'default'  => array(
                    'color' => '#ffffff',
                    'alpha' => '0.2'
                ),
            ),  
            array(
                'id' => 'info_list_text',
                'type' => 'editor',
                'title' => esc_html__('Topbar info text.', 'archi'),
                'subtitle' => esc_html__('Add contact info used the html code, this content will be displayed on the left side of the top header.', 'archi'),
                'desc' => __('First you select the "text" tab, then you add the html code, <a href="https://oceanthemes.ticksy.com/article/10212/" target="_blank">read more guide</a>', 'archi'),
                'default' => '',
            ),        
            array(
                'id' => 'topbar_col_left',
                'type' => 'select',
                'title' => esc_html__('Select Columns on left side of top header', 'archi'),
                'subtitle' => esc_html__('Select columns layout for your content on left side of top header.', 'archi'),
                'desc' => __('Use layout 12 columns in Bootstrap 3.x: <a href="http://getbootstrap.com/docs/3.3/css/#grid-example-basic" target="_blank">View layout</a>', 'archi'),
                'options'  => array(                    
                    '1' => '1 Columns',
                    '2' => '2 Columns',
                    '3' => '3 Columns',                    
                    '4' => '4 Columns', 
                    '5' => '5 Columns', 
                    '6' => '6 Columns', 
                    '7' => '7 Columns',                                                                 
                    '8' => '8 Columns', 
                    '9' => '9 Columns', 
                    '10' => '10 Columns', 
                    '11' => '11 Columns', 
                    '12' => '12 Columns', 
                    'none' => 'Hide this column',
                ),
                'default' => '9',
            ), 
            array(
                'id' => 'topbar_col_right',
                'type' => 'select',
                'title' => esc_html__('Select Columns on right side of top header', 'archi'),
                'subtitle' => esc_html__('Select columns layout for your content on right side of top header.', 'archi'),
                'desc' => __('Use layout 12 columns in Bootstrap 3.x: <a href="http://getbootstrap.com/docs/3.3/css/#grid-example-basic" target="_blank">View layout</a>', 'archi'),
                'options'  => array(                    
                    '1' => '1 Columns',
                    '2' => '2 Columns',
                    '3' => '3 Columns',                    
                    '4' => '4 Columns', 
                    '5' => '5 Columns', 
                    '6' => '6 Columns', 
                    '7' => '7 Columns',                                                                 
                    '8' => '8 Columns', 
                    '9' => '9 Columns', 
                    '10' => '10 Columns', 
                    '11' => '11 Columns', 
                    '12' => '12 Columns', 
                    'none' => 'Hide this column',
                ),
                'default' => '3',
            ),                      
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Multi-Languages', 'archi' ),
        'id'         => 'top-header-multi-languages',        
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'multi_languages_shortcode',
                'type' => 'textarea',
                'title' => esc_html__('Add shortcode multi-languages on right side of top header.', 'archi'),
                'subtitle' => esc_html__('Add shortcode from your multi-languages plugins, eg: WPML, qTranslate-X, Polylang, etc...', 'archi'),
                'default' => '',
            ), 
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-qrcode',
        'title' => esc_html__('Header Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'header-wideboxed',
                'type'     => 'switch', 
                'title'    => esc_html__('Header Wide (FullWidth)?', 'archi'),
                'subtitle' => esc_html__('If you want the content on the header to be wider, just turn it on to use this function.', 'archi'),
                'default'  => false,
            ),  
            array(
                'id' => 'header_layout',
                'type' => 'select',
                'title' => esc_html__('Header Layouts', 'archi'),
                'subtitle' => esc_html__('There are three header layouts to use for your site.', 'archi'),
                'desc' => esc_html__('Header layout : select header on top page or header on side left.', 'archi'),
                'options'  => array(
                    'htop_page' => 'Header Normal',                    
                    'hleft_side' => 'Side Navigation Dark', 
                    'hleft_side_light' => 'Side Navigation Light',                                                                
                ),
                'default' => 'htop_page',
            ),
            array(
                'id' => 'header_position',
                'type' => 'select',
                'title' => esc_html__('Header Position', 'archi'),
                'subtitle' => esc_html__('Header Position is only used for header layout: Header Normal.', 'archi'),
                'desc' => esc_html__('You can choose one of two locations to set the header for your site.', 'archi'),
                'options'  => array(
                    'ontop_page' => 'Header on top',                    
                    'onbottom_page' => 'Header on bottom',                                                                 
                ),
                'default' => 'ontop_page',
            ),            
            array(
                'id' => 'header_style',
                'type' => 'select',
                'title' => esc_html__('Header Style', 'archi'),
                'subtitle' => esc_html__('Header Style is only used for header layout: Header Normal.', 'archi'),
                'desc' => esc_html__('There are four default styles for you to choose from: Dark or Light or Overlay or Transparent, You can also customize the color of your style by selecting "Header Customize".', 'archi'),
                'options'  => array(
                    'header_dark' => 'Header Dark',
                    'header_light' => 'Header Light', 
                    'header_overlay' => 'Header Overlay', 
                    'header_transparent' => 'Header Transparent', 
                    'header_customize'  => 'Header Customize'                                                
                ),
                'default' => 'header_dark',
            ),                    
            array(
                'id' => 'header-background-color',
                'type' => 'color',
                'required' => array( 'header_style', '=', 'header_customize' ), 
                'title' => esc_html__('Header Static Background Color', 'archi'),
                'subtitle' => esc_html__('Pick the header static background color for the theme (default: rgba(0,0,0,0.5)).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),                    
            array(
                'id' => 'header-small-background-color',
                'type' => 'color',
                'required' => array( 'header_style', '=', 'header_customize' ), 
                'title' => esc_html__('Header Scroll Background Color', 'archi'),
                'subtitle' => esc_html__('Pick the header scroll background color for the theme (default: #18191b).', 'archi'),
                'default' => '#18191b',
                'validate' => 'color',
            ),
            array(
                'id' => 'header-small-border-bottom-color',
                'type' => 'color',
                'required' => array( 'header_style', '=', 'header_customize' ), 
                'title' => esc_html__('Header Scroll Border Bottom Color', 'archi'),
                'subtitle' => esc_html__('Pick the header scroll Border Bottom color for the theme (default: #333333).', 'archi'),
                'default' => '#333333',
                'validate' => 'color',
            ),                    
            array(
                'id' => 'header-text-color',
                'type' => 'color',
                'required' => array( 'header_style', '=', 'header_customize' ), 
                'title' => esc_html__('Header Static (Menu Item Color)', 'archi'),
                'subtitle' => esc_html__('Pick the header static text color for the theme (default: #fff).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),  
            array(
                'id' => 'header-scroll-text-color',
                'type' => 'color',
                'required' => array( 'header_style', '=', 'header_customize' ), 
                'title' => esc_html__('Header Scroll (Menu Item Color)', 'archi'),
                'subtitle' => esc_html__('Pick the header scroll text color for the theme (default: #606060).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),   
            array(
                'id' => 'menu-item-active-hover-color',
                'type' => 'color',
                'required' => array( 'header_style', '=', 'header_customize' ), 
                'title' => esc_html__('Header Menu Item Active and Hover Color', 'archi'),
                'subtitle' => esc_html__('Pick the header menu item active and hover color for the theme (default: use main color follow the theme).', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),          
            array(
                'id' => 'menu_type',
                'type' => 'select',
                'title' => esc_html__('Menu style', 'archi'),
                'subtitle' => esc_html__('Icon between menu items', 'archi'),
                'desc' => esc_html__('Select icon style for your menu.', 'archi'),
                'options'  => array(
                    'dotted' => 'Dotted Separator',
                    'line' => 'Line Separator',
                    'circle' => 'Circle Separator',
                    'square' => 'Square Separator',
                    'plus' => 'Plus Separator',
                    'strip' => 'Strip Separator',
                    'no' => 'No Separator',
                ),
                'default' => 'dotted',
            ), 
            array(
                'id'       => 'hideshow_header',
                'type'     => 'switch', 
                'title'    => esc_html__('Header hide before scroll to show?', 'archi'),
                'subtitle' => esc_html__('Header will be hidden when you visit the website and will be displayed up when you pull down the site, This feature just use for Header Position: Header on top and Header Layouts: Header Normal.', 'archi'),
                'default'  => false,
            ),   
            array(
                'id'       => 'desktop-sticky',
                'type'     => 'switch', 
                'title'    => esc_html__('Desktop Header Sticky?', 'archi'),
                'subtitle' => esc_html__('If you do not want the header to stick when viewed on the desktop, just turn it off.', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'mobile-sticky',
                'type'     => 'switch', 
                'title'    => esc_html__('Mobile Header Sticky?', 'archi'),
                'subtitle' => esc_html__('If you want the header to stick when viewed on mobile devices, just turn it on.', 'archi'),
                'default'  => false,
            ),                                             
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Mobile Styling', 'archi' ),
        'id'         => 'mobile-styling',
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'hm-background-color',
                'type' => 'color',
                'title' => esc_html__('Header Mobile Background Color', 'archi'),
                'subtitle' => esc_html__('Pick the header background color for the theme.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'hm-text-color',
                'type' => 'color',
                'title' => esc_html__('Header Mobile Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the header text color for the theme.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'hm-border-color',
                'type' => 'color',
                'title' => esc_html__('Header Mobile Border Menu Item Color', 'archi'),
                'subtitle' => esc_html__('Pick the header mobile border bottom menu item color.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'button-menu-color',
                'type' => 'color',
                'title' => esc_html__('Button Menu Color', 'archi'),
                'subtitle' => esc_html__('Pick the button menu color.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'button-menu-bgcolor',
                'type' => 'color',
                'title' => esc_html__('Button Menu Background Color', 'archi'),
                'subtitle' => esc_html__('Pick the button menu background color.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'hmobile_arrow_down',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Arrow Down (Button Collapse)', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'subtitle' => esc_html__('Upload your arrow image', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/ui/arrow-down.png'),                     
            ), 
            array(
                'id' => 'hmobile_arrow_up',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Arrow Up (Button Collapse)', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'subtitle' => esc_html__('Upload your arrow image', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/ui/arrow-up.png'),                     
            ), 
        ),        
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Landing Page', 'archi' ),
        'id'         => 'header-landing-page',
        'subsection' => true,
        'fields'     => array(                        
            array(
                'id'       => 'hideshow_header_landing',
                'type'     => 'switch', 
                'title'    => esc_html__('Header hide before scroll to show on Landing Page?', 'archi'),
                'subtitle' => esc_html__('Header will be hidden when you visit the website and will be displayed up when you pull down the site, This feature just use for Header on landing page, if you want header always show -> Just need turn it Off.', 'archi'),
                'default'  => true,
            ),   
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Side Navigation', 'archi' ),
        'id'         => 'side-navigation-styling',
        'subsection' => true,
        'fields'     => array(                        
            array(
                'id' => 'header-border-color',
                'type' => 'color',
                'title' => esc_html__('Menu Item Border Color', 'archi'),
                'subtitle' => esc_html__('Customize the color according to your wishes (default: #1b1b1b).', 'archi'),
                'default' => '#1b1b1b',
                'validate' => 'color',
            ),
            array(
                'id' => 'sidenav_contactinfo_extend',
                'type' => 'editor',
                'title' => esc_html__('Add your contact info extend on bottom header.', 'archi'),
                'subtitle' => esc_html__('Add contact info used the html code, this content will be displayed on the bottom of the side navigation.', 'archi'),
                'default' => '',
            ),  
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Dropdown Menu Style', 'archi' ),
        'id'         => 'dropdown-menu-styling',
        'subsection' => true,
        'fields'     => array( 
            array(
                'id'       => 'dropdown-menu-customize',
                'type'     => 'switch', 
                'title'    => esc_html__('Customize the dropdown menu?', 'archi'),
                'subtitle' => esc_html__('If you want to customize the dropdown menu, just turn on it.', 'archi'),
                'default'  => 0,
            ),  
            array(
                'id' => 'dropdown-menu-width',
                'type' => 'text',
                'required' => array( 'dropdown-menu-customize', '=', '1' ),
                'title' => esc_html__('Dropdown Menu Width', 'archi'),
                'subtitle' => esc_html__('Add your dropdown menu width', 'archi'),
                'desc' => esc_html__('Change your sub menu (dropdown menu) width, default: 220', 'archi'),
                'default' => ''
            ),              
            array(
                'id' => 'dropdown-bgcolor',
                'type' => 'color',
                'required' => array( 'dropdown-menu-customize', '=', '1' ),
                'title' => esc_html__('Dropdown Background Color', 'archi'),
                'subtitle' => esc_html__('Background color', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'dropdown-text-color',
                'type' => 'color',
                'required' => array( 'dropdown-menu-customize', '=', '1' ),
                'title' => esc_html__('Dropdown Menu Item Text Color', 'archi'),
                'subtitle' => esc_html__('Menu item text color', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'dropdown-menu-item-active-hover-color',
                'type' => 'color',
                'required' => array( 'dropdown-menu-customize', '=', '1' ),
                'title' => esc_html__('Dropdown Menu Item Active and Hover Color', 'archi'),
                'subtitle' => esc_html__('Pick the dropdown menu item active and hover color for the theme (default: use main color follow the theme), You need to be sure click "On" customize the dropdown menu? before custom the colours.', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),
            array(
                'id' => 'dropdown-border-color',
                'type' => 'color',
                'required' => array( 'dropdown-menu-customize', '=', '1' ),
                'title' => esc_html__('Dropdown Border Color', 'archi'),
                'subtitle' => esc_html__('Border menu item color', 'archi'),
                'default' => '',
                'validate' => 'color',
            ),            
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => esc_html__('Sub-Header Settings', 'archi'),
        'fields' => array( 
            array(
                'id'       => 'subpage-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Top-Pages?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the top page, just turn it off', 'archi'),
                'default'  => true,
            ),     
            array(
                'id'       => 'archicrumb-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Breadcrumb on Top-Pages?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the Breadcrumb on top page, just turn it off', 'archi'),
                'default'  => true,
            ),       
            array(
                'id' => 'bg_allpage',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Background Header All Pages', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Background for Top Header on All Pages', 'archi'),
                'subtitle' => esc_html__('The Background used for Top Header on All Pages', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),                     
            ),            
            array(
                'id' => 'subpage-textcolor',
                'type' => 'color',
                'title' => esc_html__('Top-Pages Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the topbar text color (default color: #eceff3).', 'archi'),
                'default' => '#eceff3',
                'validate' => 'color',
            ),   
            array(
                'id' => 'subpage-bgcolor',
                'type' => 'color',
                'title' => esc_html__('Top-Pages Background Color', 'archi'),
                'subtitle' => esc_html__('You must remove all of the background images are used in the inner pages before using this background color, (default color: #222)', 'archi'),
                'default' => '#222',
                'validate' => 'color',
            ), 
            array(
                'id'             => 'subpage-spacing',
                'type'           => 'spacing',
                'output'   => array( '#subheader, .has-topbar #subheader, .de-navbar-left #subheader' ),
                // An array of CSS selectors to apply this font style to
                'mode'     => 'padding',
                // absolute, padding, margin, defaults to padding
                'all'      => false,
                // Have one field that applies to all
                'top'           => true,     // Disable the top
                'right'         => false,     // Disable the right
                'bottom'        => true,     // Disable the bottom
                'left'          => false,     // Disable the left
                'units'          => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended'=> 'true',    // Allow users to select any type of unit
                //'display_units' => 'false',   // Set to false to hide the units if the units are specified
                'title'          => __('Padding/Margin Option', 'archi'),
                'subtitle'       => __('Allow you to choose the spacing or margin for top-page that you want.', 'archi'),
                'desc'           => __('You can enable or disable any piece of this field. Top, Bottom or Units.', 'archi'),
                'default'            => array(
                    'padding-top'     => '', 
                    'padding-right'   => '', 
                    'padding-bottom'  => '', 
                    'padding-left'    => '',
                    'units'          => 'px', 
                )                                         
            ), 
            array(
                'id' => 'top_page_contact_info',
                'type' => 'editor',
                'title' => esc_html__('Top Page Contact Info', 'archi'),
                'subtitle' => esc_html__('Enter your html code', 'archi'),
                'desc' => esc_html__('', 'archi'),
                'default' => ''
            ),                                        
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-font',
        'title' => esc_html__('Typography', 'archi'),
        'fields' => array(
            array(
                'id' => 'h1-typography',
                'type' => 'typography',
                'output' => array('h1'),
                'title' => esc_html__('Heading 1', 'archi'),
                'subtitle' => esc_html__('Specify the heading 1 font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),   
            array(
                'id' => 'h2-typography',
                'type' => 'typography',
                'output' => array('h2'),
                'title' => esc_html__('Heading 2', 'archi'),
                'subtitle' => esc_html__('Specify the heading 2 font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h3-typography',
                'type' => 'typography',
                'output' => array('h3'),
                'title' => esc_html__('Heading 3', 'archi'),
                'subtitle' => esc_html__('Specify the heading 3 font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h4-typography',
                'type' => 'typography',
                'output' => array('h4'),
                'title' => esc_html__('Heading 4', 'archi'),
                'subtitle' => esc_html__('Specify the heading 4 font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h5-typography',
                'type' => 'typography',
                'output' => array('h5'),
                'title' => esc_html__('Heading 5', 'archi'),
                'subtitle' => esc_html__('Specify the heading 5 font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h6-typography',
                'type' => 'typography',
                'output' => array('h6'),
                'title' => esc_html__('Heading 6', 'archi'),
                'subtitle' => esc_html__('Specify the heading 6 font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),    
            array(
                'id' => 'menu-typography',
                'type' => 'typography',
                'output' => array('#mainmenu > li > a, .mainmenu > li > a'),
                'title' => esc_html__('Menu item (custom for parent menu item)', 'archi'),
                'subtitle' => esc_html__('Specify the Menu item font properties.', 'archi'),
                'google' => true, 
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true, 
                'color' => false,           
                'units'       =>'px',         
                'default' => array(
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => '',
                ),
            ),
            array(
                'id' => 'dropdown-menu-typography',
                'type' => 'typography',
                'output' => array('#mainmenu li li a, .mainmenu li li a'),
                'title' => esc_html__('Menu item (custom for dropdown menu item)', 'archi'),
                'subtitle' => esc_html__('Specify the Menu item font properties.', 'archi'),
                'google' => true, 
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true, 
                'color' => false,           
                'units'       =>'px',         
                'default' => array( 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => '',
                ),
            ),                                   
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-briefcase',
        'title' => esc_html__('Portfolio Settings', 'archi'),
        'fields' => array(             
            array(
                'id' => 'ajax_work',
                'type' => 'switch',
                'title' => esc_html__('Portfolio Ajax Load content on page?', 'archi'),
                'subtitle' => esc_html__('You want to display the content of each portfolio on a single project page or on a lightbox popup? Default: using lightbox popup.', 'archi'),
                'desc' => esc_html__('Use for Portfolio for all OT Portfolios elements, if you want portfolio content show on a single project page, just turn it off.', 'archi'),
                'default'  => true,
            ), 
            array(
                'id' => 'portfolio_loading',
                'type' => 'text',
                'title' => esc_html__('Text when portfolio popup is loading.', 'archi'),
                'subtitle' => '',                                              
                'default' => 'Loading...'
            ), 
            array(
                'id' => 'portfolio_closex',
                'type' => 'text',
                'title' => esc_html__('Text Close inside portfolio content.', 'archi'),
                'subtitle' => '',                                              
                'default' => 'Close (Esc)'
            ),                                                       
         )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Portfolio Archive Page', 'archi' ),
        'id'         => 'portfolio-archive',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'portfolio_archive',
                'type'     => 'select',
                'title'    => __( 'Portfolio Archive', 'archi' ),
                'subtitle' => __( 'Select page default for the portfolio archive page.', 'archi' ),
                'desc'     => __( '', 'archi' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'archive_default' => esc_html__( 'Archive page default', 'archi' ),
                    'archive_custom' => esc_html__( 'Archive page custom', 'archi' ),
                ),
                'default'  => 'archive_default'
            ),
            array(
                'id'       => 'portfolio_linkpage',
                'type'     => 'select',
                'required' => array( 'portfolio_archive', '=', 'archive_custom' ),
                'data'     => 'pages',
                'title'    => __( 'Select a custom portfolio page', 'archi' ),
                'subtitle' => __( 'Select a page for archive portfolio page.', 'archi' ),
                'desc'     => __( 'Default use archive portfolio page, select a page to instead archive portfolio page.', 'archi' ),
            ),           
            array(
                'id' => 'portfolio_thumbnail',
                'type' => 'media',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Background Portfolio on Top Page', 'archi'),
                'subtitle' => esc_html__('Using for Archive page and Category page.', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),    
            array(
                'id' => 'portfolio_title',
                'type' => 'text',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Title in Archive Page ', 'archi'),
                'subtitle' => '',                                              
                'default' => 'Portfolio'
            ),
            array(
                'id'       => 'archive_portfolio_filter',
                'type'     => 'switch', 
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title'    => esc_html__('Portfolio Filter?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the filtering feature on the Archive page, just turn it off.', 'archi'),
                'default'  => true,
            ), 
            array(
                'id' => 'portfolio_text_all',
                'type' => 'text',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Text Show All', 'archi'),
                'subtitle' => 'Add your button text filter, default: All Project',                                              
                'default' => ''
            ),
            array(
                'id' => 'portfolio_show',
                'type' => 'text',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Show Posts', 'archi'),
                'subtitle' => 'Show number posts in portfolio archive page',                                              
                'default' => '8'
            ),  
            array(
                'id' => 'portfolio_columns',
                'type' => 'select',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Portfolio Columns style', 'archi'),
                'subtitle' => esc_html__('Select Portfolio Columns style.', 'archi'),
                'desc' => esc_html__('Default show portfolio archive page is grid 4 columns.', 'archi'),
                'options'  => array(
                    '6' => 'Columns 6',
                    '5' => 'Columns 5',
                    '4' => 'Columns 4',
                    '3' => 'Columns 3',
                    '2' => 'Columns 2',
                ),
                'default' => '4',
            ),  
            array(
                'id' => 'projects_item_gap',
                'type' => 'text',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Grid gutter width', 'archi'),
                'subtitle' => 'Change default spacing between columns of projects, enter new value in pixels (Example: 10).',                                              
                'default' => ''
            ),
            array(
                'id'       => 'crop_project_images',
                'type'     => 'switch', 
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title'    => esc_html__('Crop Project Images?', 'archi'),
                'subtitle' => esc_html__('If you do not want to crop project images on the Archive page, just turn it off.', 'archi'),
                'default'  => true,
            ), 
            array(
                'id' => 'project_image_width',
                'type' => 'text',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Crop image width', 'archi'),
                'subtitle' => 'Default: 700',                                              
                'default' => ''
            ),
            array(
                'id' => 'project_image_height',
                'type' => 'text',
                'required' => array( 'portfolio_archive', '=', 'archive_default' ),
                'title' => esc_html__('Crop image height', 'archi'),
                'subtitle' => 'Default: 466',                                              
                'default' => ''
            ), 
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Portfolio Single Page', 'archi' ),
        'id'         => 'portfolio-single',
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'bg_top_portfolio_single',
                'type' => 'media',
                'title' => esc_html__('Background on Top Page', 'archi'),
                'subtitle' => esc_html__('Background single portfolio page.', 'archi'),                        
                'default' => '',
            ), 
            array(
                'id' => 'single_navigation',
                'type' => 'select',
                'title' => esc_html__('Position for Previous/next post navigation', 'archi'),
                'subtitle' => esc_html__('Select navigation style single portfolio.', 'archi'),
                'desc' => esc_html__('Default navigation on top single page.', 'archi'),
                'options'  => array(
                    'navontop' => 'Previous/next on Top',
                    'navonbottom' => 'Previous/next on bottom',
                    'none' => 'None'
                ),
                'default' => 'navontop',
            ),    
            array(
                'id' => 'project_sharing',
                'type' => 'switch',
                'title' => esc_html__('Social Sharing button?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the project sharing feature on social networks, turn it off.', 'archi'),
                'desc' => esc_html__('Social Sharing button on single portfolio', 'archi'),
                'default'  => true,
            ),  
            array(
                'id'       => 'project_sharing_multi_select',
                'type'     => 'select',
                'multi'    => true,
                'title'    => __('Multi Select Option for Social Sharing Button', 'archi'), 
                'subtitle' => __('Selected some social network sharing do you want.', 'archi'),
                'desc'     => __('Clicked the mouse on input and dropdown a list social network for you choose.', 'archi'),
                //Must provide key => value pairs for radio options
                'options'  => array(
                    'fb' => 'Facebook',
                    'tw' => 'Twitter',
                    'gg' => 'Google Plus',
                    'pinter' => 'Pinterest',
                    'tumb' => 'Tumblr',
                    'digg' => 'Digg',
                    'redd' => 'Reddit',
                    'linked' => 'LinkedIn',
                    'stumb' => 'StumbleUpon',
                    'delici' => 'Delicious',
                    'vk' => 'Vk',
                ),
                'default'  => array('fb','tw')
            ),          
            array(
                'id' => 'portfolio_link',
                'type' => 'text',
                'title' => esc_html__('Link to list portfolio page', 'archi'),
                'subtitle' => 'Add link to portfolio page',                                              
                'default' => ''
            ), 
            array(
                'id' => 'portfolio_navigation',
                'type' => 'select',
                'title' => esc_html__('Select Previous/next post navigation', 'archi'),
                'subtitle' => esc_html__('', 'archi'),
                'desc' => esc_html__('Previous/next post navigation by all category or same category.', 'archi'),
                'options'  => array(
                    'allcategory' => 'All Category',
                    'samecategory' => 'Same Category',
                ),
                'default' => 'allcategory',
            ),
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Portfolio Filter Style', 'archi' ),        
        'id'         => 'portfolio-filter',
        'subsection' => true,
        'fields'     => array(     
            array(
                'id'       => 'switch-custom-portfolio-filter',
                'type'     => 'switch', 
                'title'    => esc_html__('Customize Portfolio Filter?', 'archi'),
                'subtitle' => esc_html__('If you want to customize the filter of the portfolio, just turn it on.', 'archi'),
                'default'  => false,
            ),         
            array(
                'id'       => 'filter-link-color',
                'type'     => 'link_color',
                'output'   => array( '#filters a, .filters a' ),
                'title'    => esc_html__( 'Filter Links Color Option', 'archi' ),
                'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'archi' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'archi' ),
                //'regular'   => false, // Disable Regular Color
                //'hover'     => false, // Disable Hover Color
                'active'    => false, // Disable Active Color
                //'visited'   => true,  // Enable Visited Color
                'default'  => array(
                    'regular' => '#888',
                    'hover'   => '#888',
                )
            ),
            array(
                'id' => 'filter-link-active-color',
                'type' => 'color',                
                'title' => esc_html__('Filter links active color', 'archi'),
                'subtitle' => esc_html__('Pick the Filter links active color for the theme (default: #222).', 'archi'),
                'default' => '#111',
                'validate' => 'color',
            ),
            array(
                'id' => 'filter-link-hover-bgcolor',
                'type' => 'color',                
                'title' => esc_html__('Filter links hover background color', 'archi'),
                'subtitle' => esc_html__('Pick the Filter links hover background color for the theme (default: #222).', 'archi'),
                'default' => '#111',
                'validate' => 'color',
            ),
            array(
                'id' => 'filter-link-active-bgcolor',
                'type' => 'color',                
                'title' => esc_html__('Filter links active background color', 'archi'),
                'subtitle' => esc_html__('Pick the Filter links active background color for the theme (default: #222).', 'archi'),
                'default' => '#FAB207',
                'validate' => 'color',
            ),            
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-blogger',
        'title' => esc_html__('Blog Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'blog-layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Blog Layout', 'archi' ),
                'subtitle' => esc_html__( 'Click on image layout to choose', 'archi' ),
                'desc'     => esc_html__( 'Select layout you want use for all your blog page.', 'archi' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => get_template_directory_uri().'/images/theme-options/1c.png'
                    ),                    
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => get_template_directory_uri().'/images/theme-options/2cl.png'
                    ),    
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => get_template_directory_uri().'/images/theme-options/2cr.png'
                    ),                                 
                ),
                'default'  => '3'
            ),
            array(
                'id' => 'blog_col_left',
                'type' => 'select',
                'title' => esc_html__('Resize Columns on left side (Main Content)', 'archi'),
                'subtitle' => esc_html__('Select columns layout for your content on left side of blog page.', 'archi'),
                'desc' => __('Use layout 12 columns in Bootstrap 3.x: <a href="http://getbootstrap.com/docs/3.3/css/#grid-example-basic" target="_blank">View layout</a>', 'archi'),
                'options'  => array(                    
                    '1' => '1 Columns',
                    '2' => '2 Columns',
                    '3' => '3 Columns',                    
                    '4' => '4 Columns', 
                    '5' => '5 Columns', 
                    '6' => '6 Columns', 
                    '7' => '7 Columns',                                                                 
                    '8' => '8 Columns', 
                    '9' => '9 Columns', 
                    '10' => '10 Columns', 
                    '11' => '11 Columns', 
                    '12' => '12 Columns', 
                ),
                'default' => '8',
            ), 
            array(
                'id' => 'blog_col_right',
                'type' => 'select',
                'title' => esc_html__('Resize Columns on right side (Sidebar)', 'archi'),
                'subtitle' => esc_html__('Select columns layout for your content on right side of blog page.', 'archi'),
                'desc' => __('Use layout 12 columns in Bootstrap 3.x: <a href="http://getbootstrap.com/docs/3.3/css/#grid-example-basic" target="_blank">View layout</a>', 'archi'),
                'options'  => array(                    
                    '1' => '1 Columns',
                    '2' => '2 Columns',
                    '3' => '3 Columns',                    
                    '4' => '4 Columns', 
                    '5' => '5 Columns', 
                    '6' => '6 Columns', 
                    '7' => '7 Columns',                                                                 
                    '8' => '8 Columns', 
                    '9' => '9 Columns', 
                    '10' => '10 Columns', 
                    '11' => '11 Columns', 
                    '12' => '12 Columns', 
                ),
                'default' => '4',
            ),
            array(
                'id' => 'blog_excerpt',
                'type' => 'text',
                'title' => esc_html__('Blog custom excerpt lenght', 'archi'),
                'subtitle' => esc_html__('Input Blog custom excerpt lenght', 'archi'),
                'desc' => esc_html__('Blog custom excerpt lenght', 'archi'),
                'default' => '30'
            ),
            array(
                'id' => 'blog_btntext',
                'type' => 'text',
                'title' => esc_html__('Blog Button Text', 'archi'),
                'subtitle' => esc_html__('Leave a blank will be use translate text from language file', 'archi'),
                'desc' => esc_html__('Default button text: Read More', 'archi'),
                'default' => 'Read More'
            ),                                   
         )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Single Page', 'archi' ),
        'id'         => 'post-single',
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'the_blog_single',
                'type' => 'text',
                'title' => esc_html__('The Blog Single Title', 'archi'),
                'subtitle' => esc_html__('Input blog single', 'archi'),
                'desc' => esc_html__('The Blog Single Title', 'archi'),
                'default' => 'The Blog Single'
            ),      
            array(
                'id' => 'single_sharing',
                'type' => 'switch',
                'title' => esc_html__('Social Share button?', 'archi'),
                'subtitle' => esc_html__('If you do not want to use the post sharing feature on social networks, turn it off.', 'archi'),
                'desc' => esc_html__('Social Share button on single blog', 'archi'),
                'default'  => true,
            ),  
            array(
                'id'       => 'single_sharing_multi_select',
                'type'     => 'select',
                'multi'    => true,
                'title'    => __('Multi Select Option for Social Sharing Button', 'archi'), 
                'subtitle' => __('Selected some social network sharing do you want.', 'archi'),
                'desc'     => __('Clicked the mouse on input and dropdown a list social network for you choose.', 'archi'),
                //Must provide key => value pairs for radio options
                'options'  => array(
                    'fb' => 'Facebook',
                    'tw' => 'Twitter',
                    'gg' => 'Google Plus',
                    'pinter' => 'Pinterest',
                    'tumb' => 'Tumblr',
                    'digg' => 'Digg',
                    'redd' => 'Reddit',
                    'linked' => 'LinkedIn',
                    'stumb' => 'StumbleUpon',
                    'delici' => 'Delicious',
                    'vk' => 'Vk',
                ),
                'default'  => array('fb','tw')
            ),        
            array(
                'id' => 'entry_meta_switch',
                'type' => 'switch',
                'title' => esc_html__('Entry Meta?', 'archi'),
                'subtitle' => esc_html__('Look, it\'s on!', 'archi'),
                'desc' => esc_html__('On/Off showing author name, catagory and comment in the single blog page?', 'archi'),
                'default'  => true,
            ),
            array(
                'id'       => 'entry_meta_multi_select',
                'type'     => 'select',
                'multi'    => true,
                'title'    => __('Multi Select Option for Entry Meta', 'archi'), 
                'subtitle' => __('Selected entry meta do you want show on single blog page.', 'archi'),
                'desc'     => __('Clicked the mouse on input and dropdown a list entry meta for you choose.', 'archi'),
                //Must provide key => value pairs for radio options
                'options'  => array(
                    'author' => 'Author',
                    'cate' => 'Category',
                    'tag' => 'Tag',
                    'comment' => 'Comment'
                ),
                'default'  => array( 'author', 'cate', 'tag', 'comment' )
            ),         
            array(
                'id' => 'post_navigation',
                'type' => 'select',
                'title' => esc_html__('Select Previous/next post navigation', 'archi'),
                'subtitle' => esc_html__('', 'archi'),
                'desc' => esc_html__('Previous/next post navigation by all category or same category.', 'archi'),
                'options'  => array(
                    'allcategory' => 'All Category',
                    'samecategory' => 'Same Category',
                ),
                'default' => 'allcategory',
            ),
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Post Slider', 'archi' ),
        'id'         => 'post-slider',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'post-slide-autoplay',
                'type'     => 'switch', 
                'title'    => esc_html__('Slide Auto Play?', 'archi'),
                'subtitle' => esc_html__('If you do not want the slider to run automatically, just turn it off', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'post-slide-transition',
                'type'     => 'switch', 
                'title'    => esc_html__('Slide Transition Fade?', 'archi'),
                'subtitle' => esc_html__('If you want to use the fade effect for the slider, just turn it on.', 'archi'),
                'default'  => false,
            ), 
            array(
                'id'            => 'post-slide-speed',
                'type'          => 'slider',
                'title'         => esc_html__( 'Slide Speed', 'archi' ),
                'subtitle'      => esc_html__( 'This slide displays the value as a speed.', 'archi' ),
                'desc'          => esc_html__( 'Slider description. Min: 100, max: 3000, step: 200, default value: 200', 'archi' ),
                'default'       => 200,
                'min'           => 0,
                'step'          => 100,
                'max'           => 3000,
                'display_value' => 'label'
            ),   
            array(
                'id'            => 'post-slide-pagination-speed',
                'type'          => 'slider',
                'title'         => esc_html__( 'Slide Pagination Speed', 'archi' ),
                'subtitle'      => esc_html__( 'This slide displays the value as a pagination speed.', 'archi' ),
                'desc'          => esc_html__( 'Slider description. Min: 100, max: 3000, step: 500, default value: 800', 'archi' ),
                'default'       => 800,
                'min'           => 0,
                'step'          => 100,
                'max'           => 3000,
                'display_value' => 'label'
            ), 
            array(
                'id'            => 'post-slide-rewind-speed',
                'type'          => 'slider',
                'title'         => esc_html__( 'Slide Rewind Speed', 'archi' ),
                'subtitle'      => esc_html__( 'This slide displays the value as a rewind speed.', 'archi' ),
                'desc'          => esc_html__( 'Slider description. Min: 100, max: 3000, step: 500, default value: 1000', 'archi' ),
                'default'       => 1000,
                'min'           => 0,
                'step'          => 100,
                'max'           => 3000,
                'display_value' => 'label'
            ),    
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-cogs',
        'title' => esc_html__('Services Settings', 'archi'),
        'fields' => array(            
            array(
                'id' => 'archive_service_title',
                'type' => 'text',
                'title' => esc_html__('Archive Service Page Title', 'archi'),
                'subtitle' => esc_html__('Leave a blank will be use the_archive_title() to instead.', 'archi'),
                'desc' => esc_html__('Archive Service Page Title', 'archi'),
                'default' => 'SERVICES'
            ), 
            array(
                'id' => 'archive_service_read',
                'type' => 'text',
                'title' => esc_html__('Service Button Text', 'archi'),
                'subtitle' => esc_html__('Leave a blank will be use translate text from language file.', 'archi'),
                'desc' => esc_html__('Button Text use on Archive Service Page only', 'archi'),
                'default' => 'Read More'
            ), 
            array(
                'id' => 'service_per_page',
                'type' => 'text',
                'title' => esc_html__('Number items per page', 'archi'),
                'subtitle' => esc_html__('Leave a blank will be default: 8 items per page.', 'archi'),
                'desc' => esc_html__('', 'archi'),
                'default' => ''
            ), 
            array(
                'id' => 'archive_service_style',
                'type' => 'select',
                'title' => esc_html__('Archive Service Page Style', 'archi'),
                'subtitle' => esc_html__('Select Archive Service Style', 'archi'),
                'desc' => esc_html__('Default archive service grid.', 'archi'),
                'options'  => array(
                    'sgrid' => 'Style Grid',
                    'slist' => 'Style List',
                ),
                'default' => 'sgrid',
            ),                    
         )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Service Single', 'archi' ),
        'id'         => 'services-single',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'single-service-layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Single service option layout', 'archi' ),
                'subtitle' => esc_html__( 'Select option: page fullwidth or page left sidebar.', 'archi' ),
                'desc'     => esc_html__( 'Select option: page fullwidth or page left sidebar, default: page left sidebar.', 'archi' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                ),
                'default'  => '2'
            ),  
			array(
                'id' => 'service_fullwidth',
                'type' => 'select',
                'title' => esc_html__('Single service Full', 'archi'),
                'subtitle' => esc_html__('Applies with fullwidth layout.', 'archi'),
                'desc' => esc_html__('FullWidth with container or without container?', 'archi'),
                'options'  => array(
                    'no' => 'No',
                    'yes' => 'Yes',
                ),
                'default' => 'no',
            ), 
        ),        
    ) );     
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Style Grid Option', 'archi' ),
        'id'         => 'services-archive',
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'service_columns',
                'type' => 'select',
                'title' => esc_html__('Column per Row', 'archi'),
                'subtitle' => esc_html__('', 'archi'),
                'desc' => esc_html__('Setup how much column per row?', 'archi'),
                'options'  => array(
                    'cl2' => '2 Column',
                    'cl3' => '3 Column',
                    'cl4' => '4 Column',
                    'cl6' => '6 Column',
                ),
                'default' => 'cl4',
            ), 
            array(
                'id' => 'service_img',
                'type' => 'select',
                'title' => esc_html__('Show Image on a service post?', 'archi'),
                'subtitle' => esc_html__('', 'archi'),
                'desc' => esc_html__('Select show image position of Services', 'archi'),
                'options'  => array(
                    'imgabove' => 'Image above content',
                    'imgbelow' => 'Image below content',
                    'imghidden' => 'Image not show',
                ),
                'default' => 'imgbelow',
            ), 
        ),        
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-shopping-cart-sign',
        'title' => esc_html__('Shop Settings', 'archi'),
        'fields' => array(   
            array(
                'id'       => 'shop-layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Shop option layout', 'archi' ),
                'subtitle' => esc_html__( 'Select option: page fullwidth or page left sidebar.', 'archi' ),
                'desc'     => esc_html__( 'Select option: page fullwidth or page left sidebar, default: page left sidebar.', 'archi' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                ),
                'default'  => '3'
            ), 
            array(
                'id' => 'shop_thumbnail',
                'type' => 'media',
                'title' => esc_html__('Background Main Shop Top Page', 'archi'),
                'subtitle' => esc_html__('Background Shop', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),
            array(
                'id' => 'product_thumbnail',
                'type' => 'media',
                'title' => esc_html__('Background Single Product Top Page', 'archi'),
                'subtitle' => esc_html__('Background Single Product', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-graph',
        'title' => esc_html__('404 Settings', 'archi'),
        'fields' => array(
             array(
                'id' => '404_title',
                'type' => 'text',
                'title' => esc_html__('404 Title', 'archi'),
                'subtitle' => esc_html__('Input 404 Title', 'archi'),
                'desc' => esc_html__('404 Title', 'archi'),
                'default' => '404'
            ),                              
            array(
                'id' => '404_content',
                'type' => 'editor',
                'title' => esc_html__('404 Content', 'archi'),
                'subtitle' => esc_html__('Enter 404 Content', 'archi'),
                'desc' => esc_html__('404 Content', 'archi'),
                'default' => 'The page you are looking for no longer exists. Perhaps you can return back to the sites homepage see you can find what you are looking for.'
            ),      
            array(
                'id' => 'back_404',
                'type' => 'text',
                'title' => esc_html__('Button Back Home', 'archi'),                        
                'desc' => esc_html__('Text Button Go To Home.', 'archi'),
                'subtitle' => esc_html__('Button Back Home', 'archi'),
                'default' => 'Back To Home',
            ),                  
         )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-group',
        'title' => esc_html__('Social Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'switch_header_social',
                'type' => 'switch',
                'title' => esc_html__('Social on Topbar Header?', 'archi'),
                'subtitle' => esc_html__('If you do not want to show social networks on the topbar header, just turn it off.', 'archi'),
                'desc' => esc_html__('On/Off Social on Header.', 'archi'),
                'default'  => true,
            ),
            array(
                'id' => 'switch_footer_social',
                'type' => 'switch',
                'title' => esc_html__('Social on Bottom Footer?', 'archi'),
                'subtitle' => esc_html__('If you do not want to show social networks on the bottom of footer, just turn it off.', 'archi'),
                'desc' => esc_html__('On/Off Social on Footer.', 'archi'),
                'default'  => true,
            ),
            array(
                'id' => 'facebook',
                'type' => 'text',
                'title' => esc_html__('Facebook Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'twitter',
                'type' => 'text',
                'title' => esc_html__('Twitter Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ), 
            array(
                'id' => 'google',
                'type' => 'text',
                'title' => esc_html__('Google+ Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),          
            array(
                'id' => 'linkedin',
                'type' => 'text',
                'title' => esc_html__('Linkedin Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'dribbble',
                'type' => 'text',
                'title' => esc_html__('Dribbble Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'pinterest',
                'type' => 'text',
                'title' => esc_html__('Pinterest Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'behance',
                'type' => 'text',
                'title' => esc_html__('Behance Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'instagram',
                'type' => 'text',
                'title' => esc_html__('Instagram Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),            
            array(
                'id' => 'youtube',
                'type' => 'text',
                'title' => esc_html__('Youtube Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'vimeo',
                'type' => 'text',
                'title' => esc_html__('Vimeo Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'soundcloud',
                'type' => 'text',
                'title' => esc_html__('SoundCloud Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'tumblr',
                'type' => 'text',
                'title' => esc_html__('Tumblr Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'lastfm',
                'type' => 'text',
                'title' => esc_html__('Lastfm Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'skype',
                'type' => 'text',
                'title' => esc_html__('Skype Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),  
            array(
                'id' => 'github',
                'type' => 'text',
                'title' => esc_html__('Github Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '#'
            ),
            array(
                'id' => 'rss',
                'type' => 'text',
                'title' => esc_html__('RSS Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '#',
            ),
            array(
                'id' => 'social_extend',
                'type' => 'editor',
                'title' => esc_html__('Add your social extend', 'archi'),
                'subtitle' => esc_html__('Add your social html code here, if your social network not have in listed social network above.', 'archi'),
                'description' => esc_html__('HTML code: <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li> , find more icons: https://fontawesome.com/v4.7.0/icons/#brand', 'archi'),
                'default' => '',
            ),             
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => esc_html__('Footer Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'footer-wideboxed',
                'type'     => 'switch', 
                'title'    => esc_html__('Footer Wide Mode (FullWidth)?', 'archi'),
                'subtitle' => esc_html__('If you want the content on the footer to be wider, just turn it on to use this function.', 'archi'),
                'default'  => false,
            ), 
            array(
                'id' => 'footer_layout',
                'type' => 'select',
                'title' => esc_html__('Footer Layouts', 'archi'),
                'subtitle' => esc_html__('Select the layout for the footer you want to use for the site.', 'archi'),
                'desc' => esc_html__('Footer Layout 1: Default footer and Footer Layout 2: this is a special layout, more logo on bottom of footer.', 'archi'),
                'options'  => array(
                    'footer1' => 'Footer Layout 1',                    
                    'footer2' => 'Footer Layout 2',                                                                
                ),
                'default' => 'footer1',
            ), 
            array(
                'id' => 'logo_footer',
                'type' => 'media',
                'required' => array( 'footer_layout', '=', 'footer2' ),
                'title' => esc_html__('Logo on Footer Layout 2', 'archi'),
                'subtitle' => esc_html__('Add logo display on bottom of Footer Layout 2.', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),
            ), 
            array(
                'id'       => 'footer-landing',
                'type'     => 'switch', 
                'title'    => esc_html__('Footer Widget Area for Landing Page?', 'archi'),
                'subtitle' => esc_html__('If you want to display the widget area on the footer landing page, just turn it on. (used for page templates: Landing Page)', 'archi'),
                'default'  => false,
            ),
            array(
                'id' => 'footer_textcolor',
                'type' => 'color',
                'title' => esc_html__('Footer Main - Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the text color on footer main (default: #cccccc).', 'archi'),
                'default' => '#cccccc',
                'validate' => 'color',
                'output'    => array(
                    'color' => 'footer'
                ) 
            ),
            array(
                'id' => 'footer_headingtextcolor',
                'type' => 'color',
                'title' => esc_html__('Footer Main - Heading Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the title widget area color on footer main (default: #ffffff).', 'archi'),
                'default' => '#ffffff',
                'validate' => 'color',
                'output'    => array(
                    'color' => 'footer .widget h3'
                ) 
            ),
            array(         
                'id'       => 'footer_bgcolor',
                'type'     => 'background',
                'title'    => __('Footer Main - Background Color', 'archi'),
                'subtitle' => __('Footer background with image, color, etc.', 'archi'),
                'desc'     => __('Pick the Footer Background image, color, etc. for the footer (default: #111111).', 'archi'),
                'default'  => array(
                    'background-color' => '#111111',
                ),
                'output'    => array(
                    'background-color' => 'footer'
                ) 
            ),
            array(
                'id' => 'footer_bottom_textcolor',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom - Text Color', 'archi'),
                'subtitle' => esc_html__('Pick the text color on footer bottom (default: #cccccc).', 'archi'),
                'default' => '#cccccc',
                'validate' => 'color',
                'output'    => array(
                    'color' => '.subfooter'
                ) 
            ),
            array(
                'id' => 'footer_bottom_bgcolor',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom - Background Color', 'archi'),
                'subtitle' => esc_html__('Pick the Footer Bottom Background color for the theme (default: #0b0b0b).', 'archi'),
                'default' => '#0b0b0b',
                'validate' => 'color',
                'output'    => array(
                    'background-color' => '.subfooter'
                )
            ),
            array(
                'id' => 'footer_bottom_bordertopcolor',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom  - Border Top Color', 'archi'),
                'subtitle' => esc_html__('Pick the Footer Bottom Background color for the theme (default: null).', 'archi'),
                'default' => '#0b0b0b',
                'validate' => 'color',
                'output'    => array(
                    'border-top-color' => '.subfooter'
                )
            ),
            array(
                'id' => 'footer_text',
                'type' => 'editor',
                'title' => esc_html__('Footer Copyright Text', 'archi'),
                'subtitle' => esc_html__('Add Your Copyright Text on Bottom Footer.', 'archi'),
                'default' => '&copy; Copyright 2018 - Archi Develop by OceanThemes',
            ),                    
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Link Color', 'archi' ),        
        'id'         => 'color-link',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'footer-link-color',
                'type'     => 'link_color',
                'output'   => array( 'footer a, address span a, footer .widget_recent_entries li a, footer .widget_archive li a,footer .widget_categories li a, footer .widget_nav_menu li a, footer .widget_pages li a, footer .widget_meta li a' ),
                'title'    => esc_html__( 'Footer Links Color Option', 'archi' ),
                'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'archi' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'archi' ),
                //'regular'   => false, // Disable Regular Color
                //'hover'     => false, // Disable Hover Color
                //'active'    => false, // Disable Active Color
                //'visited'   => true,  // Enable Visited Color
                'default'  => array(
                    'regular' => '#ccc',
                    'hover'   => '#ccc',
                    'active'  => '#ccc',
                )
            ),
            array(
                'id'       => 'footer-social-link-color',
                'type'     => 'link_color',
                'output'   => array( '.social-icons ul li a' ),
                'title'    => esc_html__( 'Social Links Color Option', 'archi' ),
                'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'archi' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'archi' ),
                //'regular'   => false, // Disable Regular Color
                //'hover'     => false, // Disable Hover Color
                //'active'    => false, // Disable Active Color
                //'visited'   => true,  // Enable Visited Color
                'default'  => array(
                    'regular' => '#fff',
                    'hover'   => '#333',
                    'active'  => '#333',
                )
            ),
            array(
                'id' => 'footer_border_text_bottom_color',
                'type' => 'color',                
                'title' => esc_html__('Footer Border Bottom Text Link Color', 'archi'),
                'subtitle' => esc_html__('Pick the Footer Bottom Background color for the theme (default: #222).', 'archi'),
                'default' => '#222',
                'validate' => 'color',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Spacing', 'archi' ),
        'id'         => 'footer-design-spacing',        
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'foorer-spacing',
                'type'     => 'spacing',
                'output'   => array( 'footer .main-footer, .de-navbar-left footer.footer-side-nav .mainfooter' ),
                // An array of CSS selectors to apply this font style to
                'mode'     => 'padding',
                // absolute, padding, margin, defaults to padding
                'all'      => false,
                // Have one field that applies to all
                //'top'           => false,     // Disable the top
                'right'         => false,     // Disable the right
                //'bottom'        => false,     // Disable the bottom
                'left'          => false,     // Disable the left
                'units'          => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended'=> 'true',    // Allow users to select any type of unit
                //'display_units' => 'false',   // Set to false to hide the units if the units are specified
                'title'    => esc_html__( 'Padding Main Footer', 'archi' ),
                'subtitle' => esc_html__( 'Allow your users to choose the spacing or margin they want.', 'archi' ),
                'desc'     => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'archi' ),
                'default'  => array(
                    'padding-top'    => '80px',
                    'padding-bottom' => '0px',
                )
            ),
            array(
                'id'             => 'foorer-bottom-spacing',
                'type'           => 'spacing',
                'output'   => array( '.subfooter, .de-navbar-left footer.footer-side-nav .subfooter' ),
                // An array of CSS selectors to apply this font style to
                'mode'           => 'padding',
                // absolute, padding, margin, defaults to padding
                'all'            => false,
                // Have one field that applies to all
                //'top'           => false,     // Disable the top
                'right'         => false,     // Disable the right
                //'bottom'        => false,     // Disable the bottom
                'left'          => false,     // Disable the left
                'units'          => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',    // Allow users to select any type of unit
                //'display_units' => 'false',   // Set to false to hide the units if the units are specified
                'title'          => esc_html__( 'Padding Footer Bottom', 'archi' ),
                'subtitle'       => esc_html__( 'Allow your users to choose the spacing or margin they want.', 'archi' ),
                'desc'           => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'archi' ),
                'default'        => array(
                    'padding-top'    => '30px',
                    'padding-bottom' => '20px',
                )
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Back-To-Top Spacing', 'archi' ),
        'id'         => 'back-to-top-spacing',        
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'backtotop-spacing',
                'type'     => 'spacing',
                'output'   => array( '#back-to-top' ),
                // An array of CSS selectors to apply this font style to
                'mode'     => 'absolute',
                // absolute, padding, margin, defaults to padding
                'all'      => false,
                // Have one field that applies to all
                'top'           => false,     // Disable the top
                'right'         => true,     // Disable the right
                'bottom'        => true,     // Disable the bottom
                'left'          => false,     // Disable the left
                'units'          => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended'=> 'true',    // Allow users to select any type of unit
                //'display_units' => 'false',   // Set to false to hide the units if the units are specified
                'title'    => esc_html__( 'Position Back-To-Top button on Footer', 'archi' ),
                'subtitle' => esc_html__( 'Allow choose the spacing or absolute you want.', 'archi' ),
                'desc'     => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'archi' ),
                'default'  => array(
                    'right'    => '40px',
                    'bottom' => '40px',
                )
            ),
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Javascript Code', 'archi' ),
        'id'         => 'add-custom-javascript-code',        
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'js_editor',
                'type'     => 'ace_editor',
                'title'    => __('Javascript Code', 'archi'),
                'subtitle' => __('Paste your custom javascript code here.', 'archi'),
                'mode'     => 'javascript',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-hourglass',
        'title' => esc_html__('Coming Soon Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'cms_logo',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Upload your logo.', 'archi'),
                'subtitle' => esc_html__('Recommended size: Height: auto and Width: 120px', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/logo-border.png'),
            ),                 
            array(
                'id'          => 'cmsoon_date',
                'type'        => 'date',
                'title'       => esc_html__('Date Option', 'archi'), 
                'subtitle'    => esc_html__('No validation can be done on this field type', 'archi'),
                'desc'        => esc_html__('This is the description field, again good for additional info.', 'archi'),
                'placeholder' => 'Click to enter a date',
                'default' => '12/23/2020'
            ),
            array(
                'id' => 'cs_title',
                'type' => 'text',
                'title' => esc_html__('Coming Soon Title', 'archi'),
                'subtitle' => esc_html__('Coming Soon Title', 'archi'),
                'desc' => esc_html__('Coming Soon Title', 'archi'),
                'default' => 'Our Website Coming Soon'
            ),                              
            array(
                'id' => 'cs_stitle',
                'type' => 'text',
                'title' => esc_html__('Coming Soon Subtitle', 'archi'),
                'subtitle' => esc_html__('Coming Soon Subtitle', 'archi'),
                'desc' => esc_html__('Coming Soon Subtitle', 'archi'),
                'default' => 'Time left until launching',
            ), 
            array(
                'id' => 'cs_bg',
                'type' => 'media',
                'title' => esc_html__('Background Image', 'archi'),
                'subtitle' => esc_html__('Background Image', 'archi'),
                'desc' => esc_html__('Use For Coming Soon Page', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/bg-6.jpg')
            ), 
            array(
                'id' => 'link_video_mp4',
                'type' => 'text',
                'title' => esc_html__('Link Video MP4', 'archi'),
                'subtitle' => esc_html__('Link Video MP4', 'archi'),
                'desc' => esc_html__('Use For Coming Soon Video', 'archi'),
                'default' => 'http://www.themenesia.com/video/sample.mp4'
            ),
            array(
                'id' => 'link_video_webm',
                'type' => 'text',
                'title' => esc_html__('Link Video Webm', 'archi'),
                'subtitle' => esc_html__('Link Video Webm', 'archi'),
                'desc' => esc_html__('Use For Coming Soon Video', 'archi'),
                'default' => 'http://www.themenesia.com/video/sample.webm'
            ),                                                
        )    
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-hourglass',
        'title' => esc_html__('Content Inside', 'archi'),
        'desc' => esc_html__('This is the content that will be displayed when you click on the plus button', 'archi'),
        'subsection' => true,
        'fields' => array(   
            array(
                'id'       => 'switch-cmsinside',
                'type'     => 'switch',
                'title'    => __( 'Switch Disabled to hidden Content Inside', 'archi' ),
                'subtitle' => __( 'Look, it\'s on!', 'archi' ),
                'default'  => 1,
                'on'       => esc_html__('Enabled', 'archi'),
                'off'      => esc_html__('Disabled', 'archi'),
            ),        
            array(
                'id' => 'hc_title',
                'type' => 'text',
                'required' => array( 'switch-cmsinside', '=', '1' ),
                'title' => esc_html__('Coming Soon Title', 'archi'),
                'subtitle' => esc_html__('Coming Soon Title', 'archi'),
                'desc' => esc_html__('Coming Soon Title', 'archi'),
                'default' => 'Award Winning Interior Design'
            ),                              
            array(
                'id' => 'hc_stitle',
                'type' => 'editor',
                'required' => array( 'switch-cmsinside', '=', '1' ),
                'title' => esc_html__('Coming Soon Subtitle', 'archi'),
                'subtitle' => esc_html__('Coming Soon Subtitle', 'archi'),
                'desc' => esc_html__('Coming Soon Subtitle', 'archi'),
                'default' => '',
            ),  
            array(
                'id' => 'hc_contact',
                'type'     => 'select',
                'required' => array( 'switch-cmsinside', '=', '1' ),
                'data'      => 'posts',
                'args'      => array( 'post_type' => 'wpcf7_contact_form' ),
                'title' => esc_html__('Select  a contact form', 'archi'),
                'subtitle' => esc_html__('Create a contact form before choose', 'archi'),
                'desc' => esc_html__('Go to your contact form 7 to create a contact form.', 'archi'),
                'default' => '',
            ),                                   
        )    
    ) );
	
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-website',
        'title' => esc_html__('Styling Options', 'archi'),
        'fields' => array(
            array(
                'id' => 'version_type',
                'type' => 'select',
                'title' => esc_html__('Theme Version', 'archi'),
                'subtitle' => esc_html__('Dark or White', 'archi'),
                'desc' => esc_html__('Dark or White', 'archi'),
                'options'  => array(
                    'dark' => 'Dark Version',
                    'light' => 'Light Version',
                ),
                'default' => 'dark',
            ),                    
            array(
                'id' => 'main-color',
                'type' => 'color',
                'title' => esc_html__('Theme Main Color', 'archi'),
                'subtitle' => esc_html__('Pick the main color for the theme (default: #FAB207).', 'archi'),
                'default' => '#FAB207',
                'validate' => 'color',
            ),              
            array(
                'id' => 'body-font2',
                'type' => 'typography',
                'output' => array('body'),
                'title' => esc_html__('Body Font', 'archi'),
                'subtitle' => esc_html__('Specify the body font properties.', 'archi'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color' => '',
                    'font-size' => '',
                    'line-height' => '',
                    'font-family' => '',
                    'font-weight' => ''
                ),
            ),
            array(
                'id' => 'custom-css',
                'type' => 'ace_editor',
                'title' => esc_html__('CSS Code', 'archi'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'archi'),
                'mode' => 'css',
                'theme' => 'monokai',
                'desc' => 'Possible modes can be found at http://ace.c9.io/.',
                'default' => ""
            ),
        )
    ) );   

    /*
     * <--- END SECTIONS
     */
