<?php
global $post, $featured;
$featured = true;
$args = ft_get_sub_fields(array("video"));
// Assign your post details to $post (& not any other variable name!!!!)
$post = get_post($args->video);
setup_postdata( $post );
ft_card('video');
wp_reset_postdata();
?>
