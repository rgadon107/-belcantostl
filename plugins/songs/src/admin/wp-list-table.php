<?php
/**
 * Custom columns for the Members post type.
 *
 * @package    spiralWebDb\Songs
 *
 * @since      1.0.0
 *
 * @author     Robert A. Gadon
 *
 * @link       http://spiralwebdb.com
 *
 * @license    GNU General Public License 2.0+
 */

namespace spiralWebDb\Songs;

add_filter( 'manage_songs_posts_columns', __NAMESPACE__ . '\set_custom_columns' );
/**
 * Add custom columns to Members Admin.
 *
 * @since 1.0.0
 *
 * @return array Array of columns.
 */
function set_custom_columns() {
	return array(
		'cb'         => '<input type="checkbox"/>',
		'title'      => 'Song Title',
		'song_id'    => 'Song ID',
		'vocal_part' => 'Vocal Part',
		'menu_order' => 'Order Number',
	);
}

add_action( 'manage_songs_posts_custom_column', __NAMESPACE__ . '\_render_custom_column_content', 10, 2 );
/**
 *  Display the content for each custom column.
 *
 * @since 1.0.0
 *
 * @param string $column_name The name of the column to display.
 * @param int    $song_id     The current song (post) ID.
 */
function _render_custom_column_content( $column_name, $song_id ) {
	switch ( $column_name ) {
		case 'song_id':
			echo (int) $song_id;
			break;
		case 'vocal_part':
			$vocal_parts = wp_get_post_terms( $song_id, 'vocal_part', array( 'fields' => 'names' ) );
			if ( ! empty( 'vocal_part' ) && ! is_wp_error( 'vocal_part' ) ) {
				$vocal_parts = implode( ', ', $vocal_parts );
				echo esc_html( $vocal_parts );
			}
			break;
		case 'menu_order':
			echo (int) get_post_field( 'menu_order', $song_id );
			break;
	}
}

add_filter( 'manage_edit-songs_sortable_columns', __NAMESPACE__ . '\_set_sortable_columns' );
/**
 * Set sortable columns on Song Admin page.
 *
 * @since 1.0.0
 *
 * @return array New sortable columns.
 */
function _set_sortable_columns() {
	return array(
		'title'      => 'Song Title',
		'song_id'    => 'Song ID',
		'vocal_part' => 'Vocal Part',
		'menu_order' => 'Order Number',
	);
}
