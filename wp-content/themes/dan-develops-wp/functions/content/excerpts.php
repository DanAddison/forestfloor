<?php
/**
* Custom excerpt
*/
function da_get_excerpt($post_id, $limit){
	$the_post = get_post($post_id);

	if( has_excerpt($post_id) ){ // if custom excerpt is entered in editor sidebar

		$excerpt = get_the_excerpt($post_id);
	} else { // use post_content as a basis for the excerpt

		$excerpt = ($the_post ? $the_post->post_content : null);
		$excerpt = strip_tags(strip_shortcodes($excerpt)); //Strips tags and images
		$words = explode(' ', $excerpt, $limit);

		if(count($words) >= $limit) {

			array_pop($words);
			array_push($words, '[…]');
			$excerpt = implode(' ', $words);
		}
	}

	return $excerpt;
}