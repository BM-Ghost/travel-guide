<?php
/**
 * Travel Blogging functions
 */

if ( ! function_exists( 'travel_blogging_styles' ) ) :
	function travel_blogging_styles() {
		// Register theme stylesheet.
		wp_register_style('travel-blogging-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'travel-blogging-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'travel_blogging_styles' );