<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="<?php echo $site->url() ?>/assets/scripts/jquery.lettering.js"></script>
	<script src="<?php echo $site->url() ?>/assets/scripts/coffee-script.js"></script>

  <?php echo css('assets/css/main.css') ?>

</head>

	  	<?php if($user = $site->user()): ?>
			<?php $Name = $user->username() ?>
			<?php if($Name == 'admin' or $Name == 'cso'): ?>
				<body class="cso">
			<?php endif ?>
			<?php if($Name == 'portfolio'): ?>
				<body class="portfolio">
			<?php endif ?>
		<?php endif ?>



  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
	  	<?php if($user = $site->user()): ?>
			<?php $Name = $user->username() ?>
			<?php if($Name == 'admin' or $Name == 'cso'): ?>
				<img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
			<?php endif ?>
			<?php if($Name == 'portfolio'): ?>
				<img src="<?php echo url('assets/images/portfolio.png') ?>" alt="<?php echo $site->title()->html() ?>" style="width: 110px;margin-left: 11px;"/>
			<?php endif ?>
		<?php endif ?>
    </a>
    <?php snippet('menu') ?>
  </header>