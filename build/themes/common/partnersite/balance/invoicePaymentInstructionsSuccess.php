<?php $sf_response->addMeta("title", __("View Invoice - Bank Transfer Instructions - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title invoice"><?php t('Invoices')?></div>
<div class="content">

<table border=0 width=100%  cellpadding="8" cellspacing="2">
<tr>
<td class="his i1 u6" style="padding: 10px 12px;" nowrap colspan=6>
<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td width=38><img src="<?php echo solar_image_url('invoice.png') ?>"></td>
<td><?php t('Invoice')?>: #<?php echo $invoice->getId()?></td>
<td align=right>
    <a class="zbutton blue small" href="<?php echo url_for('@invoice_show_html?id=' . $invoice->getId()) ?>"><?php t('HTML View')?></a>
    <a class="zbutton blue small" href="<?php echo url_for('@invoice_show_pdf?id=' . $invoice->getId()) ?>"><?php t('Download PDF')?></a>
	<?php if($invoice->getStatus() == 'u'): ?>
	<?php echo link_to(__('Cancel',array(),'partner_panel'), '@invoice_cancel?id=' . $invoice->getId(), array('confirm'=>__('Are you sure to cancel Invoice #%id% ?', array('%id%'=>$invoice->getId()), 'partner_panel'),'class'=>"zbutton small"))?>
    <?php endif?>
</td>
</tr></table>

  </td>
</tr>
<tr><td class="his i2 u4" width=200><b><?php t('Date')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo format_date($invoice->getDate(), 'D') ?></td></tr>
<tr><td class="his i2 u4"><b><?php t('Due Date')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo format_date($invoice->getDueDate(), 'D') ?></tr>
<tr><td class="his i2 u4"><b><?php t('Description')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo $invoice->getDescription() ?></td></tr>
<tr><td class="his i2 u4"><b><?php t('Amount')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo $invoice->getAmount() ?> CHF

<font class="cart_usd">
<?php if($invoice->converted_amount): ?>
<?php $arr = array(); foreach($invoice->converted_amount as $conv) { $arr[] = price($conv['amount']) . ' ' . $conv['name']; } ?>
(<?php echo join(', ', $arr) ?>)
<?php endif ?>
</font>

</td></tr>
<tr><td class="his i2 u3"><b><?php t('Status')?></b></td><td nowrap  class="his i2 u5" align=left><font class="status <?php echo invoice_status($invoice->getStatus()) ?>"><?php echo invoice_status($invoice->getStatus()) ?></font></td></tr>
</tr>

</table>


<div style="padding: 20px 10px;"> 

<a class="zbutton gray" href="<?php echo url_for('@invoice_list') ?>"><?php t('Back to invoice lists')?></a>

</div>

</div>
<div class="title invoice"><?php t('balance_send_bank')?> </div>
<div class="content">




<table border="0" cellpadding="8" cellspacing="2"  width="100%">
<tr><td class="his i1 u6" style="padding: 10px 12px;" colspan="6" nowrap="nowrap">


<table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td width="38"><img src="/images/partner/invoice.png"></td>
<td><b><?php t('bank_details')?></b></td>
</tr></tbody></table>


</td></tr>
<tr><td width=200 class="his i2 u4 bold"><?php t('Company') ?></b></td><td class="his i2 u4">Solar Communications GmbH</td></tr>
<tr><td class="his i2 u4 bold"><?php t('Address') ?></td><td class="his i2 u4"><?php echo nl2br($invoice->getFullAddress()) ?></td></tr>
</table>


<table border="0" cellpadding="8" cellspacing="2"  width="100%">
<tr><td width=200 class="his i2 u4 bold"><b><?php t('memo_for_bank_wire') ?></b></td><td class="his i2 u4"><b><?php t('Invoice')?> #<?php echo $invoice->getId() ?></td></tr>
</table>




<table border="0" cellpadding="8" cellspacing="2"  width="100%">
<tr><td width=200 class="his i2 u4 bold"><?php t('Bankname') ?></td><td class="his i2 u4"><?php echo ($method->payment_details['Bankname']) ?></td></tr>
<tr><td class="his i2 u4 bold"><?php t('Address') ?></td><td class="his i2 u4"><?php echo nl2br($method->payment_details['Address']) ?></td></tr>
<tr><td class="his i2 u4 bold"><?php t('SWIFT') ?></td><td class="his i2 u4"><?php echo ($method->payment_details['SWIFT']) ?></td></tr>
<tr><td class="his i2 u4 bold"><?php t('IBAN') ?></td><td class="his i2 u4"><?php echo ($method->payment_details['IBAN']) ?></td></tr>

</table>
 


</div>
