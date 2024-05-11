<?php
/* Inner page Banner template */
/******************************/

	global $post;
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
	if($image) {
		$img_url = $image[0];  
	} else {
		$img_url = get_theme_file_uri().'/assets/images/about-banner.jpg';
	}

	$title_text = '';
	$title = get_the_title();
	$alternative_title = get_field('alternative_title');
	$display_alternative = get_field('display_alternative_title');
	if($display_alternative && $alternative_title!='')
	{
		$title_text = $alternative_title;
	}
	else
	{
		$title_text = $title;
	}
?>
<section class="custom-inner-banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/banner-bg.png)" alt="banner-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1><?php echo $title_text; ?></h1>
					<div class="inner-banner-text">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
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