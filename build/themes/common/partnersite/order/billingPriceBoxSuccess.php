<table  width=100% border=0 cellspacing="10" cellpadding="2">

<tr>
  <td><br><b><?php t('Billing cycle')?></b></td>
  <td nowrap><div align="right"></div></td>
  <td nowrap><div align="right"></div></td>
  <td nowrap><div align="right"></div></td>
</tr>

<tr><td colspan=4>
<hr class="hrline">
</td></tr>

<tr>
<td><?php t('Old price')?></td>
<td nowrap><div align="right"></div></td>
<td nowrap><div align="right"><?php echo $old_billing_cycle ?></div></td>
<td nowrap><div align="right"><?php echo price_ex($old_price) ?></div></td>
</tr>
<?php foreach($discounts as $discount): ?>
  <?php if ($discount['amount'] == 0) { continue; } ?>
    <tr>
        <td><?php echo $discount['name'] ?></td>
        <td nowrap align="right"><?php echo $discount['amount'] . ($discount['absolute'] ? ' CHF' : '%') ?></td>
        <td nowrap colspan="2"></td>
    </tr>
<?php endforeach ?>
<tr>
<td><?php t('Months')?></td>
<td nowrap><div align="right"><?php echo price_ex($price) ?></div></td>
<td nowrap><div align="right"><?php echo $billing_cycle ?></div></td>
<td nowrap><div align="right"><?php echo price_ex($cost) ?></div></td>
</tr>

</table>

