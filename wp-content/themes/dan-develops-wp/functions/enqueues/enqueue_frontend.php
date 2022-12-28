<?php

/**
 * Styles (frontend)
 */
add_action('wp_enqueue_scripts', function() {

    if( file_exists(get_theme_file_path('/build/gulp-output/frontend.build.css')) ) {
	    wp_enqueue_style('da-frontend-styles', get_theme_file_uri('/build/gulp-output/frontend.build.css'), array(), filemtime(get_theme_file_path('/build/gulp-output/frontend.build.css')));
    }

	// Tiny slider
    if( file_exists(get_theme_file_path('/assets/libraries/tiny-slider/tiny-slider.min.css')) ) {
	    wp_enqueue_style('tiny-slider', get_theme_file_uri('/assets/libraries/tiny-slider/tiny-slider.min.css'));
    }

	// Google fonts
	// wp_enqueue_style( 'da-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300|Raleway:400,400i' );

	// Cookie consent styles provided by https://www.osano.com/cookieconsent/download/
	wp_enqueue_style( 'cookies-styles', 'https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css' );

});

/**
 * Scripts (frontend)
 */
add_action( 'wp_enqueue_scripts', function() {

	// replace default WP jQuery with up-to-date one
    if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri().'/build/jquery.min.js', [], '3.5.1', false);
		wp_enqueue_script('jquery');
    }

    if( file_exists ( get_theme_file_path('/build/gulp-output/frontend.build.js') ) ) {
        wp_enqueue_script('da-script', get_theme_file_uri('/build/gulp-output/frontend.build.js'), array('jquery'), filemtime(get_theme_file_path('/build/gulp-output/frontend.build.js')));
        wp_localize_script( 'da-script', 'example_call', array(
          'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX
        ) );
    }

	//Tiny slider
	if( file_exists(get_theme_file_path('/assets/libraries/tiny-slider/tiny-slider.min.js') ) ) {
		wp_enqueue_script('tiny-slider', get_theme_file_uri('/assets/libraries/tiny-slider/tiny-slider.min.js'));
    }

	// Cookie consent scripts provided by https://www.osano.com/cookieconsent/download/
	wp_enqueue_script( 'cookies-scripts', 'https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js' );

});