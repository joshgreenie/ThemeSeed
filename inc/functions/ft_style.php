<?php

function ft_style($attr, $val = null, $suffix = null){
	if($attr == 'background-image') {
		$val = 'url('.$val.')';
	}

	$str = $attr.':';
	$str .= $val ? $val : '';
	$str .= $suffix ? $suffix : '';

	return ($val ? $str : '');
}