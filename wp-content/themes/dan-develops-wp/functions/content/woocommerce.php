<?php
/**
 * Single product page
 */
// increase size of images in the single product gallery
// add_action( 'after_setup_theme', 'signal_custom_woocommerce_theme_support' );
// function signal_custom_woocommerce_theme_support(){
// 	add_theme_support( 'woocommerce', array(
// 	'gallery_thumbnail_image_width' => 200,
// 	) );
// }

// serving an existing image size into the product gallery, instead of the gallery_thumbnail size
// add_filter( 'woocommerce_gallery_thumbnail_size', function( $size ) {
// 	return 'woocommerce_single';
// } );

/**
 * Remove tabs on single product page (Description, Additional Information ie. Shipping, Reviews..)
 * Then relocate description tab on product single template
 */
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// add_action( 'woocommerce_single_product_summary', 'woocommerce_product_description_tab', 30 );


// remove short description meta box
function remove_short_description() {
	remove_meta_box( 'postexcerpt', 'product', 'normal');
}
add_action('add_meta_boxes', 'remove_short_description', 999);

/**
 * remove add to cart button on product archives
 */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );

/*
* Add 'how did you hear about us' feedback to checkout:
*/
// add_filter( 'woocommerce_checkout_fields', 'da_hear_about_us', 30 );
// function da_hear_about_us ( $fields ){
// 	$fields['order']['hear_about_us'] = array(
// 		'type' => 'select',
// 		'label' => 'How did you hear about us?',
// 		'options' => array(
// 			'default' => '--select an option--',
// 			'instagram' => 'Instagram',
// 			'youtube' => 'YouTube',
// 			'print' => 'Print'
// 			'wom' => 'Word of mouth',
// 		)
// 		);
// 	return $fields;
// }