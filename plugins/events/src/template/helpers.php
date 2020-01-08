<?php
/**
 * Helper functions for the templates and views.
 *
 * @package     spiralWebDb\Events\Template
 * @since       1.0.0
 * @author      Robert A. Gadon
 * @link        http://spiralwebdb.com
 * @license     GNU-2.0+
 */

namespace spiralWebDb\Events\Template;

use function spiralWebDb\Events\render_event_venue_image;
use function spiralWebDb\FAQ\Asset\enqueue_script_ondemand;

/**
 * Render the performance venue thumbnail image before the event title.
 *
 * @since 1.0.0
 *
 * @param int $event_id Optional. Event ID.
 *
 * @return void
 */
function render_post_thumbnail_before_title( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	render_event_venue_image( $event_id );
}

/**
 * Render the event performance community (City, State)
 *
 * @since 1.0.0
 *
 * @return void
 */
function render_the_performance_community( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = get_the_ID( $event_id );
	}

	require dirname( __DIR__ ) . '/views/event-community.php';
}

/**
 * Render the event post title.
 *
 * @since 1.0.0
 *
 * @param int $event_id Optional. Event ID.
 *
 * @return void
 */
function render_event_title( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	require dirname( __DIR__ ) . '/views/event-title.php';
}

/**
 * Render the event performance date and time.
 *
 * @since 1.4.0
 *
 * @param int $event_id The event ID.
 *
 * @return void
 */
function render_performance_date_and_time( $event_id ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	require dirname( __DIR__ ) . '/views/performance-date-time.php';
}

/*
 * Render the Event Google Map link.
 *
 * @since 1.4.0
 *
 * @param int $event_id The event ID.
 *
 * @return void
 */
function render_event_map( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	$event_map_url = (string) get_post_meta( $event_id, 'event-map-url', true );

	require dirname( __DIR__ ) . '/views/event-map.php';
}

/*
 * Render the Event admission information
 *
 * @since 1.5.0
 *
 * @param int $event_id The event ID.
 *
 * @return void
 */
function render_admission_information( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	$admission_text_field = (string) get_post_meta( $event_id, 'admission-text-field', true );

	if ( empty( $admission_text_field ) ) {
		return;
	}

	esc_html( $admission_text_field );

	require dirname( __DIR__ ) . '/views/event-admission.php';
}

/*
 *
 */
function render_supplemental_event_information( $event_id = 0)  {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	$pre_post_concert_info = (string) get_post_meta( $event_id, 'pre-post-concert-info-text-field', true);

	if ( empty( $pre_post_concert_info ) ) {
		return;
	}

	esc_html( $pre_post_concert_info );

	require dirname( __DIR__ ) . '/views/supplemental-event-info.php';

}

/*
 * Render the Event parking information.
 *
 * @since 1.5.0
 *
 * @param int $event_id The event ID.
 *
 * @return void
 */
function render_parking_information( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	$parking_text_field = (string) get_post_meta( $event_id, 'parking-text-field', true );

	if ( empty( $parking_text_field ) ) {
		return;
	}

	esc_html( $parking_text_field );

	require dirname( __DIR__ ) . '/views/event-parking.php';
}

/*
 * Render the Event content.
 *
 * @since 1.5.0
 *
 * @param int $event_id  The event ID.
 *
 * @return void
 */
function render_event_content( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	echo esc_html( the_content( $event_id ) );
}

/*
 * Render the Event sponsor information
 *
 * @since 1.5.0
 *
 * @param int $event_id The event ID.
 *
 * @return void
 */
function render_the_event_sponsor_information( $event_id = 0 ) {
	if ( ! $event_id ) {
		$event_id = (int) get_the_ID();
	}

	$show_icon = esc_attr( 'dashicons dashicons-plus' );
	$hide_icon = esc_attr( 'dashicons dashicons-minus' );

	enqueue_script_ondemand();

	require dirname( __DIR__ ) . '/views/event-sponsor.php';
}
