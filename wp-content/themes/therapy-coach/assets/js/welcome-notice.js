/* global therapy_coach_welcome_notice_params, jQuery */
( function ( $ ) {
	'use strict';

	var params = therapy_coach_welcome_notice_params;

	// Dismiss notice.
	$( document ).on( 'click', '.therapy-coach-welcome-notice .notice-dismiss, .therapy-coach-welcome-notice .therapy-coach-dismiss-link', function () {
		$.post( params.ajaxUrl, {
			action: 'therapy_coach_dismiss_welcome_notice',
			nonce:  params.nonce,
		} );
		$( '.therapy-coach-welcome-notice' ).fadeOut( 200 );
	} );

	// Install / Activate AllCoach.
	$( '#therapy-coach-install-allcoach' ).on( 'click', function () {
		var $btn  = $( this );
		var $icon = $btn.find( '.dashicons' );
		var $text = $btn.find( '.text' );

		$btn.prop( 'disabled', true );
		$icon.removeClass( 'hidden' );

		if ( 'installed' === params.allcoachStatus ) {
			$text.text( params.activating );
			window.location.href = params.allcoachActivationUrl;
		} else {
			$text.text( params.installing );
			window.location.href = params.allcoachInstallUrl;
		}
	} );

} )( jQuery );
