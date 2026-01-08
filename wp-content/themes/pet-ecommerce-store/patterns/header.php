<?php
/**
 * Title: Header
 * Slug: pet-ecommerce-store/header
 * Categories: pet-ecommerce-store, header
 */
?>
<!-- wp:group {"className":"main-header","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-header" style="margin-top:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"header-top","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group header-top has-secondary-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":null,"className":"header-info-boxes","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
<div class="wp-block-columns header-info-boxes"><!-- wp:column {"verticalAlignment":"center","width":"55%","className":"top-text-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-text-box" style="flex-basis:55%"><!-- wp:paragraph {"className":"header-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"15px","textTransform":"capitalize"}},"textColor":"heading"} -->
<p class="header-text has-heading-color has-text-color has-link-color" style="font-size:15px;text-transform:capitalize"><?php echo esc_html__('get 20% off on first registration & free pet wellness check!','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"top-search-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-search-box" style="flex-basis:30%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here..","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"align":"center","className":"header-search","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"},"width":"0px","style":"none"},"typography":{"fontSize":"15px"}},"backgroundColor":"primary","namespace":"woocommerce/product-search"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"buttons-box"} -->
<div class="wp-block-column is-vertically-aligned-center buttons-box" style="flex-basis:15%"><!-- wp:group {"className":"header-woo-btns","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group header-woo-btns"><!-- wp:buttons {"className":"wishlist-btn"} -->
<div class="wp-block-buttons wishlist-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><i class="fa-regular fa-heart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/cart-link {"content":"","className":"cart-btn"} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","className":"account-btn","style":{"typography":{"fontSize":"22px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-bottom","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group header-bottom has-base-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":null,"className":"header-btm-boxes","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"},"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns header-btm-boxes" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo-box" style="flex-basis:25%"><!-- wp:site-title {"className":"header-logo","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"22px"}},"textColor":"heading"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"header-menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-menu-box" style="flex-basis:55%"><!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"white","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"header-menu","style":{"typography":{"fontSize":"15px","letterSpacing":"1px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|60"}},"fontFamily":"merriweather","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Available Pets","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Buy Now','pet-ecommerce-store'); ?>","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/pet-store-wordpress-theme","kind":"custom","className":"buynow"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-right-box" style="flex-basis:20%"><!-- wp:buttons {"className":"header-button","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"1px"},"spacing":{"blockGap":{"top":"15px","left":"15px"},"padding":{"right":"15px"}}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons header-button has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-right:15px"><!-- wp:button {"backgroundColor":"primary","className":"header-btn1","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} -->
<div class="wp-block-button header-btn1"><a class="wp-block-button__link has-primary-background-color has-background has-custom-font-size wp-element-button" href="#" style="font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('shop now','pet-ecommerce-store'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"header-btn2","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button header-btn2"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-65" style="width: 64px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt=""></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary","className":"header-btn2","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button header-btn2"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-93" style="width: 150px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/cart1.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->