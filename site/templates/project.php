<script  type='text/coffeescript' src="<?php echo $site->url() ?>/assets/scripts/project.coffee" ></script>
<?php if(!$site->user()) go('/') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <ul class="meta cf">
      <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
      <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    </ul>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img class="glance-img" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
	  
    </div>
	<div class="content-wrapper">
	<div id="SCREENS">
		
	</div>
	
	
	<div id="INFO">
		<ul class="live-prototypes">
		</ul>
	</div>
	</div>

    <!-- <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav> -->

  </main>

<?php snippet('footer') ?>