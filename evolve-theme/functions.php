<?php
/**
 * Evolve Clothing functions and definitions
 */

if ( ! function_exists( 'evolve_clothing_setup' ) ) :
    function evolve_clothing_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Add theme support for Elementor
        add_theme_support( 'elementor' );

        // Register nav menus
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'evolve-clothing' ),
            'footer'  => esc_html__( 'Footer Menu', 'evolve-clothing' ),
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'evolve_clothing_setup' );

/**
 * Enqueue scripts and styles.
 */
function evolve_clothing_scripts() {
    // Fonts
    wp_enqueue_style( 'evolve-fonts-dm-sans', 'https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap', array(), null );
    wp_enqueue_style( 'evolve-fonts-playfair', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap', array(), null );

    // Font Awesome
    wp_enqueue_style( 'evolve-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

    // Main Theme CSS
    wp_enqueue_style( 'evolve-clothing-style', get_template_directory_uri() . '/css/main.css', array(), wp_get_theme()->get( 'Version' ) );

    // Main Theme JS
    wp_enqueue_script( 'evolve-clothing-script', get_template_directory_uri() . '/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'evolve_clothing_scripts' );
