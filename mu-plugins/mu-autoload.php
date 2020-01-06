<?php
/**
 *  Autoload must-use plugins.
 *
 * @package    spiralWebDB\MUPlugins
 *
 * @since      1.0.0
 *
 * @author     Robert A. Gadon
 *
 * @link       http://spiralwebdb.com
 *
 * @license    GNU General Public License 2.0+
 */

namespace spiralWebDB\MUPlugins;

if ( is_readable( __DIR__ . '/debug-toolkit/debug-toolkit.php' ) ) {
	require_once __DIR__ . '/debug-toolkit/debug-toolkit.php';
}

require __DIR__ . '/central-hub/bootstrap.php';
