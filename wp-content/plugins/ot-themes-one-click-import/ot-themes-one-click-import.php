<?php
/*
Plugin Name: OT One Click Import Demo
Plugin URI: http://oceanthemes.net/
Description: OT One Click Import Demo plugin for Reduxframework extensions loading, Use for Archi theme only.
Version: 4.2.1
Author: OceanThemes
Author URI: http://oceanthemes.net/
*/

// Set your ReduxFrameWork Option name below //
$redux_opt_name = "archi_option";

if ( !function_exists( 'archi_one_click_import_demo_extension_loader' ) ) {
	function archi_one_click_import_demo_extension_loader( $ReduxFramework ) {
		$path    = dirname( __FILE__ ) . '/extensions/';
		$folders = scandir( $path, 1 );
		foreach ( $folders as $folder ) {
			if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
				continue;
			}
			$extension_class = 'ReduxFramework_Extension_' . $folder;
			if ( ! class_exists( $extension_class ) ) {
				// In case you wanted override your override, hah.
				$class_file = $path . $folder . '/extension_' . $folder . '.php';
				$class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
				if ( $class_file ) {
					require_once $class_file;
				}
			}
			if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
				$ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
			}
		}
	}
	// Modify {$redux_opt_name} to match your opt_name
	add_action( "redux/extensions/{$redux_opt_name}/before", 'archi_one_click_import_demo_extension_loader', 0 );
}

if ( !function_exists( 'wbc_filter_title' ) ) {

	/**
	 * Filter for changing demo title in options panel so it's not folder name.
	 *
	 * @param [string] $title name of demo data folder
	 *
	 * @return [string] return title for demo name.
	 */

	function wbc_filter_title( $title ) {
		return trim( ucfirst( str_replace( "-", " ", $title ) ) );
	}

	// Uncomment the below
	add_filter( 'wbc_importer_directory_title', 'wbc_filter_title', 10 );
}

if ( !function_exists( 'wbc_importer_description_text' ) ) {

	/**
	 * Filter for changing importer description info in options panel
	 * when not setting in Redux config file.
	 *
	 * @param [string] $title description above demos
	 *
	 * @return [string] return.
	 */

	function wbc_importer_description_text( $description ) {
		$message = '<p>'. esc_html__( 'Best if used on new WordPress install.', 'framework' ) .'</p>';
		$message .= '<p>'. esc_html__( 'Images are for demo purpose only.', 'framework' ) .'</p>';
		return $message;
	}

	// Uncomment the below
	add_filter( 'wbc_importer_description', 'wbc_importer_description_text', 10 );
}

if ( !function_exists( 'wbc_importer_label_text' ) ) {

	/**
	 * Filter for changing importer label/tab for redux section in options panel
	 * when not setting in Redux config file.
	 *
	 * @param [string] $title label above demos
	 *
	 * @return [string] return no html
	 */

	function wbc_importer_label_text( $label_text ) {
		$label_text = 'Demo Importer';
		return $label_text;
	}

	// Uncomment the below
	add_filter( 'wbc_importer_label', 'wbc_importer_label_text', 10 );
}

