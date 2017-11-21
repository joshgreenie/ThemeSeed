<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 11/17/2017
 * Time: 10:55 AM
 */

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-logo.png);
            min-height:65px;
            min-width:320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );