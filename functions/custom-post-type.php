<?php

// Register Custom Post Type
//add_action( 'init', 'create_post_type' );
function create_post_type() {

	register_post_type( 'events-and-workshops',
	    array(
	      'labels' => array(
	        'name' => __( 'Events & Workshops' ),
	        'singular_name' => __( 'Events & Workshops' ),
	        'add_new' => __( 'Add Events & Workshops' ),
	        'add_new_item' => __( 'Add New Events & Workshops' ),
	        'edit' => __( 'Edit' ),
	        'edit_item' => __( 'Edit Events & Workshops' ),
	        'new_item' => __( 'New Events & Workshops' ),
	        'view' => __( 'View Events & Workshops' ),
	        'view_item' => __( 'View Events & Workshops' ),
	        'search_items' => __( 'Search Events & Workshops' ),
	        'not_found' => __( 'No Events & Workshops found' ),
	        'not_found_in_trash' => __( 'No Events & Workshops found in bin' ),
	        'parent' => __( 'Parent Page' )
	      ),
	      'public' => true,
	      'hierarchical' => false,
	      'menu_icon' => 'dashicons-tickets-alt',
	      'has_archive' => true,
	      'exclude_from_search' => true,
	      //'rewrite' => array('slug' => 'partner'),
	      'supports' => array('title', 'thumbnail', 'editor')
	    )
	);

}
