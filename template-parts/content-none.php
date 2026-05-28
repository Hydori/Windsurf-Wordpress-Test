<?php
/**
 * Template part — aucun contenu trouvé
 *
 * @package MonTheme
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Rien trouvé', 'mon-theme' ); ?></h1>
    </header>

    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
            <p>
                <?php
                printf(
                    wp_kses(
                        __( 'Prêt à publier votre premier article ? <a href="%1$s">Commencez ici</a>.', 'mon-theme' ),
                        array( 'a' => array( 'href' => array() ) )
                    ),
                    esc_url( admin_url( 'post-new.php' ) )
                );
                ?>
            </p>
        <?php elseif ( is_search() ) : ?>
            <p><?php esc_html_e( 'Désolé, aucun résultat pour cette recherche. Essayez avec d\'autres mots-clés.', 'mon-theme' ); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Il semble qu\'il n\'y ait rien ici.', 'mon-theme' ); ?></p>
        <?php endif; ?>
    </div>
</section>
