<?php
//$clone_slider = get_sub_field('content_slider_content_slider');
//$container = get_sub_field('content_slider_container_in_slide');
//$unique_class = get_sub_field('content_slider_unique_class');
//$slider_option = get_field('slider_option', 'option');

$args = ft_get_sub_fields(array(
        'content_slider_content_slider',
        'content_slider_container_in_slide',
        'content_slider_unique_class',
        'post_loop_order'
));
$slides = $args->content_slider_content_slider['slides'];

$oArgs = ft_get_options(array('slider_option'));


if (have_rows('content_slider_slides')): ?>
<div class="slider-wrapper flex-item">
    <?php if ($oArgs->slider_option == 'slick'): ?>
    <div class="slider-flex slick-slider <?= $args->content_slider_unique_class; ?> carousel-content">
    <?php elseif ($oArgs->slider_option == 'owl'): ?>
    <div class="slider-flex owl-carousel <?= $args->content_slider_unique_class; ?> owl-carousel-content">
    <?php endif; ?>
            <?php // loop through the rows of data
            while (have_rows('content_slider_slides')) : the_row();
//                $slider_image = get_sub_field('slider_image');
//                $slider_header = get_sub_field('slider_header');
//                $slider_subheader = get_sub_field('slider_subheader');
//                $slider_alignment = get_sub_field('slider_alignment');
                $subArgs = ft_get_sub_fields(array(
                    'slider_image',
                    'slider_header',
                    'slider_subheader',
                    'slider_alignment'
                ));
                ?>
                <div class="item slick-slide" <?= $subArgs->slider_alignment ? "style='text-align:$subArgs->slider_alignment;'" : ""; ?>>
                    <?php if ($args->content_slider_container_in_slide): ?>
                        <div class="container">
                    <?php endif; ?>
                        <img class="slide-image" src="<?= $subArgs->slider_image ?>">
                            <h2><?= $subArgs->slider_header ?></h2>
                            <h4><?= $subArgs->slider_subheader ?></h4>
                            <?php get_template_part('template-parts/flexible/content', 'button'); ?>
                    <?php if ($args->content_slider_container_in_slide): ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else :
            // no rows found
        endif;


        $adaptive_height = get_sub_field('content_slider_adaptive_height');
        $autoplay = get_sub_field('content_slider_autoplay');
        $arrows = get_sub_field('content_slider_arrows');
        $dots = get_sub_field('content_slider_dots');
        $fade = get_sub_field('content_slider_fade');
        $loop = get_sub_field('content_slider_loop');
        $autoplay_speed = get_sub_field('content_slider_autoplay_speed');
        $slides_to_show = get_sub_field('content_slider_slides_to_show');
        $slides_to_scroll = get_sub_field('content_slider_slides_to_scroll');

//        $subArgs = ft_get_sub_fields(array(
//            'content_slider_adaptive_height',
//            'content_slider_autoplay',
//            'content_slider_arrows',
//            'content_slider_dots',
//            'content_slider_fade',
//            'content_slider_loop',
//            'content_slider_autoplay_speed',
//            'content_slider_slides_to_show',
//            'content_slider_slides_to_scroll',
//        ));
//
//        $slides_to_show = $subArgs->content_slider_slides_to_show ? "$subArgs->content_slider_slides_to_show" : "1";
//        $autoplay_speed = $subArgs->content_slider_autoplay ? "$subArgs->content_slider_autoplay" : "5000";

        if (!$slides_to_show) {
            $slides_to_show = '1';
        }
        if (!$autoplay_speed) {
            $autoplay_speed = 5000;
        }
        if (!$slides_to_scroll) {
            $slides_to_scroll = '1';
        }
        if ($adaptive_height) {
            $adaptive_height = 'true';
        } else {
            $adaptive_height = 'false';
        }
        if ($autoplay) {
            $autoplay = 'true';
        } else {
            $autoplay = 'false';
        }
        if ($dots) {
            $dots = 'true';
        } else {
            $dots = 'false';
        }
        if ($arrows) {
            $arrows = 'true';
        } else {
            $arrows = 'false';
        }
        if ($fade) {
            $fade = 'true';
        } else {
            $fade = 'false';
        }
        if ($loop) {
            $loop = 'true';
        } else {
            $loop = 'false';
        }

        if ($oArgs->slider_option == 'slick'): ?>
            <script type="text/javascript">
                (function ($) {
                    $(document).ready(function () {

                        $('.slider-flex.<?=$args->content_slider_unique_class;?>').slick({
                            accessibility: true,
                            adaptiveHeight: <?=$adaptive_height;?>,
                            autoplay: <?=$autoplay;?>,
                            autoplaySpeed: <?=$autoplay_speed;?>,
                            dots: <?=$dots;?>,
                            infinite: <?=$loop;?>,
                            arrows: <?=$arrows;?>,
                            fade: <?=$fade;?>,
                            slidesToShow: <?=$slides_to_show;?>,
                            slidesToScroll: <?=$slides_to_scroll;?>,
                        });

                    });
                })(jQuery);

            </script>
        <?php elseif ($oArgs->slider_option == 'owl'): ?>
            <script type="text/javascript">
                <?php
                if ($fade) {
                    $fade = 'animatein: ease,
    animateOut: ease,';
                } else {
                    $fade = '';
                }?>
                (function ($) {
                    $(document).ready(function () {
                        $('.slider-flex.<?=$args->content_slider_unique_class;;?>').slick({
                            items: <?=$slides_to_show;?>,
                            loop: <?=$loop;?>,
                            nav: <?=$arrows;?>,
                            autoplaySpeed: <?=$autoplay_speed;?>,
                            dots: <?=$dots;?>,
                            <?=$fade;?>
                            autoplay: <?=$autoplay;?>,
                            slideBy: <?=$slides_to_scroll;?>,
                        });
                    });
                })(jQuery);
            </script>
        <?php else :
            // no rows found
        endif; ?>

    </div>
