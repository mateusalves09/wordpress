<?php
/**
 * Title: About – Intro
 * Slug: therapy-coach/about-intro
 * Categories: therapy-coach
 */
$img   = get_template_directory_uri() . '/assets/images/';
$coach = esc_url( $img . 'about-intro.webp' );
?>
<!-- wp:group {"metadata":{"categories":["therapy-coach"],"patternName":"therapy-coach/about-intro","name":"About – Intro"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-light","layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","className":"is-layout-flex","style":{"spacing":{"blockGap":{"top":"48px","left":"clamp(48px,6vw,80px)"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-layout-flex"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"16px"}}},"textColor":"primary","fontSize":"caption","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-inter-font-family has-caption-font-size" style="margin-top:0;margin-bottom:16px;font-style:normal;font-weight:500;letter-spacing:0.14em;text-transform:uppercase">About</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"400","lineHeight":"1.2","fontSize":"48px"},"spacing":{"margin":{"top":"0","bottom":"24px"}}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family" style="margin-top:0;margin-bottom:24px;font-size:48px;font-weight:400;line-height:1.2">I built TherapyCoach because therapy should feel human</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"body-lg","fontFamily":"inter"} -->
<p class="has-paragraph-text-color has-text-color has-inter-font-family has-body-lg-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.65">After twelve years in private clinical practice, I wanted to bring the depth of traditional therapy into a modern coaching format — guided, structured, and held with the same care I'd offer in my office.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"url":"<?php echo esc_url( $coach ); ?>","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $coach ); ?>" alt="" style="border-radius:16px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
