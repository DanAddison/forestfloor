<nav class="footer-nav" id="site-footer-navigation">

	<h1 class="screen-reader-text">Footer Nav</h1>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container' => false,
				'menu_class' => 'menu menu--footer'
			)
		);
	?>

</nav><!-- #site-footer-navigation -->