<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">


	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<?php echo css('assets/css/normalize.css') ?>
	<?php echo css('assets/css/skeleton.css') ?>

	<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="<?php echo $site->url ?>/assets/images/favicon.png">


	<!-- Scripts
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>

	<header>
		<div class="container">
			<div class="menu left-of-logo">
				<a href="location">Location</a>
				<a href="schedule">Schedule</a>
			</div>
			<a class="logo" href="<?php echo url() ?>">
				<img src="<?php echo $site->url ?>/assets/images/ja-monogram-white.svg" alt="JA Monogram Logo" >
			</a>
			<div class="menu right-of-logo">
				<a href="weddingparty">Wedding Party</a>
				<a href="rsvp">RSVP</a>
			</div>
		</div>
	</header>