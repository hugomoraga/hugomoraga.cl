<?php
/**
 * Template Name: Blog
 */
$subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true);
global $archi_option;
get_header(); ?>
<?php if($archi_option['subpage-switch']!=false){ ?>

    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" 
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>       
            <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
            <?php if($images){ foreach ( $images as $image ) { ?>
            <?php 
            $img =  $image['full_url']; ?>
              style="background-image: url('<?php echo esc_url($img); ?>');"
            <?php } } ?>
        <?php } ?>
    >
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="title-wrap">
                        <h1><?php the_title(); ?></h1>
                        <?php if ($subtitle != '') { echo '<h4>' . esc_attr($subtitle) . '</h4>'; } ?>
                    </div> 
                    <?php 
                        if(function_exists('archi_breadcrumbs')): 
                            archi_breadcrumbs();
                        endif;
                    ?> 
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
                    <?php if(have_posts()) : ?>  
                    <?php 
                        $args = array(    
                          'paged' => $paged,
                          'post_type' => 'post',
                          );
                        $wp_query = new WP_Query($args);
                        while ($wp_query -> have_posts()): $wp_query -> the_post();                         
                        get_template_part( 'content', get_post_format() ) ; 
                    ?> 
                    <?php endwhile;?> 
        
                    <?php else: ?>
                    <h1><?php _e('Nothing Found Here!', 'archi'); ?></h1>
                    <?php endif; ?>        
                </ul>

                <div class="pagination text-center ">
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