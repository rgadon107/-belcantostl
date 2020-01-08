<?php
/**
 * Templates configuration that provides the absolute path to each template
 * in this plugin to be loaded by the Template Loader module.
 *
 * @package     spiralWebDb\Songs\Template
 * @since       1.0.0
 * @author      Robert A. Gadon
 * @link        http://spiralwebdb.com
 * @license     GNU-2.0+
 */

namespace spiralWebDb\Songs\Template;

use function spiralWebDb\Songs\_get_plugin_directory;

return array(
	'single'            => array(
		'songs' => _get_plugin_directory() . '/src/template/single-songs.php',
	),
	'post_type_archive' => array(
		'songs' => _get_plugin_directory() . '/src/template/archive-songs.php',
	),
);