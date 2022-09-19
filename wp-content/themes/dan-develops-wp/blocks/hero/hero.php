<?php
/**
 * Block Name: Hero Image - for adding fullscreen background image with responsive sizes
 */
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="block block-hero-image <?php echo $align_class; ?>">

  <?php // inline styles below add the background image to this section ?>

</section><!-- .block -->


<style type="text/css">
	.block-hero-image {
		background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'hero_image' ), 'hero_small' ); ?>');
	}
	
	@media screen and (min-width: 600px) {
		.block-hero-image {
			background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'hero_image' ), 'hero_medium' ); ?>');
		}				
	}
	
	@media screen and (min-width: 900px) {
		.block-hero-image {
			background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'hero_image' ), 'hero_large' ); ?>');
		}				
	}	
	
	@media screen and (min-width: 1500px) {
		.block-hero-image {
			background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'hero_image' ), 'hero_xlarge' ); ?>');
		}				
	}

</style>
