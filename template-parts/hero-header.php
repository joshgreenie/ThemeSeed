<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 8/8/2016
 * Time: 11:29 AM
 */


 if(has_post_thumbnail()) {
     $thumbnail_object = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full);
     $thumbnail = $thumbnail_object[0];
 } else {
    $thumbnail =   esc_url( get_template_directory_uri() ) .'/img/defaultheader.jpg';
 }
     ?>
    <div id="imageTitle" <?php echo $thumbnail ? "style='background-image:url($thumbnail);'" : "";?>>
        <div class="container">
            <div id="postTitlewrap"
                <?php if(is_page('Home')){ ?>
                class="homeMessage"
                <?php } ?>  >
                    <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
