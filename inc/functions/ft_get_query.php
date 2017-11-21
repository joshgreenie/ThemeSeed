<?php

function ft_get_query($params = null){
    $args = ($params) ? $params : ft_get_sub_fields(array("limit", "order_by", "order", "post_types", "template", "filter_by", "acf_field"));
    $args->tax = array();

    $args->acf = ($args->order == 'acf') ? $args->acf_field : false;

    echo '<div style="display: none">';
    print_r($args);
    echo '</div>';

    if($args->filter_by) : foreach($args->filter_by as $f) :
        $item = $f['taxonomy'][0];
        array_push($args->tax, array(
            'taxonomy' => $item->taxonomy,
            'terms' => $item->slug,
            'field' => 'slug'
        ));
    endforeach; endif;

    $q = array(
        'post_type' => $args->post_types,
        'posts_per_page' => $args->limit,
        'tax_query' => $args->tax,
        'orderby' => ($args->acf_field) ? 'meta_value' : $args->order_by,
        'order' => $args->order
    );

    if($args->acf_field) :
        $q['meta_key'] = $args->acf_field;
    endif;

    return new WP_Query($q);
}