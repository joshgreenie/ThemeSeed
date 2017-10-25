<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 9/19/2017
 * Time: 10:43 AM
 */


$images = get_sub_field('gallery');
$columns = get_sub_field('columns');
$captions = get_sub_field('captions');
$links = get_sub_field('links');
$lightbox = get_sub_field('lightbox');

if( $images ): ?>
    <div class="gallery"></div>
    <ul class="gallery-columns-<?=$columns;?>">
        <?php foreach( $images as $image ): ?>
            <li class="gallery-item">
                <?php if($links):?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                <?php elseif($lightbox):?>
                <a href="#" data-featherlight="
                <img src='<?php echo $image['url']; ?>' alt='<?php echo $image['alt']; ?>'>">
                <?php endif; ?>
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php if($links || $lightbox):?>
                </a>
                <?php endif; ?>
                <? if($captions):?>
                    <p><?php echo $image['caption']; ?></p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>