<?php
/**
 * The template for displaying the footer
 */
?>

<?php do_action( 'da_before_site_footer' ); ?>

<footer class="footer" id="site-footer">
	
	<div class="footer__inner container">

		<div class="footer__legal">
			<?php get_template_part( 'template-parts/footer-navigation' ); ?>
			
			<p class="copyright">&copy; <?php echo date('Y'); ?> <?php the_field('copyright', 'option'); ?></p>
			
			<p class="credit">Site: <a href="https://danaddison.uk">Dan Addison</a></p>
		</div>

		<?php get_template_part( 'template-parts/social-icons' ); ?>

	</div><!-- .container -->

</footer><!-- #site-footer -->

<?php do_action( 'da_after_site_footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>
