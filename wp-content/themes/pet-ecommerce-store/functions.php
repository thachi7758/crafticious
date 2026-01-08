<?php
/**
 * Pet Ecommerce Store functions and definitions
 *
 * @package Pet Ecommerce Store
 */

if ( ! function_exists( 'pet_ecommerce_store_setup' ) ) :
function pet_ecommerce_store_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'pet-ecommerce-store', get_template_directory() . '/languages' );
    
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    add_theme_support('woocommerce');

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );

	if (! defined('PET_ECOMMERCE_STORE_VERSION')) {
		// Replace the version number of the theme on each release.
		define('PET_ECOMMERCE_STORE_VERSION', wp_get_theme()->get('Version'));
	}

	require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

    require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
}
endif; // pet_ecommerce_store_setup
add_action( 'after_setup_theme', 'pet_ecommerce_store_setup' );

function pet_ecommerce_store_scripts() {
    wp_enqueue_style( 'pet-ecommerce-store-basic-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );

    //font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '7.0.0' );

    wp_style_add_data( 'pet-ecommerce-store-basic-style', 'rtl', 'replace' );

    //homepage slider
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), PET_ECOMMERCE_STORE_VERSION );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.js', array('jquery') ,PET_ECOMMERCE_STORE_VERSION,true);

	// script.js
	wp_enqueue_script('pet-ecommerce-store-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), PET_ECOMMERCE_STORE_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'pet_ecommerce_store_scripts' );

function pet_ecommerce_store_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('pet-ecommerce-store-welcome-notice', get_template_directory_uri() . '/inc/dashboard/pet-ecommerce-store-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('pet-ecommerce-store-welcome-notice', 'pet_ecommerce_store_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('pet_ecommerce_store_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('pet_ecommerce_store_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=pet-ecommerce-store-guide-page')
    ));
}
add_action('admin_enqueue_scripts', 'pet_ecommerce_store_enqueue_admin_script');

function pet_ecommerce_store_admin_theme_style() {
   wp_enqueue_style('pet-ecommerce-store-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'pet_ecommerce_store_admin_theme_style');

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

add_action( 'admin_init', function() {
    update_option( 'essential_blocks_quick_setup_shown', true );
    update_option( 'essential_blocks_user_type', 'old' );
    remove_submenu_page( 'admin.php', 'eb-quick-setup' );
});

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
require get_template_directory() .'/inc/TGM/tgm.php';
require get_template_directory() . '/custom-setting.php';
require_once get_template_directory() . '/inc/dashboard/welcome-notice.php';