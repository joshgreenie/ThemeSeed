<?php

$classes = [];
$args =  ft_get_sub_fields(array('button', 'button_text', 'button_url', 'button_class', 'open_new_tab'));

$target = $args->open_new_tab ? '_blank' : '';

if($args->button): ?>
    <a href='<?=$args->button_url;?>' class='<?=$args->button_class;?>' target='<?=$target;?>' >
        <?=$args->button_text;?>
    </a>
<?php endif;
