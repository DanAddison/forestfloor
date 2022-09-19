<?php

// Conditionally allow specific Gutenberg blocks by post type
function da_allowed_block_types( $allowed_blocks, $post ) {

	// Return an array containing the allowed block types for 'post' post type
	if($post->post_type == 'post') {	
		return array(
		// common blocks
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/image',
		'core/gallery',
		'core/quote',
		'core/file',
		// 'core/cover',
		// 'core/audio',
		// 'core/video',
		
		// formatting
		'core/html', // eg. to embed iFrames
		'core/table',
		'core/pullquote',
		// 'core/freeform', // classic editor block
		'core/verse', // <pre> tag: includes text align options, eg. for poetry or song lyrics
		'core/code', // <pre> tag: includes <code> element for specific styling eg. grey background colour
		'core/preformatted', // <pre> tag: similar to code block but with more styling options
		
		// layout
		'core/columns',
		'core/separator',
		'core/media-text',
		'core/group',
		'core/buttons',
		'core/spacer', // extended for responsiveness in my editor.js file
		// 'core/nextpage', // for adding page break (but doesn't produce pagination for me?)

		// widgets
		'core/shortcode',
		'core/search',
		'core/social-links',
		// 'core/latest-posts', // loads of options.. but probably never quite enough!

		// embeds
		'core-embed/twitter',
		'core-embed/instagram',
		'core-embed/youtube',
		'core-embed/vimeo',
		'core-embed/soundcloud',
		'core-embed/facebook',
		'core-embed/tiktok',
		'core-embed/meetup-com',

		// reusable
		'core/block',

		// third party
		// 'wpforms/form-selector',
		
		// add our own blocks
		'acf/accordion',
		// 'acf/page-heading',
		'acf/hero-image',
		'acf/link-card',
		);
	}
	// Return an array containing the allowed block types for 'page' post type
	elseif($post->post_type == 'page') {
			return array(
				// common blocks
				'core/paragraph',
				'core/heading',
				'core/list',
				'core/image',
				'core/gallery',
				'core/quote',
				'core/file',
				// 'core/cover',
				// 'core/audio',
				// 'core/video',

				// reusable
				'core/block',

				// add our own blocks
				'acf/hero-image',
			);
	}
	// Allow defaults in all other post types
	else {
			return $allowed_block_types;
	}
}
// add_filter( 'allowed_block_types', 'da_allowed_block_types', 10, 2 );