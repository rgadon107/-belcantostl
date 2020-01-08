<?php
/**
 *  Customize the post Admin title area.
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

add_filter( 'enter_title_here', __NAMESPACE__ . '\change_title_placeholder_text' );
/**
 *  Filter the placeholder text for the post title.
 *
 * @since 1.0.0
 *
 * @param string $text Placeholder text. WordPress default 'Enter title here'.
 *
 * @return string $text
 */
function change_title_placeholder_text( $text ) {
	if ( 'songs' == get_post_type() ) {
		$text = esc_html( 'Enter song title.' );
	}

	return $text;
}

add_action( 'edit_form_before_permalink', __NAMESPACE__ . '\add_description_beneath_post_title' );
/**
 *  Add description beneath post title custom field.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_description_beneath_post_title() {
	if ( 'songs' == get_post_type() ) {

		echo sprintf( '<span class="description">%s</span>',
			'Enter the song title in the field above. 
			In the content field below, add the song from the Media library.' );
	}
}