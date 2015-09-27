<?php if(!$site->user()) go('/login') ?>
<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
	
	<?php if($user = $site->user()): ?>
		<?php $Name = $user->username() ?>
		<?php if($Name == 'admin' or $Name == 'cso'): ?>
			<!-- <?php snippet('projects') ?> -->
			
			<?php snippet('dashboard') ?>
			
		    <!-- <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
     -->
		      <!-- <figure class='dashboard'>
				  <img src="<?php echo $image->url() ?>" >
			  </figure> -->
				  
				  

<!--		    <?php endif ?> -->
		<?php endif ?>	
		<?php if($Name == 'portfolio'): ?>
			<?php snippet('portfolio') ?>
		<?php endif ?>
	<?php endif ?>
    

  </main>

<?php snippet('footer') ?>