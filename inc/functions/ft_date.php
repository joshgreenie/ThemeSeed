<?php

function ft_date($date, $format = 'M D, Y'){
	$d = new DateTime($date);
	return $d->format($format);
}