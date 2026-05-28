<?php
/**
 * Fonctions générales du thème
 *
 * @package MonTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Ajoute les classes body utiles
 */
function mon_theme_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'singular';
    }
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    return $classes;
}
add_filter( 'body_class', 'mon_theme_body_classes' );

/**
 * Limite la longueur de l'extrait
 */
function mon_theme_excerpt_length( $length ) {
    if ( is_admin() ) {
        return $length;
    }
    return 30;
}
add_filter( 'excerpt_length', 'mon_theme_excerpt_length', 999 );

/**
 * Remplace le [...] de fin d'extrait
 */
function mon_theme_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    }
    return '&hellip;';
}
add_filter( 'excerpt_more', 'mon_theme_excerpt_more' );
