<?php $sf_response->addMeta("title", __("View Shopping Cart - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title cart"><?php t('My Cart')?></div>

<div class="content">


<div style="padding: 20px;"><?php t('cart_div_1')?></div>
<div style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">

<table  width=100% border=0 cellspacing="12" cellpadding="2">
<tr>
  <td width=20 align=center><b>#</b></td>
  <td><b><?php t('Product')?></b></td>
  <td width=200 align=right><b><?php t('Cost')?> <?php t('per month')?> (<?php t('incl. VAT')?>)</b></td>
  <td width=30 align=right>&nbsp;</td>
  <td width=124><b><?php t('Actions')?></b></td>
</tr>
<tr><td colspan=5>
<hr class="hrline">


</td></tr>

<?php $i = 1 ?>
<?php if($count): ?>
<?php foreach($orders as $order): ?>
<tr>
  <td align=center><?php echo $i++ ?></td>
  <td><?php echo $order->getName() ?></td>
  <td align=right><?php if($order->getInvoiceId() !== null) echo '<font class="wait_payment">Waiting for payment</font>' ?><font class="cart_chf"><?php echo price($order->getCost()) ?> CHF</font><br>
	<font class="cart_usd"><?php echo price_ex(usd($order->getCost()), 'USD') ?></font><br>
	<font class="cart_usd"><?php echo price_ex(eur($order->getCost()), 'EUR') ?></font>
	</td>
  <td width=30 align=right>&nbsp;</td>
  <td width=124 nowrap nowrap="nowrap" style="white-space: nowrap;"><a href="<?php echo url_for('@cart_item?id=' . $order->getId()) ?>" class="zbutton blue small" style="margin-right: 7px;"><?php t('Edit')?></a><a href="<?php echo url_for('@cart_item_remove?id=' . $order->getId()) ?>" class="zbutton small"><?php t('Remove')?></a></td>
</tr>
<?php endforeach ?>
<?php else: ?>
<tr>
  <td colspan="5"><?php t('cart_empty')?></td>
</tr>
<?php endif ?>

<tr><td colspan="5">
<hr class="hrline">


</td></tr>
<tr>
  <td ><img src="<?php echo solar_image_url('money.png') ?>"></td>
  <td ><?php t('Total')?> <?php t('per month')?> (<?php t('incl. VAT')?>):</td>
  <td align=right  nowrap  nowrap="nowrap" style="white-space: nowrap;"><b><font class="cart_chf"><?php echo price($total) ?> CHF</b></font><br>
	<font class="cart_usd"><?php echo price_ex(usd($total), 'USD') ?></font><br>
	<font class="cart_usd"><?php echo price_ex(eur($total), 'EUR') ?></font>
	</td>
  <td width=30 align=right>&nbsp;</td>
  <td width=94> <?php if($count): ?><a href="<?php echo url_for('cart_clear') ?>" class="zbutton small"><?php t('Remove all')?></a><?php endif ?></td>
</tr>

</table>
</div>
<br>
<?php include_partial('newcart/voucher', array('total' => $total)) ?>
<div align=left>
<div style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">
<?php if($count): ?>
<table><tr><td width=28 valign="top"><input class="checkbox" id="register_accept" type="checkbox"></td>
<td><?php t('auth_i_accept', array('%terms%'=>'</td><td><a target="_blank" class="minic" href="'.url_for('@show_page?name=terms-of-service').'">'.__('Terms of Service',array(),'partner_panel').'</a></td><td>', '%policy%'=>'</td><td><a target="_blank" class="minic" href="'.url_for('@show_page?name=privacy-policy').'">'.__('Privacy policy',array(),'partner_panel').'</a>.'))?></td></tr></table>
<?php endif ?>
<div align=left style="padding: 20px 30px 10px 8px;">
<a href="<?php echo url_for('product_list') ?>" class="zbutton blue" style="margin-right: 7px;"><?php t('New order')?></a>
<?php if($count): ?>
<a link="<?php echo url_for('checkout') ?>" class="zbutton grey" id="payment"><?php t('Checkout')?></a>
<?php endif ?>
</div>


</div>
</div>


</div>



<script>

$(document).ready(function () {
<?php if(sfConfig::get('sf_web_debug')): ?>
  sfWebDebugToggleMenu();
<?php endif ?>

  $("#register_accept").click(function() {
    if ($(this).attr('checked'))
		{		
			$('#payment').attr('href',  $('#payment').attr('link'));
			$('#payment').removeClass('grey').addClass('orange');
		}	
		else
		{
			$('#payment').removeAttr('href');
			$('#payment').removeClass('orange').addClass('grey');
		}	
	});
	
	$('#add_voucher').fancybox({
		'width': 670,
		'height': 500,
		'margin':15,
		'padding':1,
		'showCloseButton':true, 
		'scrolling':true,
		//'scrolling':'no',
		'hideOnOverlayClick':false,
		'onClosed': function() {},
	});
});	
</script>
