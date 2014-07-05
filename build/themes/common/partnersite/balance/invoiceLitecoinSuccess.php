<div class="title litecoin"><?php t('Litecoin')?></div>



<div style="padding: 20px 40px 0px 40px;">

  <table><tr><td width=120 align=left><img src="<?php echo solar_image_url('litecoin_payment.gif') ?>" width=100 border=0></td><td><?php t('litecoin_text')?></td></tr></table>

</div>








<div class="content">



  <table border="0" width="100%" cellpadding="8" cellspacing="2">
    <tbody><tr>
      <td class="his i1 u6" style="padding: 10px 12px;" nowrap="" colspan="6"><b>Please transfer <?php echo $payment->ltc_amount ?> LTC within next 50 minutes to <font color="blue"><?php echo $payment->address ?></font> (exchange rate: 1 LTC = <?php echo $payment->rate ?> CHF).</b></td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Invoice')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->amount ?> CHF</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Extra fee')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $method->commission*100 ?>%</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Rate')?>:</b></td><td nowrap="" class="his i2 u4" align="left">1 LTC = <?php echo $payment->rate ?> CHF</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Amount')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->ltc_amount ?> LTC</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Received amount')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->received_amount ?> LTC</td></tr>
    <tr><td class="his i2 u4"><b>Address:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->address ?></td></tr>
    <tr><td class="his i2 u4"><b>Confirmations:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->confirmations ?>%</td></tr>
    <tr><td class="his i2 u4"><b>Status:</b></td><td nowrap="" class="his i2 u4" align="left"><div class="status <?php echo $payment->status ?>"><?php echo ucfirst($payment->status) ?></div></td></tr>
    </tbody></table>

  <div style="padding: 20px 10px;">

    <table border=0 cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top">
          <div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
        </td>
        <td valign="top">
          <a class="zbutton gray" href="<?php echo url_for('@invoice_list') ?>"><?php t('Back to invoice lists')?></a>
        </td>
      </tr>
    </table>

  </div>

</div>