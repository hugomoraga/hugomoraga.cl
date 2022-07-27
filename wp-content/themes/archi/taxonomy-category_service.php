<?php 
    get_header();
    global $archi_option; 
?>
<?php if($archi_option['subpage-switch']!=false){ ?>

    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
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
<?php if(isset($archi_option['archive_service_style']) and $archi_option['archive_service_style']!="slist"){ ?>
<div id="content">
    <div class="container">
        <div class="row">
<?php }else{ ?>
    <div id="content" class="no-padding">
<?php } ?>        
            <?php 
                $i = 0;                
                while (have_posts()) : the_post(); $i++;
            ?>
                <?php if(isset($archi_option['archive_service_style']) and $archi_option['archive_service_style']=="slist"){ ?>
                    <section class="side-bg no-padding service-list" id="section-service-<?php echo esc_attr($i); ?>">
                        
                        <?php if ($i % 2 == 1) { ?>
                    
                        <div class="image-container col-md-5 pull-left" data-delay="0">
                            <div class="background-image" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');"></div>
                        </div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="inner-padding">
                                    <div data-wow-delay=".5s" class="col-md-6 col-md-offset-6 wow fadeInRight">
                                        <h3 class="id-color"><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                        <div class="spacer-single"></div>
                                        <a class="btn-line" href="<?php the_permalink(); ?>"><?php echo wp_specialchars_decode( do_shortcode( $archi_option['archive_service_read'] ) ); ?></a>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <?php }else{ ?>

                        <div data-delay="0" class="image-container col-md-5 col-md-offset-7 pull-right right0">
                            <div class="background-image" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');"></div>
                        </div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="inner-padding">
                                    <div data-wow-delay=".5s" class="col-md-6 wow fadeInLeft">
                                        <h3 class="id-color"><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>                                        
                                        <div class="spacer-single"></div>
                                        <a class="btn-line" href="<?php the_permalink(); ?>"><?php echo wp_specialchars_decode( do_shortcode( $archi_option['archive_service_read'] ) ); ?></a>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </section> 

                <?php }else{ ?>
                    <div class="col-md-3 item-service">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <div class="spacer-single-10"></div>
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                              if ( has_post_thumbnail() ) { 
                                the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
                              }
                            ?>
                        </a>
                        <div class="spacer-single"></div>
                        <a href="<?php the_permalink(); ?>" class="btn-line btn-fullwidth"><?php echo wp_specialchars_decode( do_shortcode( $archi_option['archive_service_read'] ) ); ?></a>
                    </div>
                <?php } ?>

            <?php endwhile; ?> 

        <?php if(isset($archi_option['archive_service_style']) and $archi_option['archive_service_style']!="sgrid"){ ?>
        <div class="container">
            <div class="row">
        <?php } ?>  
		
        <?php if ($wp_query->max_num_pages > 1) { ?>
            <div class="col-md-12">
                <div class="pagination text-center" style="width:100%;padding-top: 40px;">
                    <?php
                        global $wp_query;
                        $big = 999999999;
                        echo paginate_links( array(
                          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                          'format' => '?paged=%#%',
                          'current' => max( 1, get_query_var('paged') ),
                          'total' => $wp_query->max_num_pages,                      
                            'prev_text' => '<i class="fa fa-angle-double-left"></i>',
                            'next_text' => '<i class="fa fa-angle-double-right"></i>',       
                            'type'          => 'list',
                            'end_size'      => 3,
                            'mid_size'      => 3
                        ) );
                    ?>
                </div>
            </div>
        <?php } ?> 
		
        </div>
    </div>

</div>
<!-- content close -->
<?php get_footer(); ?>
