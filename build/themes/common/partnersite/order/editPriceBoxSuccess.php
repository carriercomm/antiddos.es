
<table  width=100% border=0  class="priceboxtable">
<tr>
  <td><b><?php t('Additional')?></b></td>
  <td width=200 nowrap align=right><b><?php t('Cost x 1')?></b></td>
  <td width=100 nowrap align=right><b><?php t('Col')?></b></td>
  <td width=100 nowrap align=right><b><?php t('Cost')?></b></td>
</tr>


<tr><td colspan=4>
<hr class="hrline">
</td></tr>

<?php if($base_price > 0): ?>
  <tr>
      <td><?php echo $product->name ?> <?php if ($isEco) { echo 'Light'; } ?></td>
      <td nowrap align="right"><?php echo price_ex($base_price) ?></td>
      <td nowrap align="right">1</td>
      <td nowrap align="right"><?php echo price_ex($base_price) ?></td>
  </tr>
<?php endif ?>
<?php foreach($options as $option): ?>
<tr>
  <td><?php echo $option['name'] ?></td>
  <td nowrap align="right"><?php echo price_ex($option['price']) ?></td>
  <td nowrap align="right"><?php echo $option['count'] ?></td>
  <td nowrap align="right"><?php echo price($option['cost']) ?> CHF</td>
</tr>
<?php endforeach ?>
<?php if (isset($sla_type)):?>
  <tr>
      <td><?php t($sla_type) ?></td>
      <td nowrap align="right"><?php echo price_ex($sla_cost) ?> </td>
      <td nowrap align="right">-</td>
      <td nowrap align="right"><?php echo price($sla_cost) ?> CHF</td>
  </tr>
<?php endif ?>
<tr>
  <td><br><b><?php t('Billing cycle')?></b></td>
  <td nowrap align="right"></td>
  <td nowrap align="right"></td>
  <td nowrap align="right"></td>
</tr>

<tr><td colspan=4>
<hr class="hrline">
</td></tr>

<tr>
<td><?php t('Months')?></td>
<td nowrap align="right"><?php echo price_ex($price) ?></td>
<td nowrap align="right"><?php echo $billing_cycle ?></td>
<td nowrap align="right"><?php echo price_ex($base_cost) ?></td>
</tr>

<tr>
  <td><br><b><?php t('Other')?></b></td>
  <td nowrap align="right"></td>
  <td nowrap align="right"></td>
  <td nowrap align="right"></td>
</tr>

<tr><td colspan=4>
<hr class="hrline">
</td></tr>

<tr>
<td><?php t('Setup fee')?></td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
<td nowrap align="right"><?php echo price_ex($setup_fee) ?></td>
</tr>
<!--
<tr>
<td><?php t('VAT (included)')?></td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
<td nowrap align="right" align="right"><?php echo price_ex($vat) ?></td>
</tr>
-->
<?php foreach($discounts as $discount): ?>
<?php if ($discount['amount'] == 0) { continue; } ?>
<tr>
  <td><?php echo $discount['name'] ?></td>
  <td nowrap align="right"></td>
  <td nowrap align="right"><?php echo $discount['amount'] . ($discount['absolute'] ? ' CHF' : '%') ?></td>
  <td nowrap align="right">-<?php echo price_ex($discount['chip']) ?></td>
</tr>
<?php endforeach ?>

<tr>
<td><br><b><?php t('Total')?></b>:</td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
</tr>

<tr><td colspan=4>
<hr class="hrline">
</td></tr>

<tr>
<td><?php t('Old price')?></td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
<td nowrap align="right"><?php echo price_ex($old_price) ?></td>
</tr>

<tr>
<td><?php t('cart_price_next_billing')?></td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
<td nowrap align="right"><?php echo price_ex($cost) ?></td>
</tr>

<tr>
<td><?php t('Upgrade cost')?></td>
<td nowrap align="right"></td>
<td nowrap align="right"></td>
<td nowrap align="right"><?php echo price_ex($upgrade_cost) ?></td>
</tr>

</table>

