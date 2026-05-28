<?php
/**
 * Template part — contenu générique (liste d'articles)
 *
 * @package MonTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
        ?>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php mon_theme_posted_on(); ?>
                <?php mon_theme_posted_by(); ?>
            </div>
        <?php endif; ?>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if ( is_singular() ) :
            the_content();
        else :
            the_excerpt();
        endif;
        ?>
    </div>

    <footer class="entry-footer">
        <?php mon_theme_entry_footer(); ?>
    </footer>

</article>
