<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Dedicated Server')?></b>
</td></tr>

<tr>
  <td width=160 class="his s1" align="left"><?php t('Additional IPv4 addresses')?></td>
  <td class="his s2" align="left">
    <?php if($order->isItemAssigned() && $order->item['additional_ips']): ?>
    <?php foreach(explode(',', $order->item['additional_ips']) as $n => $ip): ?>
      <?php echo $ip ?><br>
    <?php endforeach ?>
    <?php else: ?>
    <?php echo __('N/A',array(),'partner_panel') ?>
    <?php endif ?>
  </td>
</tr>

</table>

<br>

<?php if($order->isItemAssigned())  include_partial('order/serverDdosProtectionControl', array('order' => $order)) ?>

<?php include_partial('order/statisticsDetails', array('statistics' => $order->statistics)) ?>

