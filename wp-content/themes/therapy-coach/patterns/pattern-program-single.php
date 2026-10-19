<?php
/**
 * Title: Program – Single
 * Slug: therapy-coach/program-single
 * Categories: therapy-coach
 */
$img           = get_template_directory_uri() . '/assets/images/';
$program_img   = esc_url( $img . 'program-1.webp' );
$icon_url      = get_template_directory_uri() . '/assets/images/icons/';
$icon_check    = esc_url( $icon_url . 'circle-check.svg' );
$icon_clock    = esc_url( $icon_url . 'clock.svg' );
$icon_calendar = esc_url( $icon_url . 'calendar-days.svg' );
$icon_users    = esc_url( $icon_url . 'user-check.svg' );
$icon_shield   = esc_url( $icon_url . 'lock-keyhole.svg' );
?>
<!-- wp:group {"metadata":{"patternName":"therapy-coach/program-single","name":"Program – Single","categories":["therapy-coach"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--background-light);padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","className":"is-layout-flex","style":{"spacing":{"blockGap":{"top":"48px","left":"clamp(40px,5vw,80px)"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-layout-flex"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"},"blockGap":"8px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","orientation":"horizontal"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;min-height:0px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $icon_check ); ?>","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"hero-badge-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-full hero-badge-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_check ); ?>" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"button","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-button-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Now enrolling · Anxiety</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"400","lineHeight":"1.08"},"spacing":{"margin":{"top":"24px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"display-xl","fontFamily":"fraunces"} -->
<h1 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family has-display-xl-font-size" style="margin-top:24px;margin-bottom:0px;font-weight:400;line-height:1.08">Calm in 8 Weeks</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"body-lg","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-lg-font-size" style="margin-top:20px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:1.6">An eight-week structured coaching program combining weekly one-on-one sessions with guided activities you complete inside your private dashboard. We blend short, evidence-based clinical work with practical daily practices.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"32px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:32px;margin-bottom:0px"><!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"},"blockGap":"8px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;min-height:0px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $icon_clock ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_clock ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">8 weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"},"blockGap":"8px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;min-height:0px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $icon_calendar ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_calendar ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">8 one-on-one sessions</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"},"blockGap":"8px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;min-height:0px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $icon_users ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_users ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Personalized plan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"border":{"radius":"24px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"blockGap":"16px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:24px;min-height:0px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $program_img ); ?>","aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $program_img ); ?>" alt="Calm in 8 Weeks" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"8px","right":"8px"},"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:8px;padding-left:8px"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-muted-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Investment</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1","fontStyle":"normal","fontSize":"36px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"fraunces"} -->
<p class="has-primary-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:0;font-size:36px;font-style:normal;font-weight:400;line-height:1">$1,180</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"4px","bottom":"0"}}},"textColor":"muted-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-muted-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:4px;margin-bottom:0;font-style:normal;font-weight:400">or 3 monthly payments of $410</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","width":100,"style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}},"typography":{"fontSize":"16px","fontWeight":"500","fontStyle":"normal","lineHeight":"1.4"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/book" style="border-radius:50px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-size:16px;font-style:normal;font-weight:500;line-height:1.4">Enroll Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"has-muted-text-color has-text-color has-inter-font-family","style":{"typography":{"fontWeight":"400","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"12px","bottom":"0"}}},"textColor":"muted-text","fontSize":"caption"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-inter-font-family has-caption-font-size" style="margin-top:12px;margin-bottom:0;font-style:normal;font-weight:400">Secure checkout · 7-day refund window</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"14px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"blockGap":"10px"}},"backgroundColor":"background-dark","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background-dark-background-color has-background" style="border-radius:14px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:image {"url":"<?php echo esc_url( $icon_shield ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_shield ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.55">After purchase, your therapist issues private login credentials within one business day so you can begin activities and book sessions in your AllCoach dashboard.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
