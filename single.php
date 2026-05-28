<?php
/**
 * Template pour les articles individuels
 *
 * @package MonTheme
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php the_post_navigation( array(
                'prev_text' => '<span class="nav-subtitle">' . __( 'Article précédent', 'mon-theme' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . __( 'Article suivant', 'mon-theme' ) . '</span> <span class="nav-title">%title</span>',
            ) ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    </main>

    <?php get_sidebar(); ?>

<?php
get_footer();
