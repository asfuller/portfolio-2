<?php
/**
 * Title: front-page
 * Slug: noctiva/front-page
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-chetanvlad-2892619-1024x683.jpg","overlayColor":"custom-background-primary","isUserOverlayColor":true,"sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":[]}} -->
<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-chetanvlad-2892619-1024x683.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-custom-background-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","className":"glow","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull glow"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"},"color":{"text":"#F1F1F1"}},"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group alignfull has-text-color" style="color:#F1F1F1;padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-text-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-custom-text-color-border-color" style="border-width:1px;border-radius:40px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}},"typography":{"fontSize":"16px"}},"textColor":"custom-text-color"} -->
<p class="has-text-align-center has-custom-text-color-color has-text-color has-link-color" style="margin-top:0px;margin-right:0;margin-bottom:0px;margin-left:0;font-size:16px"><?php esc_html_e('Design. Disrupt. Deliver.', 'noctiva');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3","letterSpacing":"-1px","fontWeight":"700","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="font-style:normal;font-weight:700;letter-spacing:-1px;line-height:1.3"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'Build %1$sBold%2$s. Launch Brighter.', 'noctiva' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-text-color-color">', '</mark>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"0"} -->
<div style="height:0" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-text-align-center has-custom-text-color-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('Strategy, creativity, and technology. We build meaningful experiences that connect, inspire, and convert.', 'noctiva');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"15px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"shadow":"none"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);box-shadow:none;font-size:16px;font-style:normal;font-weight:500"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sGet Started%2$s', 'noctiva' ), '<strong>', '</strong>' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-button-outline-hover","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"15px","width":"1px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"shadow":"none"}} -->
<div class="wp-block-button is-style-button-outline-hover"><a class="wp-block-button__link has-white-color has-text-color has-custom-font-size wp-element-button" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);box-shadow:none;font-size:16px;font-style:normal;font-weight:500"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sLet’s Talk%2$s', 'noctiva' ), '<strong>', '</strong>' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"700px","sizeSlug":"full","linkDestination":"none","className":"full-width-image","style":{"border":{"width":"0px","style":"none","radius":"40px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border full-width-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-1.webp" alt="" class="" style="border-style:none;border-width:0px;border-radius:40px;width:auto;height:700px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-1.webp" alt="" class="" style="border-radius:20px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"custom-background-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-background-secondary-background-color has-background" style="border-radius:20px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color"><?php esc_html_e('17+', 'noctiva');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-text-align-center has-custom-text-color-color has-text-color has-link-color"><?php esc_html_e('Years of Experience', 'noctiva');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"custom-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-primary-background-color has-background" style="border-radius:20px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color"><?php esc_html_e('700+', 'noctiva');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-text-align-center has-custom-text-color-color has-text-color has-link-color"><?php esc_html_e('Projects Completed', 'noctiva');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-text-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-custom-text-color-border-color" style="border-width:1px;border-radius:40px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}},"typography":{"fontSize":"16px"}},"textColor":"custom-text-color"} -->
<p class="has-text-align-center has-custom-text-color-color has-text-color has-link-color" style="margin-top:0px;margin-right:0;margin-bottom:0px;margin-left:0;font-size:16px"><?php esc_html_e('Who We Are', 'noctiva');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('We’re Your Creative Partner', 'noctiva');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php esc_html_e('We’re a multidisciplinary team of designers, strategists, and developers turning ideas into digital experiences that matter. From brand identity to scalable platforms, we bring bold thinking and clean execution to every project.', 'noctiva');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"15px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"shadow":"none"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);box-shadow:none;font-size:16px;font-style:normal;font-weight:500"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sR%2$sead More', 'noctiva' ), '<strong>', '</strong>' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"news","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="news" class="wp-block-group news" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('NEWS', 'noctiva');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Stories That Matter', 'noctiva');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":25,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"wide","style":{"border":{"radius":"60px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<hr class="wp-block-separator has-css-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"btn-with-icon","layout":{"type":"default"}} -->
<div class="wp-block-group btn-with-icon"><!-- wp:read-more {"content":"Read More 🡭","className":"hover-read-me"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->