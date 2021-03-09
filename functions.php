<?php

// Load the theme stylesheets
function theme_styles()
{
	// Load my CSS
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');
