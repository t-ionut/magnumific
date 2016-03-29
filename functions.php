<?php

add_filter( 'locale', 'set_lang' );
function set_lang( $lang ) {
    if( isset( $_GET['mgmlang'] ) ) {
        if( 'en' == $_GET['mgmlang'] )
            $lang = 'en_US';
        elseif ( 'ro' == $_GET['mgmlang'] )
            $lang = 'ro_RO';
        else
            $lang = 'ro_RO';
    } else { $lang = 'ro_RO'; }

    return $lang;
}

load_theme_textdomain( 'mgm' );

function mgm_scripts() {
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
    wp_enqueue_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto', false );
    wp_enqueue_script( 'slide-menu', get_stylesheet_directory_uri() . '/js/slide-menu.js', array( 'jquery' ) );
    #wp_enqueue_script( 'skrollr', get_stylesheet_directory_uri() . '/js/plugins/skrollr.min.js', array( 'jquery' ) );
    #wp_enqueue_script( 'skrollr-magnum', get_stylesheet_directory_uri() . '/js/skrollr-magnum.js', array( 'jquery', 'skrollr' ) );
}
add_action( 'wp_enqueue_scripts', 'mgm_scripts' );

function mgm_head() {
?>
<style type="text/css">
/*
body.mgm-body-logged-in #topnav { top: 3.2rem; }
body.mgm-body-logged-out #topnav { top: 0rem; }
@media only screen and (max-width: 782px) {
    body.mgm-body-logged-in #topnav { top: 4.6rem; }
}
@media only screen and (max-width: 600px) {
    body.mgm-body-logged-in #topnav { top: 0rem; }
}
.no-js #loader { display: none; }
.js #loader {
    display: block; 
    position: absolute; 
    top: -3.2rem;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1001; 
}
*/
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script type="text/javascript">
/*
$(window).load(function() {
    // Animate loader off screen
    $("#loader").fadeOut({
        duration: 2500,
        complete: function() {
            //$("#loader").css({"display": "none"});
        }
    });
});
*/
</script>
<?php
}
add_action( 'wp_head', 'mgm_head' );

function mgm_footer() {
    #wp_enqueue_script( 'location', get_stylesheet_directory_uri() . '/js/location.js' );
    #wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?callback=initMap' );
    wp_enqueue_script( 'scrollSpeed', get_stylesheet_directory_uri() . '/js/plugins/jQuery.scrollSpeed.js', array( 'jquery' ) );
    wp_enqueue_script( 'smoothscroll', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array( 'jquery', 'scrollSpeed' ) );
    wp_enqueue_script( 'lazyView-js', get_stylesheet_directory_uri() . '/js/plugins/lazyView/jquery.lazyView.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'lazyView-js-manipulate', get_stylesheet_directory_uri() . '/js/lazyView.manipulate.js', array( 'jquery', 'lazyView-js' ) );
    wp_enqueue_style( 'lazyView-css', get_stylesheet_directory_uri() . '/js/plugins/lazyView/jquery.lazyView.min.css' );
    
    #wp_enqueue_script( 'flip', 'https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js', array( 'jquery' ) );
    #wp_enqueue_script( 'fliper', get_stylesheet_directory_uri() . '/js/fliper.js', array( 'jquery' ) );
    #wp_enqueue_script( 'slide-menu', get_stylesheet_directory_uri() . '/js/slide-menu.js' );
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

function get_map() {
    echo file_get_contents( home_url( '/wp-content/themes/magnumific/svg/romania.svg' ) );
}

function mgm_keywords( $text, $keywords = array() ) {
    foreach( $keywords as $keyword )
        $text = str_replace( $keyword, "<span class='bold keyword'>$keyword</span>", $text );

    return $text;
}