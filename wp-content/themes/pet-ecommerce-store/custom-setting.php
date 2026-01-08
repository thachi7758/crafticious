<?php 

function pet_ecommerce_store_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'pet-ecommerce-store-theme-settings', // Menu slug
        'pet_ecommerce_store_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'pet_ecommerce_store_add_admin_menu' );

function pet_ecommerce_store_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'pet-ecommerce-store' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'pet_ecommerce_store_settings_group' );
            do_settings_sections( 'pet-ecommerce-store-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function pet_ecommerce_store_register_settings() {
    register_setting( 'pet_ecommerce_store_settings_group', 'pet_ecommerce_store_enable_animations' );

    add_settings_section(
        'pet_ecommerce_store_settings_section',
        __( 'Animation Settings', 'pet-ecommerce-store' ),
        null,
        'pet-ecommerce-store-theme-settings'
    );

    add_settings_field(
        'pet_ecommerce_store_enable_animations',
        __( 'Enable Animations', 'pet-ecommerce-store' ),
        'pet_ecommerce_store_enable_animations_callback',
        'pet-ecommerce-store-theme-settings',
        'pet_ecommerce_store_settings_section'
    );
}
add_action( 'admin_init', 'pet_ecommerce_store_register_settings' );

function pet_ecommerce_store_enable_animations_callback() {
    $checked = get_option( 'pet_ecommerce_store_enable_animations', true );
    ?>
    <input type="checkbox" name="pet_ecommerce_store_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

