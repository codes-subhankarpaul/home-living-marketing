<?php
/**
 * Front Page.
 *
 * This is the template that displays the landing page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

	get_header();
?>

<!-- Banner Section Starts Here -->
<?php $banner_section = get_field('banner_section'); ?>
	<!-- Modal Starts Here -->
	<div class="banner-popup modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
		    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    <div class="modal-body">
		      <?php echo $banner_section['video_url']; ?>
		    </div>
		  </div>
		</div>
	</div>
	<!-- Modal Ends Here -->
<section class="custom-banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/banner-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="banner-content">
          <?php echo $banner_section['section_title']; ?>
          <div class="banner-btns-wrap">
            <a href="<?php echo $banner_section['button_1_link']; ?>" class="custom-btn"><?php echo $banner_section['button_1_text']; ?> <span><i
                  class="las la-long-arrow-alt-right"></i></span></a>
            <a href="<?php echo $banner_section['button_2_link']; ?>" class="custom-btn"><?php echo $banner_section['button_2_text']; ?> <span><i
                  class="las la-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="banner-video">
          <img src="<?php echo $banner_section['video_thumbnail']; ?>" alt="">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-play" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-overlay">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-img.png" alt="">
  </div>
  <div class="banner-social">
    <ul>
    	<?php if(get_theme_mod('facebook_acc_link')) { ?>
      	<li><a href="<?php echo get_theme_mod('facebook_acc_link'); ?>" target="_blank"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-1.png" alt=""><span>Facebook</a></li>
      <?php } ?>
      <?php if(get_theme_mod('twitter_acc_link')) { ?>
      	<li><a href="<?php echo get_theme_mod('twitter_acc_link'); ?>" target="_blank"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-2.png" alt=""></span>Twitter</a></li>
      <?php } ?>
      <?php if(get_theme_mod('behance_acc_link')) { ?>
      	<li><a href="<?php echo get_theme_mod('behance_acc_link'); ?>" target="_blank"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-3.png" alt=""></span>Dribble</a></li>
      <?php } ?>
      <?php if(get_theme_mod('youtube_acc_link')) { ?>
      	<li><a href="<?php echo get_theme_mod('youtube_acc_link'); ?>" target="_blank"><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-4.png" alt=""></span>LinkedIn</a></li>
      <?php } ?>
    </ul>
  </div>
</section>
<!-- Banner Section Ends Here -->


<!-- Quick Service Section Starts Here -->
<?php $quick_service_section = get_field('quick_service_section'); ?>
<section class="custom-quick-service" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/quick-ser-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="quick-service-owl" class="owl-carousel owl-theme">
          <?php for($i=1; $i<=6; $i++) { ?>
          	<?php $quick_service = $quick_service_section['section_'.$i]; ?>
	          <div class="item">
	            <div class="quick-ser-wrap">
	              <div class="q-icon">
					  <a href="<?php echo $quick_service['service_link']; ?>"> <img src="<?php echo $quick_service['service_image']; ?>" alt=""></a>
	              </div>
	              <div class="q-content">
					  <h4><a href="<?php echo $quick_service['service_link']; ?>"><?php echo $quick_service['service_text']; ?></a></h4>
	              </div>
	            </div>
	          </div>
	        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Quick Service Section Ends Here -->


<!-- Digital Marketing Section Starts Here -->
<?php $digital_marketing_section = get_field('digital_marketing_section'); ?>
<section class="custom-about custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/about-bg.png);">
  <div class="watermark">
    <h2>About</h2>
  </div>
  <div class="abt-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="abt-top-img">
            <img src="<?php echo $digital_marketing_section['section_image']; ?>">
            <div class="abt-top-img-2">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/abt-img-after.png">
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 align-self-center">
          <div class="abt-top-content">
            <div class="custom-heading">
              <?php echo $digital_marketing_section['section_title']; ?>
            </div>
            <h5><?php echo $digital_marketing_section['section_tagline']; ?></h5>
            <ul>
              <li><?php echo $digital_marketing_section['section_content']; ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="abt-bottom">
    <div class="container">
      <div class="row">
      	<?php for($i=1; $i<=3; $i++) { ?>
      		<?php $insight = $digital_marketing_section['section_'.$i]; ?>
	        <div class="col-lg-4 col-md-6 col-sm-12">
	          <div class="abt-box">
	            <div class="abt-box-img">
	              <img src="<?php echo $insight['image']; ?>">
	            </div>
	            <h5><?php echo $insight['title']; ?></h5>
	            <?php echo $insight['content']; ?>
	          </div>
	        </div>
	      <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- Digital Marketing Section Ends Here -->


<!-- Services Section Starts Here -->
<?php $services_section = get_field('services_section'); ?>
<section class="digital-marketing custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/choose-bg.png);">
  <div class="watermark">
    <h2>Our Goal</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="custom-heading text-center">
          <h2 class="text-light"><?php echo $services_section['section_title']; ?></h2>
          <h4 class="text-light"><?php echo $services_section['section_tagline']; ?></h4>
          <?php echo $services_section['section_content']; ?>
        </div>
      </div>
    </div>
    <div class="row">
    	<?php for($i=1; $i<=6; $i++) { ?>
    		<?php $service = $services_section['section_'.$i];  ?>
	      <div class="col-lg-4 col-md-6 col-sm-12">
	        <div class="marketing-box">
	          <div class="marketing-icon">
              <a href="<?php echo $service['button_link'] ?>">
                <img src="<?php echo $service['image']; ?>" alt="">
              </a>
	          </div>
	          <div class="marketing-content">
	            <h3><?php echo $service['title']; ?></h3>
	            <?php echo $service['content']; ?>
	            <a href="<?php echo $service['button_link']; ?>" class="custom-btn"><?php echo $service['button_text']; ?> <span><i class="las la-long-arrow-alt-right"></i></span></a>
	          </div>
	        </div>
	      </div>
			<?php } ?>
    </div>
    <div class="why-choose-digital-market">
    	<?php $why_choose_us_section = $services_section['why_choose_us_section']; ?>
      <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12">
          <div class="why-choose-img">
            <img src="<?php echo $why_choose_us_section['section_image']; ?>">
          </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 align-self-center">
          <div class="why-choose-content-wrap">
            <div class="why-choose-content-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-txt-bg.png">
            </div>
            <div class="why-choose-content-after-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-txt-after-icon.png">
            </div>
            <div class="why-choose-text">
              <div class="custom-heading">
                <?php echo $why_choose_us_section['section_title']; ?>
              </div>
              <?php echo $why_choose_us_section['section_content']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section Ends Here -->


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
          	<?php for($i=1; $i<=3; $i++) { ?>
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


<!-- Blog Section Starts Here -->
<?php $blog_section = get_field('blog_section'); ?>
<section class="blog custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="custom-heading">
          <?php echo $blog_section['section_title']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="blog-posts">
    <div class="container">
      <div class="row">
      	<?php $select_blogs = $blog_section['select_blogs']; ?>
      	<?php foreach($select_blogs as $eachBlog) { ?>
	        <div class="col-lg-4 col-md-6 col-sm-12">
	          <div class="blog-box">
	            <div class="blog-box-img">
	              <img src="<?php echo get_the_post_thumbnail_url($eachBlog); ?>">
	            </div>
	            <h5><?php echo get_the_title($eachBlog); ?> </h5>
	            <?php $my_postid = $eachBlog;
								$content_post = get_post($my_postid);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								$content = strip_tags($content);
								$content = wp_trim_words($content, 30, ' .....');
								echo '<p>'.$content.'</p>';
							?>
	            <div class="blog-btn">
	              <a href="<?php echo get_the_permalink($eachBlog); ?>" class="custom-btn">Learn More <span><i class="las la-long-arrow-alt-right"></i></span></a>
	            </div>
	          </div>
	        </div>
	      <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- Blog Section Ends Here -->


<!-- Result Section Starts Here -->
<?php $result_section = get_field('result_section'); ?>
<section class="result custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="result-content">
          <div class="custom-heading">
            <?php echo $result_section['section_title']; ?>
          </div>
          <?php echo $result_section['section_content']; ?>
          <ul>
            <li><a href="<?php echo $result_section['qr_code_link']; ?>"><img src="<?php echo $result_section['qr_code']; ?>"></a></li>
            <li><?php echo $result_section['qr_code_text']; ?></i></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="result-img">
          <img src="<?php echo $result_section['section_image']; ?>">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Result Section Ends Here -->

<?php
	get_footer();