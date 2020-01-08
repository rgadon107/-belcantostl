<?php
/**
 * Template for a single songs post type.
 *
 * @package     spiralWebDb\Songs\Template
 * @since       1.0.0
 * @author      Robert A. Gadon
 * @link        http://spiralwebdb.com
 * @license     GNU-2.0+
 */

namespace spiralWebDb\Songs\Template;

remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

genesis();
