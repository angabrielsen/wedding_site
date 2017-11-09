<?php snippet('header') ?>
<?php snippet('banner') ?>
<?php snippet('menu-anchors') ?>

	<main class="main" role="main">

		<div class="container weddingparty">
			<div class="twelve columns">
				<?php echo $page->text()->kirbytext() ?>
			</div>	

			<?php foreach($page->children()->visible() as $p): ?>
				<?php 
					$r = $p->role();
					if ($r == "bestman"){
						$role = "Best Man";
					} elseif ($r == "maidofhonor"){
						$role = "Maid of Honor";
					} elseif ($r == "groomsparty"){
						$role = "Groom's Party";
					} elseif ($r == "bridalparty"){
						$role = "Bridal Party";
					} else {
						$role = "Wedding Party";
					}
				?>

				<a id="<?php echo $p->title() ?>"></a>
				<div class="four columns">
					<div class="portrait" style="background-image:url(<?php echo $p->portrait()->toFile()->url() ?>);"></div>
					<h3><?php echo $p->title() ?></h3>
				<?php if($r=="bestman"||$r=="maidofhonor"): ?>
					<p class="role special"><?php echo $role ?></p>
				<?php else: ?>
					<p class="role"><?php echo $role ?></p>
				<?php endif ?>
					<?php echo $p->text()->kirbytext() ?>
				</div>
				<b class="rowbreak"></b>
			<?php endforeach ?>

			</div>
		</div>

	</main>

<?php snippet('footer') ?>