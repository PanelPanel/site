  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        //echo html::decode($site->copyright()->kirbytext())
      ?></p>

    
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<?= js('assets/js/simpleLightbox.js') ?>
<?= js('assets/js/main.js') ?>
</body>
</html>