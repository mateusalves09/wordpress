<?php
/**
 * Title: Header
 * Slug: therapy-coach/header
 * Categories: therapy-coach
 * Block Types: core/template-part/header
 */
$logo = esc_url( get_template_directory_uri() . '/assets/images/icons/leaf.svg' );
?>
<!-- wp:group {"tagName":"header","metadata":{"categories":["therapy-coach"],"patternName":"therapy-coach/header","name":"Header"},"align":"full","className":"site-header","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}},"zIndex":100},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"1200px"}} -->
<header class="wp-block-group alignfull site-header has-white-background-color has-background" style="border-bottom-color:var(--wp--preset--color--rule);border-bottom-style:solid;border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:18px;padding-bottom:18px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","right":"9px","bottom":"8px","left":"9px"},"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:50%;padding-top:8px;padding-right:9px;padding-bottom:8px;padding-left:9px"><!-- wp:image {"url":"<?php echo esc_url( $logo ); ?>","width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"logo-icon","style":{"spacing":{"margin":{"top":"-5px","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full is-resized logo-icon" style="margin-top:-5px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( $logo ); ?>" alt="" style="object-fit:contain;width:20px;height:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"18px","fontWeight":"400","textDecoration":"none","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"fraunces"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"paragraph-text","className":"header-nav","style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"spacing":{"blockGap":"28px"}},"fontSize":"body-sm","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#"} /-->

<!-- wp:navigation-link {"label":"About","url":"#"} /-->

<!-- wp:navigation-link {"label":"Programs","url":"#"} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->

<!-- /wp:navigation -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-text","className":"is-style-outline","style":{"border":{"radius":"50px","color":"var:preset|color|rule","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"typography":{"fontSize":"14px","fontWeight":"500","fontStyle":"normal","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-heading-text-color has-text-color has-link-color has-border-color has-custom-font-size wp-element-button" href="#" style="border-color:var(--wp--preset--color--rule);border-width:1px;border-radius:50px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30);font-size:14px;font-style:normal;font-weight:500;line-height:1.2">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"typography":{"fontSize":"14px","fontWeight":"500","fontStyle":"normal","lineHeight":"1.4"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:50px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30);font-size:14px;font-style:normal;font-weight:500;line-height:1.4">Book Discovery Call</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
