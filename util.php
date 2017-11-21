<?php

function ft_dir(){
    return get_stylesheet_directory();
}

function include_dir($name){
    $i = 0;
    $files = scandir(ft_dir() . '/' . $name, 1);
    while($i < (count($files) - 2)){
        include(locate_template( $name . '/' . $files[$i] ));
        $i++;
    }
}