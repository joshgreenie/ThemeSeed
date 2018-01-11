<?php

$args = ft_get_sub_fields(array(
    'lightbox',
    'links',
    'captions',
    'columns',
    'gallery',
));

//
//$container = ft_element('div')
//    ->addClass('gallery flex-item');
//
//$galleryWrapper = ft_element('ul')
//    ->addClass("gallery-columns-$args->columns");
//
//$listItem = ft_element('li')
//    ->addClass("gallery-item");
//
//
//$container->render('open');
//$galleryWrapper->render('open');
//    foreach(  $args->gallery as $g ):
//        $link = '';
//        if($args->links) {
//            $link = ft_element('a')
//                ->attr("href", $g['url'])
//                ->attr("target", '_blank');
//        } elseif($args->lightbox) {
//            $link = ft_element('a')
//                ->attr("href", '#')
//                ->attr("data-featherlight", '<img src="'.$g['url'].'" alt="'.$g['alt'].'">');
//        }
//        $listItem->render('open');
//        $link->render('open');
//        echo '<img src="'.$g['sizes']['thumbnail'].'" alt="'.$g['alt'].'">';
//        $link->render('close');
//        ft_element('p')->text($g['caption'])->render('true');
//        $listItem->render('close');
//    endforeach;
//$galleryWrapper->render('close');
//$container->render('close');


if( $args->gallery ): ?>
    <div class="gallery"></div>
    <ul class="gallery-columns-<?= $args->columns;?>">
        <?php foreach(  $args->gallery as $g ): ?>
            <li class="gallery-item">
                <?php if( $args->links): ?>
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