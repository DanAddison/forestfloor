<?php
/**
 * Block Name: Hero Image - for adding fullscreen background image with responsive sizes
 */
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$hero_image_id = get_field( 'hero_image' );
?>

<div class="hero <?php echo $align_class; ?>">

  <?php // inline styles below add the background image to this element ?>

</div><!-- .block -->


<style type="text/css">
	.hero {
		background-image: url('<?php echo wp_get_attachment_image_url( $hero_image_id, 'hero_small' ); ?>');
	}
	
	@media screen and (min-width: 600px) {
		.hero {
			background-image: url('<?php echo wp_get_attachment_image_url( $hero_image_id, 'hero_medium' ); ?>');
		}				
	}
	
	@media screen and (min-width: 900px) {
		.hero {
			background-image: url('<?php echo wp_get_attachment_image_url( $hero_image_id, 'hero_large' ); ?>');
		}				
	}	
	
	@media screen and (min-width: 1500px) {
		.hero {
			background-image: url('<?php echo wp_get_attachment_image_url( $hero_image_id, 'hero_xlarge' ); ?>');
		}				
	}

</style>
