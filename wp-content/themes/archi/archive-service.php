<?php 
    get_header();
    global $archi_option; 
    $service_per_page = (!empty($archi_option['service_per_page'])) ? $archi_option['service_per_page'] : 8;

    $service_col = '';
    if(isset($archi_option['service_columns']) and $archi_option['service_columns']=="cl6"){
        $service_col = 'col-md-2';
    }elseif (isset($archi_option['service_columns']) and $archi_option['service_columns']=="cl4") {
        $service_col = 'col-md-3';
    }elseif (isset($archi_option['service_columns']) and $archi_option['service_columns']=="cl3") { 
        $service_col = 'col-md-4';
    }else{
        $service_col = 'col-md-6';
    }
?>
<?php if($archi_option['subpage-switch']!=false){ ?>

    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap">
                        <?php if ($archi_option['archive_service_title'] != ''){ 
                            echo '<h1 class="page-title">' . esc_attr($archi_option['archive_service_title']) . '</h1>'; 
                        }else{ 
                            the_archive_title( '<h1 class="page-title">', '</h1>' ); 
                            the_archive_description( '<h4>', '</h4>' );
                        } ?>
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
<?php if(isset($archi_option['archive_service_style']) and $archi_option['archive_service_style']!="slist"){ ?>
<div id="content">
    <div class="container">
        <div id="services-masonry" class="row">
<?php }else{ ?>
    <div id="content" class="no-padding">
<?php } ?>        
        <?php 
            $i = 0;
            if ( get_query_var('paged') ){
				$paged = get_query_var('paged');
			}elseif ( get_query_var('page') ){
				$paged = get_query_var('page');
			}else{
				$paged = 1;
			}	
			query_posts(array('post_type' => 'service', 'posts_per_page' => $service_per_page, 'paged' => $paged ));
			while( have_posts() ) : the_post();  $i++;
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
                <div class="<?php echo esc_attr($service_col); ?> item-service item">

                    <?php if(isset($archi_option['service_img']) and $archi_option['service_img']=="imgabove"){ ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); } ?>
                        </a>
                        <div class="spacer-single"></div>
                    <?php } ?>

                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    
                    <?php if(isset($archi_option['service_img']) and $archi_option['service_img']=="imgbelow"){ ?>    
                        <div class="spacer-single-10"></div>
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); } ?>
                        </a>
                    <?php } ?>    

                    <div class="spacer-single"></div>
                    <a href="<?php the_permalink(); ?>" class="btn-line btn-fullwidth"><?php echo wp_specialchars_decode( do_shortcode( $archi_option['archive_service_read'] ) ); ?></a>

                </div>
            <?php } ?>

        <?php endwhile; ?> 
			
<?php if(isset($archi_option['archive_service_style']) and $archi_option['archive_service_style']!="slist"){ ?>
    </div>
</div>
<?php } ?>
	<div class="container">
        <div class="row">
			<div class="col-md-12">
				<div class="text-center" style="width:100%;padding-top: 40px;">                
					<ul class="pagination">
						<?php echo archi_pagination(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>		
</div>
<!-- content close -->

<?php get_footer(); ?>
