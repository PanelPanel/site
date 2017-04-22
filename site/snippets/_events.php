  <h2>EVENTS</h2>     	
 
 <?php foreach(page('events')->children()->visible()->sortBy('sort', 'desc') as $show): ?>
 
      	<div class="event row">  
			<?php
			$openDate = strtotime($show->opendate()); 
			?>
        
			<?php
			// Get Cover Image
			$image = $show->coverimage()->toFile();
			
			// always check if the image exists!
			if($image):
			?>
				<figure class="cover-image">
				<img src="<?= $image->url() ?>" alt="">
				<figcaption>
				<?= $image->caption()->kirbytext() ?>
				</figcaption>
				</figure>
			
				
			<?php endif ?>
        
			<div class="column">
	            <header>
			      <h6><?= $show->type()->html() ?></h6>
				  <h3><?= $show->artists()->html() ?></h3>  
			      <h3 class="title"><?= $show->title()->html() ?></h3>
			      
			      <div class="dates">
			      <h3><?php echo date('l M j, ga', $openDate) ?></h3>
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
				    
				    $bioID = '';
				    
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
      	
      	<hr>
      		
        </div>

        <?php endforeach ?>
