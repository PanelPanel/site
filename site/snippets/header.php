<?php
//get identity images
$myimage = new Asset('p/panel.png');

//get first color of first visible exhibition
$getColor = page('exhibitions')->children()->visible()->sortBy('sort', 'desc')->first()->bgcolor();

$getRandom = str::quickRandom(5);

?>

  <header class="header-main" style="background-color:<?php echo $getColor; ?>;" role="banner">
    <div class="grid">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><img src="<?php echo thumb($myimage, array('width' => 600))->url() .'?'. $getRandom; ?>"/></a>
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>