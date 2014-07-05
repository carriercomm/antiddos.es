

<div class="title voucher"><?php t('Vouchers')?></div>
<div class="content">

<div class="div_2"><?php t('your_vouchers_list')?></div> 

<br>
<form method="post">
<div style="" id="add_voucher" align=right>

<table border=0 cellpadding="2" cellspacing="0">
<tr> 
  <td>

<div class="forarea">
<?php echo $form->renderGlobalErrors() ?>


<div class="ppm"><b><?php t('ID voucher')?> :</b></div>
<?php echo $form['number']->render(array('class'=>'inputt', 'style'=>'width:200px; margin-right: 5px;')) ?> 
<input type=submit class="zbutton green sub" value="<?php t('Add')?>" style="width:110px;">
<?php echo $form['number']->renderError() ?>



</div>

<?php echo $form->renderHiddenFields() ?>

</td></tr>
</table>
</div>
</form>


<br>
<?php sort_url('number');?>
<table border=0 cellpadding="2" cellspacing="2" width=100%>
<tr>
  <td align=center width=90 class="ticket_sub i1" nowrap><a class="billink" href="<?php echo url_for(sort_url('number')) ?>"><?php t('ID voucher') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
	<td align=left width=30 class="ticket_sub i2" nowrap><a class="billink" href="<?php echo url_for(sort_url('discount')) ?>"><?php t('Discount') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
	<td align=left width=110 class="ticket_sub i2" nowrap><a class="billink" href="<?php echo url_for(sort_url('amount_min')) ?>"><?php t('Min.Order Amount') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
  <td align=left width=70 class="ticket_sub i2" nowrap><a class="billink" href="<?php echo url_for(sort_url('type')) ?>"><?php t('Type') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
	<td align=left width=120 class="ticket_sub i2" nowrap><a class="billink" href="<?php echo url_for(sort_url('active_until')) ?>"><?php t('Active Until') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
  <td align=left width=90 class="ticket_sub i3" nowrap><a class="billink" href="<?php echo url_for(sort_url('status')) ?>"><?php t('Status') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
</tr>

<?php if (count($vouchers)):?>
<?php foreach($vouchers as $voucher): ?>
<tr>
  <td align=center class="ticket_list"><font class="voucher_id"><?php echo $voucher->number ?></font></td>
	<td class="ticket_list"><?php echo $voucher->discount ?>%</td>
	<td class="ticket_list"><?php if ($voucher->amount_min>0) echo $voucher->amount_min.'  CHF'; else echo '---' ?></td>
  <td class="ticket_list"><?php t($voucher->type) ?></td>
	<td class="ticket_list"><?php echo format_date($voucher->active_until,'D') ?></td>
  <td class="ticket_list"><font class="status <?php echo $voucher->status ?>"><?php t($voucher->status) ?></font></td>	
</tr>
<?php endforeach ?>
<?php else:?>
<tr>
  <td class="ticket_list" colspan="6"><?php t('voucer_list_empty')?></td>
</tr>
<?php endif ?>


</table>


</div>

<div style="padding: 8px 30px;" align=right>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>
