<?php
/**
 * Functions to enqueue styles and scripts
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package whoami
 */

if(! function_exists( 'whoami_enqueue_styles' ) && function_exists( 'wp_enqueue_style' )) {
	/**
	 * Enqueue styles for the frontend
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function whoami_enqueue_styles() {
		$fa_version = '6.5.2';

		wp_enqueue_style( 'parent-style',
			get_template_directory_uri() . '/style.css'
		);

		wp_enqueue_style( 'tailwind',
			get_stylesheet_directory_uri() . '/src/tailwind.css',
			'1.0'
		);

		wp_enqueue_style( 'whoami-style',
			get_stylesheet_uri(),
			null,
			'1.0'
		);

		wp_enqueue_style( 'font-awesome',
			"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/$fa_version/css/all.min.css",
			null,
			$fa_version
		);
	}
	add_action( 'wp_enqueue_scripts', 'whoami_enqueue_styles' );
}

if(! function_exists( 'whoami_enqueue_admin_styles' ) && function_exists( 'wp_enqueue_style' )) {
	/**
	 * Enqueue styles for the Admin
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function whoami_enqueue_admin_styles() {
		wp_enqueue_style( 'whoami-admin-style',
			get_stylesheet_directory_uri() . '/src/admin.css',
			'1.0'
		);
	}
	add_action( 'admin_enqueue_scripts', 'whoami_enqueue_admin_styles' );
}

if(! function_exists( 'whoami_enqueue_scripts' ) && function_exists( 'wp_enqueue_script' ) ) {
	/**
	 * Enqueue scripts for the frontend
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function whoami_enqueue_scripts() {
		wp_enqueue_script('scripts-js',
			get_stylesheet_directory_uri() . '/src/scripts.js',
			array('jquery')
		);
	}
	add_action( 'wp_enqueue_scripts', 'whoami_enqueue_scripts' );
}
