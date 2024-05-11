<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Video Library
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

<!-- Video Content Section 1 Starts Here -->
<?php $video_content_section_1 = get_field('video_content_section_1'); ?>
<section class="video-info custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="video-info-img">
					<img src="<?php echo $video_content_section_1['section_Image']; ?>">
					<?php echo $video_content_section_1['section_content']; ?>
				</div>
				<div class="video-info-slider">
					<div class="custom-heading">
						<?php echo $video_content_section_1['video_content']; ?>
					</div>
					<div id="video-inner-owl" class="owl-carousel owl-theme">
						<?php for($i=1; $i<=10; $i++) { ?>
							<?php $video = $video_content_section_1['video_iframe_'.$i]; ?>
							<?php if($video != '') { ?>
								<div class="item">
									<div class="local-video">
										<?php echo $video; ?>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Video Content Section 1 Ends Here -->


<!-- Video Content Section 2 Starts Here -->
<?php $video_content_section_2 = get_field('video_content_section_2'); ?>
<section class="video-nav custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/choose-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<?php echo $video_content_section_2['video_content']; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="video-nav-slider">
					<div id="video-business-owl" class="owl-carousel owl-theme">
						<?php for($i=1; $i<=10; $i++) { ?>
							<?php $video = $video_content_section_2['video_iframe_'.$i]; ?>
							<?php if($video != '') { ?>
								<div class="item">
									<div class="local-video">
										<?php echo $video; ?>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Video Content Section 2 Ends Here -->

<?php
	get_footer();