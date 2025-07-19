<?php
/**
 * Title: 404
 * Slug: noctiva/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","className":"glow-left","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group glow-left" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"200px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="font-size:200px"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( '4%1$s0%2$s4', 'noctiva' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-text-color-color">', '</mark>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$sOops. That Page Missed the Brief.%3$s%4$s', 'noctiva' ), '<strong>', '<strong>', '</strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Looks like this idea didn’t make it past brainstorming. Head back and explore what %1$sdid%2$s make the cut.', 'noctiva' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"15px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"shadow":"none"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/" style="border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);box-shadow:none;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Take Me Home', 'noctiva');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->