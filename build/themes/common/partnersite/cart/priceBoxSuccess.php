<div style=""> 

<table width=100% class="priceboxtable">
<tr>
  <td><b><?php t('Product')?></b></td>
  <td width=200 nowrap align=right><b><?php t('Cost x 1')?></b></td>
  <td width=100 nowrap align=right><b><?php t('Col')?></b></td>
  <td width=100 nowrap align=right><b><?php t('Cost')?></b></td>
</tr>


<tr><td colspan=4>
                <hr class="dash_pricebox">
</td></tr>


<?php if($base_price > 0): ?>
<tr>
<td><?php echo $product->name ?> <?php if ($isEco) { echo 'Light'; } ?></td>
<td nowrap align="right"><?php echo price_ex($base_price) ?></td>
<td nowrap align="right">1</td>
<td nowrap align="right"><?php echo price_ex($base_price) ?></td>
</tr>
<?php endif ?>

<?php foreach($options as $option): ?>
<tr>
  <td><?php t($option['name']) ?></td>
  <td nowrap align="right"><?php echo price_ex($option['price']) ?> <?php echo $option['units_each'] ?></td>
  <td nowrap align="right"><?php 
  $count = $option['count'];
  
  switch ($option['slug']){
	case 'ram' : case 'disk-space' : case 'bandwidth' : if ($count>1) $count = '('.($option['min']*$option['count']).' '.$option['units'].') '.$count;break;
  }
  
  echo $count; 
  ?></td>
  <td nowrap align="right"><?php echo price($option['cost']) ?> CHF</td>
</tr>
<?php endforeach ?>
<?php if (isset($sla_type)):?>
    <tr>
        <td><?php t($sla_type) ?></td>
        <td nowrap align="right"><?php echo price_ex($sla_cost) ?> </td>
        <td nowrap align="right">-</td>
        <td nowrap align="right"><?php echo price($sla_cost) ?> CHF</td>
    </tr>
<?php endif ?>
<?php if($base_cost > 0): ?>
  <tr>
    <td><br><b><?php t('Billing cycle')?></b></td>
    <td nowrap></td>
    <td nowrap></td>
    <td nowrap></td>
  </tr>

  <tr><td colspan=4>
      <hr class="hrline2">
    </td></tr>

  <tr>
    <td><?php t('Months')?></td>
    <td nowrap align="right"><?php echo price_ex($price) ?></td>
    <td nowrap align="right"><?php echo $billing_cycle ?></td>
    <td nowrap align="right"><?php echo price_ex($base_cost) ?></td>
  </tr>
<?php endif ?>

<tr>
  <td><br><b><?php t('Other')?></b></td>
  <td nowrap></td>
  <td nowrap></td>
  <td nowrap></td>
</tr>

<tr><td colspan=4>
<hr class="hrline2">               
</td></tr>

<tr>
<td><?php t('Setup fee')?></td>
<td nowrap></td>
<td nowrap></td>
<td nowrap align="right"><?php t(price_ex($setup_fee)) ?></td>
</tr>
<!--
<tr>
<td><?php t('VAT (included)')?></td>
<td nowrap></td>
<td nowrap></td>
<td nowrap align="right"><?php echo price_ex($vat) ?></td>
</tr>
-->

<?php foreach($discounts as $discount): ?>
<?php if ($discount['amount'] == 0) { continue; } ?>
<tr>
  <td><?php t($discount['name']) ?></td>
  <td nowrap></td>
  <td nowrap align="right"><?php echo $discount['amount'] . ($discount['absolute'] ? ' CHF' : '%') ?></td>
  <td nowrap align="right">-<?php echo price_ex($discount['chip']) ?></td>
</tr>
<?php endforeach ?>

<?php if($base_cost>0 && !$loyalty): ?>
<tr>
<td colspan="4" align="right">
<a class="iframe zbutton blue small" href="<?php echo url_for('@voucher_choose?total='.$base_cost);?>" id="add_voucher"><?php t('Add voucher')?></a>
<?php if($cart->getVoucher()): ?>
<a href="javascript:;" id="remove_voucher" class="zbutton small"><?php t('Remove')?></a>
<?php endif ?>
<script>

$(document).ready(function () {

	$('#add_voucher').fancybox({
		'width': 670,
		'height': 500,
		'margin':15,
		'padding':1,
		'showCloseButton':true, 
		'scrolling':true,
		'hideOnOverlayClick':false,
		'onCleanup': function() { reloadPriceBox(); },
	});

	$("#remove_voucher").click(function() {
		$.get("<?php echo url_for('@newcart_remove_voucher');?>", function(data)
		{
			reloadPriceBox();
		});	
	});
});	

</script>
</td>
</tr>
<?php endif?>

<tr>
<td><br><b><?php t('Total')?></b>:</td>
<td nowrap></td>
<td nowrap></td>

<td nowrap></td>
</tr>

<tr><td colspan=4>
<hr class="hrline2">        
</td></tr>
<?php if ($loyalty == true): ?>
    <tr>
        <td><?php t('Loyalty points') ?></td>
        <td nowrap></td>
        <td nowrap></td>
        <td nowrap align="right"><font class="total"><?php echo price_ex($loyalty_price, '') ?></font></td>
    </tr>
    <tr>
        <td><br><b><?php t('Total prolongation price')?></b>:</td>
        <td nowrap></td>
        <td nowrap></td>

        <td nowrap></td>
    </tr>

    <tr><td colspan=4>
            <hr class="hrline2">
        </td></tr>
<?php endif ?>
    <tr>
        <td>CHF</td>
        <td nowrap></td>
        <td nowrap></td>
        <td nowrap align="right"><font class="total"><?php echo price_ex($total) ?></font></td>
    </tr>

    <tr>
        <td><font class="usd">USD</font></td>
        <td nowrap></td>
        <td nowrap></td>
        <td nowrap align="right"><font class="usd"><?php echo price_ex(usd($total), 'USD') ?></font></td>
    </tr>

    <tr>
        <td><font class="usd">EUR</font></td>
        <td nowrap></td>
        <td nowrap></td>
        <td nowrap align="right"><font class="usd"><?php echo price_ex(eur($total), 'EUR') ?></font></td>
    </tr>

</table>

</div>
