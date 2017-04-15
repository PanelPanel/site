<?php snippet('header') ?>

<?php

$openDate = strtotime($page->openDate()); 
	
?>

  <main class="main" role="main">
    
    <header class="wrap">
	  
	<?php foreach($page->participants()->yaml() as $participants): ?>
	    <h1><?php echo $participants['name'] ?></h1>
	<?php endforeach ?>	    
	    
	    
	  <h1><?= $page->artists()->html() ?></h1>  
      <h1><?= $page->title()->html() ?></h1>
      <?php echo date('l M j, gA', $openDate) ?><br>
      <hr />
    </header>
    
    <div class="text wrap">
      
      <?= $page->description()->kirbytext() ?>
      
		<?php if(!$page->description2()->empty()): ?>
		<?php echo $page->description2()->kirbytext() ?>
		<?php endif ?>
            
      <?= $page->bio()->kirbytext() ?>


      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
    </div>
    
    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>