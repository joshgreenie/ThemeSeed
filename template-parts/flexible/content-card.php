<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 11/21/2017
 * Time: 10:03 AM
 */


$args =  ft_get_sub_fields(array(
    'image',
    'image_size',
    'header',
    'header_element',
    'content',
));


$imageURL = wp_get_attachment_image_src($args->image, $args->image_size);
//$imageCaption = $args->image['url'];
//$image = "<img src='$imageURL' alt'$imageCaption'> ";


$wrapper = ft_element('div')
    ->addClass('content-card  flex-item');

$wrapper->render('open');

    ft_element('img')
        ->addClass('card-image')
        ->attr('src', $imageURL)
        ->renderConditional('void', $imageURL);

    ft_element($args->header_element)
        ->addClass('card-header')
        ->text($args->header)
        ->renderConditional();

    ft_element()
        ->addClass('card-content')
        ->text($args->content)
        ->renderConditional();


$wrapper->render('close');


