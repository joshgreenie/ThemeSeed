<?php
global $row;

$classes = [];
$styles = [];
$args = ft_get_sub_fields(array('container_width', 'extra_class', 'bkg_type', 'bkg_image', 'bkg_color', 'col'));

$classes[] = $row->grid ? 'flex-'.$row->col_width : 'flex-'.$args->col;
$classes[] = $args->extra_class;

$styles[] = ($args->bkg_type == 'image') ? 'background-image: url('.$args->bkg_image.')' : '';
$styles[] = ($args->bkg_type == 'color') ? 'background-color: '.$args->bkg_color : '';
?>

<div class="layout-column flex-item <?=join(' ', $classes)?>" style="<?=join(';',$styles)?>">
	<div class="container">
		<?php if (have_rows('column_builder_page_builder')) : while (have_rows('column_builder_page_builder')) : the_row();
			ft_template(get_row_layout());
		endwhile; endif; ?>
	</div>
</div>