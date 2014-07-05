

<td width=38><img src="<?php echo solar_image_url('mini_cdn.png') ?>" width=38></td>
<td align=left  style="padding: 0px;">
  <table width="100%" cellpadding=0 cellspacing=0 border=0>
    <tr>
      <td>
        <b><?php t('CDN')?></b><br><?php echo link_to(__($order->getItemName()), '@order_show?id=' . $order->id, 'class="link"') ?>
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
<td align=center width=180 class="int3">

  <a href="<?php echo url_for('@order_show?id=' . $order->id) ?>" tip="<?php t('View detail')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_view.png') ?>" width=24></a>
  <?php if ($order->getStatus() == 'active' || ($order->isTrial() && $order->getStatus() == 'active' )): ?>
    <a href="<?php echo url_for('@order_edit?id=' . $order->id) ?>" tip="<?php t('order_edit_conf')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_edit.png') ?>" width=24></a>
    <a href="<?php echo url_for('@order_preferences?order_id='.$order->id) ?>" tip="<?php t('Edit CDN preferences')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('cdn_edit.png') ?>" width=24></a>
    <a href="<?php echo url_for('@order_cdn_billing_stats?order_id='.$order->id)?>" tip="<?php t('cdn_graph')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('cdn_graph.png') ?>" width=24></a>
    <a href="<?php echo url_for('@order_billing_edit?id=' . $order->id) ?>" tip="<?php t('order_change_billing')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('order_period.png') ?>" width=24></a>
  <?php else: ?>
    <a href="#" tip="<?php t('order_edit_conf')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('order_edit_.png') ?>" width=24></a>
    <a href="#" tip="<?php t('Edit CDN preferences')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('cdn_edit_.png') ?>" width=24></a>
    <a href="#" tip="<?php t('cdn_graph')?>" class="list_button question" border=0><img src="<?php echo solar_image_url('cdn_graph_.png') ?>" width=24></a>
    <a href="#" tip="<?php t('order_change_billing')?>" class="list_button question disable" border=0><img src="<?php echo solar_image_url('order_period_.png') ?>" width=24></a>
  <?php endif ?>

</td>






