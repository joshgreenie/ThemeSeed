<?php

function add_script($class){

	function slide_script (){
		?>
		<script type="text/javascript">
            console.log("happening");
            jQuery(document).ready(function(){
                jQuery('.owl-carousel').owlCarousel();
            });
		</script>
		<?php
	}

	add_action('wp_footer', 'slide_script', 100);
}