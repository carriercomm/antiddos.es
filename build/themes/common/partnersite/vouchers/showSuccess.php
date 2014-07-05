<div class="title voucher"><?php t('Vouchers')?></div>
<div class="content">

<div id="add_voucher">
<form method="post">

<div class="forarea">
<?php echo $form->renderGlobalErrors() ?>

	<div style="width: 320px; border: 0px solid black; white-space:nowrap;" align=left>

<div class="ppm"><b><?php t('ID voucher')?> :</b></div>
<?php echo $form['number']->render(array('class'=>'inputt', 'style'=>'width:200px; height: 28px; margin-right: 5px;')) ?> 
<input type=submit class="zbutton green sub" value="<?php t('Check voucher')?>" style="width:auto;">
<?php echo $form['number']->renderError() ?>

	</div>

</div>

<?php echo $form->renderHiddenFields() ?>

</form>
</div>
<br>
<?php if (isset($voucher)):?>
<table border=0 cellpadding="0" cellspacing="1">
<tr>
  <td class="ticket_list"><?php t('ID voucher') ?></td><td class="ticket_list"><font class="voucher_id"><?php echo $voucher->number ?></font></td>
</tr>
<tr>		
	<td class="ticket_list"><?php t('Discount') ?></td><td class="ticket_list"><?php echo $voucher->discount ?>%</td>
</tr>
<tr>		
	<td class="ticket_list"><?php t('Min.Order Amount') ?></td><td class="ticket_list"><?php if ($voucher->amount_min>0) echo $voucher->amount_min.'  CHF'; else echo '---' ?></td>	
</tr>
<tr>		
  <td class="ticket_list"><?php t('Type') ?></td><td class="ticket_list"><?php t($voucher->type) ?></td>
</tr>
<tr>		
  <td class="ticket_list"><?php t('Active Until') ?></td><td class="ticket_list"><?php echo format_date($voucher->active_until,'D') ?></td>
</tr>
<tr>		
	<td class="ticket_list"><?php t('Status') ?></td><td class="ticket_list"><?php t($voucher->status) ?></td>
</tr>
</table>
<?php endif ?>

</div>