/************************************************************************
* Extended Import Demo:
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/

if ( !function_exists( 'ot_extended_import_demo' ) ) {
	function ot_extended_import_demo( $demo_active_import , $demo_directory_path ) {

		reset( $demo_active_import );
		$current_key = key( $demo_active_import );

		/************************************************************************
		* Import slider(s) for the current demo being imported
		*************************************************************************/

		if ( class_exists( 'RevSlider' ) ) {

			//If it's demo3 or demo5
			$wbc_sliders_array = array(
				'archi-dark' => 'home-main-slider.zip', //Set slider zip name				
				'archi-light' => 'main-home-slider.zip', //Set slider zip name	
				'onepage-dark' => 'home-main-slider.zip', //Set slider zip name				
				'onepage-light' => 'main-home-slider.zip', //Set slider zip name		
				'fullscreen' => 'new-home-slider.zip', //Set slider zip name
				'studio' => 'studio-home-slider.zip', //Set slider zip name
				'modern-slider-dark' => 'home-modern-slider.zip', //Set slider zip name
				'modern-slider-light' => 'new-home-slider.zip', //Set slider zip name
				'side-navigation-dark' => 'side-navigation-home-slider.zip', //Set slider zip name
				'side-navigation-light' => 'side-navigation-home-slider.zip', //Set slider zip name
				'industry' => 'industry-slider.zip', //Set slider zip name
				'gadern' => 'gadern-slider.zip', //Set slider zip name
			);

			if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_sliders_array ) ) {
				$wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];

				if ( file_exists( $demo_directory_path.$wbc_slider_import ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $demo_directory_path.$wbc_slider_import );
				}
			}
		}

		/************************************************************************
		* Setting Menus
		*************************************************************************/

		// If it's archi-dark and archi-light
		$wbc_menu_array = array( 
			'archi-dark', 
			'archi-light', 
			'arts',
			'industry',
			'gadern',
			'studio',
			'fresh', 
			'fullscreen',
			'home-minimal-dark',
			'home-minimal-light',
			'home-snowy',
			'landing-parallax-dark',
			'landing-parallax-light',
			'masonry-dark', 
			'masonry-light', 
			'menu-bottom-dark', 
			'menu-bottom-light', 
			'minisite', 
			'modern-dark',
			'modern-light',
			'modern-slider-dark',
			'modern-slider-light',
			'onepage-dark',
			'onepage-light',
			'profession-dark',
			'profession-light',
			'side-navigation-dark', 
			'side-navigation-light',
			'landing-product',
			'portfolio-minimal',	
			'before-after',
			'multipurpose-dark',
			'multipurpose-light',
		);

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {
			$main_menu = get_term_by( 'name', 'Menu Main', 'nav_menu' );
			$onepage_menu = get_term_by( 'name', 'One Page Menu', 'nav_menu' );
			$landing_menu = get_term_by( 'name', 'Landing Page', 'nav_menu' );
			$service_menu = get_term_by( 'name', 'Menu Service', 'nav_menu' );									
			set_theme_mod( 'nav_menu_locations', array(
					'primary' => $main_menu->term_id,
					'onepage'  => $onepage_menu->term_id,
					'landing'  => $landing_menu->term_id,
					'service-menu'  => $service_menu->term_id
				)
			);
		}

		/************************************************************************
		* Set HomePage
		*************************************************************************/

		// array of demos/homepages to check/select from
		$wbc_home_pages = array(
			'archi-dark' => 'Home',
			'archi-light' => 'Home',
			'industry' => 'Home',
			'gadern' => 'Home',
			'arts' => 'Home',
			'studio' => 'Home',
			'fresh' => 'Home',
			'fullscreen' => 'Home',
			'home-minimal-dark' => 'Home Minimal',
			'home-minimal-light' => 'Home Minimal',
			'home-snowy' => 'Home Snowy',
			'landing-parallax-dark' => 'Landing Parallax',
			'landing-parallax-light' => 'Landing Parallax',
			'masonry-dark' => 'Home',
			'masonry-light' => 'Home',
			'menu-bottom-dark' => 'Home Menu Bottom',
			'menu-bottom-light' => 'Home Menu Bottom Light',
			'minisite' => 'Home',
			'portfolio-minimal' => 'Home',
			'landing-product' => 'Home',
			'modern-dark' => 'Homepage New',
			'modern-light' => 'Homepage New',
			'modern-slider-dark' => 'Homepage Modern',
			'modern-slider-light' => 'Homepage Modern',
			'onepage-dark' => 'Onepage Version',
			'onepage-light' => 'Onepage Version',
			'profession-dark' => 'Home Profession',
			'profession-light' => 'Home Profession Light',
			'side-navigation-dark' => 'Home',
			'side-navigation-light' => 'Home',
			'before-after' => 'Home Before After',
			'multipurpose-dark' => 'Home',
			'multipurpose-light' => 'Home',
		);

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
			$page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
			if ( isset( $page->ID ) ) {
				update_option( 'page_on_front', $page->ID );
				update_option( 'show_on_front', 'page' );
			}
		}
	}

	// Uncomment the below
	add_action( 'wbc_importer_after_content_import', 'ot_extended_import_demo', 10, 2 );
}

?>
