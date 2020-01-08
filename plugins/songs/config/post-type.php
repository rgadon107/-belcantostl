<?php
/**
 *  The runtime configuration parameters for the Cornerstone Members Custom Post Type.
 *
 * @package    spiralWebDb\Members
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GPL-2.0+
 */

namespace spiralWebDb\Members;

return array(

	/**==============================================================
	 *
	 * The name of the Custom Post Type.
	 *
	 * ===============================================================*/
	'post_type' => 'songs',

	/**==============================================================
	 *
	 * Label configuration for the Custom Post Type.
	 *
	 * ===============================================================*/
	'labels'    => array(
		'custom_type'       => 'Songs', // The post type from above.
		'singular_label'    => 'Song',
		'plural_label'      => 'Songs',
		'in_sentance_label' => 'Songs', // The label used within a sentence.
		'text_domain'       => 'songs',
	),

	/**==============================================================
	 *
	 * Supported features for the Custom Post Type.
	 *
	 * ===============================================================*/
	'features'  => array(
		'base_post_type' => 'post',
		'exclude'        => array(
			'excerpt',
			'comments',
			'trackbacks',
			'custom-fields',
			'thumbnail', // also known as the 'featured image'.
			'author',
			'post-formats',
			'genesis-seo',
			'genesis-scripts',
			'genesis-layouts',
			'genesis-rel-author',
		),
		'additional'     => array(
			'page-attributes',
		),
	),

	/**==============================================================
	 *
	 * The arguments for registering the Custom Post Type.
	 *
	 * ===============================================================*/
	'args'      => array(
		'description' => 'Songs rendered on the Bel Canto Chorus website.', // For informational purposes only.
		'label'       => 'Songs',
		'labels'      => '', // automatically generate the labels.
		'public'      => true,
		'menu_icon'   => 'dashicons-format-audio',
		'supports'    => '', // automatically generate the support features.
		'has_archive' => true,
	),
);