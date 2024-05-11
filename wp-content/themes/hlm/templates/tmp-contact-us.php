<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Contact Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/inner-page-banner' );
?>

<section class="contact-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="contact-inner-wrap">
					<div class="form-wrap">
						<?php $shortcode = get_field('contact_form_shortcode'); ?>
						<?php echo do_shortcode($shortcode); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="contact-privacy">
					<?php echo get_field('privacy_text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();