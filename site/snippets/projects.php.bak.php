<h2>Latest projects</h2>

<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit(50) as $project): ?>
  <li>
    <h3 id="<?php echo $project->title()->html() ?>"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <!-- <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?> -->
    <!-- <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a> -->
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
	<script type='text/coffeescript'>
		User = "equationtwo"
		
		GetFirstImage = (screens) ->
			rep = screens[0].download_url.split("/")[4]
			$("#" + rep).after "<figure class='first-screen'><img src='" + screens[0].download_url + "' /></figure>"
		
			
		
		$("h3").each (index, element) =>
			Rep = $(element).attr("id")
			req = "https://api.github.com/repos/" + User + "/" + Rep + "/contents/SCREENS?ref=master"
			$.get req, GetFirstImage, 'json'
	</script>