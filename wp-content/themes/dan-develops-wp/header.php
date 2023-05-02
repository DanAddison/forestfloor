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

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,600;1,400&family=Stylish&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

<div class="paper-overlay"></div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dan-develops-wp' ); ?></a>

<?php do_action( 'da_before_site_header' ); ?>

<header class="site-header" id="masthead">

	<div class="header__inner container">

			
		<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1 class="site-branding__title"><?php bloginfo( 'name' ); ?></h1>
		</a><!-- .site-branding -->
		
		<div class="header-nav">
			<?php get_template_part( 'template-parts/main-navigation' ); ?>
			<?php get_template_part( 'template-parts/woo-navigation' ); ?>
		</div>

	</div><!-- .container -->

</header><!-- #site-header -->

<?php do_action( 'da_after_site_header' ); ?>