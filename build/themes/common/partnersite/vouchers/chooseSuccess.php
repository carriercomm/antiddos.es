<div class="bar_content">
<div class="title voucher"><?php t('Vouchers')?></div>
<div class="content">
<!--<?php t('voucher_discount_text') ?>-->
<div id="add_voucher">
<form method="post">

<div class="forarea">
<?php echo $form->renderGlobalErrors() ?>

	<div align=center>
	<div style="width: 320px; border: 0px solid black; white-space:nowrap;" align=left>

<div class="ppm"><b><?php t('ID voucher')?> :</b></div>
<?php echo $form['number']->render(array('class'=>'inputt', 'style'=>'width:200px; height: 28px; margin-right: 5px;')) ?> 
<input type=submit class="zbutton green sub" value="<?php t('Add voucher')?>" style="width:auto;">
<?php echo $form['number']->renderError() ?>

	</div>
	</div>

</div>

<?php echo $form->renderHiddenFields() ?>

</form>
</div>

<?php if (isset($vouchers)&&count($vouchers)):?>
<table border=0 cellpadding="0" cellspacing="1" width=100%>
<tr>
  <td align=center width=70 class="ticket_sub i1"><a class="billink" href="<?php echo url_for(sort_url('number')) ?>"><?php t('ID voucher') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
	<td align=left width=30 class="ticket_sub i2"><a class="billink" href="<?php echo url_for(sort_url('discount')) ?>"><?php t('Discount') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
	<td align=left width=130 class="ticket_sub i2"><a class="billink" href="<?php echo url_for(sort_url('amount_min')) ?>"><?php t('Min.Order Amount') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>	
  <td align=left width=70 class="ticket_sub i2"><a class="billink" href="<?php echo url_for(sort_url('type')) ?>"><?php t('Type') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
	<td align=left width=120 class="ticket_sub i2"><a class="billink" href="<?php echo url_for(sort_url('active_until')) ?>"><?php t('Active Until') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
  <td align=left width=90 class="ticket_sub i3"><b><?php t('Action')?></b></td>
</tr>

<?php foreach($vouchers as $voucher): ?>
<tr>
  <td align=center class="ticket_list"><font class="voucher_id"><?php echo $voucher->number ?></font></td>
	<td class="ticket_list"><?php echo $voucher->discount ?>%</td>
	<td class="ticket_list"><?php if ($voucher->amount_min>0) echo $voucher->amount_min.'  CHF'; else echo '---' ?></td>	
  <td class="ticket_list"><?php t($voucher->type) ?></td>
	<td class="ticket_list"><?php echo format_date($voucher->active_until,'D') ?></td>
  <td class="ticket_list">
		<?php if ($total>=$voucher->amount_min):?>
		<form method="post">
			<input type="hidden" value="<?php echo $voucher->getId() ?>" name="id" />
			<input type="submit" value="<?php echo t('Insert') ?>" class="zbutton blue">
		</form>	
		<?php else:?>
		---
		<?php endif?>
		</td>	
</tr>
<?php endforeach ?>
</table>

</div>

<div style="padding: 8px 30px;" align=right>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>
<?php endif ?>
</div>