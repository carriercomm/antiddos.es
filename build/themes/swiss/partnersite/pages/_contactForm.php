<?php if (!$send): ?> 
<form method="post">
<?php echo $form->renderGlobalErrors() ?>
<div>
	<div class="form-item name">
		<?php if ($form['name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
		<?php echo $form['name']->render(array('class' => 'form-text', 'name' => 'name', 'placeholder' => 'Name*', 'type' => 'text')) ?>
		<?php echo '<font color="#8B4A4A"><b>' . $form['name']->renderError() . '</b></font>' ?>
	</div>
	<div class="form-item email">
		<?php if ($form['email']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
		<?php echo $form['email']->render(array('class' => 'form-text', 'name' => 'email', 'placeholder' => 'Email*', 'type' => 'text')) ?>
		<?php echo '<font color="#8B4A4A"><b>' . $form['email']->renderError() . '</b></font>' ?>
	</div>
	<div class="form-item subject">
		<?php if ($form['subject']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
		<?php echo $form['subject']->render(array('class' => 'form-text', 'name' => 'subject', 'placeholder' => 'Subject*', 'type' => 'text')) ?>
		<?php echo '<font color="#8B4A4A"><b>' . $form['subject']->renderError() . '</b></font>' ?>
	</div>
	<div class="form-item your-message">
		<?php echo $form['message']->render(array('class' => 'form-textarea', 'name' => 'message', 'placeholder' => 'Your message*', 'type' => 'text')) ?>
		<?php echo '<font color="#8B4A4A"><b>'.$form['message']->renderError().'</b></font>' ?>
	</div>
	<div class="form-captcha">
		<?php if ($form['captcha']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
		<?php echo $form['captcha']->render(array('class' => 'form-text', 'name' => 'captcha', 'placeholder' => 'Security code*', 'type' => 'text')) ?>
		<?php echo '<font color="#8B4A4A"><b>'.$form['captcha']->renderError().'</b></font>' ?>
	</div>
	<div class="form-actions">
		<input type="submit" name="op" value="<?php t('Send message')?>" class="form-submit">
	</div>
</div>
<?php echo $form->renderHiddenFields() ?>
</form>
<?php else: ?>
<h3><center>Your message has been sent.</center></h3>
<?php endif ?>