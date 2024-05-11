<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: About Us
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

<!-- Content Section Starts Here -->
<?php $content_section = get_field('content_section'); ?>
<section class="about-inner custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/about-bg.png);">
	<div class="container">
		<?php $content_section_1 = $content_section['section_1']; ?>
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="about-inner-img">
					<img src="<?php echo $content_section_1['section_image']; ?>">
				</div>
			</div>
			<div class="col-lg-7 col-md-12 align-self-center">
				<div class="about-inner-content">
					<div class="custom-heading">
						<?php echo $content_section_1['section_title']; ?>
					</div>
					<h5><?php echo $content_section_1['section_tagline']; ?></h5>
					<?php echo $content_section_1['section_content']; ?>
				</div>
			</div>
		</div>
		<?php $content_section_2 = $content_section['section_2']; ?>
		<div class="row">
			<div class="col-lg-7 col-md-12 align-self-center order-2 order-lg-1 order-md-2 order-sm-2">
				<div class="about-inner-content">
					<div class="custom-heading">
						<?php echo $content_section_2['section_title']; ?>
					</div>
					<h5><?php echo $content_section_2['section_tagline']; ?></h5>
					<?php echo $content_section_2['section_content']; ?>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 order-1 order-lg-2 order-md-1 order-sm-1">
				<div class="about-inner-img">
					<img src="<?php echo $content_section_2['section_image']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Content Section Ends Here -->


<!-- Service Section Starts Here -->
<?php $services_section = get_field('services_section'); ?>
<section class="digital-marketing about-service custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/choose-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading text-center">
					<h2 class="text-light"><?php echo $services_section['section_title']; ?></h2>
					<h4 class="text-light"><?php echo $services_section['section_tagline']; ?></h4>
				</div>
			</div>
		</div>
		<div class="row">
			<?php for($i=1; $i<=4; $i++) { ?>
    		<?php $service = $services_section['section_'.$i];  ?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="marketing-box">
						<div class="marketing-icon">
							<img src="<?php echo $service['image']; ?>" alt="">
						</div>
						<div class="marketing-content">
							<h3><?php echo $service['title']; ?></h3>
							<ul class="marketing-list">
								<li><?php echo $service['content']; ?></li>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Service Section Ends Here -->


<!-- FAQ Section Starts Here -->
<?php $faq_section = get_field('faq_section'); ?>
<section class="faq custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="faq-content">
					<div class="custom-heading">
						<?php echo $faq_section['section_title']; ?>
					</div>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php for($i=1; $i<=4; $i++) { ?>
          		<?php $faq = $faq_section['section_'.$i]; ?>
	            <div class="accordion-item">
	              <h2 class="accordion-header">
	                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
	                  <?php echo $faq['question']; ?>
	                </button>
	              </h2>
	              <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
	                <div class="accordion-body"><?php echo $faq['answer']; ?></div>
	              </div>
	            </div>
            <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FAQ Section Ends Here -->


<!-- Partner Section Starts Here -->
<?php $partner_section = get_field('partner_section'); ?>
<section class="result abt-partner custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/banner-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 align-self-center">
				<div class="result-content">
					<div class="custom-heading">
						<?php echo $partner_section['section_title']; ?>
					</div>
					<?php echo $partner_section['section_content']; ?>
				</div>
			</div>
			<div class="col-lg-5 col-md-12">
				<div class="result-img">
					<img src="<?php echo $partner_section['section_image']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Partner Section Ends Here -->


<!-- Box Content Section Starts Here -->
<?php $box_content_section = get_field('box_content_section'); ?>
<section class="abt-explore custom-pad">
	<div class="container">
		<div class="row">
			<?php $box_section_1 = $box_content_section['section_1']; ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="abt-explore-box">
					<h3><?php echo $box_section_1['title']; ?></h3>
					<a href="<?php echo $box_section_1['link_url']; ?>"><?php echo $box_section_1['link_text']; ?></a>
				</div>
			</div>
			<?php $box_section_2 = $box_content_section['section_2']; ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="abt-explore-box">
					<h3><?php echo $box_section_2['title']; ?></h3>
					<a href="<?php echo $box_section_2['link_url']; ?>"><?php echo $box_section_2['link_text']; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Box Content Section Ends Here -->

<?php
	get_footer();