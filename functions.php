<?php

// Load CSS
function load_css()
{
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
        wp_enqueue_style('bootstrap');
        // Alternate fonts available
        /* wp_register_style('quicksand-fonts', "https://use.typekit.net/nha1nez.css", array(), false, 'all' );
        wp_enqueue_style('quicksand-fonts');
        wp_register_style('roboto-fonts', "https://fonts.googleapis.com/css?family=Roboto:100,400,500,700&display=swap", array(), false, 'all');
        wp_enqueue_style('roboto-fonts'); */
        //
        wp_register_style('raleway-fonts', "https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap", array(), false, 'all');
        wp_enqueue_style('raleway-fonts');
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

// Custom Logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 60,
    'width'       => 200,
    'flex-height' => false,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );