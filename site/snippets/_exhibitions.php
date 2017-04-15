 
 <?php foreach(page('exhibitions')->children()->visible()->sortBy('sort', 'desc') as $show): ?>
      	
      	<div class="exhibition row" style="background-color:<?= $show->bgcolor() ?>">  
			<?php
			$startDate = strtotime($show->start_date());
			$endDate = strtotime($show->end_date());
			$openDate = strtotime($show->open_date()); 
			?>
        
			<?php
			// Get Cover Image
			$image = $show->cover_image()->toFile();
			
			// always check if the image exists!
			if($image):
			?>
			<div class="column">
				<figure class="cover-image">
				<img src="<?= $image->url() ?>" alt="">
				<figcaption>
				<?= $image->caption()->kirbytext() ?>
				</figcaption>
				</figure>
				</div>
				
			<?php endif ?>
        
			<div class="column">
	            <header>
			      <h6>Exhibition</h6>
				  <h1><?= $show->artists()->html() ?></h1>  
			      <h1 class="title"><?= $show->title()->html() ?></h1>
			      
			      <div class="dates">
			      <h2><?php echo date('F j', $startDate) ?>–<?php echo date('F j', $endDate) ?></h2>
			      <h6>Opens</h6>
			      <h2><?php echo date('l M j, ga', $openDate) ?></h2>
			      </div>
			    </header>
			    
			    <div class="description">
			      <?= $show->description()->kirbytext() ?>	      
			    </div>
			    <div class="description2">
				    <?= $show->description2()->kirbytext() ?>
				</div>
			    
				<?php 
					
					 $slideshowId = '';
					
					if(!$show->documentation()->empty()): 
					
					$slideshowId = '#'.$show->uid().'-slideshow';
					
					?>
					<button class="button button-outline">
					<a class="toShow" data-show="<?php echo $slideshowId; ?>">
					Documentation
					</a>
					</button>
				<?php endif ?>
			    			    
			    <?php 
				    
				    $bioId = '';
				    
				    if(!$show->bio()->empty()): 
				    
				    $bioID= '#'.$show->uid().'-bio';
			    ?>
			   
			   <button class="button button-outline"> 
			   <a class="toShow" data-show="<?php echo $bioID;  ?>">
				   Biography
				</a>
				</button>
				
				<?php endif ?>
			    
			</div> <!-- column -->	
			
			
		    <div class="bio hide" id="<?php echo substr($bioID, 1); ?>">
			    <h6>Biography</h6>
			    <?= $show->bio()->kirbytext() ?>
			</div>
			
			<div class="slideshow hide" id="<?php echo substr($slideshowId, 1); ?>">
			<h6>Documentation</h6>
			<br>
				<?php foreach($show->documentation()->yaml() as $doc): ?>

				   <?php 
					  // try to get an image object from the filename
					  $image = $show->image($doc);
					  // check if the image object exists
					  if($image): ?>
					  	<a href="<?= $image->url() ?>" alt="<?= $image->title()->html() ?>" title="<?= $image->caption()->kirbytext() ?>">
					  	<?php  echo thumb($image, array('width' => 150, 'grayscale' => true)) ?>
					  	</a>
					  <?php endif ?>
	
				<?php endforeach ?>
			
			</div>
      		
        </div>

        <?php endforeach ?>
