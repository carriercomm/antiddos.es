<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Free DDoS Protection')?></b>
</td></tr>
<tr>
  <td width=160 class="his s1" align="left"><?php t('Status')?></td>
  <td class="his s2" align="left"><?php echo $order->item['ddos_protection_status'] ? t('Enabled') : t('Disabled') ?></td>
</tr>

<tr>
  <td width=160 class="his s1" align="left"><?php t('Enable free DDoS protection')?></td>
  <td class="his s2" align="left">
      <?php if($order->item['ddos_protection_control']): ?>

        <?php if($order->item['ddos_protection_status']): ?>
          <a class="zbutton red" id="protectionButton" href="<?php echo url_for('@server_ddos_protection_switch?id=' . $order->id) ?>"><?php echo t('Disable') ?></a>
        <?php else : ?>
          <a class="zbutton green" id="protectionButton" href="<?php echo url_for('@server_ddos_protection_switch?id=' . $order->id) ?>"><?php echo t('Enable') ?></a>
        <?php endif ?>

      <?php else :?>
        <a class="zbutton grey"><?php echo $order->item['ddos_protection_status'] ? t('Disable') : t('Enable') ?></a>
      <?php t('DDoS protection control is not supported')?>
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

