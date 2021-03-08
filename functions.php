<?php
/* Enqueues the child theme - Required for the child theme */
add_action( 'wp_enqueue_scripts', 'tutsplus_parent_styles');
function tutsplus_parent_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

/* Enqueues the external CSS file */
add_action( 'wp_enqueue_scripts', 'tutsplus_external_styles' );
function tutsplus_external_styles() {

    wp_register_style( 'child-css', get_stylesheet_directory_uri().'/child.css' );
    wp_enqueue_style( 'child-css' );

}
?>
