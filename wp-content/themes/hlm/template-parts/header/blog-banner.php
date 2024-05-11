<?php
/* Blog page Banner template */
/******************************/

	$post_id = get_option('page_for_posts');
	$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
	if($image) {
		$img_url = $image[0];  
	} else {
		$img_url = get_theme_file_uri().'/assets/images/blog-banner.jpg';
	}
?>
<section class="custom-inner-banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/banner-bg.png)" alt="banner-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1>Articles & Blogs</h1>
					<div class="inner-banner-text">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="banner-overlay">
		<img src="<?php echo $img_url; ?>" alt="">
	</div>
</section>