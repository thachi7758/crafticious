<?php

add_action( 'admin_menu', 'pet_ecommerce_store_gettingstarted' );
function pet_ecommerce_store_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'pet-ecommerce-store'), esc_html__('Begin Installation', 'pet-ecommerce-store'), 'edit_theme_options', 'pet-ecommerce-store-guide-page', 'pet_ecommerce_store_guide');
}

if ( ! defined( 'PET_ECOMMERCE_STORE_SUPPORT' ) ) {
define('PET_ECOMMERCE_STORE_SUPPORT',__('https://wordpress.org/support/theme/pet-ecommerce-store/','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_REVIEW' ) ) {
define('PET_ECOMMERCE_STORE_REVIEW',__('https://wordpress.org/support/theme/pet-ecommerce-store/reviews/','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_LIVE_DEMO' ) ) {
define('PET_ECOMMERCE_STORE_LIVE_DEMO',__('https://trial.ovationthemes.com/pet-ecommerce-store/','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_BUY_PRO' ) ) {
define('PET_ECOMMERCE_STORE_BUY_PRO',__('https://www.ovationthemes.com/products/pet-store-wordpress-theme','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_PRO_DOC' ) ) {
define('PET_ECOMMERCE_STORE_PRO_DOC',__('https://trial.ovationthemes.com/docs/pet-store-pro-doc/','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_FREE_DOC' ) ) {
define('PET_ECOMMERCE_STORE_FREE_DOC',__('https://trial.ovationthemes.com/docs/pet-ecommerce-store-free-doc/','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_THEME_NAME' ) ) {
define('PET_ECOMMERCE_STORE_THEME_NAME',__('Premium Pet Ecommerce Store Theme','pet-ecommerce-store'));
}
if ( ! defined( 'PET_ECOMMERCE_STORE_BUNDLE_LINK' ) ) {
define('PET_ECOMMERCE_STORE_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','pet-ecommerce-store'));
}
/**
 * Theme Info Page
 */
function pet_ecommerce_store_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'pet-ecommerce-store'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( PET_ECOMMERCE_STORE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'pet-ecommerce-store'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( PET_ECOMMERCE_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'pet-ecommerce-store'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( PET_ECOMMERCE_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'pet-ecommerce-store'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','pet-ecommerce-store'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','pet-ecommerce-store'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','pet-ecommerce-store'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','pet-ecommerce-store'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','pet-ecommerce-store'); ?></h4>
					<p><?php esc_html_e('To check your website click here','pet-ecommerce-store'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','pet-ecommerce-store'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','pet-ecommerce-store'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','pet-ecommerce-store'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( PET_ECOMMERCE_STORE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','pet-ecommerce-store'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(PET_ECOMMERCE_STORE_THEME_NAME); ?></h3>
				<img class="pet_ecommerce_store_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( PET_ECOMMERCE_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'pet-ecommerce-store'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( PET_ECOMMERCE_STORE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Get Pro Theme', 'pet-ecommerce-store'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( PET_ECOMMERCE_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'pet-ecommerce-store'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( PET_ECOMMERCE_STORE_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (125+ Themes at Just $89)', 'pet-ecommerce-store'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>