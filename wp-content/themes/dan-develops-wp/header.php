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

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,600;1,400&family=Stylish&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

<!-- for screen readers to not have to tab through all nav items etc -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dan-develops-wp' ); ?></a>

<?php do_action( 'da_before_site_header' ); ?>

<header class="site-header" id="masthead">

	<div class="header__inner container">

		<?php // get_template_part( 'template-parts/side-navigation' ); ?>
			
		<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1 class="site-branding__title"><?php bloginfo( 'name' ); ?></h1>
			<!-- <span class="site-branding__logo"></span> -->
		</a><!-- .site-branding -->
		
		<div class="header-nav">
			<?php get_template_part( 'template-parts/main-navigation' ); ?>
			<?php get_template_part( 'template-parts/woo-navigation' ); ?>
		</div>

	</div><!-- .container -->

</header><!-- #site-header -->

<?php do_action( 'da_after_site_header' ); ?>