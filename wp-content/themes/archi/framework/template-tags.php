<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Archi
 * @since 1.0
 */
 
if ( ! function_exists( 'archi_breadcrumbs' ) ) {
    function archi_breadcrumbs ( 
        $list_style = 'ul', 
        $list_id = 'breadcrumbs', 
        $list_class = 'crumb',
        $active_class = 'active', 
        $echo = false ) { 

        $breadcrumb = '';
        // Open list
        $breadcrumb = '<' . $list_style . ' id="' . $list_id . '" class="' . $list_class . '">';
        // Front page
        if ( is_front_page() ) {
            $breadcrumb .= '<li class="' . $active_class . '">' . esc_html__('Home', 'archi') . '</li>'; //get_bloginfo( 'name' )
        } else {
            $breadcrumb .= '<li><a href="' . home_url() . '">' . esc_html__('Home', 'archi') . '</a></li>'; //get_bloginfo( 'name' )
        }
        // Blog archive
        if ( 'page' == get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) ) {
            $blog_page_id = get_option( 'page_for_posts' );
            if ( is_home() ) {
                $breadcrumb .= '<li class="' . $active_class . '">' . get_the_title( $blog_page_id )  . '</li>';
            } else if ( is_category() || is_tag() || is_author() || is_date() || is_singular( 'post' ) ) {
                $breadcrumb .= '<li><a href="' . get_permalink( $blog_page_id ) . '">' . get_the_title( $blog_page_id )  . '</a></li>';
            }
        }
        // Category, tag, author and date archives
        if ( is_archive() && ! is_tax() && ! is_post_type_archive() ) {
            $breadcrumb .= '<li class="' . $active_class . '">';
            // Title of archive
            if ( is_category() ) {
                $breadcrumb .= single_cat_title( '', false );
            } else if ( is_tag() ) {
                $breadcrumb .= single_tag_title( '', false );
            } else if ( is_author() ) {
                $breadcrumb .= get_the_author();
            } else if ( is_date() ) {
                if ( is_day() ) {
                    $breadcrumb .= get_the_time( 'F j, Y' );
                } else if ( is_month() ) {
                    $breadcrumb .= get_the_time( 'F, Y' );
                } else if ( is_year() ) {
                    $breadcrumb .= get_the_time( 'Y' );
                }
            }
            $breadcrumb .= '</li>';
        }
        // Posts
        if ( is_singular( 'post' ) ) {
            // Post title
            $breadcrumb .= '<li class="' . $active_class . '">' . get_the_title() . '</li>';
        }
        // Pages
        if ( is_page() && ! is_front_page() ) {
            $post = get_post( get_the_ID() );
            // Page parents
            if ( $post->post_parent ) {
                $parent_id  = $post->post_parent;
                $crumbs = array();
                while ( $parent_id ) {
                    $page = get_page( $parent_id );
                    $crumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
                    $parent_id  = $page->post_parent;
                }
                $crumbs = array_reverse( $crumbs );
                foreach ( $crumbs as $crumb ) {
                    $breadcrumb .= '<li>' . $crumb . '</li>';
                }
            }
            // Page title
            $breadcrumb .=  '<li class="' . $active_class . '">' . get_the_title() . '</li>';
        }
        // Attachments
        if ( is_attachment() ) {
            // Attachment parent
            $post = get_post( get_the_ID() );
            if ( $post->post_parent ) {
                $breadcrumb .= '<li><a href="' . get_permalink( $post->post_parent ) . '">' . get_the_title( $post->post_parent ) . '</a></li>';
            }
            // Attachment title
            $breadcrumb .= '<li class="' . $active_class . '">' . get_the_title() . '</li>';
        }
        // Search
        if ( is_search() ) {
            $breadcrumb .= '<li class="' . $active_class . '">' . esc_html__( 'Search', 'archi' ) . '</li>';
        }
        // 404
        if ( is_404() ) {
            $breadcrumb .= '<li class="' . $active_class . '">' . esc_html__( '404', 'archi' ) . '</li>';
        }
        // Custom Post Type Archive
        if ( is_post_type_archive() ) {
            $breadcrumb .= '<li class="' . $active_class . '">' . post_type_archive_title( '', false ) . '</li>';
        }
        // Custom Taxonomies
        if ( is_tax() ) {
            // Get the post types the taxonomy is attached to
            $current_term = get_queried_object();
            $attached_to = array();
            $post_types = get_post_types();
            foreach ( $post_types as $post_type ) {
                $taxonomies = get_object_taxonomies( $post_type );
                if ( in_array( $current_term->taxonomy, $taxonomies ) ) {
                    $attached_to[] = $post_type;
                }
            }
            // Post type archive link
            $output = false;
            foreach ( $attached_to as $post_type ) {
                $cpt_obj = get_post_type_object( $post_type );
                if ( ! $output && get_post_type_archive_link( $cpt_obj->name ) ) {
                    $breadcrumb .= '<li><a href="' . get_post_type_archive_link( $cpt_obj->name ) . '">' . $cpt_obj->labels->singular_name . '</a></li>';
                    $output = true;
                }
            }
            // Term title
            $breadcrumb .= '<li class="' . $active_class . '">' . single_term_title( '', false ) . '</li>';
        }
        
        // Custom Post Types
        if ( is_single() && get_post_type() != 'post' && get_post_type() != 'attachment' ) {
            $cpt_obj = get_post_type_object( get_post_type() );            
            
             // Cpt archive
            if ( get_post_type_archive_link( $cpt_obj->name ) ) {
                // Custom portfolio archive page link
                global $archi_option;
                $archive_link = '';                
                if ( 'portfolio' == get_post_type() && $archi_option['portfolio_linkpage'] != '' ) {
                    $archive_link = get_page_link( $archi_option['portfolio_linkpage'] );                                
                } else {
                    $archive_link = get_post_type_archive_link( $cpt_obj->name );
                }

                $breadcrumb .= '<li><a href="' . $archive_link . '">' . $cpt_obj->labels->singular_name . '</a></li>';
            }

            // Is cpt hierarchical like pages or posts?
            if ( is_post_type_hierarchical( $cpt_obj->name ) ) {
                // Like pages               
                // Cpt parents
                $post = get_post( get_the_ID() );
                if ( $post->post_parent ) {
                    $parent_id  = $post->post_parent;
                    $crumbs = array();
                    while ( $parent_id ) {
                        $page = get_page( $parent_id );
                        $crumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
                        $parent_id  = $page->post_parent;
                    }
                    $crumbs = array_reverse( $crumbs );
                    foreach ( $crumbs as $crumb ) {
                        $breadcrumb .= '<li>' . $crumb . '</li>';
                    }
                }
            } else {
                // Like posts
                // Get cpt taxonomies
                $cpt_taxes = get_object_taxonomies( $cpt_obj->name );
                if ( $cpt_taxes && is_taxonomy_hierarchical( $cpt_taxes[0] ) ) {
                    // Other taxes attached to the cpt could be hierachical, so need to look into that.
                    $cpt_terms = get_the_terms( get_the_ID(), $cpt_taxes[0] );
                    if ( is_array( $cpt_terms ) ) {
                        $output = false;
                        foreach( $cpt_terms as $cpt_term ) {
                            if ( ! $output ) {
                                $breadcrumb .= '<li><a href="' . get_term_link( $cpt_term->name, $cpt_taxes[0] ) . '">' . $cpt_term->name . '</a></li>';
                                $output = true;
                            }
                        }
                    }
                }
            }
            // Cpt title
            $breadcrumb .= '<li class="' . $active_class . '">' . get_the_title() . '</li>';
        }
        // Close list
        $breadcrumb .= '</' . $list_style . '>';

        // Ouput
        echo $breadcrumb;
    }
}

