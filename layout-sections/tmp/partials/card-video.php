<?php
global $featured;

$classes = [];
$styles = [];
$args = ft_get_fields(array("video_id", "preview", "summary", "button_text", "button_link", "featured"));
$classes[] = $featured ? 'featured' : 'thumb';
$styles[] = ft_style('background-image', ft_get_thumbnail_url($args->preview['ID'], 'video-thumb'));
$args->button_text = $args->button_text ? $args->button_text : ' ';
?>

<div class="ft-card video <?=ft_classes($classes)?>" style="<?=ft_styles($styles)?>">
	<div class="video-container">
        <?php if($featured) : ?>
            <div class="summary"><?=$args->summary?></div>
        <?php else : ?>
            <i class="fa fa-play-circle-o" aria-hidden="true"></i>
        <?php endif; ?>

		<?php
			$sc = "[video_lightbox_youtube video_id='$args->video_id' width='840' height='480' anchor='$args->button_text']";
			echo do_shortcode($sc);
		?>
	</div>
</div>
