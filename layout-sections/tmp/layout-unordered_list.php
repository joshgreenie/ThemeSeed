<?php
    $styles = [];
	$args = ft_get_sub_fields(array('items', 'color'));

    $styles[] = 'color: '.$args->color;
?>

<ul class="layout-unordered_list" style="<?=join(';', $styles)?>">
	<?php foreach($args->items as $item) : ?>
		<li><span><?=$item['content']?></span></li>
	<?php endforeach; ?>
</ul>
