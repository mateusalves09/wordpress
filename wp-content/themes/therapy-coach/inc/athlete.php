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
		$screens = therapy_coach_athlete_screens();
		$title['title'] = $data['nome'] . ' | ' . $screens[ therapy_coach_athlete_screen() ]['label'];
	}
	return $title;
}
add_filter( 'document_title_parts', 'therapy_coach_athlete_document_title' );

/** Telas virtuais: dispensam criar páginas ou alterar as regras de permalink. */
function therapy_coach_athlete_screens() {
 return array(
  'inicio' => array( 'label' => 'Visão geral', 'title' => 'O perfil', 'intro' => 'Conheça uma trajetória de dedicação ao esporte.' ),
  'biografia' => array( 'label' => 'Biografia', 'title' => 'Além da linha de chegada.', 'intro' => 'As origens, os desafios e a pessoa por trás das conquistas.' ),
  'trajetoria' => array( 'label' => 'Trajetória', 'title' => 'Cada ano, um novo capítulo.', 'intro' => 'Explore os momentos que transformaram uma promessa em referência.' ),
  'conquistas' => array( 'label' => 'Conquistas', 'title' => 'Segundos que ficaram para sempre.', 'intro' => 'Medalhas, marcas e os detalhes por trás dos recordes.' ),
  'legado' => array( 'label' => 'Legado', 'title' => 'A corrida continua fora das pistas.', 'intro' => 'O impacto de uma trajetória que atravessa gerações.' ),
 );
}

function therapy_coach_athlete_screen() {
 // Lido também ao registrar padrões, antes de a consulta do WordPress existir.
 $value = isset( $_GET['perfil'] ) && is_string( $_GET['perfil'] ) ? sanitize_key( wp_unslash( $_GET['perfil'] ) ) : '';
 $screens = therapy_coach_athlete_screens();
 return isset( $screens[ $value ] ) ? $value : 'inicio';
}

function therapy_coach_athlete_screen_url( $screen = 'inicio' ) {
 $screens = therapy_coach_athlete_screens();
 return 'inicio' === $screen || ! isset( $screens[ $screen ] ) ? home_url( '/' ) : add_query_arg( 'perfil', $screen, home_url( '/' ) );
}

function therapy_coach_render_athlete_profile() {
 $athlete = therapy_coach_athlete_data();
 ob_start();
 require get_theme_file_path( 'inc/athlete-biography.php' );
 return ob_get_clean();
}

function therapy_coach_register_athlete_profile() {
 register_block_type( 'therapy-coach/athlete-profile', array( 'api_version' => 3, 'render_callback' => 'therapy_coach_render_athlete_profile' ) );
}
add_action( 'init', 'therapy_coach_register_athlete_profile' );

function therapy_coach_athlete_canonical( $url ) {
 return is_front_page() ? therapy_coach_athlete_screen_url( therapy_coach_athlete_screen() ) : $url;
}
add_filter( 'get_canonical_url', 'therapy_coach_athlete_canonical' );
