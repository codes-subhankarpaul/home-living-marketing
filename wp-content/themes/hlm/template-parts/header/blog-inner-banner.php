<?php
/* Blog Inner Banner template */
/******************************/

	$image_url = get_field('hero_banner');
	if($image_url) {
		$img_url = $image_url;  
	} else {
		$img_url = get_theme_file_uri().'/assets/images/blog-details-banner.jpg';
	}
?>
<section class="custom-inner-banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/banner-bg.png)" alt="banner-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1><?php echo get_the_title(); ?></h1>
					<div class="inner-banner-text">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('blog')); ?>">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
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