<?php

$args = ft_get_sub_fields(array('lightbox','links','captions', 'columns','gallery'));
if( $args->gallery ): ?>
    <div class="gallery"></div>
    <ul class="gallery-columns-<?= $args->columns;?>">
        <?php foreach(  $args->gallery as $g ): ?>
            <li class="gallery-item">
                <?php if( $args->links):?>
                <a href="<?php echo $g['url']; ?>" target="_blank">
                <?php elseif( $args->lightbox):?>
                <a href="#" data-featherlight="
                <img src='<?php echo $g['url']; ?>' alt='<?php echo $g['alt']; ?>'>">
                <?php endif; ?>
                    <img src="<?php echo $g['sizes']['thumbnail']; ?>" alt="<?php echo $g['alt']; ?>" />
                <?php if( $args->links ||  $args->lightbox):?>
                </a>
                <?php endif; ?>
                <? if( $args->captions):?>
                    <p><?php echo $g['caption']; ?></p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>