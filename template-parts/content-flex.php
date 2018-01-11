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



if (have_rows('flexible_fields')) :
    while (have_rows('flexible_fields')) : the_row();
        ft_template(get_row_layout());
    endwhile;
endif;




