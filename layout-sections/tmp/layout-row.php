<?php
global $row;
$row = (object)null;

$classes = [];
$styles = [];
$args = ft_get_sub_fields(array('container_width', 'extra_class', 'bkg_type', 'bkg_image', 'bkg_color', 'grid', 'column_width', 'item_alignment'));

$row->grid = $args->grid;
$row->col_width = $args->grid ? $args->column_width : 100;
$classes[] = $args->grid ? 'flex-align-'.$args->item_alignment : 'flex-align-default';
$classes[] = $args->container_width;
$classes[] = $args->extra_class;
$classes[] = $args->grid ? 'grid' : '';

$styles[] = ($args->bkg_type == 'image') ? 'background-image: url('.$args->bkg_image.')' : '';
$styles[] = ($args->bkg_type == 'color') ? 'background-color: '.$args->bkg_color : '';
?>

<div class="layout-row <?=join(' ', $classes)?>" style="<?=join(';',$styles)?>">
	<div class="container">
		<?php if (have_rows('row_builder_page_builder')) : while (have_rows('row_builder_page_builder')) : the_row();
			ft_template(get_row_layout());
		endwhile; endif; ?>
	</div>
</div>