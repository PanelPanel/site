<?php snippet('head') ?>

  <main class="main" role="main">
<div class="row">
  
  <section id="about" class="hide">    
     <?php snippet('_about') ?> 	      
  </section>

  <section id="contact" class="hide">    
     <?php snippet('_contact') ?> 	      
  </section>

  <section id="events" class="hide">    
     <?php snippet('_events') ?> 	      
  </section>
      
  <section id="exhibitions" class="exhibitions column">
	  <?php snippet('header') ?>
      <?php snippet('_exhibitions') ?>
      	      
   </section>
</div>	


  </main>
  
<?php snippet('footer') ?>