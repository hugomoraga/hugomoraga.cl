<?php  
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Archi
 */

global $wp_query;
$subtitle = get_post_meta($wp_query->get_queried_object_id(), "_cmb_page_subtitle", true);
global $archi_option;  
get_header(); ?>
<?php if($archi_option['subpage-switch']!=false){ ?>
    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
        <?php 
            if( function_exists( 'rwmb_meta' ) ) { 
                global $wp_query;
                $images = rwmb_meta( '_cmb_subheader_image', 'type=image_advanced&size=full', $wp_query->get_queried_object_id() );
                if($images != ''){ foreach ( $images as $image ) {
                $img =  $image['full_url']; 
        ?>
              style="background-image: url('<?php echo esc_url($img); ?>');"
            <?php } } ?>
        <?php } ?>
    >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap">
                        <h1><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
                        <?php if ($subtitle != '') { echo '<h4>' . esc_attr($subtitle) . '</h4>'; } ?>
                    </div>                                         
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

<?php }else{ ?>
    <section class="no-subpage"></section>
<?php } ?>

<?php echo wp_specialchars_decode( do_shortcode( $archi_option['top_page_contact_info'] ) ); ?>

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] == 2 ){ ?>
                <div class="<?php echo 'col-md-'.esc_attr($archi_option['blog_col_right']); ?>">
                  <?php get_sidebar();?>
                </div>
            <?php } ?>

            <div class="<?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] != 1 ){echo 'col-md-'.esc_attr($archi_option['blog_col_left']);}else{echo 'col-md-12';}?>">
                <ul class="blog-list">
                    <?php 
                      while (have_posts()) : the_post();
                        get_template_part( 'content', get_post_format() ) ;   // End the loop.
                      endwhile;
                    ?>
                </ul>

                <div class="text-center">
                    <ul class="pagination">
                        <?php echo archi_pagination(); ?>
                    </ul>
                </div>
            </div>

            <?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] == 3 ){ ?>
                <div class="<?php echo 'col-md-'.esc_attr($archi_option['blog_col_right']); ?>">
                  <?php get_sidebar();?>
                </div>
            <?php } ?>
            
        </div>
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>
