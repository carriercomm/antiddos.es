
<td width=60><img src="<?php echo solar_image_url('miniserver.png') ?>" width=60></td>
<td class="uop"><?php t('Dedicated Servers')?><br><?php echo link_to($order->isItemAssigned() ? $order->item['name'] : 'Not assigned', '@order_show?id=' . $order->id, 'class="manage_name"') ?></td></td>

<td align=center width=120 class="int2"><?php echo $order->isItemAssigned() ? (!empty($order->item['main_ip']) ? $order->item['main_ip']: t('N/A')) : t('N/A') ?></td></td> 
<td align=center width=120 bgcolor="#F1F7F8" class="int2"><?php echo price_ex($order->getPrice()) ?></td>
<td align=center width=120 class="int2"><div class="status <?php echo status($order->status) ?>"><?php t(status($order->status)) ?></div></td></td>


<td align=center width=120 class="int3">

<a href="<?php echo url_for('@order_show?id=' . $order->id) ?>" tip="<?php t('View detail')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_view.png') ?>" width=24></a>
<?php if ($order->getStatus() == 'active' || $order->isTrial()): ?>
  <a href="<?php echo url_for('@order_edit?id=' . $order->id) ?>" tip="<?php t('order_edit_conf')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_edit.png') ?>" width=24></a>
  <a href="<?php echo url_for('@order_billing_edit?id=' . $order->id) ?>" tip="<?php t('order_change_billing')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_period.png') ?>" width=24></a>
<?php else: ?>
  <a href="#" tip="<?php t('order_edit_conf')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('order_edit_.png') ?>" width=24></a>
  <a href="#" tip="<?php t('order_change_billing')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('order_period_.png') ?>" width=24></a>
<?php endif ?>

</td>

