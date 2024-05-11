<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since hlm 1.0
	 *
	 * @return void
	 */
	function hlm_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'hlm-columns-overlap',
				'label' => esc_html__( 'Overlap', 'hlm' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'hlm-border',
				'label' => esc_html__( 'Borders', 'hlm' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'hlm-border',
				'label' => esc_html__( 'Borders', 'hlm' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'hlm-border',
				'label' => esc_html__( 'Borders', 'hlm' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'hlm-image-frame',
				'label' => esc_html__( 'Frame', 'hlm' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'hlm-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'hlm' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'hlm-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'hlm' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'hlm-border',
				'label' => esc_html__( 'Borders', 'hlm' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'hlm-separator-thick',
				'label' => esc_html__( 'Thick', 'hlm' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'hlm-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'hlm' ),
			)
		);
	}
	add_action( 'init', 'hlm_register_block_styles' );
}
