
<td width=60><img src="<?php echo solar_image_url('minicraft.png') ?>" width=60></td>
<td class="uop"><?php t('Minecraft Servers')?><br><?php echo link_to($order->isItemAssigned() ? $order->item['name'] : 'Not assigned', '@order_show?id=' . $order->id, 'class="manage_name"') ?></td></td>

<td align=center width=120 class="int2"><?php echo $order->isItemAssigned() ? (!empty($order->item['main_ip']) ? $order->item['main_ip']: t('N/A')) : t('N/A') ?></td></td> 
<td align=center width=120 bgcolor="#F1F7F8" class="int2"><?php echo price_ex($order->getPrice()) ?></td>
<td align=center width=120 class="int2"><div class="status <?php echo status($order->status) ?>"><?php t(status($order->status)) ?></div></td></td>


<td align=center width=140 class="int3"><?php echo link_to(__('View detail',array(),'partner_panel'), '@order_show?id=' . $order->id, 'class="zbutton blue"') ?></td>

