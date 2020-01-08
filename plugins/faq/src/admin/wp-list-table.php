<?php
/**
 *  Custom columns for the FAQ post type.
 *
 * @package    spiralWebDb\FAQ
 *
 * @since      1.0.0
 *
 * @author     Robert A. Gadon
 *
 * @link       http://spiralwebdb.com
 *
 * @license    GNU General Public License 2.0+
 */

namespace spiralWebDb\FAQ;

add_filter( 'manage_faq_posts_columns', __NAMESPACE__ . '\set_custom_columns' );
/**
 * Add custom columns to the FAQ plugin admin.
 *
 * @since 1.0.0
 *
 * @return array Array of columns.
 */
function set_custom_columns() {
	return array(
		'cb'         => '<input type="checkbox"/>',
		'title'      => 'FAQ Title',
		'post_id'    => 'Post ID',
		'menu_order' => 'Order Number',
	);
}

add_action( 'manage_faq_posts_custom_column', __NAMESPACE__ . '\_render_custom_column_content', 10, 2 );
/**
 *  Display the content for each custom column.
 *
 * @since 1.0.0
 *
 * @param string $column_name The name of the column to display.
 * @param int    $post_id     The current post ID.
 */
function _render_custom_column_content( $column_name, $post_id ) {
	switch ( $column_name ) {
		case 'post_id':
			echo (int) $post_id;
			break;
		case 'menu_order':
			echo (int) get_post_field( 'menu_order', $post_id );
			break;
	}
}

add_filter( 'manage_edit-events_sortable_columns', __NAMESPACE__ . '\_set_sortable_columns' );
/**
 * Set sortable columns on FAQ admin page.
 *
 * @since 1.0.0
 *
 * @return array New sortable columns.
 */
function _set_sortable_columns() {
	return array(
		'post_id'          => 'Post ID',
		'menu_order'       => 'Order Number',
	);
}
