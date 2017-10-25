<?php
/**
 * Basic content block - alter to fit
 */

// vars

$icon      = get_sub_field('icon');
$iconURL      = $icon['url'];
$iconALT      = $icon['alt'];
$title      = get_sub_field('title');
$subtitle   = get_sub_field('subtitle');
$content    = get_sub_field('content');

?>

<div class="content-flex flex-item">
        <?=$icon?"<img src='$iconURL' alt='$iconALT'>":"";?>
        <?=$title?"<h2>$title</h2>":"";?>
        <?=$subtitle?"<h3>$subtitle</h3>":"";?>
        <?=$content?>
</div>
