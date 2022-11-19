<?php

// Register Custom Post Type
function register_custom_post_types() {

	// Gig
	$labels = array(
		'name'                  => 'Gigs',
		'singular_name'         => 'Gig',
		'menu_name'             => 'Gigs',
		'name_admin_bar'        => 'Gigs',
		'archives'              => 'Gigs',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Gigs',
		'add_new_item'          => 'Add New Gig',
		'add_new'               => 'Add Gig',
		'new_item'              => 'New Gig',
		'edit_item'             => 'Edit Gig',
		'update_item'           => 'Update Gig',
		'view_item'             => 'View Gig',
		'view_items'            => 'View Gigs',
		'search_items'          => 'Search Gigs',
		'not_found'             => 'No Gigs found',
		'not_found_in_trash'    => 'No Gigs found in Trash',
	);
	$args = array(
		'label'                 => 'Gig',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'show_in_rest'          => true,
	);
	register_post_type( 'gig', $args );

}
add_action( 'init', 'register_custom_post_types', 0 );
