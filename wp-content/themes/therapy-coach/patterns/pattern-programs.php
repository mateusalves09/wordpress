<?php
/**
 * Title: Featured Programs
 * Slug: therapy-coach/programs
 * Categories: therapy-coach
 */
$img           = get_template_directory_uri() . '/assets/images/';
$p1            = esc_url( $img . 'program-1.webp' );
$p2            = esc_url( $img . 'program-2.webp' );
$p3            = esc_url( $img . 'program-3.webp' );
$icon_url      = get_template_directory_uri() . '/assets/images/icons/';
$icon_clock    = esc_url( $icon_url . 'clock.svg' );
$icon_calendar = esc_url( $icon_url . 'calendar-days.svg' );
?>
<!-- wp:group {"metadata":{"patternName":"therapy-coach/programs","name":"Featured Programs","categories":["therapy-coach"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-light","layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"20px","margin":{"bottom":"48px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
<div class="wp-block-group" style="margin-bottom:48px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"primary","fontSize":"caption","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-inter-font-family has-caption-font-size" style="margin-bottom:16px;font-style:normal;font-weight:500;letter-spacing:0.14em;text-transform:uppercase">Featured Programs</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontSize":"36px"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:16px;font-size:36px;font-weight:400;line-height:1.2">Coaching paths designed around real transformation</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-md","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-md-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">Powered by AllCoach — purchase, access, and book sessions in one supportive flow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400"><a href="/programs" style="color:inherit;text-decoration:none">View all programs →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"is-layout-flex","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns is-layout-flex"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"blockGap":"0px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px"><!-- wp:cover {"url":"<?php echo esc_url( $p1 ); ?>","alt":"Calm in 8 Weeks","dimRatio":0,"minHeight":220,"minHeightUnit":"px","contentPosition":"top left","isDark":false,"style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:220px"><img class="wp-block-cover__image-background" alt="Calm in 8 Weeks" src="<?php echo esc_url( $p1 ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cred-icon","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"},"blockGap":"0","margin":{"top":"12px","left":"12px","right":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group cred-icon has-white-background-color has-background" style="border-radius:100px;margin-top:12px;margin-right:0;margin-bottom:0;margin-left:12px;padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Anxiety</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"1.4","fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-weight:400;line-height:1.4">Calm in 8 Weeks</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_clock ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_clock ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">8 weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_calendar ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_calendar ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">8 one-on-one</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"caption","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-caption-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.08em;text-transform:capitalize">From</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"heading-md","fontFamily":"fraunces"} -->
<p class="has-primary-color has-text-color has-fraunces-font-family has-heading-md-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1">$1,180</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}},"typography":{"fontSize":"14px","fontWeight":"500","fontStyle":"normal"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/programs" style="border-radius:50px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:14px;font-style:normal;font-weight:500">Enroll →</a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"blockGap":"0px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px"><!-- wp:cover {"url":"<?php echo esc_url( $p2 ); ?>","alt":"Rooted Self-Worth","dimRatio":0,"minHeight":220,"minHeightUnit":"px","contentPosition":"top left","isDark":false,"style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:220px"><img class="wp-block-cover__image-background" alt="Rooted Self-Worth" src="<?php echo esc_url( $p2 ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cred-icon","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"},"blockGap":"0","margin":{"top":"12px","left":"12px","right":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group cred-icon has-white-background-color has-background" style="border-radius:100px;margin-top:12px;margin-right:0;margin-bottom:0;margin-left:12px;padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Confidence</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"1.4","fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-weight:400;line-height:1.4">Rooted Self-Worth</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_clock ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_clock ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">12 weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_calendar ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_calendar ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">12 sessions + workbook</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"caption","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-caption-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.08em;text-transform:capitalize">From</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"heading-md","fontFamily":"fraunces"} -->
<p class="has-primary-color has-text-color has-fraunces-font-family has-heading-md-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1">$1,680</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}},"typography":{"fontSize":"14px","fontWeight":"500","fontStyle":"normal"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/programs" style="border-radius:50px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:14px;font-style:normal;font-weight:500">Enroll →</a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"blockGap":"0px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px"><!-- wp:cover {"url":"<?php echo esc_url( $p3 ); ?>","alt":"Through the Transition","dimRatio":0,"minHeight":220,"minHeightUnit":"px","contentPosition":"top left","isDark":false,"style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:220px"><img class="wp-block-cover__image-background" alt="Through the Transition" src="<?php echo esc_url( $p3 ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cred-icon","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"},"blockGap":"0","margin":{"top":"12px","left":"12px","right":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group cred-icon has-white-background-color has-background" style="border-radius:100px;margin-top:12px;margin-right:0;margin-bottom:0;margin-left:12px;padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-heading-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Life Change</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"1.4","fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-weight:400;line-height:1.4">Through the Transition</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_clock ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_clock ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">10 weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_calendar ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_calendar ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">10 guided sessions</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"caption","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-caption-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.08em;text-transform:capitalize">From</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"heading-md","fontFamily":"fraunces"} -->
<p class="has-primary-color has-text-color has-fraunces-font-family has-heading-md-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1">$1,450</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}},"typography":{"fontSize":"14px","fontWeight":"500","fontStyle":"normal"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/programs" style="border-radius:50px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:14px;font-style:normal;font-weight:500">Enroll →</a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
