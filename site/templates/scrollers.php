 <?php //get newest Front ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>PANEL</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Panel"/>

<?php snippet('scss') ?>

</head>

 <?php foreach(page('front')->children()->visible()->sortBy('sort', 'desc') as $item): ?>

<body>
	<div class="row free-width intro-scroll">
            <div class="column fixed">
            	<div id="intro-scroll" class="larger">
					<?= $item->column1()->kirbytext() ?>
            	</div>
            </div>
            <div class="column fixed">
            	<div id="intro-scroll3">
				<?= $item->column2()->kirbytext() ?>
            	</div>
            </div>
            <div class="column fixed">
            	<div id="intro-scroll2">
	            <?= $item->column3()->kirbytext() ?>	
            	</div>
            </div>
		</div>
</body>

 <?php endforeach ?>

</html>

