



<div class="title detail"><?php t('Package details')?></div>
<div class="content">


<?php include_partial('cart/' . $product->type . 'Details', array('product' => $product, 'text_new' => false, 'trial' => false, 'order' => $order)) ?>


</div>


<div class="title pac"><?php t('Order details')?></div>
<div class="content">


<div class="productinfo">


<table width=100% cellpadding="10" cellspacing="2" border=0>
<tr><td colspan=2 class="histitle" height=40>
<b><?php echo product_type($product->type) ?></b>
</td></tr>

<tr>
  <td width=160 align=left class="his s1"><?php t('Configuration')?></td>
  <td class="his s2" align=left><?php echo $product->name ?></td>
</tr>
<tr>
  <td class="his s1" align=left><?php t('Product ID')?></td>
  <td class="his s2" align=left><?php echo $order->getItemName() ?></td>
</tr>
<tr>
  <td class="his s1" align=left><?php t('Status')?></td>
  <td class="his s2" align=left><font class="status <?php echo $order->isItemAssigned() ? status($order->item['status']) : 'notassigned' ?>"><?php echo $order->isItemAssigned() ? status($order->item['status']) : __('Not assigned',array(),'partner_panel') ?></font></td>
</tr>
</table>

<br>

<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Billing')?></b>
</td></tr>

<?php if ($product->type != 'cdn'): ?>
  <tr>
    <td width=260 class="his s1" align=left><?php t('Billing cycle')?></td>
    <?php if ($order->is_trial): ?>
      <td class="his s2" align=left><?php $order->type == 'cloud' ? t('7 days free trial') : t('1 day free trial') ?></td>
    <?php else: ?>
      <td class="his s2" align=left><?php echo $order->billing_cycle?> <?php t('month(s)')?></td>
    <?php endif ?>
  </tr>
  <tr>
    <td class="his s1" align=left><?php t('Due date')?></td>
    <td class="his s2" align=left><?php echo $order->paid_until ?></td>
  </tr>
  <tr>
    <td class="his s1" align=left><?php t('Monthly amount')?></td>
    <td class="his s2" align=left><?php echo price_ex($order->price) ?></td>
  </tr>
<?php else: ?>
  <tr>
    <td width=260 class="his s1" align=left>Today traffic</td>
    <td class="his s2" align=left><?php echo format_bytes($order->today_traffic,2,2) ?></td>
  </tr>
  <tr>
    <td  class="his s1" align=left>Monthly traffic</td>
    <td class="his s2" align=left><?php echo format_bytes($order->monthly_traffic,2,2) ?></td>
  </tr>
  <tr>
    <td  class="his s1" align=left>Daily cost (avg.)</td>
    <td class="his s2" align=left><?php echo $order->daily_avg_cost ?> CHF</td>
  </tr>
  <tr>
    <td  class="his s1" align=left>Days left with current balance</td>
    <td class="his s2" align=left><?php echo $order->cdn_days_left ?> day(s)</td>
  </tr>
  <tr>
    <td colspan="2" align="right">
      <a href="<?php echo url_for('@order_cdn_billing_stats?order_id='.$order->id)?>" class="zbutton blue"><?php t('Show detailed statistics')?></a>
    </td>
  </tr>
<?php endif ?>
</table>

</div>

<br>
<?php if ($product->type != 'syncserver' && $product->type != 'cdn'): ?>
    <div class="productinfo">

        <?php include_partial('order/addons', array('addons' => $addons)) ?>

    <?php if (in_array($product->type,array('server','cloud','colocation'))): ?>
        <table width=100% cellpadding="10" cellspacing="2">
                <tr>
                    <td class="his s1" align="left" width="160"><?php t('sla_title') ?></td>
                    <td class="his s2" align="left"><?php echo SolarLists::slaoptions($order->sla); ?></td>
                </tr>
        </table>
    <?php endif ?>

    </div>
    <Br>
<?php endif ?>
<div class="productinfo">

<?php include_partial('order/' . $product->type . 'Details', array('order' => $order, 'product' => $product, 'form' => isset($form) ? $form : null)) ?>


</div>


</div>


