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
		'not_found' => _x( 'No Highlight found', 'highlight' ),
		'not_found_in_trash' => _x( 'No Highlight found in Trash', 'highlight' ),
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