<nav class="main-nav" id="site-main-navigation">

	<h1 class="screen-reader-text">Main Menu</h1>

	<?php // get_template_part( 'searchform' ); ?>

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