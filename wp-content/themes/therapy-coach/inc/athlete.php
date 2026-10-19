<?php
/** Helpers da adaptação biográfica. Os dados são definidos em dados-atleta.php. */
defined( 'ABSPATH' ) || exit;

function therapy_coach_athlete_data() {
	static $data = null;
	if ( null === $data ) {
		$data = require get_theme_file_path( 'dados-atleta.php' );
	}
	return $data;
}

/** Aceita imagens do tema ou URLs HTTP(S); o campo vazio mantém o espaço reservado. */
function therapy_coach_athlete_image_url( $path ) {
	if ( empty( $path ) ) {
		return '';
	}
	if ( preg_match( '#^https?://#i', $path ) ) {
		return esc_url( $path, array( 'http', 'https' ) );
	}
	return esc_url( get_theme_file_uri( ltrim( $path, '/' ) ) );
}

function therapy_coach_athlete_assets() {
	$css = get_theme_file_path( 'assets/css/athlete.css' );
	wp_enqueue_style( 'therapy-coach-athlete', get_theme_file_uri( 'assets/css/athlete.css' ), array( 'therapy-coach-style' ), filemtime( $css ) );
}
add_action( 'wp_enqueue_scripts', 'therapy_coach_athlete_assets', 20 );

function therapy_coach_athlete_editor_styles() {
	add_editor_style( 'assets/css/athlete.css' );
}
add_action( 'after_setup_theme', 'therapy_coach_athlete_editor_styles' );

function therapy_coach_athlete_body_class( $classes ) {
	$classes[] = 'athlete-theme';
	return $classes;
}
add_filter( 'body_class', 'therapy_coach_athlete_body_class' );

/** Usa o nome preenchido como título da página inicial, sem alterar o banco. */
function therapy_coach_athlete_document_title( $title ) {
	if ( is_front_page() ) {
		$data = therapy_coach_athlete_data();
		$title['title'] = $data['nome'] . ' | Biografia olímpica';
	}
	return $title;
}
add_filter( 'document_title_parts', 'therapy_coach_athlete_document_title' );
