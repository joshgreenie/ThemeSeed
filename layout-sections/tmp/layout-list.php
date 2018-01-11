<?php
$classes = [];
global $featured;
$featured = false;

$args = $ft_data ? $ft_data : ft_get_sub_fields(array('post_types', 'columns', 'order_by', 'order', 'taxonomies', 'limit', 'template', 'exclude', 'include'));
$classes[] = $args->template;

$list = (object)array(
    'limit' => $args->limit,
    'post_types' => $args->post_types,
    'taxonomies' => $args->taxonomies,
    'order'      => $args->order,
    'order_by'   => $args->order_by,
    'exclude'    => $args->exclude,
    'include'    => $args->include
);

$query = ft_get_query($list);

?>

<div class="layout-list <?=ft_classes($classes)?>">
    <div class="container">
	    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
		    <?php ft_card($args->template ? $args->template : 'product'); ?>
	    <?php endwhile; endif; ?>
    </div>
</div>

<?php wp_reset_postdata(); ?>