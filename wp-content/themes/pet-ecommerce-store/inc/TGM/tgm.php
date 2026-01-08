<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function pet_ecommerce_store_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'pet-ecommerce-store' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'YITH WooCommerce Wishlist', 'pet-ecommerce-store' ),
			'slug'             => 'yith-woocommerce-wishlist',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ovation Elements', 'pet-ecommerce-store' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	pet_ecommerce_store_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'pet_ecommerce_store_register_recommended_plugins' );