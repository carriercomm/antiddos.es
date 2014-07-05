<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Colocation')?></b>
</td></tr>

<tr>
  <th width=160 class="his"><?php t('Main IPv4 address')?></th>
  <td class="his"><?php echo $order->isItemAssigned() && !empty($order->item['main_ip']) ? $order->item['main_ip'] : __('N/A',array(),'partner_panel') ?></td>
</tr>

</table>

<br>

