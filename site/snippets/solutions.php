<section class="content">
  <?php foreach(page('solutions')->children()->visible()->limit(50) as $project): ?>
  <a class="project-teaser" href="<?php echo $project->url() ?>"> 
    <h2 id="<?php echo $project->title()->html() ?>"><?php echo $project->title()->html() ?></h2>
	
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
	
	
  </a>
  <?php endforeach ?>
</section>
