<center>
<div class="livechat_h1"><?php t('LIVECHAT')?></div>

<div class="chatwelcome" style="width: 300px; background-color: white;">
<?php t('chat_welcome', array('%site_name%'=>sfConfig::get('solar_site')->getName()))?>
</div>
<br>

<div class="chatwelcome" style="width: 300px;">
	<div style="padding: 10px; text-align: left;">
	<?php t('chat_enter_form')?><br><br>

	<form method="post">
	<?php echo $form->renderGlobalErrors() ?>
	<?php if ($form['name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
	<div class="ppm"><b><?php t('Your name')?>:</b></div> 

	<table cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<?php echo $form['name']->render(array('class' => $class,'style' => 'height: 29px;width:200px;')) ?>
		</td>
		<td width=10> </td>
		<td width=20>
			<?php echo '<font color="#8B4A4A"><b>'.$form['name']->renderError().'</b></font>' ?>
		</td>
	</tr>
	</table>

	<?php if ($form['email']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>

	<div class="ppm"><b><?php t('Your E-mail')?>:</b></div> 
	<table cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<?php echo $form['email']->render(array('class' => $class,'style' => 'height: 29px;width:260px;')) ?>
		</td>
		<td width=10> </td>
		<td width=20>
			<?php echo '<font color="#8B4A4A"><b>'.$form['email']->renderError().'</b></font>' ?>
		</td>
	</tr>
	</table>
	
	<?php if ($form['department']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>

	<div class="ppm"><b><?php t('Department')?>:</b></div> 
	<table cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<?php echo $form['department']->render(array('class' => $class,'style' => 'height: 29px;width:260px;')) ?>
		</td>
		<td width=10> </td>
		<td width=20>
			<?php echo '<font color="#8B4A4A"><b>'.$form['department']->renderError().'</b></font>' ?>
		</td>
	</tr>
	</table>

	<?php if ($form['subject']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>

	<div class="ppm"><b><?php t('Subject')?>:</b></div> 
	<table cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<?php echo $form['subject']->render(array('class' => $class,'style' => 'height: 29px;width:260px;')) ?>
		</td>
		<td width=10> </td>
		<td width=20>
			<?php echo '<font color="#8B4A4A"><b>'.$form['subject']->renderError().'</b></font>' ?>
		</td>
	</tr>
	</table>

	<?php if ($form['captcha']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
	<div class="ppm">
		<b>
		<?php t('Captcha')?>: <img src="<?php echo solar_image_url('q.png') ?>" class="question" tip="<?php t('captcha_help')?>">
		</b>
	</div> 

	<table cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<?php echo $form['captcha']->render(array('class' => $class,'style' => 'width: 100px; height: 29px;')) ?>
		</td>
		<td width=10> </td>
		<td width=20>
			<?php echo '<font color="#8B4A4A"><b>'.$form['captcha']->renderError().'</b></font>' ?>
		</td>
	</tr>
	</table>

	<br><br>
	<div align=center><input type="submit" value="<?php t('ENTER')?>" class="zbutton blue large"></div>
	<?php echo $form->renderHiddenFields() ?>
	</form>
	</div>
	
</div>

<div style="height: 10px; font-size: 0px;">&nbsp;</div>
<?php include_component('welcome', 'language') ?>
<br><br><br>
</center>