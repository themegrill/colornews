<?php
/**
 * Functions for configuring demo importer.
 *
 * @author   ThemeGrill
 * @category Admin
 * @package  Importer/Functions
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup demo importer packages.
 *
 * @param  array $packages
 *
 * @return array
 */
function colornews_demo_importer_packages( $packages ) {
	$new_packages = array(
		'colornews-free' => array(
			'name'    => esc_html__( 'ColorNews', 'colornews' ),
			'preview' => 'https://demo.themegrill.com/colornews/',
		),
		'colornews-pro'  => array(
			'name'     => esc_html__( 'ColorNews Pro', 'colornews' ),
			'preview'  => 'https://demo.themegrill.com/colornews/',
			'pro_link' => 'https://themegrill.com/themes/colornews/',
		),
	);

	return array_merge( $new_packages, $packages );
}

add_filter( 'themegrill_demo_importer_packages', 'colornews_demo_importer_packages' );
