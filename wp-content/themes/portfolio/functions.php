<?php

function portfolio_theme_support() {
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_editor_style( 'editor.css' );
    add_theme_support( 'custom-background' );
    add_theme_support('menus');
}

add_action('after_setup_theme', 'portfolio_theme_support');

//CSS Styling
function portfolio_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . "/style.css", array('portfolio-bootstrap'), $version, 'all');
    //wp_enqueue_style('portfolio-animate-style', get_template_directory_uri() . "/assets/css/animate.css", array('portfolio-bootstrap'), $version, 'all');
    //wp_enqueue_style('portfolio-glightbox-style', get_template_directory_uri() . "/assets/css/glightbox.min.css", array('portfolio-bootstrap'), $version, 'all');
    //wp_enqueue_style('portfolio-lineicons-style', get_template_directory_uri() . "/assets/css/lineicons.css", array('portfolio-bootstrap'), $version, 'all');
    wp_enqueue_style('portfolio-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('portfolio-fontawesome', '/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/_/css/font-awesome.min.css' );
	//Google Fonts
	wp_register_style('google', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=Roboto&display=swap', array(), null, 'all');
	wp_enqueue_style('google');
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');

//Scripts
function portfolio_register_scripts() {
    wp_enqueue_script('portfolio-jquery', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('portfolio-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array(), '2.10.2', true);
    wp_enqueue_script('portfolio-bootstrapcdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('portfolio-js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', false, true);
    //wp_enqueue_script('portfolio-wow-js', get_template_directory_uri()."/assets/js/wow.min.js", array(), '1.0', false, true);
    //wp_enqueue_script('portfolio-glightbox-js', get_template_directory_uri()."/assets/js/glightbox.min.js", array(), '1.0', false, true);
    //wp_enqueue_script('portfolio-bootstrap-js', get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js", array(), '1.0', false, true);
}

add_action('wp_enqueue_scripts', 'portfolio_register_scripts');

//Menus
function portfolio_menus() {
    $locations = array(
        'main_menu' => "Main Menu",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}
add_action('init', 'portfolio_menus');

//Sidebar Menu(s)
register_sidebar( array(
	'name'          => __( 'Main Sidebar Menu', 'theme_text_domain' ),
	'id'            => 'main_sidebar_menu',
	'description'   => 'Main Sidebar Menu',
        'class'         => 'sidebar_menu',
	'before_widget' => '<li id="" class="">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
) );