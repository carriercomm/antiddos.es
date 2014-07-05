
<?php if($sf_user->isAuthenticated()): ?>




<div class="login" style="height: 44px;" valign=middle>

<div style="height:3px; font-size: 0px;"> </div>

<table border=0 height=44 nowrap nowrap="nowrap" style="white-space: nowrap;"><tr><td align=right nowrap nowrap="nowrap" style="white-space: nowrap;">
<a href="<?php echo url_for('@balance') ?>" class="xbutton blue"><?php t('Control Panel') ?></a>
<a href="<?php echo url_for('@newcart_list') ?>" class="xbutton blue"><?php t('View cart') ?></a>
<a href="<?php echo url_for('@logout') ?>" class="xbutton red"><?php t('Log out') ?></a>
</td></tr></table>


</div>




<?php else: ?>


<div class="login" style="height: 48px; text-align: right;" valign=middle>


<table border=0 cellpadding="0" cellspacing="5" width=100%  nowrap nowrap="nowrap" style="white-space: nowrap;" >
<tr>
<td align=right>

<form method="post" action="<?php echo url_for('@login') ?>" style="display:inline;"><?php echo $form->renderHiddenFields() ?>
<table border=0 cellpadding="0" cellspacing="0"><tr>
<td><?php echo $form['username']->render(array('class' => 'login_field','style'=>'margin-right: 3px;')) ?></td>
<td><?php echo $form['password']->render(array('class' => 'login_field','style'=>'margin-right: 3px;')) ?></td>
<td><input type="submit" class="login_button" value="" style="margin-right: 2px;"></td>
</tr></table>
</form>
</tr>
<tr>
<td>
<div style="margin-right: 32px;"><a href="<?php echo url_for('@register') ?>" class="pm_link"><?php t('Registration') ?></a> / <a href="<?php echo url_for('@password_recovery') ?>" class="pm_link"><?php t('Lost password') ?></a></div>
</td>
</tr></table>


</div>

 



<?php endif ?>

