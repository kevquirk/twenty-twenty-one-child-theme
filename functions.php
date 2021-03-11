<?php
/* enqueue scripts and style from parent theme */

function twentytwentyone_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
	array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');

// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' ); // make sure path reflects where the file is located