function archi_theme_custom_the_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } 
  
    return $title;
}
add_filter( 'get_the_archive_title', 'archi_theme_custom_the_archive_title' );

/**custom function tag widgets**/
function archi_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = ''; //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'archi_tag_cloud_widget' );

/** Custom theme option post excerpt **/
function archi_excerpt() {
  global $archi_option;
  if(isset($archi_option['blog_excerpt'])){
    $limit = $archi_option['blog_excerpt'];
  }else{
    $limit = 15;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

/** Excerpt Section Blog Post **/
function archi_blog_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function archi_pagination($prev = '<i class="fa fa-angle-double-left"></i>', $next = '<i class="fa fa-angle-double-right"></i>', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $pages,
		'prev_text' => $prev,
        'next_text' => $next,		
        'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
    );
    $return =  paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '', $return );
}

/* Custom form search */
function archi_search_form( $form ) {
    $form = '<form role="search" method="get" action="' . esc_url(home_url( '/' )) . '" >  
    	<input type="search" id="search" class="search-field form-control" value="' . get_search_query() . '" name="s" placeholder="'.__('type to search&hellip;', 'archi').'" />
    	<button id="btn-search" type="submit"></button>
        <div class="clearfix"></div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'archi_search_form' );

/* Custom comment List: */
function archi_theme_comment($comment, $args, $depth) {    
   $GLOBALS['comment'] = $comment; ?>
   <li id="comment-<?php comment_ID(); ?>" class="post-content-comment grey-section">
   		<div class="img"><?php echo get_avatar($comment,$size='70',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=70' ); ?></div>
		<div class="comment-content"><h6><?php printf(__('%s','archi'), get_comment_author()) ?></h6></div>		
		<div class="date">
			<span class="c_date"><?php the_time('dS M Y'); ?></span>
            <span class="c_reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
		</div>
		<div class="comment-content">
    		<?php if ($comment->comment_approved == '0'){ ?>
    			 <p><em><?php esc_html_e('Your comment is awaiting moderation.','archi') ?></em></p>
    		<?php }else{ ?>
                <?php comment_text() ?>
             <?php } ?>
		</div>		
	    <div class="clearfix"></div>	
	</li> 
<?php
}

/* Upload images format svg */
function archi_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'archi_mime_types');

if ( ! function_exists( 'archi_custom_favicon' ) ) :
/**
 * Prints HTML with Custom Favicon.
 */
function archi_custom_favicon() {
    global $archi_option;
    
    if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {        
        if($archi_option['favicon']['url'] !=''){ 
            echo '<link rel="shortcut icon" type="image/x-icon" href="'.esc_url($archi_option['favicon']['url']).'">';    
        } 
    } 
}
endif;
