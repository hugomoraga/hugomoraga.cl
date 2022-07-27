/* 
* © Copyright 2017 - Archi theme made by OceanThemes
* Website: http://oceanthemes.net/
* Email: contact@oceanthemes.net 
* Support: https://oceanthemes.ticksy.com/
*/
jQuery(document).ready(function() {		
	'use strict';

	var mobile_menu_show = 0;	
	var grid_size = 10;
	var col = 4;
	var tmp_col = col;
	var sr = 466/700;
	
	jQuery(".container").fitVids();
	
	/* --------------------------------------------------
	* init_de
	* --------------------------------------------------*/
	function init_de(){	
		/* Paralax Background */	
		var $window = jQuery(window);
        jQuery('section[data-type="background"]').each(function () {
            var $bgobj = jQuery(this);
            jQuery(window).scroll(function () {
                enquire.register("screen and (min-width: 993px)", {
                    match: function () {
                        var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                        var coords = '50% ' + yPos + 'px';
                        $bgobj.css({ backgroundPosition: coords });
                    }
                });
            });
            document.createElement("article");
            document.createElement("section");
        });
	
		jQuery('.de-team-list').each(function(){
			jQuery(this).find("img").on('load', function() {
				var w = jQuery(this).css("width");
		 	   	var h = jQuery(this).css("height");
		 
				jQuery(this).parent().parent().find(".team-pic").css("height",h);
				jQuery(this).parent().parent().find(".team-desc").css("width",w);
			 	jQuery(this).parent().parent().find(".team-desc").css("height",h);
				jQuery(this).parent().parent().find(".team-desc").css("top",h);

			}).each(function() {
			  if(this.complete) jQuery(this).load();
			});
		});

		jQuery(".de-team-list").on("mouseenter", function () {
			 var h;
			 h = jQuery(this).find("img").css("height");
			 jQuery(this).find(".team-desc").stop(true).animate({'top': "0px"},350,'easeOutQuad');
			 jQuery(this).find("img").stop(true).animate({'margin-top': "-100px"},400,'easeOutQuad');
		}).on("mouseleave", function () {		
			 var h;
			 h = jQuery(this).find("img").css("height");
			 jQuery(this).find(".team-desc").stop(true).animate({'top': h},350,'easeOutQuad');
			 jQuery(this).find("img").stop(true).animate({'margin-top': "0px"},400,'easeOutQuad');
	  	});	

	  	// --------------------------------------------------
        // portfolio hover overlay-1
        // --------------------------------------------------
        jQuery('.de-gallery.hover-1 > .item > .picframe').each(function () {
            jQuery(this).find("img").on('load', function () {
                var w = jQuery(this).css("width");
                var h = jQuery(this).css("height");
                var space = 40;
                var w1 = parseInt(jQuery(this).css("width")) - space;
                var h1 = parseInt(jQuery(this).css("height")) - space;
                var obj = jQuery(this).parent().parent().find(".overlay-1");
                obj.css("width", w);
                obj.css("height", h);               
            }).each(function () {
                if (this.complete) $(this).load();
            });			
        });					
			
		// --------------------------------------------------
        // portfolio hover
        // --------------------------------------------------
        jQuery('.overlay').fadeTo(1, 0);

        // gallery hover overlay
        jQuery(".item .picframe").on("mouseenter", function () {
			var w = jQuery(this).find("img").css("width");
            var h = jQuery(this).find("img").css("height");		
            jQuery(this).parent().find(".overlay").width(w);
            jQuery(this).parent().find(".overlay").height(h);
            jQuery(this).parent().find(".overlay").stop(true).fadeTo(300, 0.9);
            var picheight = jQuery(this).find("img").css("height");
            var newheight;
            newheight = (picheight.substring(0, picheight.length - 2) / 2) - 10;
            //alert(newheight);
            jQuery(this).parent().find(".pf_text").stop(true).animate({ 'margin-top': newheight }, 300, 'easeOutCubic');

        }).on("mouseleave", function () {
            var newheight;
            var picheight = jQuery(this).find("img").css("height");
            newheight = (picheight.substring(0, picheight.length - 2) / 2) - 10;
            jQuery(this).parent().find(".pf_text").stop(true).animate({ 'margin-top': newheight - 30 }, 300, 'easeOutCubic');
            jQuery(this).parent().find(".overlay").stop(true).fadeTo(300, 0);
        });	

		jQuery('.grid.border').css('padding-top',grid_size);
		jQuery('.grid.border').css('padding-left',grid_size);
		jQuery('.grid-item').each(function () {	
		  	if (jQuery(window).width() <= 480) {
		    	var this_col = 1;
				var this_gridspace = 10;
		  	} else if (jQuery(window).width() <= 768) {
				var this_col = 2;
				var this_gridspace = 10;
			} else if (jQuery(window).width() <= 992) {	
				var this_col = 3;
				var this_gridspace = Number(jQuery(this).parent().attr('data-gridspace'));
		  	} else {
		    	var this_col = Number(jQuery(this).parent().attr('data-col'));
				var this_gridspace = Number(jQuery(this).parent().attr('data-gridspace'));
		 	}
			var this_ratio = eval($(this).parent().attr('data-ratio'));
			jQuery(this).parent().css('padding-left',this_gridspace);
			var w = (($(document).width()-(this_gridspace*this_col+1))/this_col)-(this_gridspace/this_col);
			var gi = $(this);
			var h = w*this_ratio;
			gi.css('width',w)
			gi.css('height',h);
			gi.find(".pf_title").css('margin-top',(h/2)-10);
			gi.css('margin-right',this_gridspace);
			gi.css('margin-bottom',this_gridspace);	
			if(gi.hasClass('large')){
				$(this).css('width',(w*2)+this_gridspace);
				$(this).css('height',(h*2)+this_gridspace);
			}	
			if(gi.hasClass('large-width')){
				if (jQuery(window).width() < 480) {
			    	$(this).css('width',w);
			    	$(this).css('height',(h/2)+40);
			  	} else {
					$(this).css('width',(w*2)+this_gridspace);
					$(this).css('height',h);
			  	}				
			}			
			if(gi.hasClass('large-height')){
				$(this).css('height',(h*2)+this_gridspace);
				gi.find(".pf_title").css('margin-top',(h)-20);
			}
		});		
	}
	
	init_de();

	/* --------------------------------------------------
	* function
	* --------------------------------------------------*/
	function video_autosize(){
		jQuery('.de-video-container').each(function() {
			var height_1 = jQuery(this).css("height");
			var height_2 = jQuery(this).find(".de-video-content").css("height");
			var newheight = (height_1.substring(0, height_1.length - 2)-height_2.substring(0, height_2.length - 2))/2;
			jQuery(this).find('.de-video-overlay').css("height", height_1);
			jQuery(this).find(".de-video-content").animate({'margin-top': newheight},'fast');
		});
	}
	
	window.onresize = function(event) {
		enquire.register("screen and (min-width: 993px)", {
			match : function() {
				jQuery('#mainmenu').show();
				jQuery('.mainmenu').show();
				mobile_menu_show = 1;
			},  
			unmatch : function() {
				jQuery('#mainmenu').hide();
				jQuery('.mainmenu').hide();
				mobile_menu_show = 0;
				jQuery("#menu-btn").show();
			}
		});

		/* header bottom setting begin */
        var mq = window.matchMedia("(max-width: 993px)");
        if (mq.matches) {
            jQuery('.header-bottom').css("display", "block");
            jQuery('.header-bottom').css("top", "0");
        }
        /* header bottom setting close */
		
		init_de();
		video_autosize();
		jQuery('#gallery').isotope();		
		jQuery('header').removeClass('smaller');		
		jQuery('header').removeClass('clone');

		/* --------------------------------------------------
		* custom page with background on side
		* --------------------------------------------------*/
		jQuery('.side-bg').each(function(){	
			jQuery(this).find(".image-container").css("height",jQuery(this).find(".image-container").parent().css("height"));
		});			
	};		

	function init() {
		var sh = jQuery('#de-sidebar').css("height");
		var dh = jQuery(window).innerHeight();
		var h = parseInt(sh) - parseInt(dh);
		var header_height = parseInt(jQuery('header').height(), 10);
        var screen_height = parseInt(jQuery(window).height(), 10);
        var header_mt = screen_height - header_height;
        var mq = window.matchMedia("(min-width: 993px)");
        var ms = window.matchMedia("(min-width: 768px)");

        window.addEventListener('scroll', function(e){			
			if (mq.matches) {
				var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
	            if (distanceY > shrinkOn) {
	                classie.add(header,"smaller");
	            } else {
	                if (classie.has(header,"smaller")) {
	                    classie.remove(header,"smaller");
	                }
	            }
	        }

	        if (mq.matches) {    
	            jQuery("header").addClass("clone", 1000, "easeOutBounce");
				
				/* header autoshow on scroll begin */
				var $document = jQuery(document);
				var vscroll = 0;
				
				if ($document.scrollTop() >= 50 && vscroll == 0) {
					jQuery("header.autoshow").removeClass("scrollOff");
					jQuery("header.autoshow").addClass("scrollOn");
					jQuery("header.autoshow").css("height", "auto");
					vscroll = 1;
				} else {
					jQuery("header.autoshow").removeClass("scrollOn");
					jQuery("header.autoshow").addClass("scrollOff");
					vscroll = 0;
				}
				/* header autoshow on scroll close */

	            /* header bottom on scroll begin */				
				var header_height = parseInt(jQuery('header').height(), 10);
				var screen_height = parseInt(jQuery(window).height(), 10);
				var header_mt = screen_height - header_height;

				if ($document.scrollTop() >= header_mt) {
					jQuery('.header-bottom').css("position", "fixed");
					jQuery('.header-bottom').css("top", "0");
				} else if ($document.scrollTop() <= header_mt) {
					jQuery('.header-bottom').css("position", "absolute");
					jQuery('.header-bottom').css("top", header_mt);
				}
                /* header bottom on scroll close */
			}

			if (mq.matches) {
				var sh = jQuery('#de-sidebar').css("height");
				var dh = jQuery(window).innerHeight();
				var h = parseInt(sh) - parseInt(dh);				
				if(jQuery("header").hasClass("side-header")){
					if(jQuery(document).scrollTop()>=h){
						jQuery('#de-sidebar').css("position","fixed");
						if(parseInt(sh)>parseInt(dh)){
							jQuery('#de-sidebar').css("top",-h);
						}			
						jQuery('#main').addClass("col-md-offset-3");										
					}else{
						jQuery('#de-sidebar').css("position","relative");
						if(parseInt(sh)>parseInt(dh)){
							jQuery('#de-sidebar').css("top",0);
						}	
						jQuery('#main').removeClass("col-md-offset-3");				
					}
				}			
			}
        });

		if (mq.matches) {
            jQuery('.header-bottom').css('position', 'absolute');
            jQuery('.header-bottom').css('top', header_mt);
        }
    }
    window.onload = init();	

	/* --------------------------------------------------
	* owlCarousel
	* --------------------------------------------------*/
	jQuery(".carousel-gallery").owlCarousel({
	    items : 4,
	    navigation : false,
		pagination : false
    });
	
	jQuery("#blog-carousel").owlCarousel({
	    items : 2,
	    navigation : false,
		pagination : true,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [979,1],
		itemsTablet : [768, 1],
        itemsTabletSmall : false,
        itemsMobile : [479, 1]
    });
	
	jQuery(".text-slider").owlCarousel({
	    items : 1,
		singleItem:true,	
	    navigation : false,
		pagination : false,
		mouseDrag : false,
		touchDrag : false,
		autoPlay : 4000, 
		transitionStyle : "fade"
    });

    jQuery('.carousel-single-navi').each( function () {
        var $next   = jQuery(this).data('next');
        var $prev    = jQuery(this).data('prev');        
        jQuery(this).owlCarousel({
            items: 1,
	        singleItem: true,
	        navigation: true,
	        navigationText : [$prev, $next],
	        pagination: false,
	        mouseDrag: false,
	        touchDrag: false,
	        transitionStyle: "fade"
        });
    }); 
	
	jQuery(".blog-slide").owlCarousel({
	    items : 1,
		singleItem:true,	
	    navigation : false,
		pagination : false,
		autoPlay : false
    });
	
	/* Custom Navigation owlCarousel */
	jQuery(".next").on("click", function() {
		jQuery(this).parent().parent().find('.blog-slide').trigger('owl.next');
	});
	jQuery(".prev").on("click", function() {
		jQuery(this).parent().parent().find('.blog-slide').trigger('owl.prev');
	});
	
	/* --------------------------------------------------
	* custom positiion
	* --------------------------------------------------*/
	var $doc_height = jQuery(window).innerHeight(); 
	jQuery('#homepage #content.content-overlay').css("margin-top", $doc_height);

	jQuery('.full-height, #home').css("height", $doc_height);

	/* Custom .center-y */
	var picheight = jQuery('.center-y').css("height");
	picheight = parseInt(picheight, 10);
	jQuery('.center-y').css('margin-top', (($doc_height - picheight)/2)-90);
	
	/* Custom .vertical-align */
	var vertical_height = jQuery('.vertical-align').css("height");
	vertical_height = parseInt(vertical_height, 10);
	var bannerlogo_height = jQuery('.banner-logo').css("height");
	bannerlogo_height = parseInt(bannerlogo_height, 10);
	jQuery('.vertical-align').css('margin-top', (($doc_height - vertical_height)/2) - (70 + (bannerlogo_height/2)));
	
	jQuery('.full-height .de-video-container').css("height",$doc_height);

	
	jQuery(window).load(function() {			
		video_autosize();		

		/* --------------------------------------------------
		* filtering gallery
		* --------------------------------------------------*/
		var $container = jQuery('#testimonial-masonry');
			$container.isotope({
				itemSelector: '.item',				
		});	
		var $container = jQuery('#services-masonry');
			$container.isotope({
				itemSelector: '.item',				
		});	
		var $container = jQuery('.archi-image-gallery');
			$container.isotope({
				itemSelector: '.item',				
		});		
		var $container = jQuery('#gallery');
			$container.isotope({
				itemSelector: '.item',
				filter: '*'
		});				
		jQuery('.grid').isotope({
			itemSelector: '.grid-item',
		});				
		jQuery('#filters a').on("click", function() {
			var $this = jQuery(this);
			if ( $this.hasClass('selected') ) {
				return false;
			}
			var $optionSet = $this.parents();
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');					
			var selector = jQuery(this).attr('data-filter');
			$container.isotope({ 
				filter: selector
			});
			return false;
		});				

		/* --------------------------------------------------
		* tabs
		* --------------------------------------------------*/
		jQuery('.de_tab').not('.de_tab_links').find('.de_tab_content div.de_tab_content_inner').hide();
		jQuery('.de_tab').not('.de_tab_links').find('.de_tab_content div.de_tab_content_inner:first').show();
		jQuery('li').find('.v-border').fadeTo(150,0);
		jQuery('li.active').find('.v-border').fadeTo(150,1);
		
		jQuery('.de_nav li').not('.de_nav_links li').click(function() {
			jQuery(this).parent().find('li').removeClass("active");
			jQuery(this).addClass("active");
			jQuery(this).parent().parent().find('.v-border').fadeTo(150,0);
			jQuery(this).parent().parent().find('.de_tab_content div.de_tab_content_inner').hide();
		
			var indexer = jQuery(this).index(); 
			jQuery(this).parent().parent().find('.de_tab_content div.de_tab_content_inner:eq(' + indexer + ')').fadeIn(); 
			jQuery(this).find('.v-border').fadeTo(150,1);
		});
		
		
		/* --------------------------------------------------
		* toggle
		* --------------------------------------------------*/
		jQuery(".toggle-list h2").addClass("acc_active");
		jQuery(".toggle-list h2").toggle(
		function() {
			jQuery(this).addClass("acc_noactive");
			jQuery(this).next(".ac-content").slideToggle(200);
		},
		function() {
			jQuery(this).removeClass("acc_noactive").addClass("acc_active");
			jQuery(this).next(".ac-content").slideToggle(200);
		});		
		
		/* --------------------------------------------------
		* navigation for mobile
		* --------------------------------------------------		*/
		jQuery('#menu-btn').on("click", function() {
			if(mobile_menu_show==0){
				jQuery('#mainmenu, .mainmenu').slideDown();
				mobile_menu_show = 1;
			}else{
				jQuery('#mainmenu, .mainmenu').slideUp();
				mobile_menu_show = 0;			
			}
		});
		
		jQuery('.de-gallery .item .icon-info').on("click", function() {
			jQuery('.page-overlay').show();
			url = jQuery(this).attr("data-value");
			
			jQuery("#loader-area .project-load").load(url, function() {
				jQuery("#loader-area").slideDown(500,function(){
					jQuery('.page-overlay').hide();
					jQuery('html, body').animate({
						scrollTop: jQuery('#loader-area').offset().top - 70
					}, 500, 'easeOutCirc');
											
					jQuery(".image-slider").owlCarousel({
						items : 1,
						singleItem:true,	
						navigation : false,
						pagination : true,
						autoPlay : false
					});
				
					jQuery(".container").fitVids();				
					jQuery('#btn-close-x').on("click", function() {
						jQuery("#loader-area").slideUp(500,function(){
							jQuery('html, body').animate({				
								scrollTop: jQuery('#section-portfolio').offset().top - 70
							}, 500, 'easeOutCirc');
						});
						return false;								
					});  				
				});			
			}); 
		});   
		
		jQuery('.de-gallery .item').on("click", function() {
			jQuery('#navigation').show();
		});

		/* plugin | stellar */
        jQuery.stellar({
			verticalOffset: 0
		});
			
		/* --------------------------------------------------
		* custom page with background on side
		* --------------------------------------------------*/
		jQuery('.side-bg').each(function(){	
			jQuery(this).find(".image-container").css("height",jQuery(this).find(".image-container").parent().css("height"));
		});
		
		/*Custom .center-y*/	
		var target = jQuery('.center-y');
		var targetHeight = target.outerHeight();		
		jQuery(document).scroll(function(e){
			var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
			if(scrollPercent >= 0){
				target.css('opacity', scrollPercent);
			}
		});	

		/*Custom .vertical-align*/
		var target_vertical = jQuery('.vertical-align');
		var target_verticalHeight = target_vertical.outerHeight();		
		jQuery(document).scroll(function(e){
			var scrollPercent = (target_verticalHeight - window.scrollY) / target_verticalHeight;
			if(scrollPercent >= 0){
				target_vertical.css('opacity', scrollPercent);
			}
		});
	});

	
	/* --------------------------------------------------
	* css animation
	* --------------------------------------------------*/
	var v_count = '0';
	jQuery(window).load(function() {				
		jQuery('.animated').fadeTo(0,0);
		jQuery('.animated').each(function(){
		var imagePos = jQuery(this).offset().top;
		var timedelay = jQuery(this).attr('data-delay');		
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+300) {
				jQuery(this).fadeTo(1,500);
				var $anim = jQuery(this).attr('data-animation');
			}
		});
		
		/* btn arrow up */
		jQuery(".arrow-up").on("click", function() {
			jQuery(".coming-soon .coming-soon-content").fadeOut("medium",function(){
				jQuery("#hide-content").fadeIn(600,function(){
					jQuery('.arrow-up').animate({'bottom': '-40px' },"slow");
					jQuery('.arrow-down').animate({'top': '0' },"slow");
				});
			});
		});
		
		/* btn arrow down */
		jQuery(".arrow-down").on("click", function() {
			jQuery("#hide-content").fadeOut("slow",function(){
				jQuery(".coming-soon .coming-soon-content").fadeIn(800,function(){
					jQuery('.arrow-up').animate({'bottom': '0px' },"slow");
					jQuery('.arrow-down').animate({'top': '-40' },"slow");
				});
			});
		});
		
		/* isotope */ 
		jQuery('#gallery').isotope();
		jQuery('.archi-image-gallery').isotope();
		jQuery('#testimonial-masonry').isotope();
		jQuery('#services-masonry').isotope();
		jQuery('.grid').isotope();
	});
		
	jQuery(window).scroll(function() {

		/* --------------------------------------------------
		* counter
		* -------------------------------------------------- */		
		jQuery('.timer').each(function(){
			var imagePos = jQuery(this).offset().top;			
			var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+500 && v_count=='0') {		
				jQuery(function ($) {
					// start all the timers
					jQuery('.timer').each(count);					  					  
					function count(options) {
						v_count = '1';
						var $this = jQuery(this);
						options = $.extend({}, options || {}, $this.data('countToOptions') || {});
						$this.countTo(options);
					}
				});				
			}
		});

		/* progress bar */
		jQuery('.de-progress').each(function(){
			var pos_y = jQuery(this).offset().top;
			var value = jQuery(this).find(".progress-bar").attr('data-value');		
			var topOfWindow = jQuery(window).scrollTop();
			if (pos_y < topOfWindow+500) {		
				jQuery(this).find(".progress-bar").animate({'width': value },"slow");
			}
		});

		jQuery('.animated').each(function(){
			var imagePos = jQuery(this).offset().top;
			var timedelay = jQuery(this).attr('data-delay');		
			var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+500) {		
				jQuery(this).delay(timedelay).queue(function(){
					jQuery(this).fadeTo(1,500);
					var $anim = jQuery(this).attr('data-animation');
					jQuery(this).addClass($anim).clearQueue();
				});
				
			}
		});
		
		jQuery(".nav-exit").on("click", function() {
			jQuery.magnificPopup.close();
		});			
	});
	
	/* --------------------------------------------------
	 * magnificPopup
	 * --------------------------------------------------*/
	jQuery('.simple-ajax-popup-align-top').magnificPopup({
        type: 'ajax',
        alignTop: true,
        overflowY: 'scroll',
		fixedContentPos: true,
		callbacks: {
			beforeOpen: function() { jQuery('html').addClass('mfp-helper'); },
			close: function() { jQuery('html').removeClass('mfp-helper'); }
		},
		gallery: {
			enabled: true
		},
		tClose: jQuery('#translate-magnific-popup').data('magnificclosex'), // Alt text on close button
  		tLoading: jQuery('#translate-magnific-popup').data('magnificloading'), // Text that is displayed during loading. Can contain %curr% and %total% keys
    });

	/* Project popup content without next/previous button */
    jQuery('.single-ajax-popup').magnificPopup({
        type: 'ajax',
        alignTop: true,
        overflowY: 'scroll',
		fixedContentPos: true,
		callbacks: {
			beforeOpen: function() { jQuery('html').addClass('mfp-helper'); },
			close: function() { jQuery('html').removeClass('mfp-helper'); }
		},
		tClose: jQuery('#translate-magnific-popup').data('magnificclosex'), // Alt text on close button
  		tLoading: jQuery('#translate-magnific-popup').data('magnificloading'), // Text that is displayed during loading. Can contain %curr% and %total% keys
    });
	
	/* popup youtube, video, gmaps */
	jQuery('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false,
		tClose: jQuery('#translate-magnific-popup').data('magnificclosex'), // Alt text on close button
  		tLoading: jQuery('#translate-magnific-popup').data('magnificloading'), // Text that is displayed during loading. Can contain %curr% and %total% keys
	});
	
	/* image popup	*/
	jQuery('.image-link, .video-link').magnificPopup({
	    callbacks:{
	      	elementParse: function(item) {
		        // the class name
		        if(item.el.context.className == 'video-link') {
		        	item.type = 'iframe';
		        } else {
		           item.type = 'image';
		        }
	      	}
	    },
	    gallery:{
	    	enabled:true
	    },
	    type: 'image',
	    closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title');				
			}
		},
		tClose: jQuery('#translate-magnific-popup').data('magnificclosex'), // Alt text on close button
  		tLoading: jQuery('#translate-magnific-popup').data('magnificloading'), // Text that is displayed during loading. Can contain %curr% and %total% keys
	});
	
	// mainmenu create span
	jQuery('#mainmenu li:has(ul)').prepend('<span></span>');

    // mainmenu arrow click
    jQuery("#mainmenu > li > span").on("click", function () {
        var iteration = jQuery(this).data('iteration') || 1;
        switch (iteration) {
            case 1:
                jQuery(this).addClass("active");
                jQuery(this).parent().find("ul:first").css("height", "auto");
                var curHeight = jQuery(this).parent().find("ul:first").height();
                jQuery(this).parent().find("ul:first").css("height", "0");
                jQuery(this).parent().find("ul:first").animate({ 'height': curHeight }, 100, 'easeInOutQuint');
                break;

            case 2:
                jQuery(this).removeClass("active");
                jQuery(this).parent().find("ul:first").animate({ 'height': "0" }, 100, 'easeInOutQuint');
                break;
        }
        iteration++;
        if (iteration > 2) iteration = 1;
        jQuery(this).data('iteration', iteration);
    });
	
	jQuery("#mainmenu > li > ul > li > span").on("click", function () {
        var iteration = jQuery(this).data('iteration') || 1;
        switch (iteration) {
            case 1:
                jQuery(this).addClass("active");
                jQuery(this).parent().find("ul:first").css("height", "auto");
				jQuery(this).parent().parent().parent().find("ul:first").css("height", "auto");
                var curHeight = jQuery(this).parent().find("ul:first").height();
                jQuery(this).parent().find("ul:first").css("height", "0");
                jQuery(this).parent().find("ul:first").animate({ 'height': curHeight }, 100, 'easeInOutQuint');

                break;

            case 2:
                jQuery(this).removeClass("active");
                jQuery(this).parent().find("ul:first").animate({ 'height': "0" }, 100, 'easeInOutQuint');
                break;
        }
        iteration++;
        if (iteration > 2) iteration = 1;
        jQuery(this).data('iteration', iteration);
    });
	
	jQuery("#mainmenu > li > ul > li > ul > li span").on("click", function () {
        var iteration = jQuery(this).data('iteration') || 1;
        switch (iteration) {
            case 1:
                jQuery(this).addClass("active");
                jQuery(this).parent().find("ul:first").css("height", "auto");
				jQuery(this).parent().parent().parent().find("ul:first").css("height", "auto");
                var curHeight = jQuery(this).parent().find("ul:first").height();
                jQuery(this).parent().find("ul:first").css("height", "0");
                jQuery(this).parent().find("ul:first").animate({ 'height': curHeight }, 100, 'easeInOutQuint');

                break;

            case 2:
                jQuery(this).removeClass("active");
                jQuery(this).parent().find("ul:first").animate({ 'height': "0" }, 100, 'easeInOutQuint');
                break;
        }
        iteration++;
        if (iteration > 2) iteration = 1;
        jQuery(this).data('iteration', iteration);
    });

	if (jQuery('#back-to-top').length) {
	    var scrollTrigger = 500, // px
	        backToTop = function () {
	            var scrollTop = jQuery(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                jQuery('#back-to-top').addClass('show');
	            } else {
	                jQuery('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    jQuery(window).on('scroll', function () {
	        backToTop();
	    });
	    jQuery('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        jQuery('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
		
		jQuery("section,div").css('background-color', function () {
			return jQuery(this).data('bgcolor');
		});
		
		jQuery("div").css('background-image', function () {
			return jQuery(this).data('bgimage');
		});		
    }

    /* Home YouTube Video */
	jQuery(".player").mb_YTPlayer();

	/* Home fit screen */			
	jQuery('#home-sec').css({'height':(jQuery(window).height())+'px'});
	jQuery(window).resize(function(){
		jQuery('#home-sec').css({'height':(jQuery(window).height())+'px'});
	});

    /* jquery typed plugin */
    jQuery(".typed").typed({
        stringsElement: jQuery('.typed-strings'),
        typeSpeed: 100,
        backDelay: 1500,
        loop: true,
        contentType: 'html', 
        loopCount: false,
        callback: function () { null; },
        resetCallback: function () { newTyped(); }
    });

    /* Let It Snow */
    jQuery.letItSnow('.let-it-snow', {
        stickyFlakes: 'lis-flake--js',
        makeFlakes: true,
        sticky: true
    });

	/* handle the adding of active class when clicked */
    jQuery("#menu-btn").on( "click", function(e) {
        if (!jQuery(this).hasClass("active")) {
            jQuery(this).addClass("active");
        }else{
			jQuery(this).removeClass("active");
		}
    });

    /* Filter Sub Categories */
  	jQuery('ul.listed_taxonomy_filters > li > a').on('click', function(e){
	    jQuery('ul.listed_taxonomy_filters > li > a').parent().removeClass("showchild");
	    jQuery(this).parent().addClass("showchild");
	});
	
	/* new added */
	jQuery('.expand').each(function () {
		jQuery(this).find('h4').on("click", function () {
			var iteration=$(this).data('iteration')||1
			switch ( iteration) {
				case 1:
					jQuery(this).next('.hidden-content').slideDown(300);
					jQuery(this).addClass('active');
					break;
				
				case 2:
					jQuery(this).next('.hidden-content').slideUp(300);
					jQuery(this).removeClass('active');
					break;
			}
			iteration++;
			if (iteration>2) iteration=1
			jQuery(this).data('iteration',iteration);
		});
	});
});

/* Masonry projects grids */
(function ($) { "use strict";
	// init Masonry
	var $grid = $('.projects-grids').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
		itemSelector: '.grid-items',
		// use element for option
		columnWidth: '.grid-sizers',
		percentPosition: true
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry('layout');
	});
} )(jQuery);