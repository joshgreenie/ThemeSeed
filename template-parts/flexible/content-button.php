<?php

$classes = [];
$args =  ft_get_sub_fields(array('button', 'button_text', 'button_url', 'button_class', 'open_new_tab'));

$target = $args->open_new_tab ? '_blank' : '';


//ft_element('a')
//    ->addClass($args->button_class)
//    ->attr('href', $target)
//    ->attr('target', $target)
//    ->text($args->button_text)
//    ->render();


if($args->button): ?>

    <a href='<?=$args->button_url;?>' class='<?=$args->button_class;?>' target='<?=$target;?>' >
        <?=$args->button_text;?>
    </a>
<?php endif;
