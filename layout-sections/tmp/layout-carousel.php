<?php
global $ft_data;
$classes = [];
$args = $ft_data ? $ft_data : ft_get_sub_fields(array('slide_template', 'slides'));

$id = 'owl-'.$args->slide_template . rand();

$classes[] = $id;
$classes[] = $args->slide_template;
?>

<?php if(have_rows('slides')):?>
	<div class="layout-carousel <?=ft_classes($classes)?>">
		<div class="owl-carousel owl-carousel-content">
			<?php
			while ( have_rows('slides') ) : the_row();
				ft_slide($args->slide_template);
			endwhile;?>
		</div>
	</div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.<?=$id?> .owl-carousel').owlCarousel({
                items: 1
            });
        });
    </script>
<?php endif; ?>


