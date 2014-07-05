<?php $class = $i%2 == 0 ? 'addon_odd' : 'addon_even'; ?>
<tr>
  <td width="200" class="<?php echo $class ?>"><font style="margin-left: 10px;"><?php t($sf_data->getRaw('name')) ?></font></td>
  <td class="<?php echo $class ?>">
<font class="eur"><?php echo price_ex($item['price']) ?></font> &nbsp; 
</td><td class="<?php echo $class ?>">
<font class="usd"><?php echo price_ex(usd($item['price']), 'USD') ?></font> &nbsp;
</td><td class="<?php echo $class ?>">
<font class="chf"><?php echo price_ex(eur($item['price']), 'EUR') ?></font> &nbsp;
</td><td class="<?php echo $class ?>">
<?php if (isset($item['units_each'])):?>
<?php echo $item['units_each'] ?>&nbsp;
<?php endif?>

  </td>
</tr>

