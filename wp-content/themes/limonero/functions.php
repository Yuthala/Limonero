<?php
add_action( 'wp_enqueue_scripts', 'My_theme_scripts' );
function My_theme_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    // wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'css/bootstrap.min.css' ) );
    // wp_enqueue_style( 'animate', get_theme_file_uri( 'css/animate.min.css' ) );
    // wp_enqueue_style( 'font-awesome', get_theme_file_uri( 'css/font-awesome.min.css' ) );
}
?>