<?php
global $post;
$preview = [];
$classes = [];
$styles = [];

$args = (object)array(
	'title' => $post->post_title,
	'link'  => get_permalink($post->ID),
	'img'   => ft_post_thumb($post->ID),
	'date'  => ft_date($post->post_date)
);

$preview[] = ft_style('background-image', $args->img);

?>

<div class="ft-card blog <?=ft_classes($classes)?>" style="<?=ft_styles($styles)?>">
	<a class="card-container" href="<?=$args->link?>">
		<div class="preview" style="<?=ft_styles($preview)?>"></div>
		<div class="card-content">
			<h3><?=$args->title?></h3>
			<span class="date"><?=$args->date?></span>
		</div>
	</a>
</div>
