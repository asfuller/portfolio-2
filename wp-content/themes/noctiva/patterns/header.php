<?php
/**
 * Title: header
 * Slug: noctiva/header
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} /-->

<!-- wp:site-tagline {"style":{"elements":{"link":{"color":{"text":"#abb7c291"}}},"color":{"text":"#abb7c291"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"menu-fit","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"40px","width":"0px","style":"none"},"color":{"background":"#424242"},"shadow":"var:preset|shadow|sharp"},"layout":{"type":"default"}} -->
<div class="wp-block-group menu-fit has-background" style="border-style:none;border-width:0px;border-radius:40px;background-color:#424242;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--sharp)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayBackgroundColor":"custom-background-primary","overlayTextColor":"custom-text-color","style":{"spacing":{"margin":{"top":"0"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"15px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"shadow":"none"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);box-shadow:none;font-size:16px;font-style:normal;font-weight:500"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sDownload APP%2$s', 'noctiva' ), '<strong>', '</strong>' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->