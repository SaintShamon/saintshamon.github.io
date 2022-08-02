<?php 
function cptui_register_my_cpts_programs() {

	/**
	 * Post Type: Programs.
	 */

	$labels = [
		"name" => __( "Programs", "arken" ),
		"singular_name" => __( "Program", "arken" ),
	];

	$args = [
		"label" => __( "Programs", "arken" ),
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
		"hierarchical" => true,
		"rewrite" => [ "slug" => "about-us/programs", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title","editor","excerpt","thumbnail", 'date'],
		"show_in_graphql" => false,
	];

	register_post_type( "programs", $args );
}

add_action( 'init', 'cptui_register_my_cpts_programs' );

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
