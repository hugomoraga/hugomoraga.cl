<?php
/*
	Plugin Name: OT Services
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying services.
	Version: 1.3.3
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_service
	Domain Path: /lang
	License: GPLv2 or later
*/

/* 
	UPDATE 
	register_activation_hook is not called when a plugin is updated
	so we need to use the following function 
*/
function ot_service_update() {
	load_plugin_textdomain('ot_service', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_service_update');

function ot_service_type() {
	/* In Permalink Settings page */	
	$slug = get_option( 'wpse30021_service_base' );
    if( ! $slug ) $slug = __( 'service', 'ot_service' );
	
	$servicelabels = array (	
		'name' => __( trim( ucwords( str_replace( "-", " ", $slug ) ) ),'ot_service'),
		'singular_name' => trim( ucwords( str_replace( "-", " ", $slug ) ) ), /* In Permalink Settings page */	
		'menu_name' => __('Services','ot_service'),
		'add_new' => __('Add New','ot_service'),
		'add_new_item' => __('Add New Service','ot_service'),
		'new_item' => __('New Service','ot_service'),
		'edit_item' => __('Edit Service','ot_service'),				
		'view_item' => __('View Service','ot_service'),
		'all_items' => __('All Services','ot_service'),
		'search_item' => __('Search Services','ot_service'),
		'not_found' => __('No Services found.','ot_service'),
		'not_found_in_trash' => __('No services found in Trash.','ot_service'),		
	);

	$args = array(
		'labels' => $servicelabels,
		'hierarchical' => false,
		'description' => __( 'Manages Services' , 'ot_service' ),
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-admin-generic',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true, /* Choose "false" if do not want using the archive-services.php template and you can using any page instead. */
        'query_var' => true,
        'can_export' => true,
		'rewrite' => array( 'slug' => $slug ), //In Permalink Settings page        
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('service',$args);
	}
add_action ('init','ot_service_type');

function ot_service_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Category Service','ot_service'),
		'singular_name' => __('Category Service','ot_service'),
		'search_items' => __('Search Category Service','ot_service'),
		'all_items' => __('All Category Service','ot_service'),
		'edit_item' => __('Edit Category Service','ot_service'),
		'add_new_item' => __('Add new Category Service','ot_service'),
		'menu_name' => __('Category Service','ot_service'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => __( 'category_service', 'ot_service' ) ),
	);
	
	register_taxonomy('category_service','service',$args);
}
add_action ('init','ot_service_taxonomy',0);

// Add to admin_init function
add_filter('manage_edit-service_columns', 'add_new_service_columns');
function add_new_service_columns($service_columns) { 
	$new_columns['cb'] = '<input type="checkbox" />'; 
    $new_columns['title'] = _x('Title', 'ot_service');
    $new_columns['author'] = _x('Author', 'ot_service');
    $new_columns['category_service'] = _x('Category', 'ot_service');
    $new_columns['date'] = _x('Date', 'ot_service');

    return $new_columns;
}

// Add to admin_init function
add_action('manage_service_posts_custom_column', 'manage_service_columns', 10, 2);
function manage_service_columns($column, $post_id) {
    global $post;
    switch ($column) {
        case 'category_service':
            $terms = get_the_terms($post_id, 'category_service');
            if (!empty($terms)) {
                $out = array();
                foreach ($terms as $term) {
                    $out[] = sprintf('<a href="%s&post_type=service">%s</a>', esc_url(add_query_arg(array(
                        'post_type' => $post->post_type,
                        'category_service' => $term->slug
                    ), 'edit.php')), esc_html(sanitize_term_field('name', $term->name, $term->term_id, 'category_service', 'display')));
                }
                echo join(', ', $out);
            } else {
                _e('No Service Category', 'ot_service');
            }
            break;   
        default:
            break;
    } // end switch
}

/**
 * Easy change slug cutom post type name in url to the permalink settings page.
 */
add_action( 'load-options-permalink.php', 'wpse30021_service_load_permalinks' );
function wpse30021_service_load_permalinks()
{
	if( isset( $_POST['wpse30021_service_base'] ) )
	{
		update_option( 'wpse30021_service_base', sanitize_title_with_dashes( $_POST['wpse30021_service_base'] ) );
	}
	
	// Add a settings field to the permalink page
	add_settings_field( 'wpse30021_service_base', __( 'OT Service attribute base', 'ot_service' ), 'wpse30021_service_field_callback', 'permalink', 'optional' );	
}
function wpse30021_service_field_callback()
{
	$value = get_option( 'wpse30021_service_base' );	
	echo '<input type="text" value="' . esc_attr( $value ) . '" name="wpse30021_service_base" id="wpse30021_service_base" class="regular-text" />';
}

?>