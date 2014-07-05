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
<?php if(count($cart->getItems()) > 0): ?>
<?php foreach($cart->getItems() as $item): ?>
<tr>
  <td align=center><?php echo $i++ ?></td>
  <td><?php echo $item->getName() ?></td>
  <td align=right>
  <?php if($item->getInvoiceId()): ?>
    <font class="wait_payment">Waiting for payment (<?php echo link_to('Inv. ' . $item->getInvoiceId() . ')', '@invoice_show?id=' . $item->getInvoiceId()) ?></font>
  <?php endif ?>
  <?php if ($item->getPayViaLoyalty() == true):?>
      <font class="cart_chf"><?php echo price($item->getPrice()) ?> <?php t('Loyalty points') ?></font><br>
  <?php else: ?>
      <font class="cart_chf"><?php echo price($item->getPrice()) ?> CHF</font><br>
      <font class="cart_usd"><?php echo price_ex(usd($item->getPrice()), 'USD') ?></font><br>
      <font class="cart_usd"><?php echo price_ex(eur($item->getPrice()), 'EUR') ?></font>
  <?php endif ?>
	</td>
  <td width=30 align=right>&nbsp;</td>
  <td width=124 nowrap nowrap="nowrap" style="white-space: nowrap;"><a href="<?php echo url_for('@newcart_item_edit?id=' . $item->getId()) ?>" class="zbutton blue small" style="margin-right: 7px;"><?php t('Edit')?></a><a href="<?php echo url_for('@newcart_item_delete?id=' . $item->getId()) ?>" class="zbutton small"><?php t('Remove')?></a></td>
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
  <td align=right  nowrap  nowrap="nowrap" style="white-space: nowrap;"><b><font class="cart_chf"><?php echo price($cart->getTotal()) ?> CHF</b></font><br>
	<font class="cart_usd"><?php echo price_ex(usd($cart->getTotal()), 'USD') ?></font><br>
	<font class="cart_usd"><?php echo price_ex(eur($cart->getTotal()), 'EUR') ?></font>
	</td>
  <td width=30 align=right>&nbsp;</td>
  <td width=94> <?php if(count($cart->getItems()) > 0): ?><a href="<?php echo url_for('@newcart_clear') ?>" class="zbutton small"><?php t('Remove all')?></a><?php endif ?></td>
</tr>

</table>
</div>

<?php include_partial('newcart/voucher', array('cart' => $cart)) ?>
<div align=left>
<div style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">
<?php if(count($cart->getItems()) > 0): ?>
<table><tr><td width=28 valign="top"><input class="checkbox" id="register_accept" type="checkbox"></td>
<td><?php t('auth_i_accept', array('%terms%'=>'</td><td><a target="_blank" class="minic" href="'.url_for('@show_page?name=terms-of-service').'">'.__('Terms of Service',array(),'partner_panel').'</a></td><td>', '%policy%'=>'</td><td><a target="_blank" class="minic" href="'.url_for('@show_page?name=privacy-policy').'">'.__('Privacy policy',array(),'partner_panel').'</a>.'))?></td></tr></table>
<?php endif ?>
<div align=left style="padding: 20px 30px 10px 8px;">
<a href="<?php echo url_for('product_list') ?>" class="zbutton blue" style="margin-right: 7px;"><?php t('New order')?></a>
<?php if(count($cart->getItems()) > 0): ?>
<a link="<?php echo url_for('@newcart_checkout') ?>" class="zbutton grey" id="payment"><?php t('Checkout')?></a>
<?php endif ?>
</div>

</div>
</div>

<script>

<?php if(!$sf_request->isXmlHttpRequest()): ?>
$(document).ready(function () {
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
<?php if(!$sf_request->isXmlHttpRequest()): ?>
});	
<?php endif ?>
</script>
