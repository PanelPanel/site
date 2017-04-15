	<?php snippet('header') ?>


<?php


$startDate = strtotime($page->start_date());
$endDate = strtotime($page->end_date());
$openDate = strtotime($page->open_date()); 
	
?>

  <main class="main" role="main">
    
    <header class="wrap">
	  <h1><?= $page->artists()->html() ?></h1>  
      <h1><?= $page->title()->html() ?></h1>
      <?php echo date('F j', $startDate) ?>–<?php echo date('F j', $endDate) ?>
      <br>
      <?php echo date('l M j, gA', $openDate) ?>
      <hr />
    </header>
    
    <div class="text wrap">
      
      <?= $page->description()->kirbytext() ?>
      
      <?= $page->description2()->kirbytext() ?>
      
      <?= $page->bio()->kirbytext() ?>

      
	<?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
		  <?php if($image->caption()->isNotEmpty()): ?>
	      <figcaption>
	        <?= $image->caption()->kirbytext() ?>
	      </figcaption>
	    <?php endif ?>
        </figure>
      <?php endforeach ?>
      
    </div>
    
    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>