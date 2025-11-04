<?php
// functions.php

// Enqueue styles and scripts
function my_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue additional styles
    wp_enqueue_style('editor-style', get_template_directory_uri() . '/assets/css/editor-style.css');

    // Enqueue main JavaScript file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Theme support features
function my_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register custom navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-wordpress-theme'),
        'footer' => __('Footer Menu', 'my-wordpress-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Load additional setup functions
require get_template_directory() . '/inc/setup.php';
?>