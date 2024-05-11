<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Partnership Opportunities
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

<!-- Main Content Section Starts Here -->
<?php $main_content_section = get_field('main_content_section'); ?>
<section class="partnership-opportunity-info custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="partnership-opportunity-info-content">
					<img src="<?php echo $main_content_section['section_image']; ?>">
					<?php echo $main_content_section['section_content']; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Main Content Section Ends Here -->


<!-- Partner Section Starts Here -->
<?php $partner_section = get_field('partner_section'); ?>
<section class="why-partner custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/choose-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<h2><?php echo $partner_section['section_title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="why-partner-content">
		<div class="container">
			<div class="row">
				<?php for($i=1; $i<=4; $i++) { ?>
					<?php $info = $partner_section['section_'.$i]; ?>
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
<!-- Partner Section Ends Here -->


<!-- Parenting Section Starts Here -->
<?php $partnering_info_section = get_field('parenting_info_section_copy'); ?>
<section class="benefits-details custom-pad">
	<div class="container">
		<div class="row">
			<div class="custom-heading">
				<h2><?php echo $partnering_info_section['section_title']; ?></h2>
			</div>
			<?php for($i=1; $i<=5; $i++) { ?>
				<?php $partnering = $partnering_info_section['section_'.$i]; ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="benefits-details-box">
						<div class="benefits-details-icon">
							<img src="<?php echo $partnering['image']; ?>">
						</div>
						<h4><?php echo $partnering['title']; ?></h4>
						<?php echo $partnering['content']; ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<!-- Partnership Starts here -->
	<?php $partnership = $partnering_info_section['partnership_section']; ?>
	<div class="benefits-interest">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="benefits-interest-img">
						<img src="<?php echo $partnership['section_image']; ?>">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 align-self-center">
					<div class="benefits-interest-content">
						<div class="custom-heading">
							<?php echo $partnership['section_title']; ?>
						</div>
						<?php echo $partnership['section_content']; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Partnership Ends here -->
</section>
<!-- Parenting Section Ends Here -->


<!-- Contact Us Section Starts Here -->
<section class="cta custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/cta-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="cta-content">
					<div class="custom-heading">
						<?php echo get_field('contact_us_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Us Section Starts Here -->

<?php
	get_footer();