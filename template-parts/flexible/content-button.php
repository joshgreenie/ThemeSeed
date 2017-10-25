<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 9/18/2017
 * Time: 11:13 PM
 */

$button = get_sub_field('button');
$button_text = get_sub_field('button_text');
$button_url = get_sub_field('button_url');
$button_class = get_sub_field('button_class');
$open_new_tab = get_sub_field('open_new_tab');
if($open_new_tab):
$open_new_tab = "target='_blank'";
endif;

echo $button ? "<a href='$button_url' class='$button_class' $open_new_tab >$button_text</a>" : "";
