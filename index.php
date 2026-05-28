<?php

/**
 * Template principal — fallback pour toutes les vues
 *
 * @package MonTheme
 */

get_header();
?>

<main id="primary" class="site-main">

    HELLO WORLD

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', get_post_type()); ?>
        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php
get_footer();
