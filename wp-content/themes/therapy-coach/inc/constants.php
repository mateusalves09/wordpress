<?php
/**
 * Constants class.
 *
 * @package TherapyCoach
 * @since 1.0.0
 */

namespace TherapyCoach;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Constants class.
 */
class Constants {

	/**
	 * Product key for the theme.
	 *
	 * @var string
	 */
	const PRODUCT_KEY = 'therapy_coach';

	/**
	 * Product slug for the theme.
	 *
	 * @var string
	 */
	const PRODUCT_SLUG = 'therapy-coach';

	/**
	 * Cache keys used throughout the theme.
	 *
	 * @var array
	 */
	const CACHE_KEYS = array(
		'dismissed-welcome-notice' => 'therapy_coach_dismissed_welcome_notice',
	);

	/**
	 * Text domain for the theme.
	 *
	 * @var string
	 */
	const TEXT_DOMAIN = 'therapy-coach';
}
