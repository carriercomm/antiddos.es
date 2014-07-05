

  <td width=46><img src="<?php echo solar_image_url('minicloud2.png') ?>" width=46></td>
  <td align=left>
      <table width="100%">
          <tr>
              <td>
                  <b><?php t('Cloud Services')?></b><br><?php echo link_to(__($order->getItemName()), '@order_show?id=' . $order->id, 'class="link"') ?>
              </td>
            <?php if ($order->isTrial() && ($order->status == 'trial' || $order->status == 'suspended' || $order->status == 'suspending')): ?>
              <td align="right">
                  <a class="zbutton" href="<?php echo url_for('@order_edit?id=' . $order->id) ?>"><?php t('order_exit_trial')?></a>
              </td>
            <?php endif ?>
          </tr>
      </table>
  </td>

  <td class="int2" width=100 align=center><?php echo price_ex($order->price) ?></td>
  <td class="int2" width=120 align=center><font class="status <?php echo status($order->status) ?>"><?php t(status($order->status)) ?><font></td>
  <td align=center width=120 class="int3">

<a href="<?php echo url_for('@order_show?id=' . $order->id) ?>" tip="<?php t('View detail')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_view.png') ?>" width=24></a>
<?php if ($order->getStatus() == 'active' || ($order->isTrial() && $order->getStatus() == 'active' )): ?>
  <a href="<?php echo url_for('@order_edit?id=' . $order->id) ?>" tip="<?php t('order_edit_conf')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_edit.png') ?>" width=24></a>
  <a href="<?php echo url_for('@order_billing_edit?id=' . $order->id) ?>" tip="<?php t('order_change_billing')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_period.png') ?>" width=24></a>
<?php else: ?>
  <a href="#" tip="<?php t('order_edit_conf')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('order_edit_.png') ?>" width=24></a>
  <a href="#" tip="<?php t('order_change_billing')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('order_period_.png') ?>" width=24></a>
<?php endif ?>

</td>






