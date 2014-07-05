<table width=100% cellpadding="10" cellspacing="2">
  <tr><td class="histitle" height=40>
      <b><?php t('DNS Settings')?></b>
    </td></tr>
  <tr>
    <td class="his s2" align="left">
      <?php t('Add a CNAME for the CDN Hostname which can then be used to view the contents.')?>
      <br>
      <code><?php echo $order->cdn_hostname ?> IN CNAME <?php echo $order->item['aflexi_resource_id'] ?>.r.s-cdn.net</code>
    </td>
  </tr>
</table>
<br/>
<a href="<?php echo url_for('@order_preferences?order_id='.$order->id) ?>" class="zbutton blue"><?php t('Edit CDN preferences')?></a>