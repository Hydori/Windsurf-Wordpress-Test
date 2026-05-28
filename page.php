<?php
/**
 * Template pour les pages statiques
 *
 * @package MonTheme
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    </main>

    <?php get_sidebar(); ?>

<?php
get_footer();
