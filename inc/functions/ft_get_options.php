<?php

function ft_get_options($fields){
    $args = (object)NULL;

    if(is_array($fields)) : foreach($fields as $field) :
        $args->{$field} = get_field($field, "options");
    endforeach; endif;

    return $args;
}