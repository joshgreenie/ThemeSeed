<?php
/**
 * Flexible template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _scorch
 *
 *
 */
$contentOptions = array(
    //Layout name   => stub-{type}.php
    'content' => 'content',
    'slider' => 'slider',
    'posts' => 'posts',
    'image' => 'image',
    'gallery' => 'gallery',

);
// check if the flexible content field has rows of data

if (have_rows('flexible_fields')):
    $i = 1;
    // loop through the rows of data
    while (have_rows('flexible_fields')) : the_row();
        // Identify the selected layout
        if (get_row_layout() == 'shelf'):
            $title = get_sub_field('title');
            $title_element = get_sub_field('title_element');
            $title_element_color = get_sub_field('title_element_color');
            $subtitle = get_sub_field('subtitle');
            $subtitle_element = get_sub_field('subtitle_element');
            $subtitle_element_color = get_sub_field('subtitle_element_color');
            $background_color = get_sub_field('background_color');
            $background_image = get_sub_field('background_image');
            $background_imageURL = $background_image['url'] ;
            $background_position = get_sub_field('background_position');
            $background_size = get_sub_field('background_size');
            $background_overlay_color = get_sub_field('background_overlay_color');
            $title_color = get_sub_field('title_color');
            $subtitle_color = get_sub_field('subtitle_color');
            $description = get_sub_field('description');
            $container = get_sub_field('container');
            $number_of_columns = get_sub_field('number_of_columns');
            $extra_row_class = get_sub_field('extra_row_class');
            $extra_section_class = get_sub_field('extra_section_class');
            $add_header = get_sub_field('add_header');
            $header_alignment = get_sub_field('header_alignment');
            $add_overlay = get_sub_field('add_overlay');
            $description_max_width = get_sub_field('description_max_width');
            ?>
<div class="section section-<?=$i;?> <?=$extra_section_class;?>" style="
<?= $background_image ? "background-image:url($background_imageURL);" : "";?>
<?= $background_position ? "background-position:$background_position;" : "";?>
<?= $background_size ? "background-size:$background_size;" : "";?>
<?= $background_color ? "background-color:$background_color;" : "";?>
">

    <?php if($add_overlay): ?>
    <div class="section-overlay" style="background-color: <?=$background_overlay_color;?>;" ></div>
    <?php endif; ?>
    <?php if($container): ?>
    <div class="container">
    <?php endif; ?>

        <?php if($add_header): ?>
            <div class="header" style="<?=$header_alignment?"text-align:$header_alignment;":"";?>">
                <?php
                echo $title ? "<$title_element class='flex-header' style='color:$title_element_color;'>$title</$title_element>":"";
                echo $subtitle ? "<$subtitle_element class='flex-sub-header' style='color:$subtitle_element_color;'>$subtitle</$subtitle_element>":"";
                ?>
            </div>
        <?php endif; ?>
        <?php if($description):?>
        <div class='description' <?=$description_max_width?"style='max-width:$description_max_width;'":"";?>>
            <?=$description;?>
        </div>
        <?php endif;?>
        <div class="row-wrapper columns-<?=$number_of_columns;?>">
        <?php if (have_rows('flexible_content_flexible_fields')):
                // loop through the rows of data

                while (have_rows('flexible_content_flexible_fields')) : the_row();
                    // Identify the selected layout
                    $rowLayout = get_row_layout();
                    // If a layout is selected
                    if ($rowLayout) :
                        foreach ($contentOptions as $key => $value) {
                            if ($rowLayout == $key) {
                                get_template_part('template-parts/flexible/content', $value);
                                break;
                            }
                        }
                    else :
                        // No layout selected
                    endif;
                endwhile;
            else :
            endif; ?>

    </div>

    <?php if($container): ?>
    </div>
    <?php endif; ?>

</div>
       <?php endif;
       $i++;
    endwhile;
else :
    the_content();
endif;