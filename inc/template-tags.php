<?php
/**
 * Fonctions utilitaires pour les templates
 *
 * @package MonTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Affiche la date de publication
 */
function mon_theme_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() )
    );

    echo '<span class="posted-on">' . $time_string . '</span>';
}

/**
 * Affiche l'auteur
 */
function mon_theme_posted_by() {
    echo '<span class="byline"> ' . esc_html__( 'par', 'mon-theme' ) . ' <span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span></span>';
}

/**
 * Affiche les catégories et tags en pied d'article
 */
function mon_theme_entry_footer() {
    if ( 'post' === get_post_type() ) {
        $categories = get_the_category_list( esc_html__( ', ', 'mon-theme' ) );
        if ( $categories ) {
            printf( '<span class="cat-links">' . esc_html__( 'Publié dans %1$s', 'mon-theme' ) . '</span>', $categories );
        }

        $tags = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'mon-theme' ) );
        if ( $tags ) {
            printf( '<span class="tags-links">' . esc_html__( 'Étiqueté %1$s', 'mon-theme' ) . '</span>', $tags );
        }
    }

    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link(
            sprintf(
                wp_kses(
                    __( 'Laisser un commentaire<span class="screen-reader-text"> sur %s</span>', 'mon-theme' ),
                    array( 'span' => array( 'class' => array() ) )
                ),
                wp_kses_post( get_the_title() )
            )
        );
        echo '</span>';
    }
}
