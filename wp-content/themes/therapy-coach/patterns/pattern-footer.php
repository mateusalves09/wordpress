<?php
/**
 * Title: Footer
 * Slug: therapy-coach/footer
 * Categories: therapy-coach
 */
$icon_url   = get_template_directory_uri() . '/assets/images/icons/';
$logo_url   = esc_url( $icon_url . 'leaf.svg' );
$icon_pin   = esc_url( $icon_url . 'map-pin.svg' );
$icon_phone = esc_url( $icon_url . 'phone.svg' );
$icon_mail  = esc_url( $icon_url . 'mail.svg' );
?>
<!-- wp:group {"metadata":{"name":"Footer","patternName":"therapy-coach/footer","categories":["therapy-coach"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"gradient-end","layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-gradient-end-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"clamp(40px,5vw,80px)"},"padding":{"bottom":"80px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|rule","width":"1px","style":"solid"}}}} -->
<div class="wp-block-columns alignwide" style="border-bottom-color:var(--wp--preset--color--rule);border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-bottom:80px"><!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","right":"9px","bottom":"8px","left":"9px"},"blockGap":"0"},"dimensions":{"minHeight":"28px"},"layout":{"selfStretch":"fixed","flexSize":"36px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:50%;min-height:28px;padding-top:8px;padding-right:9px;padding-bottom:8px;padding-left:9px"><!-- wp:image {"url":"<?php echo esc_url( $logo_url ); ?>","width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"logo-icon","style":{"spacing":{"margin":{"top":"-5px","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full is-resized logo-icon" style="margin-top:-5px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $logo_url ); ?>" alt="" style="object-fit:contain;width:20px;height:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":3,"isLink":false,"style":{"typography":{"fontWeight":"400","fontSize":"22px","lineHeight":"1.2","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontFamily":"fraunces"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"16px","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-md","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-md-font-size" style="margin-top:16px;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">Evidence-based therapy coaching for clarity, healing, and emotional balance. Personalized programs and one-on-one sessions delivered with warmth and care.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"textColor":"primary","fontSize":"body-sm","fontFamily":"fraunces"} -->
<p class="has-primary-color has-text-color has-fraunces-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:16px;font-style:normal;font-weight:500;letter-spacing:0.14em;text-transform:uppercase">Explore</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|paragraph-text"},"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"About","url":"#"} /-->

<!-- wp:navigation-link {"label":"Programs","url":"#"} /-->

<!-- wp:navigation-link {"label":"Resources","url":"#"} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->

<!-- wp:navigation-link {"label":"Client Login","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"textColor":"primary","fontSize":"body-sm","fontFamily":"fraunces"} -->
<p class="has-primary-color has-text-color has-fraunces-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:16px;font-style:normal;font-weight:500;letter-spacing:0.14em;text-transform:uppercase">Reach Us</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_pin ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_pin ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.55">14 Linden Avenue, Suite 3B
Portland, OR 97205</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_phone ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_phone ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.55">(503) 555-0142</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_mail ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_mail ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.55">hello@therapycoach.co</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"24px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-muted-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">© 2026 TherapyCoach. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-muted-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Powered by AllCoach.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
