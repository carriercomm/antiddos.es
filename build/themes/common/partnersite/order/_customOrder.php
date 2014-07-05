
  <td width=32><img src="<?php echo solar_image_url('custom_mini.png') ?>" width=32></td>
  <td align=left><b><?php t('Custom Product')?></b><br><?php echo link_to(__($order->getProductName()), '@order_show?id=' . $order->id, 'class="link"') ?></td>

  <td class="int2" width=100 align=center><?php echo price_ex($order->price) ?></td>
  <td class="int2" width=120 align=center><font class="status <?php echo status($order->status) ?>"><?php t(status($order->status)) ?><font></td>
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



