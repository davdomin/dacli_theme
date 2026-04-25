<?php
/**
 * dAcli Sistemas - functions.php
 * El motor principal del tema.
 */

if ( ! function_exists( 'dacli_setup' ) ) :
    /**
     * Configuración básica del tema
     */
    function dacli_setup() {
        // Títulos de pestaña automáticos (SEO)
        add_theme_support( 'title-tag' );

        // Imágenes destacadas para el blog
        add_theme_support( 'post-thumbnails' );

        // Logo personalizado gestionable desde el panel
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 300,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // Registro de los menús de navegación
        register_nav_menus( array(
            'menu-principal' => 'Menú Principal Superior',
            'menu-footer'    => 'Menú de Pie de Página',
        ) );

        // Soporte para formatos de post (opcional para el blog)
        add_theme_support( 'post-formats', array( 'image', 'video', 'quote' ) );
    }
endif;
add_action( 'after_setup_theme', 'dacli_setup' );

/**
 * Encolar (llamar) estilos y scripts correctamente
 */
function dacli_scripts() {
    // 1. Cargar el style.css principal (el que tiene las variables de color)
    wp_enqueue_style( 'dacli-style', get_stylesheet_uri(), array(), '1.0.0' );

    // 2. Cargar CSS adicional si Mario crea el archivo en assets
    if ( file_exists( get_template_directory() . '/assets/css/custom.css' ) ) {
        wp_enqueue_style( 'dacli-custom', get_template_directory_uri() . '/assets/css/custom.css', array('dacli-style'), '1.0.0' );
    }

    // 3. Cargar JavaScript principal
    wp_enqueue_script( 'dacli-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'dacli_scripts' );

/**
 * Registro de áreas de widgets (Sidebars)
 */
function dacli_widgets_init() {
    register_sidebar( array(
        'name'          => 'Barra Lateral Principal',
        'id'            => 'sidebar-1',
        'description'   => 'Añade widgets aquí para que aparezcan en el blog.',
        'before_widget' => '<section id="%1$s" class="widget %2$s" style="margin-bottom: 30px;">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title" style="color: #2A3F7B; border-bottom: 2px solid #B2C3E6; padding-bottom: 5px; margin-bottom: 15px;">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'dacli_widgets_init' );

/**
 * Ajuste de longitud del resumen (Excerpt) para el blog
 */
function dacli_custom_excerpt_length( $length ) {
    return 25; // Número de palabras que se verán en la tarjeta del blog
}
add_filter( 'excerpt_length', 'dacli_custom_excerpt_length', 999 );

/**
 * David: Aquí puedes añadir después tus funciones personalizadas 
 * para conectar con MySQL o shortcodes para los logos.
 */