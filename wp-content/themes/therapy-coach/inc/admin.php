<?php
/**
 * Admin class.
 *
 * @package TherapyCoach
 * @since 1.0.0
 */

namespace TherapyCoach;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin class.
 */
class Admin {

	/**
	 * Admin constructor.
	 */
	public function __construct() {
		$this->setup_admin_hooks();
		$this->add_install_time();
	}

	/**
	 * Add the installation time.
	 * This is needed here while the SDK is not available.
	 * Once the SDK is available, this can safely be removed.
	 *
	 * @return void
	 */
	private function add_install_time() {
		$install = get_option( Constants::PRODUCT_KEY . '_install', 0 );
		if ( 0 === $install ) {
			update_option( Constants::PRODUCT_KEY . '_install', time() );
		}
	}

	/**
	 * Setup admin hooks.
	 *
	 * @return void
	 */
	public function setup_admin_hooks() {
		add_action( 'admin_notices', array( $this, 'render_welcome_notice' ), 0 );
		add_action( 'admin_enqueue_scripts', array( $this, 'register_internal_page' ) );
		add_action( 'wp_ajax_therapy_coach_dismiss_welcome_notice', array( $this, 'remove_welcome_notice' ) );
	}

	/**
	 * Render the welcome notice.
	 *
	 * @return void
	 */
	public function render_welcome_notice() {
		if ( ! $this->should_show_welcome_notice() ) {
			return;
		}

		$allcoach_status = $this->get_allcoach_status();

		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['welcome-notice'], 'welcome-notice' );
		Assets_Manager::enqueue_script(
			Assets_Manager::ASSETS_SLUGS['welcome-notice'],
			'welcome-notice',
			true,
			array(),
			array(
				'nonce'               => wp_create_nonce( 'therapy-coach-dismiss-welcome-notice' ),
				'ajaxUrl'             => esc_url( admin_url( 'admin-ajax.php' ) ),
				'allcoachStatus'      => $allcoach_status,
				'allcoachActivationUrl' => esc_url(
					add_query_arg(
						array(
							'plugin_status' => 'all',
							'paged'         => '1',
							'action'        => 'activate',
							'plugin'        => rawurlencode( 'allcoach/allcoach.php' ),
							'_wpnonce'      => wp_create_nonce( 'activate-plugin_allcoach/allcoach.php' ),
						),
						admin_url( 'plugins.php' )
					)
				),
				'allcoachInstallUrl'  => esc_url(
					add_query_arg(
						array(
							'action'   => 'install-plugin',
							'plugin'   => 'allcoach',
							'_wpnonce' => wp_create_nonce( 'install-plugin_allcoach' ),
						),
						admin_url( 'update.php' )
					)
				),
				'allcoachRedirectUrl' => esc_url( admin_url( 'admin.php?page=allcoach' ) ),
				'activating'          => __( 'Activating', 'therapy-coach' ) . '&hellip;',
				'installing'          => __( 'Installing', 'therapy-coach' ) . '&hellip;',
				'done'                => __( 'Done', 'therapy-coach' ),
			)
		);

		$notice_html  = '<div class="notice notice-info therapy-coach-welcome-notice">';
		$notice_html .= '<button type="button" class="notice-dismiss"><span class="screen-reader-text">' . esc_html__( 'Dismiss', 'therapy-coach' ) . '</span></button>';
		$notice_html .= '<div class="notice-content">';
		$notice_html .= '<div class="notice-copy">';

		$notice_html .= '<h2 class="notice-subtitle">';
		$notice_html .= '<img class="notice-subtitle-icon" src="' . esc_url( Assets_Manager::get_image_url( 'all-coach.png' ) ) . '" alt="AllCoach" />';
		$notice_html .= __( 'This theme works best with AllCoach', 'therapy-coach' );
		$notice_html .= '</h2>';

		$notice_html .= '<h1 class="notice-title">';
		/* translators: %s: AllCoach */
		$notice_html .= sprintf( __( 'Run Your Therapy & Coaching Practice with %s', 'therapy-coach' ), '<span>AllCoach</span>' );
		$notice_html .= '</h1>';

