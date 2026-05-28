<?php
/**
 * Template part — contenu page statique
 *
 * @package MonTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail( 'full' ); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages :', 'mon-theme' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>

</article>
