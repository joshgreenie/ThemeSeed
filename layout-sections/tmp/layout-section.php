<?php
$classes = [];
$styles = [];
$args = ft_get_sub_fields(array('container_width', 'extra_class', 'bkg_type', 'bkg_image', 'bkg_color'));

$classes[] = $args->container_width;
$classes[] = $args->extra_class;

$styles[] = ($args->bkg_type == 'image') ? 'background-image: url('.$args->bkg_image.')' : '';
$styles[] = ($args->bkg_type == 'color') ? 'background-color: '.$args->bkg_color : '';
?>

<div class="layout-section <?=join(' ', $classes)?>" style="<?=join(';',$styles)?>">
	<div class="container <?=$args->container_width?>">
		<?php if (have_rows('section_builder_page_builder')) : while (have_rows('section_builder_page_builder')) : the_row();
			ft_template(get_row_layout());
		endwhile; endif; ?>
	</div>
</div>