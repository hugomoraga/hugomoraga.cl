<?php
// Add new Param in Row
if(function_exists('vc_add_param')){
    vc_add_param(
        'vc_row',
        array(
            "type" => "dropdown",
            "heading" => esc_html__('Fullwidth', 'archi'),
            "param_name" => "fullwidth",
            "value" => array(   
                            esc_html__('No', 'archi') => 'no',  
                            esc_html__('Yes', 'archi') => 'yes',                                                                                
                          ),
            "description" => esc_html__("Select Fullwidth or not, Default: No fullwidth", "archi"),      
        ) 
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Full height?', 'archi' ),
            'param_name' => 'archi_fullheight',
            'description' => esc_html__( 'If checked row will be set to full height, Recommended use for Row(Section) on the top of page only.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Parallax row?', 'archi' ),
            'param_name' => 'archi_parallax',
            'description' => esc_html__( 'If checked row will be set to parallax and you need add background image in Design Options Tab.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Put a pictures on the half Row?', 'archi' ),
            'param_name' => 'img_halfrow',
            'description' => esc_html__( 'If checked row will be set to image display on the half Row(Section), read more guide: https://oceanthemes.ticksy.com/article/9870/', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Image', 'archi' ),
            'param_name' => 'halfrow_image',
            'value' => '',
            'description' => esc_html__( 'Select image from media library.', 'archi' ),
            'dependency' => array(
                'element' => 'img_halfrow',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'dropdown',
            "holder" => "div",
            "class" => "",
            "edit_field_class" => "vc_col-sm-6",
            'heading' => esc_html__( 'Columns image', 'archi' ),
            'param_name' => 'img_columns',
            'value' => array(
                esc_html__( 'Default', 'archi' ) => '',
                esc_html__( 'Image on 4 Columns', 'archi' ) => '4columns',
                esc_html__( 'Image on 5 Columns', 'archi' ) => '5columns',
                esc_html__( 'Image on 6 Columns', 'archi' ) => '6columns',
                esc_html__( 'Image on 7 Columns', 'archi' ) => '7columns',
            ),
            'description' => esc_html__( 'Select columns position within row.', 'archi' ),
            'dependency' => array(
                'element' => 'img_halfrow',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'dropdown',
            "holder" => "div",
            "class" => "",
            "edit_field_class" => "vc_col-sm-6",
            'heading' => esc_html__( 'Image position', 'archi' ),
            'param_name' => 'img_position',
            'value' => array(
                esc_html__( 'Default', 'archi' ) => '',
                esc_html__( 'Image on Left Row', 'archi' ) => 'imgleft',
                esc_html__( 'Image on Right Row', 'archi' ) => 'imgright',                
            ),
            'description' => esc_html__( 'Select Image position within row.', 'archi' ),
            'dependency' => array(
                'element' => 'img_halfrow',
                'not_empty' => true,
            ),
        )
    );

    vc_add_param(
        'vc_row',
        array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Background HTML5 Video?', 'archi' ),
            'param_name' => 'bg_html5_video',
            'description' => esc_html__( 'If checked row will be set to background video, that not support YouTube video, Vimeo video.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
        )
    );

    vc_add_param(
        'vc_row',
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Video Background Image', 'archi' ),
            'param_name' => 'bg_html5_video_image',
            'value' => '',
            'description' => esc_html__( 'HTML5 videos will not play on mobile devices, so you need to use a background image instead.', 'archi' ),
            'dependency' => array(
                'element' => 'bg_html5_video',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'MP4 Url', 'archi' ),
            'param_name' => 'mp4_url',
            'value' => '',
            'description' => esc_html__( 'Enter Video mp4 link url.', 'archi' ),
            'dependency' => array(
                'element' => 'bg_html5_video',
                'not_empty' => true,
            ),
        )
    );

    vc_add_param(
        'vc_row',
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'WEBM Url', 'archi' ),
            'param_name' => 'webm_url',
            'value' => '',
            'description' => esc_html__( 'Enter Video webm link url.', 'archi' ),
            'dependency' => array(
                'element' => 'bg_html5_video',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'OGG Url', 'archi' ),
            'param_name' => 'ogg_url',
            'value' => '',
            'description' => esc_html__( 'Enter Video ogg link url.', 'archi' ),
            'dependency' => array(
                'element' => 'bg_html5_video',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Background Video Overlay', 'archi' ),
            'param_name' => 'video_overlay',
            'value' => array(
                esc_html__( 'Overlay', 'archi' ) => 'overlay',
                esc_html__( 'Dotted', 'archi' ) => 'dotted',
                esc_html__( 'Custom', 'archi' ) => 'overlaycustom',                
            ),
            'description' => esc_html__( 'Select Image position within row.', 'archi' ),
            'dependency' => array(
                'element' => 'bg_html5_video',
                'not_empty' => true,
            ),
        )
    );
    vc_add_param(
        'vc_row',
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Overlay Background Image', 'archi' ),
            'param_name' => 'overlay_img',
            'value' => '',
            'description' => esc_html__( 'Select image from media library, use Overlay on Video', 'archi' ),
            'dependency' => array(
                'element' => 'video_overlay',
                'value' => 'overlaycustom'
            ),
        )
    );    
    vc_add_param(
        'vc_row',
        array(
        "type" => "colorpicker",
        "heading" => __("Overlay Color", 'archi'),
        "param_name" => "overlay_color",
        "value" => "",
        "description" => __("Overlay Background Color", 'archi'),
        'dependency' => array(
            'element' => 'video_overlay',
            'value' => 'overlaycustom'
        ),        
    ));

    // Add new Param in Column  
    vc_add_param('vc_column',array(
          "type" => "dropdown",
          "heading" => esc_html__('CSS Animation', 'archi'),
          "param_name" => "animate",
          "value" => array(   
                            __('None', 'archi') => 'none', 
                            __('Fade In Up', 'archi') => 'fadeinup', 
                            __('Fade In Down', 'archi') => 'fadeindown', 
                            __('Fade In', 'archi') => 'fadein', 
                            __('Fade In Left', 'archi') => 'fadeinleft',  
                            __('Fade In Right', 'archi') => 'fadinright',
                          ),
          "description" => esc_html__("Select Animate , Default: None", 'archi'),      
        ) 
    );
    vc_add_param('vc_column',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time delay number', 'archi'),
          "param_name" => "delay",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'), 
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadinright' ) ),     
        ) 
    );
    vc_add_param('vc_column',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time duration number', 'archi'),
          "param_name" => "duration",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'),   
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadinright' ) ),   
        ) 
    );

    // Add new Param in Column inner
    vc_add_param('vc_column_inner',array(
          "type" => "dropdown",
          "heading" => esc_html__('CSS Animation', 'archi'),
          "param_name" => "animate",
          "value" => array(   
                            esc_html__('None', 'archi') => 'none', 
                            esc_html__('Fade In Up', 'archi') => 'fadeinup', 
                            esc_html__('Fade In Down', 'archi') => 'fadeindown', 
                            esc_html__('Fade In', 'archi') => 'fadein', 
                            esc_html__('Fade In Left', 'archi') => 'fadeinleft',  
                            esc_html__('Fade In Right', 'archi') => 'fadeinright',
                          ),
          "description" => esc_html__("Select Animate , Default: None", 'archi'),      
        ) 
    );
    vc_add_param('vc_column_inner',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time delay number', 'archi'),
          "param_name" => "delay",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'), 
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadeinright' ) ),     
        ) 
    );
    vc_add_param('vc_column_inner',array(
          "type" => "textfield",
          "heading" => esc_html__('Animation time duration number', 'archi'),
          "param_name" => "duration",
          "value" => "",
          "description" => esc_html__("Example : 0.2, 0.6, 1, etc", 'archi'),   
          "dependency"  => array( 'element' => 'animate', 'value' => array( 'fadeinup', 'fadeindown', 'fadein', 'fadeinleft', 'fadeinright' ) ),   
        ) 
    );    
}

if(function_exists('vc_remove_param')){
    vc_remove_param( "vc_row", "parallax" );
    vc_remove_param( "vc_row", "parallax_image" );
    vc_remove_param( "vc_row", "full_width" );
    vc_remove_param( "vc_row", "full_height" );
    vc_remove_param( "vc_row", "video_bg" );
    vc_remove_param( "vc_row", "video_bg_parallax" );
    vc_remove_param( "vc_row", "video_bg_url" );
    vc_remove_param( "vc_row", "parallax_speed_bg" );
    vc_remove_param( "vc_row", "parallax_speed_video" );
    vc_remove_param( "vc_row", "columns_placement" );
    vc_remove_param( "vc_row", "gap" );
    vc_remove_param( "vc_column", "css_animation" ); 
}    