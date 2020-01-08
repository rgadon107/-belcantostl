<?php
/**
 * Songs shortcode runtime configuration parameters.
 *
 * @package    spiralWebDb\Songs\Shortcode
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GPL-2.0+
 */

namespace spiralWebDb\Songs\Shortcode;

use function spiralWebDb\Songs\_get_plugin_directory;

return array(

	/************************************************************
	 * Configure a unique ID for this shortcode.
	 *
	 * This ID is used for storing and getting the configuration
	 * in/out of the Config Store.
	 ***********************************************************/
	'shortcode.songs' => array(

		/**=================================================
		 *
		 * Shortcode name [songs]
		 *
		 *==================================================*/
		'shortcode_name'              => 'songs',

		/**=================================================
		 *
		 * Specify if you want do_shortcode() to run on the
		 * content between the shortcode opening and closing
		 * square brackets. Defaults to 'true'.
		 *
		 *==================================================*/
		'do_shortcode_within_content' => true,

		/**=================================================
		 *
		 * Specify the processing function when you want
		 * your code to handle the output buffer, view, and
		 * processing.
		 *
		 *==================================================*/
		'processing_function'         => __NAMESPACE__ . '\process_songs_shortcode',

		/**=================================================
		 *
		 * Paths to the view files.
		 *
		 *==================================================*/
		'view'                        => array(
			'songs' => _get_plugin_directory() . '/src/shortcode/views/songs.php',
		),

		/**=================================================
		 *
		 *  Defined shortcode default attributes. Each is
		 *  overridable by the author.
		 *
		 *==================================================*/
		'defaults'                    => array(
			'song_id'                 => 0,
			'number_of_songs'         => 15, // Number of songs to display per page.
			'show_none_found_message' => '1',
			'none_found'              => 'Sorry, no song titles were found.',
			'none_found_single'       => 'Sorry, there are no song titles available for that ID.',
		),

		/**=================================================
		 *
		 *  Set the query_args for the new instance of the
		 *  query to run in the shortcode processing function.
		 *
		 *==================================================*/
		'query_args' => array(
			'post_type'     => 'songs',
			'no_found_rows' => true,
		),
	),
);
