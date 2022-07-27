<?php 
if(!function_exists('archi_custom_frontend_style')){
    function archi_custom_frontend_style(){
        global $archi_option;
?>        
    <style type="text/css">    	
		<?php if($archi_option['preload-switch']!=false){ ?>
			/* Preload Colors */
			#jpreOverlay {background-color: <?php echo esc_attr( $archi_option['preload-background-color'] ); ?>;}
			#jprePercentage {color: <?php echo esc_attr( $archi_option['preload-text-color'] ); ?>;}
			#jpreBar{background-color: <?php echo esc_attr( $archi_option['main-color'] ); ?>;}
			.royal_preloader, html {background-color: <?php echo esc_attr($archi_option['preload-background-color']); ?>;}
		<?php } ?>

		/* Subheader Colors */
		#subheader{
			<?php if ($archi_option['bg_allpage']['url'] != '') { ?>
				background-image:url(<?php echo esc_url($archi_option['bg_allpage']['url']); ?>); 
			<?php } ?>
			background-color:<?php echo esc_attr($archi_option['subpage-bgcolor']); ?>;
		}
		#subheader h1, #subheader h4, #subheader .crumb {
			color: <?php echo esc_attr($archi_option['subpage-textcolor']); ?>;
		}	

		<?php if(isset($archi_option['header_style']) and $archi_option['header_style']=="header_customize" ){ ?>
			/* Header Colors */
			@media only screen and (min-width: 993px) {
				.de-navbar-left.de_light header, .de-navbar-left.de_light,
				.de-navbar-left, header, header.header-bg, .de-navbar-left header, .de-navbar-left #de-sidebar, .mainmenu li li a, .mainmenu li li li a{
				  background-color:<?php echo esc_attr($archi_option['header-background-color']); ?>;
				}
				.de-navbar-left header .mainmenu li {
					border-color:<?php echo esc_attr($archi_option['header-border-color']); ?>;
				}
				header.smaller, header.header-bg.small{
				  background-color:<?php echo esc_attr($archi_option['header-small-background-color']); ?> !important;
				  border-bottom-color: <?php echo esc_attr($archi_option['header-small-border-bottom-color']); ?> !important; 
				}
				.de-navbar-left header.smaller{background-color:<?php echo esc_attr($archi_option['header-background-color']); ?> !important;}
				.no-subheader header{
					border-bottom-color: <?php echo esc_attr($archi_option['header-small-border-bottom-color']); ?>; 
				}
				#mainmenu a, .mainmenu li li a, .mainmenu li li li a, .mainmenu li a {
					color: <?php echo esc_attr($archi_option['header-text-color']); ?>;
				}
				header.smaller #mainmenu > li > a{
					color: <?php echo esc_attr($archi_option['header-scroll-text-color']); ?>;
				}						
			}
			.de-navbar-left header {border-bottom: solid 0px <?php echo esc_attr($archi_option['header-small-border-bottom-color']); ?>; }			
		<?php } ?>

		<?php if ($archi_option['dropdown-menu-customize']==true) { ?>
			@media only screen and (min-width: 993px) {
				#mainmenu li ul, #mainmenu > li > ul > li ul, .mainmenu li ul{width: <?php echo esc_attr($archi_option['dropdown-menu-width']); ?>px;}
				#mainmenu li li, #mainmenu li li li, .de-navbar-left header .mainmenu li li {border-bottom-color: <?php echo esc_attr( $archi_option['dropdown-border-color'] ); ?>;}
				#mainmenu li li a, #mainmenu li li li a, .de-navbar-left header .mainmenu li li a{background-color:<?php echo esc_attr( $archi_option['dropdown-bgcolor'] ); ?>;color:<?php echo esc_attr( $archi_option['dropdown-text-color'] ); ?>;}			
				<?php if($archi_option['dropdown-menu-item-active-hover-color'] != ''){ ?>
					.de-navbar-left header .mainmenu li li a:hover, .de-navbar-left header .mainmenu li li.current-menu-item > a,
					.de-navbar-left header .mainmenu li li.current-menu-ancestor > a {
						background-color:<?php echo esc_attr( $archi_option['dropdown-menu-item-active-hover-color'] ); ?>;
						color:<?php echo esc_attr( $archi_option['dropdown-text-color'] ); ?>;						
					}		
					.de-navbar-left header .mainmenu li li.current-menu-item {border-bottom-color: <?php echo esc_attr( $archi_option['dropdown-menu-item-active-hover-color'] ); ?>;}						
				<?php } ?>
			}
		<?php } ?>	

		#mainmenu li a:after, #mainmenu li a.mPS2id-highlight, .mainmenu li a.mPS2id-highlight, .de-navbar-left header .mainmenu > li > a:hover,
		header.smaller #mainmenu li a.mPS2id-highlight {
			color: <?php if($archi_option['menu-item-active-hover-color'] != ''){echo esc_attr( $archi_option['menu-item-active-hover-color'] );}else{echo esc_attr( $archi_option['main-color'] );} ?>;
		}
		nav ul#mainmenu > li.current-menu-ancestor > a, .mainmenu li.current-menu-item > a, nav ul.mainmenu > li.current-menu-ancestor > a, 
		#mainmenu > li > a:hover, #mainmenu > li.current-menu-item > a, header.smaller #mainmenu > li > a:hover, header.smaller #mainmenu > li.current-menu-item > a {
			color: <?php if($archi_option['menu-item-active-hover-color'] != ''){echo esc_attr( $archi_option['menu-item-active-hover-color'] );}else{echo esc_attr( $archi_option['main-color'] );} ?>;opacity:1;
		}
		#mainmenu li.current-menu-ancestor li.current-menu-ancestor > a, #mainmenu li li.active > a,
		header.smaller #mainmenu li li a:hover, #mainmenu li li a:hover {
			background-color: <?php if($archi_option['menu-item-active-hover-color'] != ''){echo esc_attr( $archi_option['menu-item-active-hover-color'] );}else{echo esc_attr( $archi_option['main-color'] );} ?>;color:#111;			
		}

		/*Topbar Border Bottom Color */
		header .info {
			border-bottom-color: <?php echo esc_attr($archi_option['topbar-border-color']['rgba']); ?>;
			color: <?php echo esc_attr($archi_option['topbar-text-color']); ?>;
		}
		header .info ul.social-list li i {
			color: <?php echo esc_attr($archi_option['topbar-text-color']); ?>;
		}

		/* Content Colors */	
		.bg-color, .de_light .bg-fixed.bg-color,
		section.call-to-action,		
		.blog-list .date, .blog-read .date,
		.slider-info .text1,
		.btn-primary, .bg-id-color,
		.pagination .current,
		.pagination .current,
		.pagination .current:hover,
		.pagination .current:hover,
		.pagination .current:focus,
		.pagination .current span:focus, .dropcap,
		.fullwidthbanner-container a.btn,
		.feature-box-big-icon i,
		#testimonial-full, .icon-deco i,
		.blog-list .date-box .day,
		.bloglist .date-box .day,
		.feature-box-small-icon .border,
		.small-border, .team-box .small-border,	.date-post,
		.team-list .small-border,
		.de-team-list .small-border,
		.btn-line:hover,a.btn-line:hover,
		.btn-line.hover,a.btn-line.hover,
		.owl-arrow span, .de-progress .progress-bar,
		#btn-close-x:hover, .box-fx .info, .de_testi blockquote:before,
		.menu-sidebar-menu-container ul li.current_page_item a,
		.widget_nav_menu ul#services-list li:hover,
		.btn-more, .widget .small-border,
		.product img:hover, #btn-search, .form-submit #submit,
		#wp-calendar tbody td#today,
		.de_tab.tab_steps .de_nav li span,
		#services-list li a:hover,
		.de_light #services-list li.active,
		#services-list li.active, .button.btn.btn-line:hover,.woocommerce #respond input#submit, .woocommerce a.button, 
		.woocommerce button.button, .woocommerce input.button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
		.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
		.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, 
		.woocommerce button.button.alt, .woocommerce input.button.alt, .added_to_cart:hover, #back-to-top, .header-light #menu-btn:hover,
		.owl-theme .owl-controls .owl-buttons div, .mb_YTVTime, .socials-sharing a.socials-item:hover, a.btn-custom,
		header.side-header .social-icons-2 ul li a:hover, .pricing-dark.pricing-box .price-row,
		.mainmenu li li a:hover, #services-list .widget_nav_menu ul.menu > li.current-menu-item > a, #services-list > li.current-menu-item > a, 
		#services-list li li.current-menu-item > a, 
		.pricing-s1 .ribbon, #sidebar .widget .small-border, .portfolio-navigation a:hover {
			background-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}
		.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce #respond input#submit.alt:hover, 
		.woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
			background-color: #DAD8DA;
			color: #5D6F93;
		}
		.post-image .owl-theme .owl-controls .owl-page.active span, .pricing-dark.pricing-box .price-row, 
		.de_light .pricing-dark.pricing-box .price-row {
		   background-color:<?php echo esc_attr( $archi_option['main-color'] ); ?> !important;
		}

		<?php if($archi_option['switch-custom-portfolio-filter']!=false){ ?> 
			<?php if($archi_option['filter-link-hover-bgcolor'] != ''){ ?>
				#filters a:hover, .filters a:hover{background-color:<?php echo esc_attr( $archi_option['filter-link-hover-bgcolor'] ); ?>;}
			<?php } ?>
				
			#filters li.showchild > a, #filters a.selected, #filters a.selected:hover,
			.filters a.selected, .filters a.selected:hover {
				background-color:<?php echo esc_attr( $archi_option['filter-link-active-bgcolor'] ); ?>;
				color: <?php echo esc_attr( $archi_option['filter-link-active-color'] ); ?>;
			}
		<?php }else{ ?>
			#filters a:hover, .filters a:hover{background-color:#111;}
			#filters li.showchild > a, #filters a.selected, #filters a.selected:hover,
			.filters a.selected, .filters a.selected:hover {
				background-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
				color: #111;
			}
		<?php } ?>

		.feature-box i,
		.slider_text h1, .id-color,
		.pricing-box li h1,
		.title span, i.large:hover,
		.feature-box-small-icon-2 i, address div i,
		.pricing-dark .pricing-box li.price-row, .price,
		.dark .feature-box-small-icon i,
		a.btn-slider:after,
		.feature-box-small-icon i, a.btn-line:after,
		.team-list .social a,
		.de_contact_info i, .de_count,
		.dark .btn-line:hover:after, .dark a.btn-line:hover:after, .dark a.btn-line.hover:after,
		a.btn-text:after,
		.separator span  i,
		address div strong,
		address span strong,
		.de_testi_by, .pf_text,
		.dark .btn-line:after, .dark  a.btn-line:after, .crumb a,
		.post-info a, .comments_number, .date .c_reply a,
		.search-form:before, h3 b, .woocommerce .star-rating span,
		.woocommerce .star-rating:before, .woocommerce div.product p.price, .woocommerce div.product span.price,
		.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .de_light.woocommerce p.stars a,
		.de_light.woocommerce p.stars a, .pricing-box h1, .de_light .pricing-box h1, h1.title strong, header .info ul.social-list li a:hover i,
		header .info ul.info-list li span, header .info ul.info-list li strong, header .info ul.info-list li i, .added_to_cart:after,
		.portfolio-icon:hover, .portfolio-icon a:hover i, .de-navbar-left #subheader .crumb a, .mb_YTVPBar, .post-controls a:hover strong, 
		.folio-style2 .folio-info h3 a:hover, .text-slider .text-item b, .style-3 b, .share-holder .social-links.rounded-share-icons a:hover i,
		.woocommerce span.onsale, .woocommerce-info .showcoupon, .pricing-s1 .bottom i, .expand h4:after, ul.sidebar-style-2 li:hover a, 
		ul.sidebar-style-2 li.active a, .pr_text, .portfolio-navigation a i, blockquote.s1  span.rating i, .process-sync2 .synced .item p, 
		.process-sync2 .item:hover p, .topbar-login li i
		{
			color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}

		ul.sidebar-style-2 li.active, ul.sidebar-style-2 li:hover {border-left-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;}
		.pricing-dark.pricing-box h1, .de_light .pricing-dark.pricing-box h1 {color: #fff;}

		.feature-box i,
		.pagination .current,
		.pagination .current,
		.pagination .current:hover,
		.pagination .current:hover,
		.pagination .current:focus,
		.pagination .current:focus
		.feature-box-big-icon i:after,
		.social-icons i,
		.btn-line:hover,a.btn-line:hover,
		.btn-line.hover,a.btn-line:hover,
		.product img:hover,
		.wpcf7 input[type=text]:focus,.wpcf7 input[type=email]:focus,.wpcf7 input[type=tel]:focus,.wpcf7 textarea:focus, #search:focus,
		.de_light .wpcf7  input[type=text]:focus,.de_light .wpcf7  input[type=tel]:focus,.de_light .wpcf7 textarea:focus,
		.de_light .wpcf7 #search:focus, .comment-form input[type='text']:focus,.comment-form input[type='email']:focus,.comment-form textarea:focus, 
		.socials-sharing a.socials-item:hover, .woocommerce span.onsale, .portfolio-navigation a:hover,
		.wpcf7 input[type=number]:focus, .wpcf7 select.wpcf7-select:focus
		{
			border-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
			outline: 0px;
		}

		.comment-form textarea:focus{
			border:1px solid <?php echo esc_attr( $archi_option['main-color'] ); ?>!important;
		}

		.box-fx .inner,
		.dark .box-fx .inner,
		.post-image,
		.arrow-up
		{
			border-bottom-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}

		.arrow-down{
			border-top-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}

		.callbacks_nav {
			background-color:<?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}

		.de_tab .de_nav li span {
			border: 2px solid <?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}

		.feature-box-big-icon i:after {
			border-color: <?php echo esc_attr( $archi_option['main-color'] ); ?> transparent; /*same colour as the lower of the bubble's gradient*/
		}

		.de_review li.active img{
			border:solid 4px <?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}
		.post-text blockquote {
		    border-left: 5px solid <?php echo esc_attr( $archi_option['main-color'] ); ?>;
		}

		#subheader.portfolio-top-image {
			background-image: url(<?php echo esc_url($archi_option['bg_top_portfolio_single']['url']); ?>);
		}
		
		/**** Custom CSS Footer ****/		
		footer .widget_recent_entries li, footer .widget_archive li,
		footer .widget_categories li, footer .widget_nav_menu li, 
		footer .widget_pages li, footer .widget_meta li, address span {
		    border-bottom-color: <?php echo esc_attr($archi_option['footer_border_text_bottom_color']); ?>;    
		}

		<?php if($archi_option['archicrumb-switch']!=true){ ?>
			/*CSS Code Disable or Enable Breadcrumb*/	
			#subheader .crumb {display:none;}
		<?php } ?>

		@media only screen and (max-width: 992px) {
			/* Styling Mobile Side Navigation */
		    body.de-navbar-left .side-header, body.de-navbar-left  header.side-header .mainmenu{ 
		    	<?php if($archi_option['hm-background-color'] != ''){ ?>background: <?php echo esc_attr($archi_option['hm-background-color']); ?>;<?php } ?>
		    }
		    body.de-navbar-left  header.side-header .mainmenu a{
		    	<?php if($archi_option['hm-text-color'] != ''){ ?>color: <?php echo esc_attr($archi_option['hm-text-color']); ?>;<?php } ?>
		    }
		    body.de-navbar-left  header.side-header .mainmenu > li {
		    	<?php if($archi_option['hm-border-color'] != ''){ ?>border-bottom-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
		    }
		    .mainmenu li ul{
		    	<?php if($archi_option['hm-border-color'] != ''){ ?>border-top-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
		    }
		    .mainmenu li ul li a{
		    	<?php if($archi_option['hm-border-color'] != ''){ ?>border-left-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
				<?php if($archi_option['hm-border-color'] != ''){ ?>border-bottom-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
		    }
		    #menu-btn:hover{
		    	background: <?php echo esc_attr( $archi_option['main-color'] ); ?>;
		    }

		    /* Styling Mobile Header */
		    header.header-bg, header, header.transparent {
		    	<?php if($archi_option['hm-background-color'] != ''){ ?>background: <?php echo esc_attr($archi_option['hm-background-color']); ?>;<?php } ?>
		    }
		    header #mainmenu li ul li:first-child, header #mainmenu li ul ul{
		    	<?php if($archi_option['hm-border-color'] != ''){ ?>border-top-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
		    }
		    #mainmenu li, header #mainmenu li ul ul li:last-child{
		    	<?php if($archi_option['hm-border-color'] != ''){ ?>border-bottom-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
		    }
		    #mainmenu li ul li a{
		    	<?php if($archi_option['hm-border-color'] != ''){ ?>border-left-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
				<?php if($archi_option['hm-border-color'] != ''){ ?>border-bottom-color: <?php echo esc_attr($archi_option['hm-border-color']); ?>;<?php } ?>
		    }
		    #mainmenu li a, #mainmenu li li a{
		    	<?php if($archi_option['hm-text-color'] != ''){ ?>color: <?php echo esc_attr($archi_option['hm-text-color']); ?>;<?php } ?>
		    }
		    <?php if($archi_option['button-menu-bgcolor'] != ''){ ?>
		    	#menu-btn{background-color:<?php echo esc_attr($archi_option['button-menu-bgcolor']); ?>;}
		    <?php } ?>
		    <?php if($archi_option['button-menu-color'] != ''){ ?>
				#menu-btn:before{color: <?php echo esc_attr($archi_option['button-menu-color']); ?>;}
			<?php } ?>

			header #mainmenu li span{				
				background:url(<?php echo esc_url($archi_option['hmobile_arrow_down']['url']); ?>) center no-repeat;				
			}			
			header #mainmenu li span.active{
				background:url(<?php echo esc_url($archi_option['hmobile_arrow_up']['url']); ?>) center no-repeat;
			}
		}
    	<?php echo wp_specialchars_decode($archi_option['custom-css']); ?>
    </style>
<?php        
    }
}
add_action('wp_head', 'archi_custom_frontend_style');