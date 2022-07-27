<?php

/*
 * Template Name: Coming Soon Video
 * Description: A Page Template.
 */

//get_header(); ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $archi_option; ?>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!-- Favicons
    ================================================== -->
    <?php archi_custom_favicon() ?> 
<?php wp_head(); ?>
</head>

<body id="homepage">
<div id="wrapper">
  <!-- content begin -->
  <div class="no-bottom no-top">

  <?php if ($archi_option['switch-cmsinside'] != 0) { ?>
  <div class="arrow-down"></div>
  <div class="arrow-up"></div>
  <section id="hide-content" class="padding-top-90">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h2><?php echo wp_specialchars_decode( do_shortcode( $archi_option['hc_title'] ) ); ?></h2>
                <?php echo wp_specialchars_decode( do_shortcode( $archi_option['hc_stitle'] ) ); ?> 
                <?php 
                if ($archi_option['hc_contact'] != '') {
                  $getcontact_id = get_post( $archi_option['hc_contact'] ); 
                  $contact_name = $getcontact_id->post_title;
                  $contact_id = $archi_option['hc_contact'];
                  $contact_shortcode = '[contact-form-7 id="'.$contact_id.'" title="'.$contact_name.'"]';                            
                  echo do_shortcode($contact_shortcode); 
                }else {
                  echo 'Please select a contact form in the backend theme option to display here.';
                }  
                ?>                            
              </div>
          </div>
      </div>
  </section>
  <?php } ?>

  <!-- parallax section -->
  <section id="section-coming-soon" class="coming-soon padding-top-90">
    <div class="coming-soon-content text-center">
      <img src="<?php echo esc_url($archi_option['cms_logo']['url']); ?>" alt="">                    
      <div class="spacer-single"></div>
      <div class="teaser-text">
          <h2><?php echo wp_specialchars_decode( do_shortcode( $archi_option['cs_title'] ) ); ?></h2>
          <br>
          <?php echo wp_specialchars_decode( do_shortcode( $archi_option['cs_stitle'] ) ); ?>
      </div>
      <div class="spacer-double"></div>
      <div class="col-md-8 col-md-offset-2">
          <ul class="countdown">
            <li> 
              <span class="days">00</span>
              <p class="days_ref"><?php esc_html_e('days', 'archi');  ?></p>
            </li>
            <li class="seperator">.</li>
            <li>
              <span class="hours">00</span>
              <p class="hours_ref"><?php esc_html_e('hours', 'archi');  ?></p>
            </li>
            <li class="seperator">:</li>
            <li> 
              <span class="minutes">00</span>
              <p class="minutes_ref"><?php esc_html_e('minutes', 'archi');  ?></p>
            </li>
            <li class="seperator">:</li>
            <li>
              <span class="seconds">00</span>
              <p class="seconds_ref"><?php esc_html_e('seconds', 'archi');  ?></p>
            </li>
          </ul>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="social-icons">
            <?php if($archi_option['facebook']!=''){ ?>                                    
                    <a target="_blank" href="<?php echo esc_url($archi_option['facebook']); ?>"><i class="fa fa-facebook"></i></a>                            
            <?php } ?>
            <?php if($archi_option['google']!=''){ ?>                            
                    <a target="_blank" href="<?php echo esc_url($archi_option['google']); ?>"><i class="fa fa-google-plus"></i></a>                            
            <?php } ?>
            <?php if($archi_option['twitter']!=''){ ?>                            
                    <a target="_blank" href="<?php echo esc_url($archi_option['twitter']); ?>"><i class="fa fa-twitter"></i></a>                            
            <?php } ?>
            <?php if($archi_option['youtube']!=''){ ?>                            
                    <a target="_blank" href="<?php echo esc_url($archi_option['youtube']); ?>"><i class="fa fa-youtube"></i></a>                            
            <?php } ?>
            <?php if($archi_option['linkedin']!=''){ ?>
                    <a target="_blank" href="<?php echo esc_url($archi_option['linkedin']); ?>"><i class="fa fa-linkedin"></i></a>
            <?php } ?>
            <?php if($archi_option['dribbble']!=''){ ?>
                    <a target="_blank" href="<?php echo esc_url($archi_option['dribbble']); ?>"><i class="fa fa-dribbble"></i></a>
            <?php } ?>
            <?php if($archi_option['pinterest']!=''){ ?>
                    <a target="_blank" href="<?php echo esc_url($archi_option['pinterest']); ?>"><i class="fa fa-pinterest"></i></a>
            <?php } ?>
            <?php if($archi_option['instagram']!=''){ ?>
                    <a target="_blank" href="<?php echo esc_url($archi_option['instagram']); ?>"><i class="fa fa-instagram"></i></a>
            <?php } ?>  
            <?php if($archi_option['github']!=''){ ?>
                    <a target="_blank" href="<?php echo esc_url($archi_option['github']); ?>"><i class="fa fa-github"></i></a>
            <?php } ?>
            <?php if($archi_option['vimeo']!=''){ ?>
                <a target="_blank" href="<?php echo esc_url($archi_option['vimeo']); ?>"><i class="fa fa-vimeo-square"></i></a>
            <?php } ?>
            <?php if($archi_option['tumblr']!=''){ ?>
                <a target="_blank" href="<?php echo esc_url($archi_option['tumblr']); ?>"><i class="fa fa-tumblr-square"></i></a>
            <?php } ?>
            <?php if($archi_option['soundcloud']!=''){ ?>
                <a target="_blank" href="<?php echo esc_url($archi_option['soundcloud']); ?>"><i class="fa fa-soundcloud"></i></a>
            <?php } ?>
            <?php if($archi_option['behance']!=''){ ?>
                <a target="_blank" href="<?php echo esc_url($archi_option['behance']); ?>"><i class="fa  fa-behance"></i></a>
            <?php } ?>
            <?php if($archi_option['lastfm']!=''){ ?>
                <a target="_blank" href="<?php echo esc_url($archi_option['lastfm']); ?>"><i class="fa fa-lastfm"></i></a>
            <?php } ?> 
            <?php if($archi_option['skype']!=''){ ?>
                <a href="<?php echo esc_url($archi_option['skype']); ?>"><i class="fa fa-skype"></i></a>
            <?php } ?> 
          </div>
        </div>
      </div>
    </section>
    <!-- parallax section close -->
    <section class="section-fixed no-top no-bottom">
      <div class="de-video-overlay dotted"></div>
      <!-- load your video here -->
      <video autoplay="" loop="" muted="" poster="<?php echo esc_url($archi_option['cs_bg']['url']); ?>">
        <?php if($archi_option['link_video_mp4'] != ''){ ?><source src="<?php echo esc_url($archi_option['link_video_mp4']); ?>" type="video/mp4" /><?php } ?>
        <?php if($archi_option['link_video_webm'] != ''){ ?><source src="<?php echo esc_url($archi_option['link_video_webm']); ?>" type="video/webm" /><?php } ?>
      </video>
    </section>
  </div>
