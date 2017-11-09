<?php snippet('header') ?>
<?php snippet('banner') ?>
<?php snippet('menu-anchors') ?>

	<main class="main" role="main">

		<div class="text container location">
			<div class="twelve columns">
				<?php echo $page->text()->kirbytext() ?>

		        <?php foreach($page->children()->visible() as $p): ?>
		          <a id="<?php echo $p->title() ?>"></a>
		          <h3><?php echo $p->title() ?></h3>
		          <?php echo $p->text()->kirbytext() ?>
		        <?php endforeach ?>

			</div>
		</div>

	</main>
	<iframe src="<?php echo $page->map()->text() ?>" class="banner" style="padding-top:0;height:90vh;"></iframe>
<?php snippet('footer') ?>