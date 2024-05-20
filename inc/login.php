<?php
/**
 * Customize WP Login
 *
 * @link https://developer.wordpress.org/reference/hooks/login_headerurl/
 * @link https://developer.wordpress.org/reference/hooks/login_headertext/
 *
 * @package whoami
 */

if( ! function_exists( 'whoami_login_url' ) ) {
	/**
	 * Changing the logo link from wordpress.org to home_url()
	 *
	 * @since 1.0.0
	 * 
	 * @return string
	 */
	function whoami_login_url() {
		return home_url();
	}
	add_filter( 'login_headerurl', 'whoami_login_url' );
}

if( ! function_exists( 'whoami_login_title' ) ) {
	/**
	 * Changing the alt text on the logo to the site name
	 *
	 * @since 1.0.0
	 * 
	 * @return string
	 */
	function whoami_login_title() {
		return get_option( 'blogname' );
	}
	add_filter( 'login_headertext', 'whoami_login_title' );
}
