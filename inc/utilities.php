<?php
/**
 * Utility functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package whoami
 */

if( ! function_exists( 'slug_to_title' ) ) {
	function slug_to_title($slug = '') {
		/**
		 * Converts a slug to a title.
		 *
		 * @since 1.0.0
		 *
		 * @param string  $slug: The slug to convert.
		 *
		 * @return string
		 */

		return ucwords(str_replace('-', ' ', $slug));
	}
}

if( ! function_exists( 'phone_link' ) ) {
	function phone_link($input) {
		/**
		 * Convert phone numbers into links.
		 *
		 * @since 1.0.0
		 *
		 * @param string  $input: Phone number to be rendered into a tel link.
		 *
		 * @return string $output
		 */
    $tel = preg_replace('/[^0-9]+/', '', $input);
    $output = "tel:+1-" . substr($tel, 0, 3) . "-" . substr($tel, 3, 3) . "-" . substr($tel, 6, 4);
    if( strlen($tel) > 10 ) $output .= "," . substr($tel, 10);

    return $output;
	}
}
