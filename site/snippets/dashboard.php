<div class="dashboard">
  <section class="dashboard-row">
<?php if($user = $site->user()): ?>	  
    <?php foreach($pages->visible() as $p): ?>
   	 	<?php if($p->title()->html() != 'Portfolio' ): ?>	  
   
    <div class="dashboard-col">
      <a class=''  href="<?php echo $p->url() ?>"><h1><?php echo $p->title()->html() ?></h1></a>
	  
	  <ul>
		  <li><dt>In progress</dt></li>
		  <?php foreach($p->children() as $project): ?>
			  <?php  if(strpos($project->tags(), 'inprogress')): ?>
				<li>
					<a href="<?php  echo $project->url() ?>"><?php  echo $project->title()->html() ?>
								
								
									
								
					</a>
					
					
				</li>
		  	 	<?php endif ?>
				
				<?php  if($project->title()->html() == 'Next'): ?>
					<ul class="next-list">
					<li><dt>Next</dt></li>
					 <?php echo $project->text()->kirbytext() ?>
					 </ul>
				<?php endif ?>
				
		  <?php endforeach ?>
		 
	  </ul>
	  
    </div>

		<?php endif ?>
    <?php endforeach ?>
	
	 <?php endif ?>
	 
	 
	 
	 <!-- <?php if($user = !$site->user()): ?>
	     <li>
	       <a href="<?php echo url('login') ?>">Login</a>
	     </li>
     <?php endif ?> -->
		
  </section>

</div>

 <script type='text/coffeescript'>
		$(".dashboard-col").each (index, element) =>
			console.log $(element).position()
			if $(element).position().left is 60
				$(element).addClass("first")
			
 </script>