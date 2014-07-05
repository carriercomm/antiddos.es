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


<?php include_partial('order/orderPTR', array('order' => $order)) ?>

<table width=100% cellpadding="10" cellspacing="2">
  <tr>
    <td width=160 class="his s1" align="left"><?php t('IPMI access list control')?></td>
    <td class="his s2" align="left">
      <?php if($order->isItemAssigned() && $order->getStatus() == 'active'): ?>
        <a href="<?php echo url_for('@order_server_ipmi?order_id='.$order->id) ?>" class="zbutton blue"><?php t('IPMI settings')?></a>
      <?php else :?>
        <a class="zbutton gray"><?php t('IPMI settings')?></a>
      <?php endif ?>
    </td>
  </tr>

</table>

<br>

<?php include_partial('order/statisticsDetails', array('statistics' => $order->statistics)) ?>

