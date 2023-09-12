<?php
    function enqueue_parenttheme_style(){
        wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    }
    add_action('wp_enqueue_scripts', 'enqueue_parenttheme_style');
    


function add_my_custom_scripts()
{
	/*----------------------------------css----------------------------------------------------- */
	// wp_enqueue_style('owl-style', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'fontawesome-style','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'  );

	wp_enqueue_style('hritck', get_stylesheet_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('manish', get_stylesheet_directory_uri() . '/assets/css/custom.css');
	//wp_enqueue_style('manish', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('carousel-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');


	/*-----------------------------------------js-------------------------------------------------------- */
	// wp_enqueue_script('carousel-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'));

	wp_enqueue_script('ranvir-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'));
	wp_enqueue_script('carousel-scripts', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js');
}
add_action('wp_enqueue_scripts', 'add_my_custom_scripts');
add_filter('wpcf7_autop_or_not', '__return_false');