</div>

<script type="text/javascript">
	/**
	 * downCount: Simple Countdown clock with offset
	 * Author: Sonny T. <hi@sonnyt.com>, sonnyt.com
	 */

	(function ($) {

		$.fn.downCount = function (options, callback) {
			var settings = $.extend({
					date: null,
					offset: null
				}, options);

			// Throw error if date is not set
			if (!settings.date) {
				$.error('Date is not defined.');
			}

			// Throw error if date is set incorectly
			if (!Date.parse(settings.date)) {
				$.error('Incorrect date format, it should look like this, 12/24/2012 12:00:00.');
			}

			// Save container
			var container = this;

			/**
			 * Change client's local date to match offset timezone
			 * @return {Object} Fixed Date object.
			 */
			var currentDate = function () {
				// get client's current date
				var date = new Date();

				// turn date to utc
				var utc = date.getTime() + (date.getTimezoneOffset() * 60000);

				// set new Date object
				var new_date = new Date(utc + (3600000*settings.offset))

				return new_date;
			};

			/**
			 * Main downCount function that calculates everything
			 */
			function countdown () {
				var target_date = new Date(settings.date), // set target date
					current_date = currentDate(); // get fixed current date

				// difference of dates
				var difference = target_date - current_date;

				// if difference is negative than it's pass the target date
				if (difference < 0) {
					// stop timer
					clearInterval(interval);

					if (callback && typeof callback === 'function') callback();

					return;
				}

				// basic math variables
				var _second = 1000,
					_minute = _second * 60,
					_hour = _minute * 60,
					_day = _hour * 24;

				// calculate dates
				var days = Math.floor(difference / _day),
					hours = Math.floor((difference % _day) / _hour),
					minutes = Math.floor((difference % _hour) / _minute),
					seconds = Math.floor((difference % _minute) / _second);

					// fix dates so that it will show two digets
					days = (String(days).length >= 2) ? days : '0' + days;
					hours = (String(hours).length >= 2) ? hours : '0' + hours;
					minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
					seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;

				// based on the date change the refrence wording
				var ref_days = (days === 1) ? 'day' : '<?php esc_html_e('days', 'archi');  ?>',
					ref_hours = (hours === 1) ? 'hour' : '<?php esc_html_e('hours', 'archi');  ?>',
					ref_minutes = (minutes === 1) ? 'minute' : '<?php esc_html_e('minutes', 'archi');  ?>',
					ref_seconds = (seconds === 1) ? 'second' : '<?php esc_html_e('seconds', 'archi');  ?>';
					

				// set to DOM
				container.find('.days').text(days);
				container.find('.hours').text(hours);
				container.find('.minutes').text(minutes);
				container.find('.seconds').text(seconds);

				container.find('.days_ref').text(ref_days);
				container.find('.hours_ref').text(ref_hours);
				container.find('.minutes_ref').text(ref_minutes);
				container.find('.seconds_ref').text(ref_seconds);
			};
			
			// start
			var interval = setInterval(countdown, 1000);
		};

	})(jQuery);	

  (function($) { "use strict";      
      //Timer
      $('.countdown').downCount({
          date: '<?php echo wp_specialchars_decode($archi_option['cmsoon_date']); ?> 12:00:00',
          offset: +10
      }, function () {
          alert('WOOT WOOT, done!');
      });
      //Portfolio Top Sections Fullscreen         
      $(function(){"use strict";
        $('.commingsoon-top').css({'height':($(window).height())+'px'});
        $(window).resize(function(){
        $('.commingsoon-top').css({'height':($(window).height())+'px'});
        });
      });
      
  })(jQuery);
</script>

  <style type="text/css">    
    html {
        margin-top: 0px !important;
    }
    * html body {
        margin-top: 0px !important;
    }
    @media screen and (max-width: 782px) {
      html {
          margin-top: 0px !important;
      }
      * html body {
          margin-top: 0px !important;
      }
    }
  </style>
<?php wp_footer(); ?>
</body>
</html>