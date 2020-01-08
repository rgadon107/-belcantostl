<?php
/**
 * Songs' shortcode processing.
 *
 * @package    spiralWebDb\Songs\Shortcode
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GPL-2.0+
 */

namespace spiralWebDb\Songs\Shortcode;

use function spiralWebDb\Songs\Template\get_songs_post_classes;

/**
 * Process the [songs] shortcode.
 *
 * @since 1.0.0
 *
 * @param array $config     Array of runtime configuration parameters
 * @param array $attributes Attributes for this shortcode instance.
 *
 * @return string $html Empty output buffer
 */
function process_songs_shortcode( array $config, array $attributes ) {
	$doing_single = ! empty( $attributes['song_id'] );
	$query        = get_songs_query( $config['query_args'], $attributes );

	// None found. Return the appropriate message.
	if ( ! $query->have_posts() ) {
		$message = $doing_single
			? $config['defaults']['none_found_single']
			: $config['defaults']['none_found'];

		return sprintf( '<p>%s</p>', esc_html( $message ) );
	}

	$songs_count = 0;

	// Call the view file, capture it into the output buffer, and then return it.
	ob_start();

	while ( $query->have_posts() ) {
		$query->the_post();
		$song_id       = (int) get_the_ID();
		$article_classes = $doing_single
			? "post-{$song_id} type-song"
			: get_songs_post_classes( $songs_count, $song_id, array( 'grid-list' ) );

		require __DIR__ . '/views/songs.php';

		$songs_count++;
	}

	$html = ob_get_clean();

	// Reset.
	wp_reset_postdata();

	return $html;
}

/**
 * Get the song's query based on the given attributes and configuration.
 *
 * @since 1.0.0
 *
 * @param array $args Starting query args.
 * @param array $attributes Attributes for this shortcode instance.
 *
 * @return \WP_Query
 */
function get_songs_query( array $args, array $attributes ) {
	if ( ! empty( $attributes['song_id'] ) ) {
		$args['p'] = (int) $attributes['song_id'];
	} else {
		$args['posts_per_page'] = (int) $attributes['number_of_songs'];
	}

	return new \WP_Query( $args );
}
