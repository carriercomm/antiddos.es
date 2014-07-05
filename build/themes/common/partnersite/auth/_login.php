

<div style="padding:15px 0px 0px 0px; ">

<?php if ($form->hasErrors()):?>
<!--# -->
<img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br><br>
<!--# -->
<?php endif?>
<?php echo $form->renderglobalErrors() ?>

<table width=100% border=0 CELLPADDING=0 CELLSPACING=0><tr><td width=280>

<form method="post">

<table border=0 CELLPADDING=6 CELLSPACING=0 width=100%>

<tr><td align=right><?php t('E-mail')?>:</td><td width=205>
<?php if ($form['username']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $form['username']->render(array('style' => 'width: 205px;','class'=>$class)) ?>
</td><td width=16><?php echo $form['username']->renderError() ?></td></tr>

<tr><td align=right><?php t('Password')?>:</td><td><input type="password" class="inputt<?php if ($form['password']->hasError()) echo ' Required' ?>" name="login[password]" id="login_password"  style="width:205px;"></td><td><?php echo $form['password']->renderError() ?></td></tr>
<?php if ($form->getOption('captcha')):?>

<tr> 
  <td align=right><?php t('Captcha')?>: <img src="<?php echo solar_image_url('q.png') ?>" class="question" tip="<?php t('captcha_help')?>"></td><td>
  <?php if ($form['captcha']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
  <?php echo $form['captcha']->render(array('style' => 'width: 100px;','class'=>$class)) ?>
  </td><td><?php echo $form['captcha']->renderError() ?></td>
</tr>
<?php endif?>
<?php echo $form->renderHiddenFields() ?>
<tr><td align=right>&nbsp;</td><td>

<table border=0 CELLPADDING=0 CELLSPACING=0><tr><td><?php echo $form['remember']->render(array('class'=>'checkbox')) ?></td><td> <?php t('Remember me')?></td></tr></table>

</td></tr>

<tr><td height=30>&nbsp;</td><td><INPUT TYPE="submit" class="zbutton sub green large" value="<?php t('Login')?>" style=""><br><br></td></tr>


</td></tr>
</table>

</form>






</td></tr></table>



