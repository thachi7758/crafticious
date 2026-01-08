<?php
/**
 * Title: Product Section
 * Slug: pet-ecommerce-store/product-section
 * Categories: pet-ecommerce-store, product-section
 */
$pet_ecommerce_store_pluginsList = get_option( 'active_plugins' );
$pet_ecommerce_store_plugin = 'woocommerce/woocommerce.php';
$pet_ecommerce_store_results = in_array( $pet_ecommerce_store_plugin , $pet_ecommerce_store_pluginsList);
if ( $pet_ecommerce_store_results )  {
?>

<!-- wp:group {"className":"product-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"left":"0px","right":"0px","top":"0","bottom":"0"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group product-section" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px;font-size:18px;font-style:normal;font-weight:600"><!-- wp:group {"className":"product-head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group product-head-box wow zoomIn"><!-- wp:heading {"textAlign":"center","level":3,"className":"product-sec-title","style":{"typography":{"fontSize":"17px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"35px","right":"35px"}}},"backgroundColor":"primary","textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-center product-sec-title has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:17px;text-transform:capitalize"><?php echo esc_html__('pamper your pets','pet-ecommerce-store'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-sec-para","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center product-sec-para" style="font-size:24px;font-style:normal;font-weight:500"><?php echo esc_html__('Shampoos, brushes, wipes & full grooming bundles.','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"products-main-box wow zoomIn"} -->
<div class="wp-block-woocommerce-product-collection products-main-box wow zoomIn"><!-- wp:woocommerce/product-template {"className":"products-boxes owl-carousel","layout":{}} -->
<!-- wp:group {"className":"product-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"280px","className":"product-img"} -->
<!-- wp:group {"className":"product-img-content","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"10px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"1px"}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-img-content has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:0px"><!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"fontFamily":"quicksand"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background has-quicksand-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px;font-size:16px;text-transform:capitalize"><?php echo esc_html__('shop now','pet-ecommerce-store'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"product-cart-btn","fontSize":"small","style":{"spacing":{"padding":{"left":"10px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"25px","right":"25px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:18px;padding-right:25px;padding-bottom:18px;padding-left:25px"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"product-rating","style":{"spacing":{"margin":{"bottom":"6px"}}}} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"className":"product-title","style":{"spacing":{"margin":{"bottom":"8px","top":"0"}},"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"700","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":5,"className":"product-desc","textColor":"heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"product-price","textColor":"heading","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px","bottom":"0px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } else { ?>

<!-- wp:group {"className":"product-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"left":"0px","right":"0px","top":"0","bottom":"0"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group product-section" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px;font-size:18px;font-style:normal;font-weight:600"><!-- wp:group {"className":"product-head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group product-head-box wow zoomIn"><!-- wp:heading {"textAlign":"center","level":3,"className":"product-sec-title","style":{"typography":{"fontSize":"17px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"35px","right":"35px"}}},"backgroundColor":"primary","textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-center product-sec-title has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:17px;text-transform:capitalize"><?php echo esc_html__('pamper your pets','pet-ecommerce-store'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-sec-para","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center product-sec-para" style="font-size:24px;font-style:normal;font-weight:500"><?php echo esc_html__('Shampoos, brushes, wipes & full grooming bundles.','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"products-main-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group products-main-box wow zoomIn"><!-- wp:columns {"className":"products-boxes owl-carousel"} -->
<div class="wp-block-columns products-boxes owl-carousel"><!-- wp:column {"className":"product-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}}} -->
<div class="wp-block-column product-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/product1.png'); ?>","id":33,"dimRatio":0,"isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"product-img","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center product-img" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-33 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/product1.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"wishlist-btn"} -->
<div class="wp-block-buttons wishlist-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"8px","right":"8px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><img class="wp-image-7" style="width: 70px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/heart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"product-img-content","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"20px"},"blockGap":"5px"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"1px"}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-img-content has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:0px"><!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"fontFamily":"quicksand"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background has-quicksand-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px;font-size:16px;text-transform:capitalize"><?php echo esc_html__('shop now','pet-ecommerce-store'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-cart-btn","style":{"spacing":{"padding":{"left":"20px"}}}} -->
<div class="wp-block-buttons product-cart-btn" style="padding-left:20px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-34" style="width: 64px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"25px","right":"25px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:25px;padding-bottom:20px;padding-left:25px"><!-- wp:image {"id":41,"width":"auto","height":"18px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating"} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/review.png'); ?>" alt="" class="wp-image-41" style="width:auto;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"product-title","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-text-align-center product-title has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:18px;font-style:normal;font-weight:700;text-transform:capitalize"><a href="#"><?php echo esc_html__('gentle coat care shampoo','pet-ecommerce-store'); ?></a></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-desc has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:14px;font-style:normal;font-weight:400"><?php echo esc_html__('Best for Sensitive Skin','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-price has-heading-color has-text-color has-link-color" style="margin-top:10px"><?php echo esc_html__('$14.99','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}}} -->
<div class="wp-block-column product-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/product2.png'); ?>","id":60,"dimRatio":0,"isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"product-img","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center product-img" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-60 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/product2.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"wishlist-btn"} -->
<div class="wp-block-buttons wishlist-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"8px","right":"8px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><img class="wp-image-7" style="width: 70px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/heart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"product-img-content","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"20px"},"blockGap":"5px"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"1px"}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-img-content has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:0px"><!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"fontFamily":"quicksand"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background has-quicksand-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px;font-size:16px;text-transform:capitalize"><?php echo esc_html__('shop now','pet-ecommerce-store'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-cart-btn","style":{"spacing":{"padding":{"left":"20px"}}}} -->
<div class="wp-block-buttons product-cart-btn" style="padding-left:20px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-34" style="width: 64px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"25px","right":"25px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:25px;padding-bottom:20px;padding-left:25px"><!-- wp:image {"id":41,"width":"auto","height":"18px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating"} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/review.png'); ?>" alt="" class="wp-image-41" style="width:auto;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"product-title","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-text-align-center product-title has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:18px;font-style:normal;font-weight:700;text-transform:capitalize"><a href="#"><?php echo esc_html__('softgrip pet brush','pet-ecommerce-store'); ?></a></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-desc has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:14px;font-style:normal;font-weight:400"><?php echo esc_html__('Best for Sensitive Skin','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-price has-heading-color has-text-color has-link-color" style="margin-top:10px"><?php echo esc_html__('$14.99','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}}} -->
<div class="wp-block-column product-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/product3.png'); ?>","id":61,"dimRatio":0,"isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"product-img","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center product-img" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-61 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/product3.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"wishlist-btn"} -->
<div class="wp-block-buttons wishlist-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"8px","right":"8px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><img class="wp-image-7" style="width: 70px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/heart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"product-img-content","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"20px"},"blockGap":"5px"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"1px"}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-img-content has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:0px"><!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"fontFamily":"quicksand"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background has-quicksand-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px;font-size:16px;text-transform:capitalize"><?php echo esc_html__('shop now','pet-ecommerce-store'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-cart-btn","style":{"spacing":{"padding":{"left":"20px"}}}} -->
<div class="wp-block-buttons product-cart-btn" style="padding-left:20px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-34" style="width: 64px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"25px","right":"25px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:25px;padding-bottom:20px;padding-left:25px"><!-- wp:image {"id":41,"width":"auto","height":"18px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating"} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/review.png'); ?>" alt="" class="wp-image-41" style="width:auto;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"product-title","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-text-align-center product-title has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:18px;font-style:normal;font-weight:700;text-transform:capitalize"><a href="#"><?php echo esc_html__('freshpaws grooming wipes','pet-ecommerce-store'); ?></a></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-desc has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:14px;font-style:normal;font-weight:400"><?php echo esc_html__('Best for Sensitive Skin','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-price has-heading-color has-text-color has-link-color" style="margin-top:10px"><?php echo esc_html__('$14.99','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}}} -->
<div class="wp-block-column product-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/product4.png'); ?>","id":62,"dimRatio":0,"isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom center","sizeSlug":"full","className":"product-img","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center product-img" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-62 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/product4.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"wishlist-btn"} -->
<div class="wp-block-buttons wishlist-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"8px","right":"8px","top":"8px","bottom":"8px"}},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><img class="wp-image-7" style="width: 70px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/heart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"product-img-content","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"20px"},"blockGap":"5px"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"1px"}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-img-content has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:0px"><!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"fontFamily":"quicksand"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background has-quicksand-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px;font-size:16px;text-transform:capitalize"><?php echo esc_html__('shop now','pet-ecommerce-store'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-cart-btn","style":{"spacing":{"padding":{"left":"20px"}}}} -->
<div class="wp-block-buttons product-cart-btn" style="padding-left:20px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-34" style="width: 64px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"25px","right":"25px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:25px;padding-bottom:20px;padding-left:25px"><!-- wp:image {"id":41,"width":"auto","height":"18px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating"} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/review.png'); ?>" alt="" class="wp-image-41" style="width:auto;height:18px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"className":"product-title","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-text-align-center product-title has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:18px;font-style:normal;font-weight:700;text-transform:capitalize"><a href="#"><?php echo esc_html__('handprint haven birdhouse','pet-ecommerce-store'); ?></a></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-desc has-heading-color has-text-color has-link-color" style="margin-top:10px;font-size:14px;font-style:normal;font-weight:400"><?php echo esc_html__('Best for Sensitive Skin','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"heading"} -->
<p class="has-text-align-center product-price has-heading-color has-text-color has-link-color" style="margin-top:10px"><?php echo esc_html__('$14.99','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } ?>