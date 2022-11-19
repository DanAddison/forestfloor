<?php
/**
 * note: editor colour palettes and font sizes are now set in theme.json 
 * https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/
 */

 /**
 * Add support for editor styles.
 */
add_theme_support( 'editor-styles' );

/**
 * register Gutenberg block category
 */
function da_block_categories( $categories, $post ) {

    $categories =  array_merge(
        array(
            array(
                'slug' => 'da-blocks',
                'title' => 'DA Blocks',
				'icon'  => 'star-filled',
            ),
        ),
        $categories        
    );
    
   return $categories;
}
add_filter( 'block_categories_all', 'da_block_categories', 10, 2 );	


/**
 * Remove all core block patterns
 */
// remove_theme_support( 'core-block-patterns' );


/**
 * set block templates by post type
 */
// function da_register_gutenberg_templates() {

// $post_types_object = array('page', 'event' );

// 	foreach($post_types_object as $post_type_object ){
// 		$post_type_object = get_post_type_object($post_type_object); 
// 		$post_type_object->template = array(
// 			array('da/hero'),
// 		);
// 	}
// }
// add_action( 'init', 'da_register_gutenberg_templates' );
