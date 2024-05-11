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

	get_template_part( 'template-parts/header/blog-inner-banner' );
?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="blog-details-content custom-pad">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="blog-details-content-wrap">
						<div class="blog-details-content-img">
							<?php if(get_field('inner_banner')) { ?>
								<img src="<?php echo get_field('inner_banner'); ?>">
							<?php } else { ?>
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-details-img.jpg">
							<?php } ?>
						</div>
						<?php the_content(); ?>
						<?php if(get_field('blog_disclaimer') != '') { ?>
							<div class="blog-details-text-box">
								<?php echo get_field('blog_disclaimer'); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>

<?php
	get_footer();