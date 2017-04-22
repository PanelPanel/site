 <?php //get newest Notifcation post

$notifications = page('notifications')
          ->children()
          ->visible()
          ->filter(function($child) {
            return $child->date(null, 'enddate') > time();
          });
 ?>
  
 <?php foreach($notifications as $notification): ?>
 		<a class="toShow" data-show="#events">
      	<div class="notification">  
		  	<div>
				<h6><?= $notification->title() ?></h6>
				<?= $notification->text()->html() ?>			         		
		  	</div>
        </div>
 		</a>

 <?php endforeach ?>
