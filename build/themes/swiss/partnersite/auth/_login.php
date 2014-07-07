<?php if($sf_user->isAuthenticated()): ?>

<!-- Authorized user -->
<div>
<a href="<?php echo url_for('@balance') ?>" class="xbutton blue"><?php t('Control Panel') ?></a>
<a href="<?php echo url_for('@newcart_list') ?>" class="xbutton blue"><?php t('View cart') ?></a>
<a href="<?php echo url_for('@logout') ?>" class="xbutton red"><?php t('Log out') ?></a>
<?php include_partial('global/inbox') ?>
</div>

<?php else: ?>

<!-- Unauthorized user -->
<form method="post" action="<?php echo url_for('@login') ?>"><?php echo $form->renderHiddenFields() ?>
<div class="form-description"><?php t('Login to manage your account,&nbsp;') ?><a href="<?php echo url_for('@register') ?>"><?php t('register') ?></a> <?php t(' or ') ?> <a href="<?php echo url_for('@password_recovery') ?>"><?php t('restore password') ?></a></div>
<div class="form-item name">
	<?php echo $form['username']->render(array('id' => 'edit-name', 'class' => 'form-text', 'type' => 'text', 'name' => 'name', 'placeholder' => 'Username')) ?>
</div>
<div class="form-item pass">
	<?php echo $form['password']->render(array('id' => 'edit-pass', 'class' => 'form-text', 'type' => 'password', 'name' => 'pass', 'placeholder' => 'Password')) ?>
</div>
<div class="form-actions">
	<input type="submit" id="edit-submit" name="op" value="<?php t('Log in') ?>" class="login_button form-submit">
</div>
</form>

<?php endif ?>