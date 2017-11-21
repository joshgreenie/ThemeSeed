<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 11/17/2017
 * Time: 10:54 AM
 */
function firetoss_seed_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    return $classes;
}
add_filter( 'body_class', 'firetoss_seed_body_classes' );
