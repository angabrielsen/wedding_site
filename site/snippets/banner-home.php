	<?php $banner = $page->banner()->toFile(); ?>
	<div class="banner banner-home" style="background-image: url(<?php echo $banner->url(); ?>);">
		<div class="container">
			<div class="twelve columns">
				<h1><?php echo $page->bannerh1(); ?></h1>
				<h2><?php echo $page->bannerh2(); ?></h2>
			</div>
		</div>
	</div>