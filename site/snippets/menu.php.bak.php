<nav role="navigation">

  <ul class="menu cf">
<?php if($user = $site->user()): ?>	  
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

    

    </li>
    <?php endforeach ?>
	

	
	    <li>
	      <a href="<?php echo url('portfolio') ?>">Portfolio 1</a>
	    </li>
	 <?php endif ?>
	 <?php if($user = !$site->user()): ?>
	     <li>
	       <a href="<?php echo url('login') ?>">Login</a>
	     </li>
     <?php endif ?>
		
  </ul>

</nav>
