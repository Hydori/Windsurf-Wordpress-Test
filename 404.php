<?php
/**
 * Template 404 — Page non trouvée
 *
 * @package MonTheme
 */

get_header();
?>

    <main id="primary" class="site-main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oups ! Cette page est introuvable.', 'mon-theme' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'Il semble que rien n\'ait été trouvé à cet emplacement.', 'mon-theme' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>

    </main>

<?php
get_footer();
