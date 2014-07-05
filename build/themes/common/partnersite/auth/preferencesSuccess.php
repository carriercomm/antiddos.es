<?php $sf_response->addMeta("title", __("Account Preferences - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title pref"><?php t('Preferences')?></div>
<form method="post">
<?php echo $form->renderglobalErrors() ?>
<table cellpadding="0" cellspacing="0" width=100%><tr><td width=50% valign=top>

<div class="title notification"><?php t('Notification')?></div>
<div class="content">

<div class="forarea"><?php t('noti_div_1')?></div>
<div style="padding: 10px;">

<br>
<b><?php t('Notification means')?></b><br><br>

<table width=400 border=0>
<tr><td><?php t('E-mail')?>:</td><td colspan="2"></td></tr>
<tr>
<td width=200><?php echo $form['email']->render(array('class' => "inputt",'style'=>"width: 200px;"))?><?php echo $form['email']->renderError() ?></td>
<?php if ($settings->getEmail()):?>
<td align=center><img src="<?php echo solar_image_url('icon_check.gif') ?>"></td>
<td><input type="submit" value="ON" class="onoff on sub" onClick="$('#settings_email').val('');"></td>
<?php else:?>
<td align=center><img src="<?php echo solar_image_url('icon_x.gif') ?>"></td>
<td><input type="submit" value="OFF" class="onoff off sub"></td>
<?php endif?>
</tr>

<tr><td colspan=10> </td></tr>

<tr><td><?php t('Phone for SMS')?> : <img src="<?php echo solar_image_url('q.png') ?>" class="question" tip="<?php t('noti_tip_1')?>"></td><td></td><td></td></tr>
<tr>
<td width=200><?php echo $form['sms']->render(array('class' => "inputt",'style'=>"width: 200px;"))?><?php echo $form['sms']->renderError() ?></td>
<?php if ($settings->getSms()):?>
<td align=center><img src="<?php echo solar_image_url('icon_check.gif') ?>"></td>
<td><input type="submit" value="ON" class="onoff on sub"onClick="$('#settings_sms').val('');"></td>
<?php else:?>
<td align=center><img src="<?php echo solar_image_url('icon_x.gif') ?>"></td>
<td><input type="submit" value="OFF" class="onoff off sub"></td>
<?php endif?>
</tr>

<tr><td colspan=10> </td></tr>

<tr><td> 
<img src="<?php echo solar_image_url('icon_check.gif') ?>"> - <?php t('solution_on')?><br>
<img src="<?php echo solar_image_url('icon_x.gif') ?>"> - <?php t('solution_off')?>
</td></tr>



</table>

<br><Br><b><?php t('Notification reason')?></b><br><br>

<table width=400 border=0>
<tr><td width=22><?php echo $form['notice_news']->render(array('class' => 'checkbox')) ?></td><td><?php t('Company news')?></td></tr>
<tr><td width=22><?php echo $form['notice_balance']->render(array('class' => 'checkbox')) ?></td><td><?php t('Insufficient balance')?> </td></tr> 
<tr><td width=22><?php echo $form['auto_generate_invoices']->render(array('class' => 'checkbox')) ?></td><td><?php t('Sending invoices by mail for 14 days')?> </td></tr>

</td></tr></table>


<br><Br><b><?php t('Time zone')?></b><br><br>

<table width=400 border=0>
<tr><td>
<?php echo $form['timezone']->render()?><?php echo $form['timezone']->renderError()?>
<Br><br>
<input type="submit" value="<?php t('Save')?>" class="zbutton blue sub"> 

</td></tr></table>


</div>

</div>



</td><td valign=top>


<div class="title skin"><?php t('Skin')?></div>
<div class="content">

<?php t('auth_select_member_area')?><br><br>

<table width=300><tr><td>
<?php echo $form['skin']->render()?><?php echo $form['skin']->renderError()?>
</td></tr>
</table>




</div>

</td></tr></table>
<?php echo $form->renderHiddenFields() ?>
</form>

<br><br>