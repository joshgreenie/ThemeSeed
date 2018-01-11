<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<div class="slick-container">
	<?php while (have_posts()) : the_post(); ?>
	<?php if (have_rows('slider')) : ?>
		<div class="slick-wrapper">
			<?php while (have_rows('slider')) : the_row(); ft_template('slick_slide'); endwhile; ?>
		</div>
	<?php endif; ?>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.slick-wrapper').slick({
            // autoplay: true,
        });
    });
</script>

<?php endwhile; ?>