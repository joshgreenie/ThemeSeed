<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 10:56 AM
 */

$args = ft_get_sub_fields(array('post_loop_post_type', 'post_loop_post_per_page','post_loop_order_by','post_loop_order'));

?>

<div class="post-wrapper flex-item">

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query_args = array(
        'post_type' => $args->post_loop_post_type,
        'post_status' => array('publish'),
        'orderby' => $args->post_loop_order_by,
        'post_per_page' => $args->post_loop_post_per_page,
        'order' => $args->post_loop_order,
        'paged' => $paged,
    );
    // The Query
    $wp_query = new WP_Query($query_args);
    if ($wp_query->have_posts()) :
//        $count = $wp_query->post_count;
        while ($wp_query->have_posts()) : $wp_query->the_post();
            $thumbnail = get_the_post_thumbnail_url();
            $date = get_the_date();
            $author = get_the_author_posts_link();
            ?>
            <div class="post-looped">
                <?php
                ft_element('div')
                    ->addClass('featured-image')
                    ->attr('background-image', $thumbnail)
                    ->render($thumbnail);

                ?>
                <div class="post-content">
                    <div class="post-meta">
                        <?php ft_element('span')
                            ->addClass('post-date')
                            ->text($date)
                            ->render('true');
                        ft_element($author)
                            ->addClass('post-author')
                            ->text($date)
                            ->render('true');
                        ?>
                    </div>
                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php
        endwhile;
    endif;

    wp_pagenavi();
    wp_reset_query(); ?>
    <a class="text-link" href="<?php get_post_type_archive_link( $post_type ); ?>">View More <i class="icon-Chevron"></i></a>

</div>

