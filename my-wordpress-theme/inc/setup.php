<?php
// Setup functions for the theme

function my_theme_setup() {
    // Add support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-wordpress-theme'),
        'footer' => __('Footer Menu', 'my-wordpress-theme'),
    ));
    
    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}

// Hook the setup function to the after_setup_theme action
add_action('after_setup_theme', 'my_theme_setup');
?>