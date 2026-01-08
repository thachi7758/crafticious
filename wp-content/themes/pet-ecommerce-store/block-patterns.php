<?php
/**
 * Pet Ecommerce Store: Block Patterns
 *
 * @since Pet Ecommerce Store 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Pet Ecommerce Store 1.0
 *
 * @return void
 */
function pet_ecommerce_store_register_block_patterns() {
	$pet_ecommerce_store_block_pattern_categories = array(
		'pet-ecommerce-store'    => array( 'label' => __( 'Pet Ecommerce Store', 'pet-ecommerce-store' ) ),
	);

	$pet_ecommerce_store_block_pattern_categories = apply_filters( 'pet_ecommerce_store_block_pattern_categories', $pet_ecommerce_store_block_pattern_categories );

	foreach ( $pet_ecommerce_store_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'pet_ecommerce_store_register_block_patterns', 9 );
