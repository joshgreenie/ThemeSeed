<?php


function custom_scripts() {
// Add yours here following the below format



    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js", true, null, false);
//    wp_enqueue_script('jquery');



    wp_enqueue_script( 'firetoss_seed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'firetoss_seed-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


    $mean_menu = get_field('mean_menu', 'option');

    if ($mean_menu):
        wp_register_script( 'mean-menu',  get_template_directory_uri() . '/js/jquery.meanmenu.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'mean-menu' );
    endif;

    wp_register_script( 'modernizr-js',  get_template_directory_uri() . '/js/modernizr-custom.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'modernizr-js' );


    wp_register_script( 'featherlight-js',  get_template_directory_uri() . '/js/featherlight.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'featherlight-js' );



    $slider_option = get_field('slider_option', 'option');
    $waypoints = get_field('waypoints', 'option');

    if ($waypoints):

        wp_register_script( 'waypoints',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'waypoints' );

    endif;

    if ($slider_option == 'slick'):
        wp_register_script( 'slick-script',  get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'slick-script' );


    elseif ($slider_option == 'owl'):

        wp_register_script( 'owl-script',  get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'owl-script' );


    else:

    endif;

    wp_register_script( 'firetoss',  get_template_directory_uri() . '/js/firetoss.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'firetoss' );


}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );