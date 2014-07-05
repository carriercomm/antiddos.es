

<?php if (!$send): ?> 
<form method="post">
<?php echo $form->renderGlobalErrors() ?>

<?php if ($form['name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>

<div class="ppm green"> <b><?php t('Your name')?>:</b></div> 

<table cellspacing="0" cellpadding="0"><tr><td><?php echo $form['name']->render(array('class' => 'contactform','style' => 'width:200px;')) ?></td><td width=10> </td><td width=20><?php echo '<font color="#8B4A4A"><b>'.$form['name']->renderError().'</b></font>' ?></td></tr></table>

<?php if ($form['email']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<div style="font-size: 0px; height: 5px;"></div>
<div class="ppm green"><b><?php t('Your E-mail')?>:</b></div> 

<table cellspacing="0" cellpadding="0"><tr><td><?php echo $form['email']->render(array('class' => 'contactform','style' => 'width:260px;')) ?></td><td width=10> </td><td width=20><?php echo '<font color="#8B4A4A"><b>'.$form['email']->renderError().'</b></font>' ?></td></tr></table>

<?php if ($form['subject']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>

<div style="font-size: 0px; height: 5px;"></div>
<div class="ppm green"><b><?php t('Subject')?>:</b></div> 

<table cellspacing="0" cellpadding="0"><tr><td><?php echo $form['subject']->render(array('class' => 'contactform','style' => 'width:260px;')) ?></td><td width=10> </td><td width=20><?php echo '<font color="#8B4A4A"><b>'.$form['subject']->renderError().'</b></font>' ?></td></tr></table>

<div style="font-size: 0px; height: 5px;"></div>
<div class="ppm green"><b><?php t('Message')?>:</b></div> 

<table cellspacing="0" cellpadding="0"><tr><td><?php echo $form['message']->render(array('class' => 'contactform','style' => 'width:500px; height: 150px;')) ?></td><td width=10> </td><td width=20><?php echo '<font color="#8B4A4A"><b>'.$form['message']->renderError().'</b></font>' ?></td></tr></table>

<?php if ($form['captcha']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<div style="font-size: 0px; height: 5px;"></div>
<div class="ppm green"><b><?php t('Captcha')?>: </b></div> 


<table cellspacing="0" cellpadding="0"><tr><td><?php echo $form['captcha']->render(array('class' => 'contactform','style' => 'width: 100px; margin-right: 10px; height: 29px;')) ?></td><td width=10> </td><td width=20><?php echo '<font color="#8B4A4A"><b>'.$form['captcha']->renderError().'</b></font>' ?></td></tr></table>

<div style="font-size: 0px; height: 25px;"></div>

<div align=left><input type="submit" value="<?php t('Send message')?>" class="xbutton blue large"></div>
<?php echo $form->renderHiddenFields() ?>
</form>
<br>
<?php else: ?>
Your message has been sent.
<?php endif ?>

<br><br>