<?php

// [svg src="wp-content/uploads/etc.svg"]
function get_svg_contents( $atts ) {
	$args = (object)shortcode_atts( array(
		'src' => null
	), $atts );

	$content = $args->src ? file_get_contents($args->src, null, null) : '';

	if ($content === false) {
		echo 'error: use relative path';
	} else {
		return $content;
	}
}
add_shortcode( 'svg', 'get_svg_contents' );