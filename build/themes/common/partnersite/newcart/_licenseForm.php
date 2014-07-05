<div class="title conf"><?php t('Options')?></div>
<div class="content">
<div style=""> 

<?php if ($form->hasErrors()):?>
<!--# -->
<img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br><br>
<!--# -->
<?php endif?>




<div class="ppm"><?php t('ip_address')?></div>
<table  border="0" cellpadding="0" cellspacing="0"><tr><td>
<?php if ($form['ip']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $form['ip']->render(array('class' => $class,'style'=>'width:200px;')) ?>
</td><td width=5></td><td>
<?php echo $form['ip']->renderError() ?>
</td></tr></table>


<div class="ppm"><?php t('please_comment')?></div>

<?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => '', 'refresh'=>'false')) ?>

</div>
</div>

