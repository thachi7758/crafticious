<?php
/**
 * Title: About Section
 * Slug: pet-ecommerce-store/about-section
 * Categories: pet-ecommerce-store, about-section
 */
?>
<!-- wp:group {"className":"about-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"gradient":"cover-bg-color","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group about-section has-cover-bg-color-gradient-background has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:0px;padding-bottom:var(--wp--preset--spacing--80);padding-left:0px;font-size:14px"><!-- wp:group {"className":"head-box wow fadeInDown","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow fadeInDown" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3,"className":"about-sec-title","style":{"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center about-sec-title has-primary-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:28px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('who we are','pet-ecommerce-store'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"has-link-color","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading"} -->
<p class="has-text-align-center has-link-color has-heading-color has-text-color" style="font-size:20px;font-style:normal;font-weight:500"><?php echo esc_html__('Trusted pet care experts with over 15 years of love and experience.','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"about-cols wow fadeInUp"} -->
<div class="wp-block-columns about-cols wow fadeInUp"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"about-img-box-inner","style":{"spacing":{"padding":{"right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group about-img-box-inner" style="padding-right:0px"><!-- wp:image {"id":30,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px","width":"1px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/about.png'); ?>" alt="" class="has-border-color has-white-border-color wp-image-30" style="border-width:1px;border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"abt-exp-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"backgroundColor":"primary","borderColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group abt-exp-box has-border-color has-white-border-color has-primary-background-color has-background" style="border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"white","fontFamily":"lato"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-lato-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:26px;font-style:normal;font-weight:700"><?php echo esc_html__('15 +','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","fontFamily":"lato"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-lato-font-family" style="margin-top:0;margin-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('years of','pet-ecommerce-store'); ?><br><?php echo esc_html__('experience','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"about-text-box","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center about-text-box" style="padding-left:0"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"80px"}},"typography":{"lineHeight":"2","fontSize":"23px","fontStyle":"normal","fontWeight":"300"}},"textColor":"heading"} -->
<p class="has-text-align-right has-heading-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;margin-left:80px;font-size:23px;font-style:normal;font-weight:300;line-height:2"><?php echo esc_html__('At PawNest Pets, we believe every pet deserves a loving, safe, and forever home. What started as a small, passionate initiative has grown into a trusted pet adoption and sales platform where responsible breeders, veterinarians, and animal lovers come together for one purpose — to provide healthy, happy pets to caring families.','pet-ecommerce-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->