		$notice_html .= '<p class="description">' . __( 'The all-in-one plugin for therapists and coaches. Programs, session booking, client portals, and checkout — all free, all from your WordPress dashboard.', 'therapy-coach' ) . '</p>';
		$notice_html .= '<p class="description"><span class="dashicons dashicons-yes"></span><strong>' . __( 'All-in-one practice platform', 'therapy-coach' ) . '</strong> &mdash; ' . __( 'programs, bookings, payments, and a client portal built into WordPress', 'therapy-coach' ) . '</p>';
		$notice_html .= '<p class="description"><span class="dashicons dashicons-yes"></span><strong>' . __( 'Google Meet auto-generated', 'therapy-coach' ) . '</strong> &mdash; ' . __( 'session links created instantly, no manual work', 'therapy-coach' ) . '</p>';
		$notice_html .= '<p class="description"><span class="dashicons dashicons-yes"></span><strong>' . __( 'Sell programs directly', 'therapy-coach' ) . '</strong> &mdash; ' . __( 'built-in checkout, no WooCommerce or external store needed', 'therapy-coach' ) . '</p>';

		$notice_html .= '<div class="actions">';

		$notice_html .= '<button id="therapy-coach-install-allcoach" class="button button-primary button-hero">';
		$notice_html .= '<span class="text">';
		$notice_html .= 'installed' === $allcoach_status ?
			/* translators: %s: AllCoach */
			sprintf( __( 'Activate %s', 'therapy-coach' ), 'AllCoach' ) :
			/* translators: %s: AllCoach */
			sprintf( __( 'Install & Activate %s', 'therapy-coach' ), 'AllCoach' );
		$notice_html .= '</span>';
		$notice_html .= '</button>';

		$notice_html .= '<a href="https://allcoach.io" target="_blank" class="button button-secondary button-hero">';
		$notice_html .= '<span>' . __( 'Learn More', 'therapy-coach' ) . '</span>';
		$notice_html .= '<span class="dashicons dashicons-external nc-link-icon"></span>';
		$notice_html .= '</a>';

		$notice_html .= '<button type="button" class="button-link therapy-coach-dismiss-link">' . __( 'Dismiss', 'therapy-coach' ) . '</button>';

		$notice_html .= '</div>';
		$notice_html .= '</div>';

		$notice_html .= '<img class="all-coach-preview" src="' . esc_url( Assets_Manager::get_image_url( 'all-coach-notice.png' ) ) . '" alt="' . esc_attr__( 'AllCoach preview', 'therapy-coach' ) . '"/>';
		$notice_html .= '</div>';
		$notice_html .= '</div>';

		echo wp_kses_post( $notice_html );
	}

	/**
	 * Dismiss the welcome notice.
	 *
	 * @return void
	 */
	public function remove_welcome_notice() {
		if ( ! isset( $_POST['nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'therapy-coach-dismiss-welcome-notice' ) ) {
			return;
		}
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( -1, 403 );
		}
		update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );
		wp_die();
	}

	/**
	 * Should we show the welcome notice?
	 *
	 * @return bool
	 */
	private function should_show_welcome_notice(): bool {
		if ( is_plugin_active( 'allcoach/allcoach.php' ) ) {
			return false;
		}

		if ( 'yes' === get_option( Constants::CACHE_KEYS['dismissed-welcome-notice'] ) ) {
			return false;
		}

		$screen = get_current_screen();

		if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
			return false;
		}

		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return false;
		}

		if ( is_network_admin() ) {
			return false;
		}

		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		if ( ! current_user_can( 'install_plugins' ) ) {
			return false;
		}

		if ( $screen->is_block_editor() ) {
			return false;
		}

		return true;
	}

	/**
	 * Get the AllCoach plugin status.
	 *
	 * @return string
	 */
	private function get_allcoach_status(): string {
		if ( is_plugin_active( 'allcoach/allcoach.php' ) ) {
			return 'active';
		}

		if ( file_exists( ABSPATH . 'wp-content/plugins/allcoach/allcoach.php' ) ) {
			return 'installed';
		}

		return 'not-installed';
	}

	/**
	 * Register internal pages.
	 *
	 * @return void
	 */
	public function register_internal_page() {
		$screen = get_current_screen();

		if ( 'dashboard' !== $screen->id && 'themes' !== $screen->id ) {
			return;
		}

		do_action( 'themegrill_internal_page', Constants::PRODUCT_SLUG, $screen->id );
	}
}

// Initialize Admin class.
new Admin();
