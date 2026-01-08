<?php
/**
 * Pet Ecommerce Store: Customizer
 *
 * @subpackage Pet Ecommerce Store
 * @since 1.0
 */

function pet_ecommerce_store_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('pet_ecommerce_store_pro', array(
        'title'    => __('PET ECOMMERCE STORE PREMIUM', 'pet-ecommerce-store'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('pet_ecommerce_store_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Pet_Ecommerce_Store_Pro_Control($wp_customize, 'pet_ecommerce_store_pro', array(
        'label'    => __('PET ECOMMERCE STORE PREMIUM', 'pet-ecommerce-store'),
        'section'  => 'pet_ecommerce_store_pro',
        'settings' => 'pet_ecommerce_store_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'pet_ecommerce_store_customize_register' );


define('PET_ECOMMERCE_STORE_PRO_LINK',__('https://www.ovationthemes.com/products/pet-store-wordpress-theme','pet-ecommerce-store'));

define('PET_ECOMMERCE_STORE_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','pet-ecommerce-store'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Pet_Ecommerce_Store_Pro_Control')):
    class Pet_Ecommerce_Store_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( PET_ECOMMERCE_STORE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE PET ECOMMERCE STORE PREMIUM','pet-ecommerce-store');?> </a>
	        </div>
            <div class="col-md">
                <img class="pet_ecommerce_store_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'pet-ecommerce-store');?> </li>                 
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'pet-ecommerce-store');?> </li>
                    <li class="upsell-pet_ecommerce_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'pet-ecommerce-store');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( PET_ECOMMERCE_STORE_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (125+ Themes)','pet-ecommerce-store');?> </a>
            </div>
        </label>
    <?php } }
endif;