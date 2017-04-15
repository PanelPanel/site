<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
    
    <?php
    // check if exhibition TO BE FIXED
			if($item->uid()=="exhibitions"):
			?>
      <a class="is-active" data-show="<?php echo '#'.$item->uid(); ?>"><?= $item->title()->html() ?></a>
		    <?php else: ?>      
	  <a class="toShow" data-show="<?php echo '#'.$item->uid(); ?>"><?= $item->title()->html() ?></a>
	  <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
</nav>