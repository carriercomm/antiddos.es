<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Cloud Services')?></b>
</td></tr>

<tr>
  <td width=160 class="his s1" align="left"><?php t('IPv4 addresses')?></td>
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

<?php include_partial('order/orderPTR', array('order' => $order)) ?>
<br>

<script type="text/javascript">
$(document).ready(function() {
  <?php foreach(array('cpu-cores', 'ram', 'disk-space', 'bandwidth', 'ipv4-addresses') as $addon): ?>
  $(".cloud_<?php echo $addon ?>").html("<?php echo $order->getAddonValue($addon) ?>");
  <?php endforeach ?>
});
  $(".cloud_processing_power").html(solar_round(<?php echo $order->getAddonValue('cpu-cores') ?> * 2.4, 2));
</script>

