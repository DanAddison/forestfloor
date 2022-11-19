<nav class="side-nav" id="site-side-navigation">

	<h1 class="screen-reader-text">Side Nav</h1>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'side',
				'container' => false,
				'menu_class' => 'menu menu--side'
			)
		);
	?>

</nav><!-- #site-side-navigation -->