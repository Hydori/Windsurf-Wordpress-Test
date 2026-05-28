<?php
/**
 * Fonctions et définitions du thème
 *
 * @package MonTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ─── Constantes ───────────────────────────────────────────────────────────────

define( 'MON_THEME_VERSION', '1.0.0' );
define( 'MON_THEME_DIR', get_template_directory() );
define( 'MON_THEME_URI', get_template_directory_uri() );

// ─── Setup ────────────────────────────────────────────────────────────────────

function mon_theme_setup() {
    // Traductions
    load_theme_textdomain( 'mon-theme', MON_THEME_DIR . '/languages' );

    // Support des fonctionnalités WordPress
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );

    // Menus de navigation
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'mon-theme' ),
        'footer'  => __( 'Menu pied de page', 'mon-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'mon_theme_setup' );

// ─── Enqueue scripts & styles ─────────────────────────────────────────────────

function mon_theme_scripts() {
    // Tailwind CSS (CDN en développement — remplacer par le build en production)
    wp_enqueue_style(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        array(),
        null
    );

    // Feuille de style principale du thème
    wp_enqueue_style(
        'mon-theme-style',
        MON_THEME_URI . '/assets/css/main.css',
        array( 'tailwind-cdn' ),
        MON_THEME_VERSION
    );

    // Script principal
    wp_enqueue_script(
        'mon-theme-main',
        MON_THEME_URI . '/assets/js/main.js',
        array(),
        MON_THEME_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_scripts' );

// ─── Widgets / Sidebars ───────────────────────────────────────────────────────

function mon_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar principale', 'mon-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Ajoutez vos widgets ici.', 'mon-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mon_theme_widgets_init' );

// ─── Includes ─────────────────────────────────────────────────────────────────

require MON_THEME_DIR . '/inc/template-functions.php';
require MON_THEME_DIR . '/inc/template-tags.php';
