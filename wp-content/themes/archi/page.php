<?php get_header(); ?>
<?php global $archi_option; $subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true); ?>
<?php if($archi_option['subpage-switch']!=false){ ?>

    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>       
            <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
            <?php if($images){ foreach ( $images as $image ) { ?>
            <?php $img =  $image['full_url']; ?>
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

<div id="content" class="sbar">
    <div class="container">
        <div class="row">  
            <?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] == 2 ){ ?>
                <div class="<?php echo 'col-md-'.esc_attr($archi_option['blog_col_right']); ?>">
                  <?php get_sidebar();?>
                </div>
            <?php } ?>

        	<div class="<?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] != 1 ){echo 'col-md-'.esc_attr($archi_option['blog_col_left']);}else{echo 'col-md-12';}?>"> 
                <?php if (have_posts()){ ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('page-content entry-content'); ?>>
                		<?php while (have_posts()) : the_post()?>                        
                            <?php the_post_thumbnail() ?>            			
                            <?php the_content(); ?>
                            <?php
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif; 
                            ?>
                            <?php
                                wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'archi' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'archi' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                                ) );
                            ?>
                		<?php endwhile; ?>                
                    </div> 
                <?php 
                    }else {
                      esc_html_e('Page not found', 'archi'); 
                }?>
        	</div>

        	<?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] == 3 ){ ?>
                <div class="<?php echo 'col-md-'.esc_attr($archi_option['blog_col_right']); ?>">
                  <?php get_sidebar();?>
                </div>
            <?php } ?>           
        	
        </div>
    </div>
</div>

<?php get_footer(); ?>