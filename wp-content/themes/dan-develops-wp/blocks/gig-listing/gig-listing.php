<?php
/**
 * Block Name: Gig Listing
 */
?>

<div class="gig-listing">
	<h2 class="gig-listing__heading">Upcoming gigs</h2>
		
		<?php
		$today = current_time('Y-m-d');

		$args = array (
			'post_type'              => 'gig',
			'meta_query'             => array(
				array(
					'key'       => 'acf_date',
					'value'     => $today,
					'compare'   => '>',
				),
			),
			'meta_key'               => 'acf_date',
			'orderby'                => 'meta_value',
			'order'                  => 'ASC'
		);

		$gigs_query = new WP_Query( $args );

		// The Loop
		if ( $gigs_query->have_posts() ) { ?>
			
			<ul class="gig-listing__inner">

			<?php
			while ( $gigs_query->have_posts() ) {
				$gigs_query->the_post();

				$post_id = get_the_id();
				$venue = get_field('acf_venue', $post_id);
				$date = get_field('acf_date', $post_id);
				$date_formatted = date("D j F, g:i a", strtotime($date));
				$image_id = get_field('acf_poster', $post_id);
				$description = get_field('acf_description', $post_id);
			?>

			<li class="gig-listing__item">

				<div class="gig-listing__item-header">
					<h3 class="gig-listing__item-heading"><?php the_title(); ?></h3>
					<p class="gig-listing__item-venue"><?= $venue; ?></p>
					<p class="gig-listing__item-date"><?= $date_formatted; ?></p>
				</div>

				<?php if($image_id || $description) : ?>
					<div class="gig-listing__item-content">
						<div class="gig-listing__item-content-wrapper">
						
							<?php if($image_id) :
								echo wp_get_attachment_image( $image_id, 'medium' );
							endif; ?>

							<?php if($description) : ?>
								<div class="gig-listing__item-description"><?= $description; ?></div>
							<?php endif; ?>

							<a href="#" class="gig-listing__item-close"></a>
								
						</div>
					</div>
				<?php endif; ?>

			</li>

			<?php
			} // endwhile
			?>

		</ul>

		<?php
		} else {
		?>

		<div class="gig-listing__empty-message">
			<p>We have no confirmed bookings at the moment - please check back later!</p>
		</div>
		
		<?php
		}

		// Restore original Post Data
		wp_reset_postdata();
		?>

</div>