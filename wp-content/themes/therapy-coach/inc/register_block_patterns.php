<?php
/**
 * Block patterns
 *
 * @package therapy-coach
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block patterns.
 *
 * @since 1.0.0
 * @package therapy-coach
 */
function therapy_coach_register_block_patterns() {

	/**
	 * Block pattern categories.
	 *
	 * @since 1.0.0
	 * @package therapy-coach
	 */
	$block_pattern_categories = apply_filters(
		'therapy_coach_block_pattern_categories',
		array(
			'therapy-coach' => array( 'label' => __( 'Therapy Coach', 'therapy-coach' ) ),
		)
	);

	// Register pattern categories.
	if ( ! empty( $block_pattern_categories ) ) {
		foreach ( $block_pattern_categories as $category_name => $category_properties ) {
			register_block_pattern_category(
				$category_name,
				$category_properties
			);
		}
	}

}

add_action( 'init', 'therapy_coach_register_block_patterns' );