<div class="gig-listing">
	<h2>Upcoming gigs</h2>

	<ul class="gig-listing__inner">
		
		<?php
		$today = current_time('Y-m-d');

		$args = array (
			'post_type'              => 'gig',
			'meta_query'             => array(
				array(
					'key'       => 'acf_date',
					'value'     => $today,
					'compare'   => '>=',
				),
			),
			'meta_key'               => 'acf_date',
			'orderby'                => 'meta_value',
			'order'                  => 'ASC'
		);


		// The Query
		$gigs_query = new WP_Query( $args );

		// The Loop
		while ( $gigs_query->have_posts() ) {
			$gigs_query->the_post();

			$post_id = get_the_id();
			$venue = get_field('acf_venue', $post_id);
			$date = get_field('acf_date', $post_id);
			$date_formatted = date("D j F, g:i a", strtotime($date));
			$url = get_field('acf_link', $post_id);
			?>

			<li class="gig-listing__item">
				<h3><?php the_title(); ?></h3>
				<p><?= $venue; ?></p>
				<p><?= $date_formatted; ?></p>
				<?php if($url) : ?>
					<p><a href="<?= $url; ?>">More info</a></p>
				<?php endif; ?>
			</li>

			<?php
		}

		// Restore original Post Data
		wp_reset_postdata();
		?>

	</ul>
</div>