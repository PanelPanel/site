<?php

//get first color of first visible exhibition
$getColor = page('exhibitions')->children()->visible()->sortBy('sort', 'desc')->first()->bgcolor();

$getRandom = str::quickRandom(7);

//get identity images
$myimage = new Asset('p/panel.png?' . $getRandom );

?>

  <header class="header-main" style="background-color:<?php echo $getColor; ?>;" role="banner">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><img src="<?php echo $myimage->url() ?>"/></a>
      </div>

      <?php snippet('menu') ?>

    
    <?php snippet('_notifications') ?>

  </header>