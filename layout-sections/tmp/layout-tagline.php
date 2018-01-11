<?php
$classes = [];
$styles = [];
$args = ft_get_sub_fields(array('content', 'font_color', 'alignment', 'extra_class'));

$classes[] = $args->extra_class ? $args->extra_class : '';
$styles[] = ft_style('text-align', $args->alignment);
$styles[] = ft_style('color', $args->font_color);
?>

<p class="layout-tagline <?=join(' ', $classes)?>" style="<?=ft_styles($styles)?>">
	<?=$args->content?>
</p>
