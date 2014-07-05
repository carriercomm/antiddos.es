<div class="title invoice"><?php t('Invoices')?></div>

<table width=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 class="extra_bar" height=40><tr><td valign=bottom>


<div style="height:20px;"></div>
<div style="margin-left: 20px;">
<table border=0 height=50  CELLPADDING=0 CELLSPACING=0><tr>
<?php 
foreach($tabs as $tabname => $tabtitle): 
$class = 'commonmenu white';
if ($tabname == $status) $class = 'commonmenuactive white';
?>
 <td valign=bottom><a href="<?php if ($tabname=='') { echo url_for('@invoice_list'); } else {echo url_for('@invoice_list?status=' . $tabname);}?>" class="<?php echo $class?>"><?php echo $tabtitle ?> <?php t('Invoices')?></a></td>
<?php endforeach ?>
</tr></table>
</div>
</td></tr></table>

<div class="title invoice">
<table width=100% cellpadding="0" cellspacing="0"><tr><td>
<?php echo invoice_status_all($status)?> <?php t('Invoices')?>
</td></tr></table>
</div>	

<div class="content"><?php t('You have no invoices.')?>

<br><br>
<hr class="hrline2"><br>

<div style="height: 6px; font-size: 0px;"></div>
<table border=0 cellpadding="0" cellspacing="0">
<tr>
<td valign="top">
<div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
</td>
<td valign="top">
<a href="<?php echo url_for('@balance_refill') ?>" class="zbutton green" style="margin-right: 7px;"><?php t('Add balance') ?></a>
</td>
</tr>
</table>


</div>

