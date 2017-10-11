<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 9/8/2017
 * Time: 8:42 PM
 */

//Add WordPress action to call init_styles method on load.
add_action('wp_enqueue_scripts', 'init_styles');

//Load parent theme style sheet. In this theme it's located in css/theme.css. Style.css in the root directory contains configuration only.
function init_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    //TODO Update path for production deployment. Grab min file etc.
	wp_enqueue_style('fontawesome', get_stylesheet_uri() . '/css/font-awesome/css/font-awesome.css');
}

//Begin Custom Post Type Registration

//=================
// Custom Highlights post type
//=================
add_action( 'init', 'register_cpt_highlight' );

function register_cpt_highlight() {

	$labels = array(
		'name' => _x( 'Highlight', 'highlight' ),
		'singular_name' => _x( 'Highlight', 'highlight' ),
		'add_new' => _x( 'Add New Highlight', 'highlight' ),
		'add_new_item' => _x( 'Add New Highlight', 'highlight' ),
		'edit_item' => _x( 'Edit Highlight', 'highlight' ),
		'new_item' => _x( 'New Highlight', 'highlight' ),
		'view_item' => _x( 'View Highlight', 'highlight' ),
		'search_items' => _x( 'Search Highlights', 'highlight' ),
		'not_found' => _x( 'No Highlights found', 'highlight' ),
		'not_found_in_trash' => _x( 'No Highlights found in Trash', 'highlight' ),
		'parent_item_colon' => _x( 'Parent Highlight:', 'highlight' ),
		'menu_name' => _x( 'Highlight', 'highlight' ),


	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'highlight', $args );
}

//=================
// Custom Services post type
//=================
add_action( 'init', 'register_cpt_service' );

function register_cpt_service() {

	$labels = array(
		'name' => _x( 'Service', 'service' ),
		'singular_name' => _x( 'Service', 'service' ),
		'add_new' => _x( 'Add New Service', 'service' ),
		'add_new_item' => _x( 'Add New Service', 'service' ),
		'edit_item' => _x( 'Edit Service', 'service' ),
		'new_item' => _x( 'New Service', 'service' ),
		'view_item' => _x( 'View Service', 'service' ),
		'search_items' => _x( 'Search Services', 'service' ),
		'not_found' => _x( 'No Services found', 'service' ),
		'not_found_in_trash' => _x( 'No Services found in Trash', 'service' ),
		'parent_item_colon' => _x( 'Parent Service:', 'service' ),
		'menu_name' => _x( 'Service', 'service' ),


	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 21,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'service', $args );
}

//======================
// Services, Service Package Taxonomy
//======================

$labels = array(
	'name'                          => __( 'Service Package', 'type' ),
	'singular_name'                 => __( 'Service Package', 'type' ),
	'search_items'                  => __( 'Search Service Packages', 'type' ),
	'popular_items'                 => __( 'Popular Service Packages', 'type' ),
	'all_items'                     => __( 'All Service Packages', 'type' ),
	'parent_item'                   => __( 'Parent Service Package', 'type' ),
	'edit_item'                     => __( 'Edit Service Package', 'type' ),
	'update_item'                   => __( 'Update Service Package', 'type' ),
	'add_new_item'                  => __( 'Add New Service Package', 'type' ),
	'new_item_name'                 => __( 'New Service Package', 'type' ),
	'separate_items_with_commas'    => __( 'Separate Service Packages with commas', 'type' ),
	'add_or_remove_items'           => __( 'Add or remove Service Packages', 'type' ),
	'choose_from_most_used'         => __( 'Choose from most used Service Packages', 'type' )
);

$args = array(
	'labels'                        => $labels,
	'public'                        => true,
	'hierarchical'                  => true,
	'show_ui'                       => true,
	'show_in_nav_menus'             => true,
	'query_var'                     => true
);

register_taxonomy( 'service_packages', 'service', $args );

//=================
// Custom Highlights post type
//=================
add_action( 'init', 'register_cpt_testimonial' );

function register_cpt_testimonial() {

	$labels = array(
		'name' => _x( 'Testimonial', 'testimonial' ),
		'singular_name' => _x( 'Testimonial', 'testimonial' ),
		'add_new' => _x( 'Add New Testimonial', 'testimonial' ),
		'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
		'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
		'new_item' => _x( 'New Testimonial', 'testimonial' ),
		'view_item' => _x( 'View Testimonial', 'testimonial' ),
		'search_items' => _x( 'Search Testimonial', 'testimonial' ),
		'not_found' => _x( 'No Testimonials found', 'testimonial' ),
		'not_found_in_trash' => _x( 'No Testimonials found in Trash', 'testimonial' ),
		'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
		'menu_name' => _x( 'Testimonial', 'testimonial' ),


	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 22,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'testimonial', $args );
}