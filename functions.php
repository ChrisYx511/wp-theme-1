<?php

// Load CSS
function load_css()
{
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
        wp_enqueue_style('bootstrap');
        wp_register_style('quicksand-fonts', "https://use.typekit.net/nha1nez.css", array(), false, 'all' );
        wp_enqueue_style('quicksand-fonts');
        wp_register_style('custom', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
        wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts','load_css');

// Load Javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapJs');
    wp_register_script('customJs', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
    wp_enqueue_script('customJs');
}
add_action('wp_enqueue_scripts','load_js');

// Theme Options
add_theme_support('menus');


// Menus
register_nav_menus(
    array(
        'bottom-menu' => 'Bottom Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
        )
);

// Image Sizes
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-large', 300, 200, true);
