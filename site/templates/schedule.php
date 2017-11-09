<?php snippet('header') ?>
<?php snippet('banner') ?>
<?php snippet('menu-anchors') ?>

	<main class="main" role="main">

		<div class="text container">
			<div class="twelve columns">
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</div>

	</main>

<?php snippet('footer') ?>