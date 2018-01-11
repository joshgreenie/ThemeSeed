<?php

function ft_post_thumb($postId, $size = 'medium'){
	$img = get_post_thumbnail_id($postId);
	//print_r($img);
	return ft_get_thumbnail_url($img, $size);
}