<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

?>
	  <footer>
	    <div class="footer-wrap" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/footer-bg.png);">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-4 col-md-12">
	            <div class="footer-logo">
	              <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod('footer_logo'); ?>"></a>
	              <?php echo get_theme_mod('footer_text'); ?>
	            </div>
	          </div>
	          <div class="col-lg-5 col-md-12">
	            <div class="footer-list">
	              <h4 class="footer-head">Quick Link</h4>
	              <?php wp_nav_menu( array( 'menu' => 'Footer Menu' ) ); ?>
	            </div>
	          </div>
	          <div class="col-lg-3 col-md-12">
	            <div class="footer-list">
	              <h4 class="footer-head">Contact Info</h4>
	              <ul class="footer-contact">
	                <li><a href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><span><i class="fa fa-phone" aria-hidden="true"></i></span> <?php echo get_theme_mod('primary_phone_number'); ?></a></li>
	                <li><a href="mailto:<?php echo get_theme_mod('primary_email_address'); ?>"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo get_theme_mod('primary_email_address'); ?></a></li>
	                <li><a href="<?php echo esc_url(home_url('contact')); ?>"><span><i class="fa fa-user" aria-hidden="true"></i></span> Contact US</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	        <div class="copyright">
	          <div class="row">
	            <div class="col-lg-6 col-md-6 col-sm-12">
	              <div class="copyright-text">
	                <?php echo get_theme_mod('copyright_text'); ?>
	              </div>
	            </div>
	            <div class="col-lg-6 col-md-6 col-sm-12">
	              <div class="copyright-social">
	                <ul>
	                	<?php if(get_theme_mod('facebook_acc_link')) { ?>
	                  	<li><a href="<?php echo get_theme_mod('facebook_acc_link'); ?>" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-1.png" alt=""></a></li>
	                  <?php } ?>
	                  <?php if(get_theme_mod('twitter_acc_link')) { ?>
	                  	<li><a href="<?php echo get_theme_mod('twitter_acc_link'); ?>" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-2.png" alt=""></a></li>
	                  <?php } ?>
	                  <?php if(get_theme_mod('behance_acc_link')) { ?>
	                  	<li><a href="<?php echo get_theme_mod('behance_acc_link'); ?>" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-3.png" alt=""></a></li>
	                  <?php } ?>
	                  <?php if(get_theme_mod('youtube_acc_link')) { ?>
	                  	<li><a href="<?php echo get_theme_mod('youtube_acc_link'); ?>" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-social-icon-4.png" alt=""></a></li>
	                  <?php } ?>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </footer>

		<?php wp_footer(); ?>

	</body>
</html>
