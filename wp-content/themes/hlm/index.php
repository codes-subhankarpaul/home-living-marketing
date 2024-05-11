<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/blog-banner' );
	$post_id = get_option('page_for_posts');
?>

<section class="blog blog-inner custom-pad">
	<div class="blog-posts">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php echo get_field('section_content', $post_id); ?>
				</div>
				<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
					$blog_query = new WP_Query($args);
					if ($blog_query->have_posts()) {
						while ($blog_query->have_posts()) { $blog_query->the_post();
							?>
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="blog-box">
									<div class="blog-box-img">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<h5><?php echo get_the_title(); ?> </h5>
									<?php $my_postid = get_the_ID();
										$content_post = get_post($my_postid);
										$content = $content_post->post_content;
										$content = apply_filters('the_content', $content);
										$content = str_replace(']]>', ']]&gt;', $content);
										$content = strip_tags($content);
										$content = wp_trim_words($content, 30, ' .....');
										echo '<p>'.$content.'</p>';
									?>
									<div class="blog-btn">
										<a href="<?php echo get_the_permalink(); ?>" class="custom-btn">Learn More <span><i class="las la-long-arrow-alt-right"></i></span></a>
									</div>
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
</section>

<?php
	get_footer();
