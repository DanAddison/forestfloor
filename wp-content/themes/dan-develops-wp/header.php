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

		<?php get_template_part( 'template-parts/side-navigation' ); ?>
	
		<button class="menu-button" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="icon icon-menu"></span>
		</button>
			
		<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1 class="site-branding__title"><?php bloginfo( 'name' ); ?></h1>
			<span class="site-branding__logo"></span>
		</a><!-- .site-branding -->
		
		<?php get_template_part( 'template-parts/woo-navigation' ); ?>

	</div><!-- .container -->

</header><!-- #site-header -->

<?php do_action( 'da_after_site_header' ); ?>