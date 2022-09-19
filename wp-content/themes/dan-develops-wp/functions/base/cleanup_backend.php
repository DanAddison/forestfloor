<?php
/*
* Removes categories / tags from default blog posts
*/
function da_unregister_taxonomies() {
	// unregister_taxonomy_for_object_type( 'category', 'post' );
	unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'da_unregister_taxonomies' );

