<?php


function custom_styles() {
// Add yours here following the below format

    wp_register_style( 'style',  get_template_directory_uri() . '/style.css', false, false, 'all' );
    wp_enqueue_style( 'style' );

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
