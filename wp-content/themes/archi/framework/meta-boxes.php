<?php

/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */

function archi_register_meta_boxes( $meta_boxes ) {

	$prefix = '_cmb_';
	$meta_boxes[] = array(
		'id'       => 'format_detail',
		'title'    => esc_html__( 'Format Details', 'archi' ),
		'pages'    => array( 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
			array(
				'name'             => esc_html__( 'Image', 'archi' ),
				'id'               => $prefix . 'image',
				'type'             => 'image_advanced',
				'class'            => 'image',
				'max_file_uploads' => 1,
			),
			array(
				'name'  => esc_html__( 'Gallery', 'archi' ),
				'id'    => $prefix . 'images',
				'type'  => 'image_advanced',
				'class' => 'gallery',
			),
			array(
				'name'  => esc_html__( 'Quote', 'archi' ),
				'id'    => $prefix . 'quote',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'quote',
			),
			array(
				'name'  => esc_html__( 'Author', 'archi' ),
				'id'    => $prefix . 'quote_author',
				'type'  => 'text',
				'class' => 'quote',
			),
			array(				
				'name'  => esc_html__( 'Audio', 'archi' ),
				'id'    => $prefix . 'link_audio', // How to display on front end: https://metabox.io/docs/get-meta-value/
				'type'  => 'oembed',
				// Allow to clone? Default is false
				'clone' => false,
				// Input size
				'size'  => 55,
				'class' => 'audio',
				'desc' => 'Example: https://soundcloud.com/the-bugle/bugle-179-playas-gon-play',
			),
			array(
				'name'  => esc_html__( 'Video', 'archi' ),
				'id'    => $prefix . 'link_video', // How to display on front end: https://metabox.io/docs/get-meta-value/
				'type'  => 'oembed',
				// Allow to clone? Default is false
				'clone' => false,
				// Input size
				'size'  => 55,
				'class' => 'video',
				'desc' => 'Example: <b>http://www.youtube.com/embed/0ecv0bT9DEo</b> or <b>http://player.vimeo.com/video/47355798</b>',
			),	
		),
	);

	$meta_boxes[] = array(
		'id'       => 'ot_gallery_detail',
		'title'    => esc_html__( 'Gallery Settings', 'archi' ),
		'pages'    => array( 'ot_gallery' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(				
			array(
				'name'  => esc_html__( 'Add Gallery', 'archi' ),
				'id'    => $prefix . 'image_gallery',
				'type'  => 'image_advanced',
				'class' => 'gallery',
			),									
		),
	);

	$meta_boxes[] = array(
		'id'       => 'portfolio_detail',
		'title'    => esc_html__( 'Portfolio Format Details', 'archi' ),
		'pages'    => array( 'portfolio' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
			array(
				'name'  => esc_html__( 'Video', 'archi' ),
				'id'    => $prefix . 'link_video',
				'type'  => 'text',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'video',
				'desc' => 'Example: <b>http://www.youtube.com/watch?v=QgnRut8Qloc</b> or <b>https://player.vimeo.com/video/8159394</b>',
			),	
			array(
				'name'             => esc_html__( 'Background Image On Top Page', 'archi' ),
				'id'               => $prefix . 'portfolio_subheader',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
				'desc' => esc_html__( 'Using on single portfolio page', 'archi' ),
			),
			array(
				'name'  => esc_html__( 'Sub Title', 'archi' ),
				'id'    => $prefix . 'portfolio_subtitle',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
			),	
			array(
                'name'        => esc_html__( 'Select Thumbnail Size', 'archi' ),
                'id'          => $prefix . 'portfolio_thumb_size',
                'type'        => 'select',
                'options'     => array(
                	'none'    => esc_html__( 'Normal size', 'archi' ),
                    'large'   => esc_html__( 'Double size', 'archi' ),
                    'large-width' => esc_html__( 'Double size of width', 'archi' ),
                    'large-height' => esc_html__( 'Double size of height', 'archi' ),
                ),
                'multiple'    => false,
                'std'         => 'none',
                'desc' => esc_html__( 'Use for "OT Portfolio Masonry" element only, set thumbnail size after add featured image.', 'archi' ),
            ),            		
		),
	);

	$meta_boxes[] = array(
		'id'       => 'page_dt',
		'title'    => esc_html__( 'Page Settings', 'archi' ),
		'pages'    => array( 'page' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(
				'name'             => esc_html__( 'Background Image On Top Page', 'archi' ),
				'id'               => $prefix . 'subheader_image',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
			),	
			array(
				'name'  => esc_html__( 'Sub Title', 'archi' ),
				'id'    => $prefix . 'page_subtitle',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
			),		
			array(			    
			    'name'      => 'Disable Footer Widget Area?',
			    'id'        => $prefix . 'footer_widget',
			    'type'      => 'switch',
			    
			    // Style: rounded (default) or square
			    'style'     => 'rounded',

			    // On label: can be any HTML
			    'on_label'  => 'Yes',

			    // Off label
			    'off_label' => 'No',
			    'std'  => 0, // 0 or 1
			),
		),
	);

	$meta_boxes[] = array(
		'id'       => 'postype_dt',
		'title'    => esc_html__( 'Page Settings', 'archi' ),
		'pages'    => array( 'service', 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(
				'name'             => esc_html__( 'Background Image On Top Page', 'archi' ),
				'id'               => $prefix . 'subheader_image',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
			),	
			array(
				'name'  => esc_html__( 'Sub Title', 'archi' ),
				'id'    => $prefix . 'page_subtitle',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
			),		
		),
	);
	
	/* Custom Metabox for Testimonials */
	$meta_boxes[] = array(
		'id'         => 'job_testimonial',
		'title'      => esc_html__( 'Testimonials Info', 'archi' ),
		'pages'      => array( 'testimonial' ), // Post type
		'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
                'name' => esc_html__( 'Job', 'archi' ),
                'desc' => esc_html__( 'Job of Person', 'archi' ),
                'id'   => $prefix . 'job_testi',
                'type' => 'text',
            ),
		)
	);

	/* Custom Metabox for Process */
	$meta_boxes[] = array(
		'id'         => 'settings_process',
		'title'      => 'Process Settings',
		'pages'      => array( 'process' ), // Post type
		'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
				'name'             => esc_html__( 'Background Image On Top Page', 'archi' ),
				'id'               => $prefix . 'subheader_image',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
			),	
			array(
				'name'  => esc_html__( 'Sub Title', 'archi' ),
				'id'    => $prefix . 'page_subtitle',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
			),	
			array(
				'name'             => esc_html__( 'Process icon image', 'archi' ),
				'id'               => $prefix . 'process_icon',
				'type'             => 'image_advanced',				
				'max_file_uploads' => 1,
				'desc' => esc_html__( 'You can use icon images with format: svg, jpg, png and max-width: 80px + max-height: 80px.', 'archi' ),
			),
			array(
				'name'  => esc_html__( 'FontAwesome icon', 'archi' ),
				'desc' => esc_html__( 'Find FontAwesome icons class name here: https://fontawesome.com/v4.7.0/icons/ , Example Add icon name only: facebook', 'archi' ),
				'id'    => $prefix . 'process_fonticon',
				'type'  => 'text',
			),	
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'archi_register_meta_boxes' );

/**
 * Enqueue scripts for admin
 *
 * @since  1.0
 */
function archi_admin_enqueue_scripts( $hook ) {
	// Detect to load un-minify scripts when WP_DEBUG is enable
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	if ( in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) {
		wp_enqueue_script( 'archi-backend-js', get_template_directory_uri()."/framework/admin/js/admin.js", array( 'jquery' ), '1.0.0', true );
	}
}
add_action( 'admin_enqueue_scripts', 'archi_admin_enqueue_scripts' );

