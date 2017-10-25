<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Firetoss_Theme
 *
 * Template Name: Flexible Content
 *
 */

get_header(); ?>

    <div id="flex" class="content-area">
        <!-- put the grid containers in your individual flex containers -->
        <?php
        while ( have_posts() ) : the_post();

            //https://generatewp.com/wp_query/

            get_template_part('template-parts/content', 'flex');

        endwhile; // End of the loop.
        ?>
    </div>

<?php
//get_sidebar();
get_footer();
