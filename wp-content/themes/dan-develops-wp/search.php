<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="row row--pad">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'dan-develops-wp' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

				<article <?php post_class( 'search-result-item' ); ?>>

					<?php get_template_part( 'template-parts/post-header' ); ?>
				
					<div class="post__excerpt">
						<?php the_excerpt(); ?>		
					</div><!-- .post__excerpt -->
				
				</article>

				<?php	endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div><!-- .row -->

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_sidebar();
get_footer();
