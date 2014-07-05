<div class="title recovery"><?php t('Password recovery')?></div>
<div class="content">
<p><?php t('auth_use_form')?></p>
<form method="post">


<?php echo $form->renderGlobalErrors() ?>

<br>
<div class="forarea">
<?php if ($form->hasErrors()):?>
<!--# -->
<img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br><br>
<!--# -->
<?php endif?>
<table border=0>
<tr> 
  <td align=left><div class="ppm"><?php t('E-mail')?></div>

<table><tr><td>
<?php if ($form['email_address']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $form['email_address']->render(array('class' => $class, 'style'=>'width:200px;')) ?></td><td>
<?php echo $form['email_address']->renderError() ?></td></tr></table>

</td>
</tr> 
<tr> 
  <td align=left>


<div class="ppm"><?php t('Captcha')?><img src="<?php echo solar_image_url('q.png') ?>" class="question" tip="<?php t('captcha_help')?>"></div>
<table><tr><td>
<?php if ($form['captcha']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
  <?php echo $form['captcha']->render(array('class' => $class,'style'=>'width:80px;')) ?>
</td><td>
<?php echo $form['captcha']->renderError() ?>
</td></tr></table>


  </td> 
</tr>

<?php echo $form->renderHiddenFields() ?>

<tr><td colspan="2">

<br>
<INPUT TYPE="submit" class="zbutton sub blue"  value="<?php t('Restore password')?>" style="width:auto;">
<br>

</td></tr>
</table>

</div>

</form>

</div>