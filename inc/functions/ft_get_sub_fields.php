<?php

function ft_get_sub_fields($fields, $id = null){
    $obj = (object)NULL;
    foreach($fields as $field) {
        $obj->{$field} = get_sub_field($field);
    }

    return $obj;
}