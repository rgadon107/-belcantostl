<?php
/**
 * Sidebars and widget area runtime configuration
 *
 * @package     spiralWebDB\Developers\Widgets
 * @since       1.0.0
 * @author      Robert A Gadon
 * @link        https://spiralWebDb
 * @license     GPL-2.0+
 */

namespace spiralWebDB\Developers;

return array(
	'unregister_widget_areas' => array(
		'sidebar-alt',
		'sidebar',
		'header-right',
	),
	'register_widget_areas'   => array(
		array(
			'id'          => 'footer-widget-area',
			'name'        => 'Footer Widget',
			'description' => 'Displays widgets in the site footer area.',
		),
	)
);
