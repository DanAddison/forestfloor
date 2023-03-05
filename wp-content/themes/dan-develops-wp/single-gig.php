<?php
/**
 * Single gig template
 */

get_header();

the_post();

$post_id = get_the_id();
$venue = get_field('acf_venue', $post_id);
$date = get_field('acf_date', $post_id);
$date_formatted = date("D j F, g:i a", strtotime($date));
$image_id = get_field('acf_poster', $post_id);
$description = get_field('acf_description', $post_id);
?>

<main id="main" class="main-content">

	<div class="single-gig__header">
		<h1 class="single-gig__heading"><?php the_title(); ?></h1>
		<p class="single-gig__venue"><?= $venue; ?></p>
		<p class="single-gig__date"><?= $date_formatted; ?></p>
	</div>

	<div class="single-gig__content">
		
		<?php if($image_id) :
			echo wp_get_attachment_image( $image_id, 'medium' );
		endif; ?>

		<?php if($description) : ?>
			<div class="single-gig__description"><?= $description; ?></div>
		<?php endif; ?>
		
	</div>

</main>

<?php get_footer(); ?>
