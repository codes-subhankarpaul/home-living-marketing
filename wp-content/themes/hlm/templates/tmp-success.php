<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Success Stories
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

<!-- Success Story 1 Section Starts Here -->
<?php $story_section_1 = get_field('story_section_1'); ?>
<section class="why-partner custom-pad white-bg partner-first" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/about-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<h2><?php echo $story_section_1['section_title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="why-partner-content">
		<div class="container">
			<div class="row">
				<?php for($i=1; $i<=4; $i++) { ?>
					<?php $info = $story_section_1['section_'.$i]; ?>
					<div class="col-lg-6 col-md-12">
						<div class="why-partner-box">
							<div class="why-partner-box-img">
								<img src="<?php echo $info['image']; ?>">
								<div class="why-partner-box-text">
									<h5><?php echo $info['title']; ?> </h5>
									<?php echo $info['content']; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- Success Story 1 Section Ends Here -->

<!-- Success Story 2 Section Starts Here -->
<?php $story_section_2 = get_field('story_section_2'); ?>
<section class="why-partner custom-pad partner-second" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/choose-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<h2><?php echo $story_section_2['section_title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="why-partner-content">
		<div class="container">
			<div class="row">
				<?php for($i=1; $i<=4; $i++) { ?>
					<?php $info = $story_section_2['section_'.$i]; ?>
					<div class="col-lg-6 col-md-12">
						<div class="why-partner-box">
							<div class="why-partner-box-img">
								<img src="<?php echo $info['image']; ?>">
								<div class="why-partner-box-text">
									<h5><?php echo $info['title']; ?> </h5>
									<?php echo $info['content']; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- Success Story 2 Section Ends Here -->

<!-- Success Story 3 Section Starts Here -->
<?php $story_section_3 = get_field('story_section_3'); ?>
<section class="why-partner custom-pad white-bg" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/about-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<h2><?php echo $story_section_3['section_title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="why-partner-content">
		<div class="container">
			<div class="row">
				<?php for($i=1; $i<=4; $i++) { ?>
					<?php $info = $story_section_3['section_'.$i]; ?>
					<div class="col-lg-6 col-md-12">
						<div class="why-partner-box">
							<div class="why-partner-box-img">
								<img src="<?php echo $info['image']; ?>">
								<div class="why-partner-box-text">
									<h5><?php echo $info['title']; ?> </h5>
									<?php echo $info['content']; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- Success Story 3 Section Ends Here -->
<?php
	get_footer();