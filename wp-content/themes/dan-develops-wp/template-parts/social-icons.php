<?php
/**
 * These social icons are set in the Theme Settings options page
 */

if( have_rows('social_media', 'option') ): ?>

	<ul class="footer__social">
		<?php while( have_rows('social_media', 'option') ): the_row(); 
			$platform = get_sub_field('platform');
			?>
			<li><a href="<?php the_sub_field('url'); ?>" target="_blank">
			<span class="icon icon-<?php the_sub_field('platform'); ?>"></span>
			</a></li>
		<?php endwhile; ?>
	</ul>

<?php endif; ?>