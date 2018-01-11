<?php
//
global $section;
$classes = [];
$styles = [];

$section = ft_get_sub_fields(array(
'background_color','background_image','background_overlay_opacity','background_position','background_size',

'layout', 'container','container_size','grid_columns','span_column','padding','custom_padding','margin','custom_margin',

'extra_row_class','extra_section_class','disable_shelf_desktop','disable_shelf_mobile',));


$image_url = $section->background_image ? "url(". ft_get_thumbnail_url($section->background_image['id'], 'full').")" : "";
$classes[] = $section->extra_section_class;
$styles[]  = $section->background_color ? ft_style('background-blend-mode', 'overlay') : '';
$styles[]  = ($section->background_color ||$section->background_image) ? ft_style('background',  $section->background_color .' '. $image_url .' '.  $section->background_position .'/'. $section->background_size) : '';
?>

<div class='<?=ft_classes($classes)?> section' style='<?=ft_styles($styles)?>'>
    <?=$section->container ? "<div class='container $section->container_size'>" : "";
    ft_template('header');?>
    <div class='row-wrapper columns-<?=$section->number_of_columns;?>'>
        <?php if (have_rows('flexible_content_flexible_fields')) :
            while (have_rows('flexible_content_flexible_fields')) : the_row();
                     ft_template(get_row_layout());
            endwhile;
        endif;?>
    </div>
    <?=$section->container ? "</div>" : "";?>
</div>

