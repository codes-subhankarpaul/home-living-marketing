<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: FAQ
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

<!-- FAQ Part 1 Starts Here -->
<?php $faq_section_part_1 = get_field('faq_section_part_1'); ?>
<section class="faq-about custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/about-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="faq-content">
					<div class="custom-heading">
						<?php echo $faq_section_part_1['section_title']; ?>
					</div>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php for($i=1; $i<=4; $i++) { ?>
          		<?php $faq = $faq_section_part_1['section_'.$i]; ?>
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
<!-- FAQ Part 1 Ends Here -->


<!-- FAQ Part 2 Starts Here -->
<?php $faq_section_part_2 = get_field('faq_section_part_2'); ?>
<section class="faq-details custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="faq-details-content faq-content">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php for($j=1; $j<=4; $j++) { ?>
							<?php $division = $faq_section_part_2['division_'.$j];?>
							<h2 class="faq-details-head"><?php echo $division['text']; ?></h2>
							<?php for($i=1; $i<=2; $i++) { ?>
		            <div class="accordion-item">
		              <h2 class="accordion-header">
		                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
		                  <?php echo $division['question_'.$i]; ?>
		                </button>
		              </h2>
		              <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
		                <div class="accordion-body"><?php echo $division['answer_'.$i]; ?></div>
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
<!-- FAQ Part 2 Ends Here -->


<!-- FAQ Part 3 Starts Here -->
<?php $faq_section_part_3 = get_field('faq_section_part_3'); ?>
<section class="general-question custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/choose-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="general-question-content faq-content">
					<h4><?php echo $faq_section_part_3['section_title']; ?></h4>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php for($i=1; $i<=9; $i++) { ?>
          		<?php $faq = $faq_section_part_3['section_'.$i]; ?>
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
<!-- FAQ Part 3 Ends Here -->

<?php
	get_footer();