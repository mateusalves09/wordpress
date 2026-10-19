<?php

/**
 * Therapy Coach Theme
 *
 * @package TherapyCoach
 */

use TherapyCoach\Assets_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

! defined( 'THERAPY_COACH_THEME_FILE' ) && define( 'THERAPY_COACH_THEME_FILE', __FILE__ );

if ( file_exists( get_theme_file_path( 'vendor/autoload.php' ) ) ) {
	require_once get_theme_file_path( 'vendor/autoload.php' );
}

require_once get_theme_file_path( 'inc/constants.php' );
require_once get_theme_file_path( 'inc/admin.php' );

require_once get_theme_file_path( 'inc/theme-setup.php' );
require_once get_theme_file_path( 'inc/register_block_patterns.php' );
require_once get_theme_file_path( 'inc/assets-manager.php' );
require_once get_theme_file_path( 'inc/athlete.php' );

/**
 * Theme setup
 */
if ( ! function_exists( 'therapy_coach_setup' ) ) {
	function therapy_coach_setup() {
		load_theme_textdomain( 'therapy-coach', get_template_directory() . '/languages' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
	}
}

add_action( 'after_setup_theme', 'therapy_coach_setup' );

/**
 * Enqueue theme stylesheet
 */
function therapy_coach_enqueue_styles() {
	wp_enqueue_style(
		'therapy-coach-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
}

add_action( 'wp_enqueue_scripts', 'therapy_coach_enqueue_styles' );

/**
 * Enqueue navigation active-state script
 */
function therapy_coach_enqueue_scripts() {
	$file_path = get_template_directory() . '/assets/js/navigation.js';
	wp_enqueue_script(
		'therapy-coach-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		file_exists( $file_path ) ? filemtime( $file_path ) : null,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'therapy_coach_enqueue_scripts' );

/**
 * Provide default logo when none is set
 */
function therapy_coach_get_custom_logo( $html ) {
	if ( ! empty( $html ) ) {
		return $html;
	}

	$default_logo_filename = 'fse-theme-logo.png';
	$default_logo_url      = Assets_Manager::get_image_url( $default_logo_filename );

	if ( file_exists( get_template_directory() . '/assets/images/' . $default_logo_filename ) ) {
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home" aria-label="%3$s">
				<img src="%2$s" class="custom-logo" alt="%3$s" width="200" height="80" />
			</a>',
			esc_url( home_url( '/' ) ),
			esc_url( $default_logo_url ),
			esc_attr( get_bloginfo( 'name' ) )
		);
	} else {
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link site-title-fallback" rel="home">%2$s</a>',
			esc_url( home_url( '/' ) ),
			esc_html( get_bloginfo( 'name' ) )
		);
	}

	return $html;
}

add_filter( 'get_custom_logo', 'therapy_coach_get_custom_logo' );


/**
 * Provide a default fallback tagline if the site tagline is empty.
 */
function therapy_coach_default_tagline( $blogdescription ) {
	if ( empty( trim( $blogdescription ) ) ) {
		return __( 'Uma trajetória de dedicação ao esporte e aos Jogos Olímpicos.', 'therapy-coach' );
	}
	return $blogdescription;
}
add_filter( 'option_blogdescription', 'therapy_coach_default_tagline' );

/**
 * Output skip-to-content link immediately after <body> opens.
 */
function therapy_coach_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#wp--skip-link--target">' . esc_html__( 'Pular para o conteúdo', 'therapy-coach' ) . '</a>';
}
add_action( 'wp_body_open', 'therapy_coach_skip_link' );
