<?php
/**
 * The template for displaying the header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- for screen readers to not have to tab through all nav items etc -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dan-develops-wp' ); ?></a>

<?php do_action( 'da_before_site_header' ); ?>

<header class="site-header" id="masthead">

	<div class="header__inner container">

		<button id="js-menu-button" class="menu-button hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button><!-- .hamburger -->

		<div class="site-branding">				
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->



		<?php if( has_nav_menu( 'main' ) ) : ?>	
			<?php get_template_part( 'template-parts/side-navigation' ); ?>
		<?php endif; ?>
	
		<div class="hamburger-container">
			<button class="menu-button hamburger hamburger--arrowturn" type="button" id="js-menu-button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button><!-- .hamburger -->
		</div>
			
		<div class="site-branding">							
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
		</div><!-- .site-branding -->
		
		<?php get_template_part( 'template-parts/woo-navigation' ); ?>

	</div><!-- .container -->

</header><!-- #site-header -->

<?php do_action( 'da_after_site_header' ); ?>