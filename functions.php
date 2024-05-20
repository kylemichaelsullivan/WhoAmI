<?php
/**
 * WhoAmI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package whoami
 */

if( ! function_exists( 'whoami_require_functions' ) ) {
	/**
	 * Require all PHP functions in /inc directory
	 *
	 * @since 1.0.0
	 * 
	 * @return void
	 */
	function whoami_require_functions() {
		$functions = glob( get_stylesheet_directory() . '/inc/*.php' );
		foreach($functions as $function) {
			require_once $function;
		}
	}
	add_action( 'init', 'whoami_require_functions' );
}
