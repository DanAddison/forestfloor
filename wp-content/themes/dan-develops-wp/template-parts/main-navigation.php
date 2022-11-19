<nav class="main-nav" id="site-main-navigation">

	<h1 class="screen-reader-text">Main Nav</h1>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main',
				'container' => false,
				'menu_class' => 'menu menu--main'
			)
		);
	?>

</nav><!-- #site-main-navigation -->