<?php
/**
 * Title: Credentials
 * Slug: therapy-coach/credentials
 * Categories: therapy-coach
 */
$icon_url   = get_template_directory_uri() . '/assets/images/icons/';
$icon_award = esc_url( $icon_url . 'award.svg' );
$icon_brain = esc_url( $icon_url . 'brain.svg' );
$icon_users = esc_url( $icon_url . 'users.svg' );
$icon_check = esc_url( $icon_url . 'circle-check.svg' );
?>
<!-- wp:group {"metadata":{"patternName":"therapy-coach/credentials","name":"Credentials","categories":["therapy-coach"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"primary","fontSize":"caption"} -->
<p class="has-text-align-center has-primary-color has-text-color has-caption-font-size" style="margin-bottom:16px;font-style:normal;font-weight:500;letter-spacing:0.14em;text-transform:uppercase">MEET YOUR THERAPIST</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"400","lineHeight":"1.15","textAlign":"center","fontSize":"36px"},"spacing":{"margin":{"top":"0","bottom":"48px"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:48px;font-size:36px;font-weight:400;line-height:1.15">Background, training, and the rooms<br>I've practiced in</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"is-layout-flex","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
<div class="wp-block-columns is-layout-flex"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"26px","topRight":"26px","bottomLeft":"26px","bottomRight":"26px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"28px","right":"28px"},"blockGap":"20px"}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:26px;border-top-right-radius:26px;border-bottom-left-radius:26px;border-bottom-right-radius:26px;padding-top:32px;padding-right:28px;padding-bottom:32px;padding-left:28px"><!-- wp:image {"url":"<?php echo esc_url( $icon_award ); ?>","width":"28px","height":"28px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-icon-img","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full is-resized service-icon-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_award ); ?>" alt="" style="object-fit:cover;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","fontSize":"20px"},"spacing":{"margin":{"top":"16px","bottom":"12px"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:16px;margin-bottom:12px;font-size:20px;font-weight:400">Certifications</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_check ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_check ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">LMHC — State of Oregon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_check ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_check ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">ICF Certified Coach (PCC)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_check ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_check ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Trauma-Informed Care, Level II</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"url":"<?php echo esc_url( $icon_check ); ?>","sizeSlug":"full","linkDestination":"none","className":"cred-check-icon","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full cred-check-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_check ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">EMDR Trained (2020)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"26px","topRight":"26px","bottomLeft":"26px","bottomRight":"26px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"28px","right":"28px"},"blockGap":"20px"}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:26px;border-top-right-radius:26px;border-bottom-left-radius:26px;border-bottom-right-radius:26px;padding-top:32px;padding-right:28px;padding-bottom:32px;padding-left:28px"><!-- wp:image {"url":"<?php echo esc_url( $icon_brain ); ?>","width":"28px","height":"28px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-icon-img","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full is-resized service-icon-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_brain ); ?>" alt="" style="object-fit:cover;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","fontSize":"20px"},"spacing":{"margin":{"top":"16px","bottom":"12px"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:16px;margin-bottom:12px;font-size:20px;font-weight:400">Specializations</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-top:12px"><!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Anxiety</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Grief</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Relationships</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Self-worth</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Burnout</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Identity</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400">Parenthood</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"26px","topRight":"26px","bottomLeft":"26px","bottomRight":"26px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"28px","right":"28px"},"blockGap":"20px"}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:26px;border-top-right-radius:26px;border-bottom-left-radius:26px;border-bottom-right-radius:26px;padding-top:32px;padding-right:28px;padding-bottom:32px;padding-left:28px"><!-- wp:image {"url":"<?php echo esc_url( $icon_users ); ?>","width":"28px","height":"28px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-icon-img","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full is-resized service-icon-img" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $icon_users ); ?>" alt="" style="object-fit:cover;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","fontSize":"20px"},"spacing":{"margin":{"top":"16px","bottom":"12px"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:16px;margin-bottom:12px;font-size:20px;font-weight:400">Memberships</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">American Counseling Association</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">International Coaching Federation</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">Oregon Mental Health Counselors Assn.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">EMDR International Association</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":{"topLeft":"26px","topRight":"26px","bottomLeft":"26px","bottomRight":"26px"},"color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"24px","margin":{"top":"20px"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-top-left-radius:26px;border-top-right-radius:26px;border-bottom-left-radius:26px;border-bottom-right-radius:26px;margin-top:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-weight:400;line-height:1.2">Experience timeline</h3>
<!-- /wp:heading -->

<!-- wp:columns {"className":"is-layout-flex","style":{"spacing":{"blockGap":{"top":"16px","left":"0px"},"margin":{"top":"8px"}}}} -->
<div class="wp-block-columns is-layout-flex" style="margin-top:8px"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:html -->
<div style="display:flex;align-items:center;margin-bottom:10px"><span style="width:10px;height:10px;border-radius:50%;background:var(--wp--preset--color--primary);flex-shrink:0;display:block;"></span><div style="flex:1;height:1px;background:color-mix(in oklab,var(--wp--preset--color--primary) 30%,transparent);margin-left:4px;"></div></div>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"textColor":"heading-text","fontSize":"body-lg","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-body-lg-font-size" style="margin-top:0;margin-bottom:4px;font-style:normal;font-weight:400;line-height:1.2">2012</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5">MA in Clinical Psychology,<br>Columbia</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:html -->
<div style="display:flex;align-items:center;margin-bottom:10px"><span style="width:10px;height:10px;border-radius:50%;background:var(--wp--preset--color--primary);flex-shrink:0;display:block;"></span><div style="flex:1;height:1px;background:color-mix(in oklab,var(--wp--preset--color--primary) 30%,transparent);margin-left:4px;"></div></div>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"textColor":"heading-text","fontSize":"body-lg","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-body-lg-font-size" style="margin-top:0;margin-bottom:4px;font-style:normal;font-weight:400;line-height:1.2">2014</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5">Licensed (LMHC), private practice begins</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:html -->
<div style="display:flex;align-items:center;margin-bottom:10px"><span style="width:10px;height:10px;border-radius:50%;background:var(--wp--preset--color--primary);flex-shrink:0;display:block;"></span><div style="flex:1;height:1px;background:color-mix(in oklab,var(--wp--preset--color--primary) 30%,transparent);margin-left:4px;"></div></div>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"textColor":"heading-text","fontSize":"body-lg","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-body-lg-font-size" style="margin-top:0;margin-bottom:4px;font-style:normal;font-weight:400;line-height:1.2">2018</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5">ICF Certified Coach, trauma-informed training</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:html -->
<div style="display:flex;align-items:center;margin-bottom:10px"><span style="width:10px;height:10px;border-radius:50%;background:var(--wp--preset--color--primary);flex-shrink:0;display:block;"></span><div style="flex:1;height:1px;background:color-mix(in oklab,var(--wp--preset--color--primary) 30%,transparent);margin-left:4px;"></div></div>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"textColor":"heading-text","fontSize":"body-lg","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-body-lg-font-size" style="margin-top:0;margin-bottom:4px;font-style:normal;font-weight:400;line-height:1.2">2021</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5">Founder, TherapyCoach</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:html -->
<div style="display:flex;align-items:center;margin-bottom:10px"><span style="width:10px;height:10px;border-radius:50%;background:var(--wp--preset--color--primary);flex-shrink:0;display:block;"></span></div>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"textColor":"heading-text","fontSize":"body-lg","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-body-lg-font-size" style="margin-top:0;margin-bottom:4px;font-style:normal;font-weight:400;line-height:1.2">2024</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-sm","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-sm-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5">1,200+ clients served across 14 states</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
