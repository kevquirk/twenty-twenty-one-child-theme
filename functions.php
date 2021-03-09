<?php

// Load the theme stylesheets
function theme_styles()
{
	// Load my CSS
	wp_enqueue_style( 'main', '/wp-content/themes/twentytwentyone-child/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');
