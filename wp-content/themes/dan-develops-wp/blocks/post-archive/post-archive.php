<div class="block-post-archive">
    
    <?php
    $post_type  = get_field( 'post_type' );
    $post_count = get_field( 'number_of_posts' );

    // WP_Query arguments
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $post_count,
    );

    // The Query
    $post_archive_query = new WP_Query( $args );

    // The Loop
    while ( $post_archive_query->have_posts() ) {
        $post_archive_query->the_post();
        ?>

        <div class="post-preview post-preview--<?php echo $post_type; ?>">
            <div class="post-preview__thumbnail"><?php the_post_thumbnail( 'thumbnail' ); ?>
            </div>
            <div class="post-preview__content">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>

        <?php
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>

</div>