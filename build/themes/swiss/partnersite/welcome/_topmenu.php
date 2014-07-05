<?php $mkeys = array_keys($sf_data->getRaw('menu')); ?>
<?php $lastkey = array_pop($mkeys); ?>


<div class="menubarcenter"><center>
<table cellpadding="0" cellspacing="0" border="0" height=55><tr>
<?php foreach($menu as $link => $title): ?>
<td  nowrap><a href="<?php echo url_for($link) ?>" class="mainmenu"><?php t($title) ?></a></td>

  <?php if($link != $lastkey): ?>
<td width=2><img src="<?php echo solar_template_image_url('menu_tr.png') ?>"></td>
  <?php endif ?>




<?php endforeach ?>
</tr></table>

</center>
</div>
</div>
						<!-- End region header bottom -->
						
			
		<!-- End header group -->
		
		<!-- Main group <div class="main"> -->
    
				
			
						
		
										

