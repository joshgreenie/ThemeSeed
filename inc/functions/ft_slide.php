<?php

function ft_slide($type, $args = null){
	//print_r($args);
	include(locate_template('layout-sections/partials/slide-' . $type . '.php'));
}