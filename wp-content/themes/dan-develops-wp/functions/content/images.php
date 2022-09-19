<?php  
/*
* Enable support for Post Thumbnails on posts and pages.
*/
add_theme_support( 'post-thumbnails' );


// Register image sizes and choose to crop (you can also pass parameters for where to crop from)
function da_register_image_sizes() {
  // for hero block responsive bg images
  add_image_size( 'hero_small', 600, 200, true );
  add_image_size( 'hero_medium', 900, 300, true );
  add_image_size( 'hero_large', 1500, 500, true );
  add_image_size( 'hero_xlarge', 2100, 700, true );

  add_image_size( 'square', 700, 700, true );
 }

 add_action( 'after_setup_theme', 'da_register_image_sizes' );

 
// Add my custom image sizes to the drop-down in the Gutenberg image block
function da_custom_image_sizes_gb_block( $sizes ) {
  return array_merge( $sizes, array(
    
    //Add your custom sizes here
    'square' => __( 'Custom Square' ),
    ) );
  }
  add_filter( 'image_size_names_choose','da_custom_image_sizes_gb_block' );
    

// increase the image size threshold to 3000px
// (WP now scales down images that have either width or height greater than 2560px, so tall images can end up too small to satisfy the hero image width)
function da_big_image_size_threshold( $threshold ) {
  return 3000; // new threshold
}
add_filter('big_image_size_threshold', 'da_big_image_size_threshold', 999, 1);


// should I remove some default image sizes, now that WP creates 6 in total (or 7, for those that exceed the image threshold)?
// Or is it important to keep them all for src-set stuff?
// function da_disable_medium_large_images($sizes) {

// unset($sizes['medium_large']); // disable 768px size images
// unset($sizes['1536x1536']); // disable 2x medium-large size
// return $sizes;
	
// }
// add_filter('intermediate_image_sizes_advanced', 'da_disable_medium_large_images');