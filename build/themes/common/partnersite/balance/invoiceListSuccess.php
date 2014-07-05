<div class="title invoice"><?php t('Invoices')?></div>

<table width=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 class="extra_bar"><tr><td valign=bottom>



<div style="margin-left: 20px;">
<table border=0 height=50  CELLPADDING=0 CELLSPACING=0><tr>
<?php 
foreach($tabs as $tabname => $tabtitle): 
$class = 'commonmenu white';
if ($tabname == $status) $class = 'commonmenuactive white';
?>
 <td valign=bottom>
	<?php if($counts[$tabname]>0):?>
	<table width=100% border=0 CELLPADDING=0 CELLSPACING=0><tr><td> </td><td align=right width=25>

	<div class="num_tab"><?php echo $counts[$tabname]?></div></div>

	</td></tr></table>
	<?php endif?> 
 <a href="<?php if ($tabname=='') { echo url_for('@invoice_list'); } else {echo url_for('@invoice_list?status=' . $tabname);}?>" class="<?php echo $class?>"><?php t($tabtitle.' Invoices')?></a>
</td>
<?php endforeach ?>
</tr></table>
</div>
</td></tr></table>

<div class="title invoice">
<table width=100% cellpadding="0" cellspacing="0" border=0><tr><td>
<?php t(invoice_status_all($status).' Invoices')?>
</td><td align=right>


<div class="col"><?php echo $pager->getNbResults();?></div>


</td></tr></table>
</div>

<div class="content">

<div style="padding:10px 10px;"><?php t('div_invoice_1')?></div>

<div style="padding: 5px 9px;"><a href="<?php echo url_for('@balance_refill') ?>" class="zbutton green" style="margin-right: 7px;"><?php t('Add invoice') ?></a></div>
<br>


<table cellpadding="6"><tr>
  <td nowrap><a class="billink" href="<?php echo url_for(sort_url('date')) ?>"><?php t('Date') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
  <td nowrap><a class="billink" href="<?php echo url_for(sort_url('due_date')) ?>"><?php t('Due Date') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
  <td nowrap><a class="billink" href="<?php echo url_for(sort_url('amount')) ?>"><?php t('Amount') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
  <td nowrap><a class="billink" href="<?php echo url_for(sort_url('status')) ?>"><?php t('Status') ?><img src="<?php echo solar_image_url('updown.png') ?>" border=0></a></td>
</tr></table>

<br>

<div style="padding: 0px 0px; margin-left: 8px;">
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>


<?php foreach($invoices as $invoice): ?>

<div class="inv_block" style="">

<table width=100%  cellpadding="4" cellspacing="0">
<tr><td class="his i1 u6" style="padding: 10px 12px;" nowrap colspan=6>
<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td width=38><img src="<?php echo solar_image_url('invoice.png') ?>"></td><td><?php t('Invoice')?>: #<?php echo $invoice->getId()?></td></tr></table>
</td></tr>
<tr><td width=50% nowrap align=center class="his i2 u4 big"><b><?php t('Date') ?></b><br><?php echo format_date($invoice->getDate(), 'D') ?>
<td nowrap align=center  class="his i2 u4 big"><b><?php t('Due Date') ?></b><br><?php echo format_date($invoice->getDueDate(), 'D') ?></td></tr>
<tr><td nowrap align=center colspan=2 class="his i2 u4 big"><b><?php t('Description') ?></b><br><?php echo $invoice->getDescription() ?></td></tr>
<tr><td nowrap align=center colspan=2 class="his i2 u4 big"><b><?php t('Amount') ?></b><br><?php echo price($invoice->getAmount()) ?> CHF</td></tr>
<tr><td nowrap align=center colspan=2 class="his i2 u4 big"><font class="status <?php echo invoice_status($invoice->getStatus()) ?>"><?php t(invoice_status($invoice->getStatus())) ?></font></td></tr>
<tr><td colspan=2 class="his i2 u7 big"  align=center>
	<a class="zbutton green small" href="<?php echo url_for('@invoice_show?id=' . $invoice->getId()) ?>"><?php t('View')?></a>
	<?php if($invoice->getStatus() == 'u'): ?>
	<?php echo link_to(__('Cancel',array(),'partner_panel'), '@invoice_cancel?id=' . $invoice->getId(), array('confirm'=>__('Are you sure to cancel Invoice #%id% ?', array('%id%'=>$invoice->getId()), 'partner_panel'),'class'=>"zbutton small"))?>
    <?php endif?>
</td></tr>
</table>
</div>

<?php endforeach ?>

<br><br>
<div style="padding: 0px 0px;  margin-left: 8px;">
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>



</div>
