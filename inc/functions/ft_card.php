<?php

function ft_card($type, $args = null){
	//print_r($args);
	include(locate_template('layout-sections/partials/card-' . $type . '.php'));
}