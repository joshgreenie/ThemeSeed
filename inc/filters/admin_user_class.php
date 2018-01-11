<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 1/10/2018
 * Time: 5:06 PM
 */

// Add role class to body
function add_role_to_body($classes) {

    global $current_user;
    $user_role = array_shift($current_user->roles);

    $classes .= 'role-'. $user_role;
    return $classes;
}
add_filter('admin_body_class', 'add_role_to_body');