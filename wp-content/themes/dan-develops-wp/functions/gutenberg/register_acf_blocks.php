<?php
	
// register custom Gutenburg blocks
function da_register_blocks() {
	
	// check function exists
	if( ! function_exists( 'acf_register_block_type' ) )
		return;

		// register blocks
		acf_register_block_type(array(
			'name'			  	  => 'hero',
			'title'				    => __('Hero Image'),
			'description'		  => __('A custom block for adding a responsive fullscreen background image.'),
			'render_callback'	=> 'da_acf_block_render_callback',
			'category'			  => 'da-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'format-image' ),
			'keywords'			  => array( 'image', 'full-width', 'hero' ),
			'supports'        => array(
				'align' => array( 'wide', 'full' )
			),
		));

		acf_register_block_type(array(
			'name'			  	  => 'link-card',
			'title'				    => __('Link Card'),
			'description'		  => __('A custom block for adding an image which links anywhere.'),
			'render_callback'	=> 'da_acf_block_render_callback',
			'category'			  => 'da-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'external' ),
			'keywords'			  => array( 'image', 'card', 'link' ),
			'supports'        => array( 'align' => false ),
		));

		acf_register_block_type(array(
			'name'			  	  => 'breadcrumb',
			'title'				    => __('Breadcrumb'),
			'description'		  => __('A custom block for adding breadcrumb navigation.'),
			'render_callback'	=> 'da_acf_block_render_callback',
			'category'			  => 'da-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'arrow-left-alt' ),
			'keywords'			  => array( 'image', 'card', 'link' ),
			'supports'        => array( 'align' => false ),
		));

		acf_register_block_type(array(
			'name'			  	  => 'gig-listing',
			'title'				    => __('Gig Listing'),
			'description'		  => __('A custom block for displaying upcoming gigs.'),
			'render_callback'	=> 'da_acf_block_render_callback',
			'category'			  => 'da-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'list-view' ),
			'keywords'			  => array( 'gigs', 'shows', 'events' ),
			'supports'        => array( 'align' => false ),
		));
		
}
add_action('acf/init', 'da_register_blocks');


function da_acf_block_render_callback( $block ) {
	
	// convert name ("acf/example") into path friendly slug ("example")
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path('blocks/'.$slug.'/'.$slug.'.php') ) ) {
		include( get_theme_file_path('blocks/'.$slug.'/'.$slug.'.php') );
	}
}