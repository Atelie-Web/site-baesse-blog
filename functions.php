<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function site_baesse_blog_enqueue_assets() {

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        [],
        '5.3.8'
    );

    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [],
        '7.0.1'
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=REM:ital,wght@0,100..900;1,100..900&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'site-baesse-blog-style',
        get_stylesheet_uri(),
        ['bootstrap', 'fontawesome', 'google-fonts'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.8',
        true
    );
}
add_action('wp_enqueue_scripts', 'site_baesse_blog_enqueue_assets');

?>
