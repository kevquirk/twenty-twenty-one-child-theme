<?php
add_action( 'wp_enqueue_scripts', '2021_styles' );
function 2021_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

add_action( 'wp_enqueue_scripts', 'child_stylesheet' );
function child_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/child.css', false, '1.0', 'all' );
}
