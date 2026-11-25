<?php
/**
 * Front-end assets and language metadata for native Group blocks.
 *
 * @package Spider_Biografia
 */

add_action( 'after_setup_theme', function () {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'spider-biografia', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'spider-biografia', get_theme_file_uri( 'assets/spider.js' ), array(), wp_get_theme()->get( 'Version' ), array( 'strategy' => 'defer', 'in_footer' => true ) );
} );

add_filter( 'render_block_core/group', function ( $content, $block ) {
	$classes = explode( ' ', $block['attrs']['className'] ?? '' );
	if ( in_array( 'spider-content', $classes, true ) ) {
		$markup = new WP_HTML_Tag_Processor( $content );
		if ( $markup->next_tag() ) {
			$markup->set_attribute( 'tabindex', '-1' );
			return $markup->get_updated_html();
		}
	}

	foreach ( array( 'pt-BR', 'en' ) as $language ) {
		if ( in_array( 'spider-locale-' . $language, $classes, true ) ) {
			$markup = new WP_HTML_Tag_Processor( $content );
			if ( $markup->next_tag() ) {
				$markup->set_attribute( 'lang', $language );
				return $markup->get_updated_html();
			}
		}
	}
	return $content;
}, 10, 2 );
