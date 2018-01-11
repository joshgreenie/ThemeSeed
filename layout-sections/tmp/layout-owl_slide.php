<?php
global $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields(array('background_image', 'hero_header', 'hero_sub_header', 'quote', 'quote_signature', 'video_link'));

?>

<div class="item" style="background-image: url('<?= $args->background_image ?>')">
	<div class="container">
		<h1><?=$args->hero_header?></h1>
		<span class="item-sub-header"><?=$args->hero_sub_header?></span>
		<span class="item-quote"><?=$args->quote ?></span>
		<span class="item-quote-sig"><?=$args->quote_signature ?></span>
		<?php echo $args->video_link ? "<div class='video-button'>$args->video_link</div>" : ""  ; ?>
	</div>
</div>