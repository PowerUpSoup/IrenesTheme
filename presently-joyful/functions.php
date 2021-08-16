<?php

function presentlyjoyful_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
}

add_action('after_setup_theme', 'presentlyjoyful_theme_support');

function presentlyjoyful_menus() {

    $locations = array(
        'primary' => "Desktop TopNavBar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init','presentlyjoyful_menus');

function presentlyjoyful_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('presentlyjoyful-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap', false);
    // wp_enqueue_style('presentlyjoyful-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'presentlyjoyful_register_styles');

function presentlyjoyful_register_scripts(){
 wp_enqueue_script('presentlyjoyful-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('presentlyjoyful-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4.1', true);    
    wp_enqueue_script('presentlyjoyful-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1'
   , true);
    wp_enqueue_script('presentlyjoyful-main',  get_template_directory_uri()."/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'presentlyjoyful_register_scripts');


// function presentlyjoyful_widget_areas(){

//     register_sidebar(
//         array(
//             'before_title' => '',
//             'after_title' => '',
//             'before_widget' => '',
//             'after_widget' => '',
//             'name' => 'Sidebar Area',
//             'id' => 'sidebar-1',
//             'description' => 'Sidebar Widget Area',
//         )
//     );
// }

// add_action( 'widgets_init', 'presentlyjoyful_widget_areas');


?> 
