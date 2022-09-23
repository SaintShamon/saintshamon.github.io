<?php
/*
=====================
	Theme Setup Function
=====================
*/

function theme_setup(){
	// load_theme_textdomain( 'arken', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('menus');

	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

	//main menu
	register_nav_menus(
		array( 
			'main-menu' => __( 'Main Menu', 'jotul' ),
			'lang-menu' => __( 'Language Menu', 'jotul' ),
			'footer-menu-1' => __( 'Footer Menu 1', 'jotul'),
			'footer-menu-2' => __( 'Footer Menu 2', 'jotul'),
			'footer-menu-3' => __( 'Footer Menu 3', 'jotul'),
			'footer-menu-4' => __( 'Footer Menu 4', 'jotul'),
			'footer-menu-bottom' => __( 'Bottom footer menu', 'jotul'),
		)
    );
    
}

add_action( 'after_setup_theme', 'theme_setup' );


add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/inc/admin/admin-style.css', false, '1.0.0' );
}

function login_enqueue_scripts() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/inc/admin/login-style.css', false, '1.0.0' );
}
add_action('login_head', 'login_enqueue_scripts');

add_filter( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url($url) {
    return 'https://rocket-saas.io/';
}
add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );

// в php 7.4+ можно сократить так:
add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );