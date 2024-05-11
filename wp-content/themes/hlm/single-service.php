<?php
/**
 * The template for displaying all single service posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/service-inner-banner' );

	global $post;
?>

<section class="service-inner <?php echo $post->post_name; ?> custom-pad">
	<div class="container">
		<!-- Section 1 Starts Here -->
		<?php $section_1 = get_field('section_1'); ?>
		<?php if(($section_1['image']!='')||($section_1['title']!='')||($section_1['content']!='')) { ?>
			<div class="row">
				<div class="col-lg-6 col-md-12 align-self-center order-2 order-lg-1 order-md-2 order-sm-2">
					<div class="service-inner-content">
						<div class="custom-heading"><?php echo $section_1['title']; ?></div>
						<div class="service-inner-content-wrap">
							<?php echo $section_1['content']; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 order-1 order-lg-2 order-md-1 order-sm-1">
					<div class="service-inner-img">
						<img src="<?php echo $section_1['image']; ?>">
					</div>
				</div>
			</div>
		<?php } ?>
		<!-- Section 1 Ends Here -->

		<!-- Section 2 Starts Here -->
		<?php $section_2 = get_field('section_2'); ?>
		<?php if(($section_2['image']!='')||($section_2['title']!='')||($section_2['content']!='')) { ?>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="service-inner-img">
						<img src="<?php echo $section_2['image']; ?>">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 align-self-center">
					<div class="service-inner-content">
						<div class="custom-heading"><?php echo $section_2['title']; ?></div>
						<div class="service-inner-content-wrap">
							<?php echo $section_2['content']; ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<!-- Section 2 Ends Here -->
	</div>
</section>

<!-- Contact Us Section Starts Here -->
<section class="cta custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/cta-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="cta-content">
					<div class="custom-heading">
						<?php echo get_field('contact_us_text', 65); ?>
					</div>
					<div class="header-btn request-quote-btn">
	          <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="custom-btn">Request a Quote <span><i class="las la-long-arrow-alt-right"></i></span></a>
	        </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Us Section Starts Here -->

<?php
	get_footer();
