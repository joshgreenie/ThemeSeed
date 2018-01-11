<?php

function ft_get_thumbnail_url($imageId, $size = ''){
	return wp_get_attachment_image_url($imageId, $size);
}

function ft_get_thumbnail($imageId, $size = ''){
	return wp_get_attachment_image($imageId, $size);
}