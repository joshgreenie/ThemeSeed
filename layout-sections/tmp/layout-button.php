<?php
	$classes = [];
	$args = ft_get_sub_fields(array('color', 'text', 'link', 'alignment', 'size'));

	$classes[] = 'button-'.$args->color;
	$classes[] = 'flex-'.$args->alignment;
    $classes[] = $args->size;
?>

<div class="layout-button <?=join(' ', $classes)?>">
	<a class="btn" href="<?=$args->link?>">
		<?=$args->text?>
        <i class="fa fa-caret-right" aria-hidden="true"></i>
	</a>
</div>
