<?php
$classes = [];
$args = ft_get_sub_fields(array('title', 'description', 'template', 'cards'));

$classes[] = $args->container_width;
$classes[] = $args->extra_class;
$classes[] = 'flex-'.count($args->cards);

?>

<div class="layout-cards grid <?=join(' ', $classes)?>">
	<?php if (have_rows('cards')) : while (have_rows('cards')) : the_row();
		ft_card($args->template);
	endwhile; endif; ?>
</div>