<?php
/*
	=====================
		Custom Post Types
	=====================	
*/



function cptui_register_my_cpts_testimonial() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "arken" ),
		"singular_name" => __( "Testimonial", "arken" ),
	];

	$args = [
		"label" => __( "Testimonials", "arken" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-chat",
		"supports" => [ "title","editor","excerpt","thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonial", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonial' );

function cptui_register_my_cpts_faq() {

	/**
	 * Post Type: FAQs.
	 */

	$labels = [
		"name" => __( "FAQs", "haiilo" ),
		"singular_name" => __( "FAQ", "haiilo" ),
	];

	$args = [
		"label" => __( "FAQs", "haiilo" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faq", $args );
}

add_action( 'init', 'cptui_register_my_cpts_faq' );


function cptui_register_my_cpts_services() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "arken" ),
		"singular_name" => __( "Services", "arken" ),
	];

	$args = [
		"label" => __( "Services", "arken" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title","editor","excerpt","thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type( "services", $args );
}

add_action( 'init', 'cptui_register_my_cpts_services' );