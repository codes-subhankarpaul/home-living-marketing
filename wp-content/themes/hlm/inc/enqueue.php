<?php

/**
 * 
 * Enqueue scripts and styles.
 */

function hlm_scripts() {
	
	wp_enqueue_style( 'hlm-style', get_stylesheet_uri() );

	
	wp_enqueue_style( 'hlm-bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '1.0' );
	
	wp_enqueue_style( 'hlm-owl-carousel-css', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );
	
	wp_enqueue_style( 'hlm-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'hlm-style-css', get_theme_file_uri('/assets/css/style.css'), array(), '1.0' );
	
	wp_enqueue_style( 'hlm-responsive-css', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );
	
	wp_enqueue_style( 'hlm-fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array(), '1.0' );

	wp_enqueue_style( 'hlm-lineawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css', array(), '1.0' );



    wp_enqueue_script( 'hlm-jquery-js', get_theme_file_uri('/assets/js/jquery-min.js'), array(), '1.0', true );

    wp_enqueue_script( 'hlm-bootstrap-bundle-js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'hlm-owl-carousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'hlm-wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.0', true );
    
    wp_enqueue_script( 'hlm-iconify-js', 'https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js', array(), '1.0', true );

    wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'hlm_scripts' );