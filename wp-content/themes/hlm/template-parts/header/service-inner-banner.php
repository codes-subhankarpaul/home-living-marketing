<?php
/* Service Inner Banner template */
/*********************************/

	$image_url = get_the_post_thumbnail_url();
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
					<?php if(get_field('alternative_title')!='') { ?>
						<h1><?php echo get_field('alternative_title'); ?></h1>
					<?php } else { ?>
						<h1><?php echo get_the_title(); ?></h1>
					<?php } ?>
					<div class="inner-banner-text">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Service</a></li>
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