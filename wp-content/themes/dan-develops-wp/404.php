<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<main id="main" class="site-main">
		<div id="primary" class="content-area">

			<div class="row row--pad">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dan-develops-wp' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'Sorry, it looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dan-develops-wp' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .page-content -->

				</section><!-- .error-404 -->

			</div><!-- .row -->

		</div><!-- #primary -->
	</main><!-- #main -->

<?php
get_footer();
