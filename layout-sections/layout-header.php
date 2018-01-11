<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 12/13/2017
 * Time: 3:32 PM
 */

$classes = [];
$styles = [];
$args = ft_get_sub_fields(array(
    'title',
    'type',
    'color',
    'size',
    'alignment',
));

$styles[] = $args->color ? 'color: '.$args->color : '';
$styles[] = $args->alignment ? 'text-align: '.$args->alignment : '';

 echo $args->title ? "<$args->type class='header $args->size' style='".join(';', $styles)."'>$args->title</$args->type>":"";

