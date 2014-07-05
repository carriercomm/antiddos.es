<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Free DDoS Protection')?></b>
</td></tr>
<tr>
  <td width=160 class="his s1" align="left"><?php t('Status')?></td>
  <td class="his s2" align="left"><?php if ($order->item['ddos_protection_status']):?>
    <?php echo ($order->item['ddos_protection_sync_status']) ? t('Disabling protection') : t('Enabled') ?>
    <?php else: ?>
    <?php echo ($order->item['ddos_protection_sync_status']) ? t('Enabling protection') : t('Disabled') ?>
    <?php endif ?></td>
</tr>
    <tr>
        <td width=160 class="his s1" align="left"><?php t('Whitelists')?></td>
        <td class="his s2" align="left">
          <?php if ($order->item['ddos_protection_control']): ?>
            <a class="zbutton green" id="whitelists_button" href="<?php echo url_for('@order_whitelists?order_id=' . $order->id) ?>"><?php echo t('Edit') ?></a>
          <?php else :?>
            <a class="zbutton grey question" tip="<?php t('DDoS protection control is not supported')?>"><?php echo t('Edit') ?></a>
          <?php endif ?>
        </td>
    </tr>
<tr>
  <td width=160 class="his s1" align="left"><?php t('Enable free DDoS protection')?></td>
  <td class="his s2" align="left">
      <?php if ($order->item['ddos_protection_control']): ?>
        <?php if ($order->item['ddos_protection_sync_status']): ?>
          <a class="zbutton gray" id="protectionButton" ><?php echo t('Processing') ?></a>
        <?php elseif ($order->item['ddos_protection_status']) : ?>
          <a class="zbutton red" id="protectionButton" href="<?php echo url_for('@server_ddos_protection_switch?id=' . $order->id) ?>"><?php echo t('Disable') ?></a>
        <?php else : ?>
          <a class="zbutton green" id="protectionButton" href="<?php echo url_for('@server_ddos_protection_switch?id=' . $order->id) ?>"><?php echo t('Enable') ?></a>
        <?php endif ?>
      <?php else :?>
        <a class="zbutton grey question" tip="<?php t('DDoS protection control is not supported')?>"><?php echo $order->item['ddos_protection_status'] ? t('Disable') : t('Enable') ?></a>
      <?php endif ?>
  </td>
</tr>

</table>
<script type="text/javascript">
    $("#protectionButton").click(function(e){
       $(this).parent().html('<span class="zbutton grey"><?php echo t('Please wait') ?></span>')
    });
</script>
<br>

