<?php
$classes = [];
$styles = [];
$args = ft_get_sub_fields(array('title', 'heading_size', 'font_color', 'font_style', 'alignment', 'add_line'));

$styles[] = $args->font_color ? 'color: '.$args->font_color : '';
$styles[] = $args->font_color ? 'font-style: '.$args->font_style : '';
$classes[] = $args->alignment ? 'align-'.$args->alignment : '';
$classes[] = $args->add_line ? 'line' : '';
?>

<div class="layout-heading <?=join(' ', $classes)?>">
	<<?=$args->heading_size?> style="<?=join(';', $styles)?>">
		<?=$args->title?>
	</<?=$args->heading_size?>>
    <?php if($args->add_line) : ?>
        <div class="line" style="color: <?=$args->font_color?>"></div>
    <?php endif; ?>
</div>
