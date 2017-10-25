<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 9/21/2017
 * Time: 12:03 PM
 */


/**
 * Enqueue scripts and styles.
 */
function firetoss_seed_scripts() {
    wp_enqueue_style( 'firetoss_seed-style', get_stylesheet_uri() );

    wp_enqueue_script( 'firetoss_seed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'firetoss_seed-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'firetoss_seed_scripts' );

// Register Script
/**
 *
 */

function custom_scripts() {
// Add yours here following the below format

    $slider_option = get_field('slider_option', 'option');
    $scroll_reveal = get_field('scroll_reveal', 'option');

    if ($scroll_reveal):

        wp_register_script( 'scroll-reveal',  get_template_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), false, false );
        wp_enqueue_script( 'scroll-reveal' );

    endif;

    if ($slider_option == 'slick'):
        wp_register_script( 'slick-script',  get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), false, false );
        wp_enqueue_script( 'slick-script' );

        wp_register_script( 'firetoss-slick',  get_template_directory_uri() . '/js/firetoss.js', array( 'jquery' ), false, false );
        wp_enqueue_script( 'firetoss-slick' );
    elseif ($slider_option == 'owl'):

        wp_register_script( 'owl-script',  get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), false, false );
        wp_enqueue_script( 'owl-script' );

        wp_register_script( 'firetoss-owl-js',  get_template_directory_uri() . '/js/firetoss-owl.js', array( 'jquery' ), false, false );
        wp_enqueue_script( 'firetoss-owl-js' );
    else:
    endif;

    $mean_menu = get_field('mean_menu', 'option');

    if ($mean_menu):
        wp_register_script( 'mean-menu',  get_template_directory_uri() . '/js/jquery.meanmenu.js', array( 'jquery' ), false, false );
        wp_enqueue_script( 'mean-menu' );
    endif;

    wp_register_script( 'modernizr-js',  get_template_directory_uri() . '/js/modernizr-custom.js', array( 'jquery' ), false, false );
    wp_enqueue_script( 'modernizr-js' );


    wp_register_script( 'featherlight-js',  get_template_directory_uri() . '/js/featherlight.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'featherlight-js' );


}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

// Register Style
function custom_styles() {
// Add yours here following the below format

    $slider_option = get_field('slider_option', 'option');
    if ($slider_option == 'slick'):
        wp_register_style( 'slick-theme-styles',  get_template_directory_uri() . '/css/slick-theme.css', false, false );
        wp_register_style( 'slick-styles',  get_template_directory_uri() . '/css/slick.css', false, false );
        wp_enqueue_style( 'slick-theme-styles' );
        wp_enqueue_style( 'slick-styles' );

    else:
        wp_register_style( 'owl-styles',  get_template_directory_uri() . '/css/owl.carousel.css', false, false );
        wp_enqueue_style( 'owl-styles' );

    endif;

    $mean_menu = get_field('mean_menu', 'option');

    if ($mean_menu):
        wp_register_style( 'mean-styles',  get_template_directory_uri() . '/css/meanmenu.css', false, false, 'all' );
        wp_enqueue_style( 'mean-styles' );
    endif;


    $css_animate = get_field('css_animate', 'option');
    if ($css_animate):
        wp_register_style( 'animate',  get_template_directory_uri() . '/css/animate.css', false, false, 'all' );
        wp_enqueue_style( 'animate' );
    endif;

    wp_register_style( 'featherlight-styles',  get_template_directory_uri() . '/css/featherlight.css', false, false );
    wp_enqueue_style( 'featherlight-styles' );

    wp_register_style( 'just',  get_template_directory_uri() . '/just.css', false, false, 'all' );
    wp_enqueue_style( 'just' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

