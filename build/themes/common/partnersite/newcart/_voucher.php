<?php if($cart->getTotal()>0): ?>
<br>
<div id="voucher" style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">
<table width=100% border=0 cellspacing="12" cellpadding="2">
<tr>
  <td colspan="2"><a class="iframe zbutton blue small" href="<?php echo url_for('@voucher_choose');?>" id="add_voucher"><?php t('Add voucher')?></a></td>
  <td width=300 align=right>
		<?php if($cart->getVoucher()): ?>
<?php t('voucher')?> <span id="voucher_number"><b>#<?php echo $cart->getVoucher()->getNumber() ?></b></span>&nbsp;&nbsp;
<span id="voucher_discount"><?php echo $cart->getVoucher()->getDiscount() ?></span>% <?php t('discount')?>
<?php endif ?>
	</td>
  <td width=30 align=right>
	</td>
  <td width=124><?php if($cart->getVoucher()): ?>
<a href="javascript:;" id="remove_voucher" class="zbutton small"><?php t('Remove')?></a>
<?php endif ?>
</td>
</tr>
</table>

</div>
<?php endif?>
<br>

<script>

$(document).ready(function () {

	$('#add_voucher').fancybox({
		'width': 670,
		'height': 500,
		'margin':15,
		'padding':1,
		'showCloseButton':true, 
		'scrolling':true,
		//'scrolling':'no',
		'hideOnOverlayClick':false,
		'onCleanup': function() { reloadCart(); },
	});

	$("#remove_voucher").click(function() {
		$.get("<?php echo url_for('@newcart_remove_voucher');?>", function(data)
		{
			reloadCart();
		});	
	});
});	

</script>