<?php
/**
 * Basic content block - alter to fit
 */

// vars

$args =  ft_get_sub_fields(array(
    'content'
));
ft_element('div')
    ->addClass('content-field  flex-item')
    ->text($args->content)
    ->renderConditional();


