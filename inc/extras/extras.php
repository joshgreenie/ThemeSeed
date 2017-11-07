<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Firetoss_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
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


// woo theme support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            min-height:65px;
            min-width:320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*************************************************************/
/*   Friendly Block Titles                                  */
/***********************************************************/

function my_layout_title($title, $field, $layout, $i) {
    if($value = get_sub_field('title')) {
        return $value;
    } else {
        foreach($layout['sub_fields'] as $sub) {
            if($sub['name'] == 'title') {
                $key = $sub['key'];
                if(array_key_exists($i, $field['value']) && $value = $field['value'][$i][$key])
                    return $value;
            }
        }
    }
    return $title;
}
add_filter('acf/fields/flexible_content/layout_title', 'my_layout_title', 10, 4);



// gravity forms hide labels
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


/*************************************************************/
/*   simplify get(_sub)_field                               */
/***********************************************************/
function ft_get_options($fields){
    $args = (object)NULL;
    if(is_array($fields)) : foreach($fields as $field) :
        $args->{$field} = get_field($field, "options");
    endforeach; endif;
    return $args;
}

function ft_get_sub_fields($fields, $id = null){
    $obj = (object)NULL;
    foreach($fields as $field) {
        $obj->{$field} = get_sub_field($field);
    }
    return $obj;
}
function ft_get_fields($fields){
    $obj = (object)NULL;
    foreach($fields as $field) {
        $obj->{$field} = get_field($field);
    }
    return $obj;
}
