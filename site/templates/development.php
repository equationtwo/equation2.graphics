<?php if(!$site->user()) go('/login') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <!-- <h1><?php echo $page->title()->html() ?></h1> -->
      <?php echo $page->text()->kirbytext() ?>
    </div>



    <?php snippet('development') ?>

  </main>

<?php snippet('footer') ?>