<?php
$classes = [];
$args = ft_get_sub_fields(array('background', 'icon', 'header', 'italic', 'subheader', 'cta', 'position', 'button_color', 'extra_class', 'italic_first'));

?>

<div class="slick-slide <?php echo $args->position?>-position <?=$args->extra_class?>" style="background-image: url(<?php echo $args->background ?>);">
    <div class="slide-icon">
        <img src="<?php echo $args->icon ?>" alt="Forte Icon">
    </div>
    <div class="slide-text-wrapper <?php echo $args->position ?>">
        <?php echo $args->subheader ? "<h3>$args->subheader</h3>" : "" ; ?>
        <?php if($args->italic_first) :
            echo $args->italic ? "<h2 class='italic'><em>$args->italic</em></h2>" : "" ;
        endif; ?>
        <?php echo $args->header ? "<h2>$args->header</h2>" : "" ; ?>
        <?php if(!$args->italic_first) :
            echo $args->italic ? "<h2 class='italic'><em>$args->italic</em></h2>" : "" ;
        endif; ?>
        <button class="<?php echo $args->button_color ?>">
            <a href="<?php echo $args->cta ?>">Shop Now</a>
        </button>
    </div>
</div>