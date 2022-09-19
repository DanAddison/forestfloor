<?php

$project_categories_taxonomy_args = array(
	'label' => __( 'Project Categories' ),
	'labels' => array(
		'singular_name' => __( 'Project Category' ),
	),
	'public' => true,
	'hierarchical' => true,
	'show_in_nav_menus' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,		
	'rewrite' => array(
		'slug' => 'project-categories',
		'with_front' => false,
	),
);
register_taxonomy( 'ct_project_category', 'project', $project_categories_taxonomy_args );