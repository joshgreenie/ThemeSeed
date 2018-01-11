<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 11/21/2017
 * Time: 10:03 AM
 */


$args =  ft_get_sub_fields(array('image','image_size','header','header_element','content',));
$args->imageURL = wp_get_attachment_image_src($args->image, $args->image_size);
?>
<div class="content-card flex-item">

    <?php
    ft_element('img')->addClass('card-image')->attr('src', $args->imageURL)->renderConditional('void', $imageURL);

    ft_element($args->header_element)->addClass('card-header')->text($args->header)->renderConditional();

    ft_element()->addClass('card-content')->text($args->content)->renderConditional();
    ?>

</div>


