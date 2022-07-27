<?php get_header(); ?>
<?php global $archi_option; ?>
<?php if($archi_option['subpage-switch']!=false){ ?>

    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap">
                        <h1><?php printf( __( 'Search results for: %s', 'archi' ), get_search_query() ); ?></h1>
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
                <?php if(have_posts()) : ?> 
                    <ul class="blog-list">
                        <?php 
                          while (have_posts()) : the_post();
                            get_template_part( 'content', get_post_format() ) ;   // End the loop.
                          endwhile;
                        ?>
                    </ul>
                <?php else: ?>
                    <h1><?php esc_html_e('Nothing Found Here!', 'archi'); ?></h1>
                <?php endif; ?> 

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


