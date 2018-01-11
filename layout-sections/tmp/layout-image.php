<?php

$classes = [];
$styles = [];
$args = ft_get_sub_fields(array('image', 'extra_class', 'size', 'alignment', 'max_width'));

$classes[] = $args->extra_class;
$classes[] = 'image-'.$args->size;
$classes[] = 'align-'.$args->alignment;

$styles[] = ft_style('max-width', $args->max_width);
?>

<div class="layout-image <?=join(' ', $classes)?>" style="<?=ft_styles($styles)?>">
	<img src="<?=$args->image?>">
</div>
