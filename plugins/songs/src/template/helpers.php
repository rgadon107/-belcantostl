<?php
/**
 * Helper functions for the templates and views.
 *
 * @package     spiralWebDb\Songs\Template
 * @since       1.0.0
 * @author      Robert A. Gadon
 * @link        http://spiralwebdb.com
 * @license     GNU-2.0+
 */

namespace spiralWebDb\Songs\Template;

/**
 * Get the article's classes.
 *
 * @since 1.0.0
 *
 * @param int   $songs_count This song's spot in the grid.
 * @param int   $song_id     Optional. The song ID.
 * @param array $classes     Optional. Starting classes to add new classes to.
 *
 * @return string
 */
function get_songs_post_classes( $songs_count, $song_id = 0, array $classes = array() ) {
	$classes[] = "post-{$song_id}";
	$classes[] = 'type-songs';
	$classes[] = 'one-half';
	if ( $songs_count % 2 === 0 ) {
		$classes[] = 'first';
	}

	return implode( ' ', $classes );
}

/**
 * Render the song post title and it's taxonomy term.
 *
 * @since 1.0.0
 *
 * @param int $song_id Optional. The song ID.
 * @param
 *
 * @return void
 */
function render_song_title( $song_id = 0 ) {
	if ( ! $song_id ) {
		$song_id = (int) get_the_ID();
	}

	require dirname( __DIR__ ) . '/views/song-title.php';
}

/**
 * Render the song taxonomy term.
 *
 * @since 1.0.0
 *
 * @param int $song_id Optional. The song ID.
 *
 * @return string $vocal_parts  The taxonomy term name.
 */
function render_song_taxonomy_term( $song_id ) {
	$vocal_parts = wp_get_post_terms( (int) $song_id, 'vocal_part', array( 'fields' => 'names' ) );

	if ( ! empty( 'vocal_part' ) && ! is_wp_error( 'vocal_part' ) ) {
		$vocal_parts = implode( ', ', $vocal_parts );

		return esc_html( $vocal_parts );
	}
}
