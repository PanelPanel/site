<?php
//get identity images
$myimage = new Asset('p/panel.png');

//get first color of first visible exhibition
$getColor = page('exhibitions')->children()->visible()->sortBy('sort', 'desc')->first()->bgcolor();

?>

  <header class="header-main" style="background-color:<?php echo $getColor; ?>;" role="banner">
    <div class="grid">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><?php echo thumb($myimage, array('width' => 600)); ?></a>
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>