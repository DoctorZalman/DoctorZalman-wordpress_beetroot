<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}


// register scripts and styles
add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles');

//register menus
add_action( 'after_setup_theme', 'register_menus');

//register widget zones
add_action( 'widgets_init', 'widgets_zones' );

function my_scripts_and_styles() {
    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('aos', get_template_directory_uri().'/js/aos.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('animateNumber', get_template_directory_uri().'/js/jquery.animateNumber.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('scrollax', get_template_directory_uri().'/js/scrollax.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), '1.0.1', true);
    wp_enqueue_script('google-map-scripts', get_template_directory_uri().'/js/google-map.js', array('google-map'), '1.0.1', true);

    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.1', true);

    wp_enqueue_style('iconic', get_template_directory_uri().'/css/open-iconic-bootstrap.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '0.1.0', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('owl', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(), '0.1.0', 'all');
    wp_enqueue_style('aos', get_template_directory_uri().'/css/aos.css', array(), '0.1.0', 'all');
    wp_enqueue_style('ionicons', get_template_directory_uri().'/css/ionicons.min.css', array(), '0.1.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri().'/css/flaticon.css', array(), '0.1.0', 'all');
    wp_enqueue_style('icomoon', get_template_directory_uri().'/css/icomoon.css', array(), '0.1.0', 'all');
    wp_enqueue_style('my-styles', get_template_directory_uri().'/css/style.css', array(), '0.1.0', 'all');
}

function register_menus() {
    register_nav_menus( [
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
	]);
}
//register menus
add_action( 'after_setup_theme', 'register_menus');

function widgets_zones() {
    register_sidebar( ['name'=> 'Sidebar 1', 'id' => 'sidebar-1'] );
    register_sidebar( ['name'=> 'Sidebar 2', 'id' => 'sidebar-2'] );
    register_sidebar( ['name'=> 'Sidebar 3', 'id' => 'sidebar-3'] );
}

add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-background' );


