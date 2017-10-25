<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 9/18/2017
 * Time: 10:52 PM
 */

$link = get_sub_field('link');
$image = get_sub_field('image');
$imageURL = $image['url'];
$imageALT = $image['alt'];

?>
<div class="image-content flex-item">
    <?= $link ? "<a href='$link'>" : ""; ?>
    <img src="<?= $imageURL; ?>" alt="<?= $imageALT; ?>">
    <?= $link ? "</a>" : ""; ?>
</div>
