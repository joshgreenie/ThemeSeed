<?php
global $args;

$classes = [];
$args = ft_get_sub_fields(array('icon_type', 'icon', 'image', 'title', 'description'));

$classes[] = $args->container_width;
$classes[] = $args->extra_class;
?>

<div class="layout-card flex-item <?=join(' ', $classes)?>">
    <div class="card-container">
        <?php if($args->icon_type == 'font') : ?>
        <span class="icon fa <?=$args->icon?>"></span>
        <?php elseif ($args->icon_type == 'image') : ?>
            <img src="<?=$args->image?>" class="card-icon">
        <?php endif; ?>
        <div class="title"><?=$args->title?></div>
        <div class="description"><?=$args->description?></div>
    </div>
</div>