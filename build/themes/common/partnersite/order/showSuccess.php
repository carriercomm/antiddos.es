


<?php include_partial('orderDetails', array('order' => $order, 'product' => $product, 'addons' => $addons, 'form' => isset($form) ? $form : null)) ?>


<div style="padding: 0px 40px 20px 40px;">
<table border=0 cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<a class="zbutton blue" href="javascript:history.back()"><?php t('Return')?></a>
</td>
<td align="right">
<?php if ( $order->getStatus() == 'active' || $order->isTrial()):?>
<table border=0 cellpadding="0" cellspacing="0">
<tr>
<td valign="top">
<div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
</td>
<td valign="top">
<?php if ($order->isTrial()): ?>
  <?php if ($order->status == 'trial' || $order->status == 'suspended' || $order->status == 'suspending'): ?>
    <a class="zbutton" href="<?php echo url_for('@order_edit?id=' . $order->id) ?>"><?php t('order_exit_trial')?></a>&nbsp;
  <?php endif ?>
<?php else: ?>
    <a class="zbutton" href="<?php echo url_for('@order_edit?id=' . $order->id) ?>"><?php t('order_edit_conf')?></a>&nbsp;
    <a class="zbutton" href="<?php echo url_for('@order_billing_edit?id=' . $order->id) ?>"><?php t('order_change_billing')?></a>
    <?php if ($order->getStatus() == 'active'): ?><a class="zbutton" href="<?php echo url_for('@order_cancel?id=' . $order->id) ?>"><?php t('order_cancel')?></a><?php endif ?>
<?php endif ?>
</td>
</tr>
</table>
<?php endif?>
</td>
</tr>
</table>

</div>

<br><br>
