<?php
	
	//email for event to be streamlined
	// TODO here and email template put conditionals if content is entered in the email page
	
	$thisPage = $page->parent();
	

	$openDate = strtotime($thisPage->opendate()); 
	
	$getRandom = str::quickRandom(7);

	//get identity images
	$myimage = new Asset('p/panel_w.png?' . $getRandom );
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<!-- If you delete this meta tag, the ground will open and swallow you. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
	
<?php echo css('assets/css/email.css') ?>
<style>
	
	
	h1.title {
		line-height: 1.25;
		font-weight: 500;
		font-size: 23px;
	}
	
	table.social {
/* 	padding:15px; */
	background-color:<?= $thisPage->bgcolor() ?>;
	
/* 	HEY YOU YOU HEY YOU */	
/* 	HEY YOU YOU HEY YOU */
/* 	HEY YOU YOU HEY YOU */
/* 	HEY YOU YOU HEY YOU */
/* 	HEY YOU YOU HEY YOU */
/* 	HEY YOU YOU HEY YOU */
/* 	HEY YOU YOU HEY YOU */

/* ALL CONTENT NEEDS ABSOLUTE LINKS TO FUNCTION PROPERLY WHEN FORWARDED*/	
}

	
	</style>

</head>
 
<body bgcolor="<?= $thisPage->bgcolor() ?>" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<!-- WRAP EVERYTHING -->
<table width="100% "bgcolor="<?= $thisPage->bgcolor() ?>">

<!-- HEADER -->
<table class="head-wrap" bgcolor="<?= $thisPage->bgcolor() ?>">
	<tr>
		<td></td>
		<td class="header container" align="">
			
			<!-- /content -->
			<div class="content">
				<table>
					<tr>
						<td width="45%"><a class="logo" href="http://panel.la"><img id="identity" width="100%" src="<?= $myimage->url() ?>" /></a></td>
						<td align="right"><div class="collapse">
							
							<small>
							<?php echo site()->open_days() .','. site()->open_hours() ?> <br>or by appointment<br><br>1914 Raymond Ave <br>Los Angeles, CA<br> 90007</small>
						</h6></td>
					</tr>
				</table>
			</div><!-- /content -->
			
		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->

<!-- BODY -->
<table class="body-wrap" bgcolor="<?= $thisPage->bgcolor() ?>">
	<tr>
		<td></td>
		<td class="container" align="" bgcolor="<?= $thisPage->bgcolor() ?>">
			
			<!-- content -->
			<div class="content">
				<table>
					<tr>
						<td>
						<!-- MAIN IMAGE -->	
						<?php
						// Get Cover Image
						$image = page()->coverimage()->toFile();
						
						// always check if the image exists!
						if($image):
						?>
							<p><img src="<?= $image->url() ?>" /></p><!-- /hero -->
							<h5><small style="color:white;">
								<?= $image->caption()->kirbytext() ?>
							</small></h5>										
						<?php endif ?>
        
						<!-- SHOW TITLE -->	
							<h1 class="title"><?= page()->title()->html() ?> 
						
							
							
						<!-- SHOW DATES -->		
							<h4><?php echo date('l', $openDate) ?> <?php echo date('F j, ga', $openDate) ?>	
							</h4>

							<br>
						
						<!-- SHOW DESCRIPTION -->	
							<?= page()->text()->kirbytext() ?>


					
						</td>
					</tr>
				</table>
			</div><!-- /content -->
			

			


<hr>
			
<!-- content -->
			<div class="content">
				<table bgcolor="<?= $thisPage->bgcolor() ?>">
					<tr>
						<td>
							
							<!-- social & contact -->
							<table bgcolor="<?= $thisPage->bgcolor() ?>" class="social" width="100%">
								<tr>
									<td>
										
										<!--- column 1 -->
										<div class="column">
											<table bgcolor="<?= $thisPage->bgcolor() ?>" cellpadding="" align="left">
										<tr>
											<td>				
												
												<p><small><a href="http://panel.la">PANEL L.A.</a> is a space for contemporary art in Los Angeles California, engaged in an experiment that hopes to support artists' practices holistically, and to bring process and collective interests more directly into the event of the exhibition.</small></p>
<br><br>
<a href="*|UNSUB|*">Unsubscribe</a> <br>
<div style="opacity:0">*|REWARDS|*</div>						
												
											</td>
										</tr>
									</table><!-- /column 1 -->
										</div>
										
										<!--- column 2 -->
										<div class="column">
											<table bgcolor="<?= $thisPage->bgcolor() ?>" cellpadding="" align="left">
										<tr>
											<td align="right">				
												
												
<br><br><br>												
<small><?php echo site()->open_days() .','. site()->open_hours() ?> <br>or by appointment<br><br>1914 Raymond Ave <br>Los Angeles, CA<br> 90007</small>
					
											</td>
										</tr>
									</table><!-- /column 2 -->	
										</div>
										
										<div class="clear"></div>
	
									</td>
								</tr>
							</table><!-- /social & contact -->
							
						</td>
					</tr>
				</table>
			</div><!-- /content -->
			

			

		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- END WRAP EVERYTHING -->
</table>


</body>
</html>