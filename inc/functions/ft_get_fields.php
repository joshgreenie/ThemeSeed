<?php

function ft_get_fields($fields){
    $obj = (object)NULL;
    foreach($fields as $field) {
        $obj->{$field} = get_field($field);
    }

    return $obj;
}