<?php
function da_breadcrumb() {

    global $post; ?>

    <a href="<?php home_url(); ?>" rel="nofollow">Home</a>

    <?php
    if (is_category() || is_single()) : ?>
    
        <span> > <?php the_category( '&bull;' ); ?></span>

            <?php if (is_single()) : ?>

            <span> > <?php the_title(); ?></span>

            <?php endif;
        
        elseif (is_page()) : ?>
        <?php if( $post->post_parent ) : ?><a href="<?php echo get_permalink( $post->post_parent ); ?>"> > <?php echo get_the_title( $post->post_parent ); ?></a>
            <span><?php endif; ?> > <?php the_title(); ?></span>
     
        <?php
        elseif (is_search()) : ?>
        <span> Search Results for... <em><?php the_search_query(); ?></em></span>
        
        <?php endif;
}
?>

<p class="block block-breadcrumb"><?php da_breadcrumb(); ?></p>