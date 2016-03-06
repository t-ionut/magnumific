<?php

function mgm_scripts() {
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mgm_scripts' );

function mgm_head() {
    $style = '<style type="text/css">';
    $style .= 'body.mgm-body-logged-in #topnav { top: 3.2rem; }'; 
    $style .= 'body.mgm-body-logged-out #topnav { top: 0rem; }';
    $style .= '@media only screen and (max-width: 782px) {';
    $style .= 'body.mgm-body-logged-in #topnav { top: 4.6rem; }';
    $style .= '} @media only screen and (max-width: 600px) {';
    $style .= 'body.mgm-body-logged-in #topnav { top: 0rem; }}';
    $style .= '</style>';

    echo $style;
}
add_action( 'wp_head', 'mgm_head' );

function mgm_footer() {
    wp_enqueue_script( 'location', get_stylesheet_directory_uri() . '/js/location.js' );
    wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?callback=initMap' );
    wp_enqueue_script( 'smoothscroll', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ) );
}
add_action( 'wp_footer', 'mgm_footer' );

function mgm_body_class() {
	if( is_user_logged_in() )
		$classes[] = 'mgm-body-logged-in';
	else
		$classes[] = 'mgm-body-logged-out';

	return $classes;
}
add_filter( 'body_class', 'mgm_body_class' );

function mgm_customize( $wp_customize ) {
/*
    $wp_customize->get_setting( 'nav' )->transport = 'postMessage';
    $wp_customize->get_setting( 'colors' )->transport = 'postMessage';
*/
}
add_action( 'customize_register', 'mgm_customize' );
