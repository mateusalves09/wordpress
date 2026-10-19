<?php
/**
 * Title: Hero
 * Slug: therapy-coach/hero
 * Categories: therapy-coach
 */
$img   = get_template_directory_uri() . '/assets/images/';
$coach = esc_url( $img . 'therapy-hero-image.webp' );
$u1    = esc_url( $img . 'user-1.webp' );
$u2    = esc_url( $img . 'user-2.webp' );
$u3    = esc_url( $img . 'user-3.webp' );
$u4    = esc_url( $img . 'user-4.webp' );
$sparkle_icon = esc_url( $img . 'icons/sparkles.svg' );
?>
<!-- wp:group {"metadata":{"categories":["therapy-coach"],"patternName":"therapy-coach/hero","name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--background-light);padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","className":"is-layout-flex","style":{"spacing":{"blockGap":{"top":"48px","left":"clamp(40px,5vw,80px)"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-layout-flex"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"},"blockGap":"8px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","orientation":"horizontal"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;min-height:0px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $sparkle_icon ); ?>","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"hero-badge-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-full hero-badge-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $sparkle_icon ); ?>" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"button","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-button-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Now accepting new clients</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"400","lineHeight":"1.08"},"spacing":{"margin":{"top":"24px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"display-xl","fontFamily":"fraunces"} -->
<h1 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family has-display-xl-font-size" style="margin-top:24px;margin-bottom:0px;font-weight:400;line-height:1.08">Transform your life with personalized <em style="color:var(--wp--preset--color--primary)">therapy &amp; coaching</em>.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"body-lg","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-lg-font-size" style="margin-top:20px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:1.6">Professional support, guided growth, and meaningful change through evidence-based therapy and coaching — delivered through a calm, modern platform built for the way you actually live.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"14px","margin":{"top":"32px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-buttons" style="margin-top:32px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"12px","bottom":"12px"}},"typography":{"fontSize":"16px","fontWeight":"400","fontStyle":"normal","lineHeight":"1.6"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/programs" style="border-radius:50px;padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;font-size:16px;font-style:normal;font-weight:400;line-height:1.6">Explore Programs</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","textColor":"heading-text","className":"is-style-outline","style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"12px","bottom":"12px"}},"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.6","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-heading-text-color has-white-background-color has-text-color has-background has-link-color has-border-color has-custom-font-size wp-element-button" href="/about" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;font-size:16px;font-style:normal;font-weight:400;line-height:1.6">Book Discovery Call</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"top":"32px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:32px;margin-bottom:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $u1 ); ?>","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded","style":{"border":{"width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px"}},"layout":{"selfStretch":"fixed","flexSize":"40px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized is-style-rounded" style="margin-top:0;margin-right:0px;margin-bottom:0"><img src="<?php echo esc_url( $u1 ); ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"url":"<?php echo esc_url( $u2 ); ?>","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-12px"}},"layout":{"selfStretch":"fixed","flexSize":"40px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-12px"><img src="<?php echo esc_url( $u2 ); ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"url":"<?php echo esc_url( $u3 ); ?>","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-12px"}},"layout":{"selfStretch":"fixed","flexSize":"40px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-12px"><img src="<?php echo esc_url( $u3 ); ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"url":"<?php echo esc_url( $u4 ); ?>","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-12px"}},"layout":{"selfStretch":"fixed","flexSize":"40px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-12px"><img src="<?php echo esc_url( $u4 ); ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Trusted by 1,200+ clients on their healing journeys</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"className":"hero-image-wrap","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-image-wrap" style="border-radius:20px"><!-- wp:image {"url":"<?php echo esc_url( $coach ); ?>","sizeSlug":"large","linkDestination":"none","className":"hero-coach-img","style":{"border":{"radius":"20px"},"spacing":{"margin":{"right":"0px"}}}} -->
<figure class="wp-block-image size-large has-custom-border hero-coach-img" style="margin-right:0px"><img src="<?php echo esc_url( $coach ); ?>" alt="Therapy Coach" style="border-radius:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
