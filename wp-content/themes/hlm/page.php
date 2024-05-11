<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/inner-page-banner' );
?>

	<section class="ebook-details custom-pad">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="ebook-details-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	get_footer();
