<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Firetoss_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main" role="main">

                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'firetoss_seed'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'firetoss_seed'); ?></p>

                        <?php
                        get_search_form();

                        the_widget('WP_Widget_Recent_Posts');

                        // Only show the widget if site has multiple categories.
                        if (firetoss_seed_categorized_blog()) :
                            ?>

                            <div class="widget widget_categories">
                                <h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'firetoss_seed'); ?></h2>
                                <ul>
                                    <?php
                                    wp_list_categories(array(
                                        'orderby' => 'count',
                                        'order' => 'DESC',
                                        'show_count' => 1,
                                        'title_li' => '',
                                        'number' => 10,
                                    ));
                                    ?>
                                </ul>
                            </div><!-- .widget -->

                            <?php
                        endif;

                        /* translators: %1$s: smiley */
                        $archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'firetoss_seed'), convert_smilies(':)')) . '</p>';
                        the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");

                        the_widget('WP_Widget_Tag_Cloud');
                        ?>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #primary -->

<?php
get_footer();
