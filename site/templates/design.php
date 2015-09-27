<?php if(!$site->user()) go('/login') ?>
<?php snippet('header') ?>

  <main class="main" role="main">
	  <section class="design-header">
    <h1><?php echo $page->title()->html() ?></h1>

    <ul class="meta cf">
      <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
      <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    </ul>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

	  </div>
 	</section>

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img class="glance-img" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
	  
    </div>
</div>

  </main>

<?php snippet('footer') ?>