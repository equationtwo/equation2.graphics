<nav role="navigation">

  <ul class="menu cf">
<?php if($user = $site->user()): ?>	  
	  
		<?php $Name = $user->username() ?>
		<?php if($Name == 'admin' or $Name == 'cso'): ?>
		    <li>
		      <a id="projects" href="<?php echo url('projects') ?>">Design</a>
		    </li>
		    <li>
		      <a id="web" href="<?php echo url('web') ?>">Web</a>
		    </li>
		    <li>
		      <a id="development" href="<?php echo url('development') ?>">Development</a>
		    </li>
		    <li>
		      <a id="development" href="<?php echo url('solutions') ?>">Solutions</a>
		    </li>
		    
			<?php if($Name == 'admin'): ?>
		    <li>
		      <a href="<?php echo url('panel') ?>">Panel</a>
		    </li>
			<?php endif ?>
		<?php endif ?>
		<?php if($Name == 'portfolio'): ?>
	    <li>
	      <a href="<?php echo url('portfolio') ?>">Portfolio</a>
		  <a href="<?php echo url('about') ?>">About</a>
	    </li>
		<?php endif ?>
	    
	 <?php endif ?>
	 <?php if($user = !$site->user()): ?>
	     <li>
	       <a href="<?php echo url('login') ?>">Login</a>
	     </li>
     <?php endif ?>
		
  </ul>

</nav>

 <script type='text/coffeescript'>
		current = window.location.pathname.split("/")[1] 
		$("#" + current).addClass("current")
 </script>