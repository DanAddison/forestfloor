<?php
/**
 * The template for displaying the footer
 */
?>

<?php do_action( 'da_before_site_footer' ); ?>

<footer class="footer" id="site-footer">
	
	<div class="footer__inner container">

		<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {
			get_template_part( 'parts/footer-widgets' );
		} ?>

		<div class="sub-footer">

			<?php if( have_rows('social_media', 'option') ): ?>
        <h2>Find us on social</h2>
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


			<p class="copyright">&copy; <?php echo date('Y'); ?> <?php the_field('copyright', 'option'); ?></p>


			<p class="credit">Site: <a href="https://danaddison.uk">Dan Addison</a></p>


		</div><!-- .sub-footer -->	

	</div><!-- .container -->

</footer><!-- #site-footer -->

<?php do_action( 'da_after_site_footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>
