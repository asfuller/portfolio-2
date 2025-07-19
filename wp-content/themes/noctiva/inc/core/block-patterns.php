<?php

/**
 * noctiva: Block Patterns
 *
 * @since noctiva 1.0.0
 */

/**
 * Registers pattern categories for noctiva
 *
 * @since noctiva 1.0.0
 *
 * @return void
 */
function noctiva_register_pattern_category()
{
	$block_pattern_categories = array(
		'noctiva' => array('label' => __('Noctiva', 'noctiva')),
	);

	$block_pattern_categories = apply_filters('noctiva_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'noctiva_register_pattern_category', 9);
