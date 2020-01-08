<?php
/**
 *  The runtime configuration parameters for the Role taxonomy.
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

return array(

	/**==============================================================
	 *
	 * The Taxonomy name.
	 *
	 * ===============================================================*/
	'taxonomy'   => 'vocal_part',

	/**==============================================================
	 *
	 * The label configuration for the Taxonomy.
	 *
	 * ===============================================================*/
	'labels'     => array(
		'custom_type'       => 'vocal_part', // The taxonomy from above.
		'singular_label'    => 'Vocal Part',
		'plural_label'      => 'Vocal Parts',
		'in_sentance_label' => 'Vocal Parts',
		'text_domain'       => 'songs',
	),

	/**==============================================================
	 *
	 * The arguments for registering the Taxonomy.
	 *
	 * ===============================================================*/
	'args'       => array(
		'label'        => 'Vocal Part',
		'labels'       => '', // automatically generate the labels.
		'hierarchical' => true,
	),

	/**==============================================================
	 *
	 * The post types to which the Taxonomy is bound.
	 *
	 * ===============================================================*/
	'post_types' => array( 'songs' ),

);