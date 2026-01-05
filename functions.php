<?php
/**
 * GoVidCo Theme Functions and Definitions
 *
 * @package GoVidCo
 */

if ( ! function_exists( 'govidco_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function govidco_theme_setup() {
        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Add support for custom logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // Register Primary Navigation Menu.
        register_nav_menus( array(
            'primary' => esc_html__( 'Main Menu', 'govidco' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'govidco_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function govidco_enqueue_scripts() {
    // 1. Google Fonts (Inter & JetBrains Mono)
    wp_enqueue_style( 'govidco-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;900&family=JetBrains+Mono:wght@400;700&display=swap', array(), null );

    // 2. Tailwind CSS CDN
    // Note: For production, a local build process is recommended, but CDN works for development/lite themes.
    wp_enqueue_script( 'govidco-tailwind', 'https://cdn.tailwindcss.com', array(), null, false );

    // 3. Lucide Icons
    wp_enqueue_script( 'govidco-lucide', 'https://unpkg.com/lucide@latest', array(), null, false );

    // 4. Main Theme Stylesheet
    wp_enqueue_style( 'govidco-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'govidco_enqueue_scripts' );

/**
 * Output Tailwind Configuration in <head>.
 * This ensures the custom color palette and fonts match the design system.
 */
function govidco_custom_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        zinc: {
                            850: '#1f1f22',
                            900: '#18181b',
                            950: '#09090b',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <?php
}
add_action( 'wp_head', 'govidco_custom_tailwind_config', 10 );