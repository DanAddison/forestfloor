<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * 
 * We'll use this for all pages, posts and archives, since we'll do everything with GB blocks
 *
 */

get_header(); ?>

<main id="main" class="main-content">
<?php the_post(); the_content(); ?>
</main>

<?php get_footer(); ?>
