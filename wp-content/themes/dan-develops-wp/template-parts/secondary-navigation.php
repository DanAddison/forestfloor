<nav class="secondary-nav" id="site-secondary-navigation">

	<h1 class="screen-reader-text">Secondary Menu</h1>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'secondary',
				'container' => false,
				'menu_class' => 'menu menu--secondary',
			)
		);
	?>

</nav><!-- #site-secondary-navigation -->
