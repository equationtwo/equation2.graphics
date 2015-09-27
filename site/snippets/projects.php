<section class="content">
  <?php foreach(page('projects')->children()->visible()->limit(50) as $project): ?>
  <a class="project-teaser" href="<?php echo $project->url() ?>"> 
    <h3 id="<?php echo $project->title()->html() ?>"><?php echo $project->title()->html() ?></h3>
	
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    
      <figure class='first-screen'>
		  <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
	  </figure>
    
    <?php endif ?>
	
	
  </a>
  <?php endforeach ?>
</section>
	<script type='text/coffeescript'>
		$("h3").each (index, element) =>
			$(element).html $(element).html().replace(/-/g," ")
			$(element).lettering()
	</script>