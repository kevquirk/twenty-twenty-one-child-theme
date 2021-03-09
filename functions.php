<?php

// Load the 2021 stylesheet
add_action( 'wp_enqueue_scripts', '2021_styles' );
function 2021_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

// Load the theme stylesheets
function theme_styles()
{
	// Load my CSS
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');
