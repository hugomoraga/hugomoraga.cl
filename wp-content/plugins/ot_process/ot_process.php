<?php
/*
	Plugin Name: OT Process
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying process.
	Version: 1.3
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_process
	Domain Path: /lang
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_process_update() {
	load_plugin_textdomain('ot_process', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_process_update');

function ot_processs_type() {
	$processlabels = array (	

		'name' => __('Process','ot_process'),

		'singular_name' => __('Process','ot_process'),

		'add_new' => __('Add process','ot_process'),

		'add_new_item' => __('Add new process','ot_process'),

		'edit_item' => __('Edit Process','ot_process'),

		'new_item' => __('Add new process','ot_process'),

		'all_items' => __('All Process','ot_process'),

		'view_item' => __('View Process','ot_process'),

		'search_item' => __('Search Process','ot_process'),

		'not_found' => __('No process found..','ot_process'),

		'not_found_in_trash' => __('No process found in Trash.','ot_process'),

		'menu_name' => 'Process'
	);

	$args = array(
		'labels' => $processlabels,
		'hierarchical' => false,
		'description' => 'Manages Process',
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-chart-pie',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => __( 'process' , 'ot_process' ) ),
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
	register_post_type ('process',$args);
}
add_action ('init','ot_processs_type');

function ot_process_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Category Process','ot_process'),
		'singular_name' => __('Category Process','ot_process'),
		'search_items' => __('Search Category Process','ot_process'),
		'all_items' => __('All Category Process','ot_process'),
		'edit_item' => __('Edit Category Process','ot_process'),
		'add_new_item' => __('Add new Category Process','ot_process'),
		'menu_name' => __('Category Process','ot_process'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => __( 'category_process', 'ot_process' ) ),
	);
	
	register_taxonomy('category_process','process',$args);
}
add_action ('init','ot_process_taxonomy',0);

// Add to admin_init function
add_filter('manage_edit-process_columns', 'add_new_process_columns');
function add_new_process_columns($process_columns) { 
	$new_columns['cb'] = '<input type="checkbox" />'; 
    $new_columns['title'] = _x('Title', 'ot_process');
    $new_columns['author'] = _x('Author', 'ot_process');
    $new_columns['category_process'] = _x('Category', 'ot_process');
    $new_columns['date'] = _x('Date', 'ot_process');

    return $new_columns;
}

// Add to admin_init function
add_action('manage_process_posts_custom_column', 'manage_process_columns', 10, 2);
function manage_process_columns($column, $post_id) {
    global $post;
    switch ($column) {
        case 'category_process':
            $terms = get_the_terms($post_id, 'category_process');
            if (!empty($terms)) {
                $out = array();
                foreach ($terms as $term) {
                    $out[] = sprintf('<a href="%s&post_type=process">%s</a>', esc_url(add_query_arg(array(
                        'post_type' => $post->post_type,
                        'category_process' => $term->slug
                    ), 'edit.php')), esc_html(sanitize_term_field('name', $term->name, $term->term_id, 'category_process', 'display')));
                }
                echo join(', ', $out);
            } else {
                _e('No Process Category', 'ot_process');
            }
            break;   
        default:
            break;
    } // end switch
}   
?>