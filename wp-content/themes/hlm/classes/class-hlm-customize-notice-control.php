<?php
/**
 * Customize API: hlm_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since hlm 1.0
 *
 * @see WP_Customize_Control
 */
class hlm_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since hlm 1.0
	 *
	 * @var string
	 */
	public $type = 'hlm-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since hlm 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'hlm' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/hlm/#dark-mode-support', 'hlm' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'hlm' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
