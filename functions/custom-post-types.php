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
		"rewrite" => [ "slug" => "programs", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title","editor","excerpt","thumbnail", 'date'],
		"show_in_graphql" => false,
	];

	register_post_type( "programs", $args );
}

add_action( 'init', 'cptui_register_my_cpts_programs' );
