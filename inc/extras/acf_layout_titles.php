<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 11/17/2017
 * Time: 10:55 AM
 */



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

