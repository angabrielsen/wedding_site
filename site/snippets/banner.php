	<?php $banner = $page->banner()->toFile(); ?>
	<div class="banner" style="background-image: url(<?php echo $banner->url(); ?>);">
		<div class="container">
			<div class="twelve columns">
				<h1><?php echo $page->bannertext()->kirbytext(); ?></h1>
			</div>
		</div>
	</div>