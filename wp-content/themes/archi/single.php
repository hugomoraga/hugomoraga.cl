<?php
  global $archi_option;
  $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
  $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
  $subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true);
get_header(); ?>

<?php if($archi_option['subpage-switch']!=false){ ?>

  <!-- subheader begin -->
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
                    <h1>
                      <?php if($archi_option['the_blog_single'] != '') {  echo wp_specialchars_decode( do_shortcode( $archi_option['the_blog_single'] ) ); }else{ the_title(); } ?>                    
                    </h1>
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

<!-- CONTENT BLOG -->
<div id="content">
  <div class="container">
      <div class="row">

          <?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] == 2 ){ ?>
            <div class="<?php echo 'col-md-'.esc_attr($archi_option['blog_col_right']); ?>">
              <?php get_sidebar();?>
            </div>
          <?php } ?>

          <div class="<?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] != 1 ){echo 'col-md-'.esc_attr($archi_option['blog_col_left']);}else{echo 'col-md-12';}?>">
            <?php if ( have_posts() ) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <ul class="blog-list">
                  <li class="single">                  
                    <div class="post-content">
                        <div class="post-image">
                          <?php $format = get_post_format(); ?>
                            <?php if($format=='audio'){ ?>
                              <?php echo rwmb_meta( '_cmb_link_audio', 'type=oembed' ); // if you want get url: $url = get_post_meta( get_the_ID(), '_cmb_link_video', true ); echo $url; ?>                   
                            <?php } elseif($format=='video'){ ?>
                              <?php echo rwmb_meta( '_cmb_link_video', 'type=oembed' ); // if you want get url: $url = get_post_meta( get_the_ID(), '_cmb_link_video', true ); echo $url; ?>                   
                            <?php } elseif($format=='gallery'){ ?>
                              <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                  <?php $images = rwmb_meta( '_cmb_images', "type=image_advanced&size=full" ); ?>
                                  <?php if (count($images) > 0 ){ ?>  
                                    <div id="owl-demo-<?php the_ID(); ?>" class="owl-carousel">
                                      <?php foreach ( $images as $image ) { ?>
                                        <div class="item"><?php echo "<img src='{$image['full_url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' title='{$image['title']}' />"; ?></div> 
                                      <?php } ?>   
                                    </div>                                    
                                  <?php }else{
                                    if ( has_post_thumbnail() ) : ?>
                                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                      </a>
                                    <?php endif; 
                                  } ?>
                              <?php } ?>
                              <script type="text/javascript">
                                (function($){
                                  "use strict";                              
                                  $(document).ready(function() {
                                      $("#owl-demo-<?php the_ID(); ?>").owlCarousel({
                                        items : 1,
                                        autoPlay: <?php if($archi_option['post-slide-autoplay']!=false){echo 'true';}else{echo 'false';} ?>,
                                        slideSpeed : <?php echo esc_attr($archi_option['post-slide-speed']); ?>,
                                        paginationSpeed : <?php echo esc_attr($archi_option['post-slide-pagination-speed']); ?>,
                                        rewindSpeed : <?php echo esc_attr($archi_option['post-slide-rewind-speed']); ?>,
                                        singleItem:true,
                                        transitionStyle : <?php if($archi_option['post-slide-transition']!=false){echo "'fade'";}else{echo "false";} ?>,                                    
                                      });
                                    });                              
                                })(this.jQuery);
                              </script>                
                            <?php } elseif ($format=='image'){ ?>
                              <?php if( function_exists( 'rwmb_meta' ) ) { ?>  
                                <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                                <?php if($images != ''){ ?>
                                  <?php foreach ( $images as $image ) { ?>                                    
                                      <?php echo "<img src='{$image['full_url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' title='{$image['title']}' />"; ?>
                                  <?php } ?>
                                <?php }else{ ?>
                                  <?php if(has_post_thumbnail()){ ?>              
                                    <?php the_post_thumbnail( 'full' ); ?>
                                  <?php } ?>
                                <?php } ?>
                              <?php } ?>
                            <?php }else{ $format=='stadard' ?>
                                <?php if(has_post_thumbnail()){ ?>              
                                    <?php the_post_thumbnail( 'full' ); ?>
                                <?php } ?>
                            <?php } ?>
                        </div>

                        <div class="date-box">
                            <div class="day"><?php the_time('d'); ?></div>
                            <div class="month"><?php the_time('M'); ?></div>
                        </div>
                        
                        <div class="post-text page-content entry-content">
                          <h3 class="single-title"><?php the_title(); ?></h3>
                          <?php the_content(); ?>
                        </div>
                    </div>
                      
                    <div class="post-info">

                      <?php 
                        $selected_sharing = isset( $archi_option['entry_meta_multi_select'] ) ? $archi_option['entry_meta_multi_select'] : null;
                        if( !is_array( $selected_sharing ) ){
                            $selected_sharing = (array)$selected_sharing;
                        }
                      ?>

                      <?php if($archi_option['entry_meta_switch']!=false){ ?>
                        <?php if ( in_array('author', $selected_sharing) ){ ?>
                          <span class="post-user"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span>
                        <?php } if ( in_array('cate', $selected_sharing) ){ ?>
                          <?php if(has_category()){ ?>
                            <span class="post-category"><i class="fa fa-folder"></i><?php the_category( ', ' ); ?></span>
                          <?php } ?>
                        <?php } if ( in_array('tag', $selected_sharing) ) { ?>
                          <?php if(has_tag()) { ?>
                            <span class="post-tags"><i class="fa fa-tag"></i><?php the_tags('', ', ' ); ?></span> 
                          <?php } ?>
                        <?php } if ( in_array('comment', $selected_sharing) ) { ?>
                          <?php if ( comments_open() ) : ?>
                            <span class="post-comment"><i class="fa fa-comment"></i><span class="comments_number"><?php comments_number( esc_html__('0 comments', 'archi'), esc_html__('1 comments', 'archi'), esc_html__('% comments', 'archi') ); ?></span></span> 
                          <?php  endif; ?> 
                        <?php } ?>

                      <?php } ?>

                      <?php if ($archi_option['single_sharing']!=false) { ?>
                        <div class="share-holder">
                          <h4><?php esc_html_e('Share:', 'archi'); ?></h4>
                          <div class="social-links rounded-share-icons">

                            <?php 
                              $selected_sharing = isset( $archi_option['single_sharing_multi_select'] ) ? $archi_option['single_sharing_multi_select'] : null;
                              if( !is_array( $selected_sharing ) ){
                                  $selected_sharing = (array)$selected_sharing;
                              }
                            ?>

                            <?php if ( in_array('fb', $selected_sharing) ){ ?>
                              <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Facebook"><i class="fa fa-facebook"></i></a> 
                            <?php } if ( in_array('tw', $selected_sharing) ) { ?>
                              <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Twitter"><i class="fa fa-twitter"></i></a> 
                            <?php } if ( in_array('gg', $selected_sharing) ) { ?>
                              <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Google Plus"><i class="fa fa-google-plus"></i></a> 
                            <?php } if ( in_array('pinter', $selected_sharing) ) { ?>
                              <a target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" title="Pinterest"><i class="fa fa-pinterest"></i></a> 
                            <?php } if ( in_array('digg', $selected_sharing) ) { ?>
                              <a href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-digg" aria-hidden="true"></i></a>
                            <?php } if ( in_array('tumb', $selected_sharing) ) { ?> 
                              <a target="_blank" href="http://www.tumblr.com/share/link?url=<?php the_permalink(); ?>&name=<?php the_title(); ?>&description=<?php echo get_the_excerpt(); ?>" title="Tumblr"><i class="fa fa-tumblr"></i></a> 
                            <?php } if ( in_array('redd', $selected_sharing) ) { ?>
                              <a href="http://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                            <?php } if ( in_array('linked', $selected_sharing) ) { ?>
                              <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo esc_url( home_url('/') ); ?>&source=<?php bloginfo( 'name' ); ?>" title="LinkedIn"><i class="fa fa-linkedin"></i></a> 
                            <?php } if ( in_array('stumb', $selected_sharing) ) { ?>  
                              <a target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" title="StumbleUpon"><i class="fa fa-stumbleupon"></i></a>  
                            <?php } if ( in_array('delici', $selected_sharing) ) { ?>
                              <a href="https://delicious.com/save?v=5&provider=<?php bloginfo( 'name' ); ?>&noui&jump=close&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-delicious" aria-hidden="true"></i></a>
                            <?php } if ( in_array('vk', $selected_sharing) ) { ?>
                              <a href="http://vk.com/share.php?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-vk"></i></a>
                            <?php } ?>
                          </div>
                        </div>
                      <?php } ?>
                      <div class="clearfix"></div>
                    </div>
                </li>
              </ul>

              <div class="post-controls clearfix">
                <?php 
                  if ($archi_option['post_navigation'] == 'samecategory') {
                    // Previous/next post navigation same category.
                    previous_post_link( '%link', '<span class="post-title"><em>' . esc_html__( 'Older Post', 'archi' ) . '</em><strong>%title</strong></span>', true );
                    next_post_link( '%link', '<span class="post-title"><em>' . esc_html__( 'Newer Post', 'archi' ) . '</em><strong>%title</strong></span>', true );
                  }else{
                    // Previous/next post navigation.
                    the_post_navigation( array(
                      'prev_text' => '<span class="post-title"><em>' . esc_html__( 'Older Post', 'archi' ) . '</em><strong>%title</strong></span>',
                      'next_text' => '<span class="post-title"><em>' . esc_html__( 'Newer Post', 'archi' ) . '</em><strong>%title</strong></span>',                    
                    ) ); 
                  }
                ?>
              </div>

              <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class='comments-box'><h4><?php comments_number( esc_html__('0 comments', 'archi'), esc_html__('1 comments', 'archi'), esc_html__('% comments', 'archi') ); ?><h4></div>
                <?php comments_template(); ?>
              <?php  endif; ?> 

              <?php endwhile;?>

            <?php else : ?>
              <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'archi'); ?></p>
            <?php endif; ?>
          </div>

          <?php if(isset($archi_option['blog-layout']) and $archi_option['blog-layout'] == 3 ){ ?>
            <div class="<?php echo 'col-md-'.esc_attr($archi_option['blog_col_right']); ?>">
              <?php get_sidebar();?>
            </div>
          <?php } ?>

        </div>
    </div>
</div>
<!-- END CONTENT BLOG -->
<?php get_footer(); ?>	





  