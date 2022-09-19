<?php

/**
 * Enqueue block editor only JavaScript and CSS.
 */
function enqueue_block_editor_assets() {

	$editor_style_path 		= '/build/gulp-output/editor.build.css';

	wp_enqueue_style(
		'da-editor-styles',
        get_template_directory_uri() . $editor_style_path,
        array(),
        filemtime( get_template_directory() . $editor_style_path )
	);
}
add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets' );
