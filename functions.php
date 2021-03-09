<?php
/* Enqueues the child theme - Required for the child theme */
add_action( 'wp_enqueue_scripts', 'tutsplus_parent_styles');
function tutsplus_parent_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

/* Add custom stylesheet */
function additional_stylesheets() {

wp_register_style( 'child', get_template_directory_uri().'/child.css'  );
wp_enqueue_style( 'child' );
}

add_action( 'wp_enqueue_scripts', 'additional_stylesheets' );
