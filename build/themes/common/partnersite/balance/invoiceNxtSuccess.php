<div class="title nxt"><?php t('NXT currency')?></div>



<div style="padding: 20px 40px 0px 40px;">

  <table><tr><td width=120 align=left><img src="<?php echo solar_image_url('nxt_payment.png') ?>" width=100 border=0></td><td style="vertical-align: top;"><?php t('nxt_text')?></td></tr></table>

</div>








<div class="content">



  <table border="0" width="100%" cellpadding="8" cellspacing="2">
    <tbody><tr>
      <td class="his i1 u6" style="padding: 10px 12px;" nowrap="" colspan="6"><b>Please transfer <?php echo $payment->nxt_amount ?> NXT within next 50 minutes to <font color="blue"><?php echo $payment->account ?></font> (exchange rate: 1 NXT = <?php echo $payment->rate ?> CHF).</b></td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Invoice')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->amount ?> CHF</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Extra fee')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $method->commission*100 ?>%</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Rate')?>:</b></td><td nowrap="" class="his i2 u4" align="left">1 NXT = <?php echo $payment->rate ?> CHF</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Amount')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->nxt_amount ?> NXT</td></tr>
    <tr><td class="his i2 u4" width="200"><b><?php t('Received amount')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->received_amount ?> NXT</td></tr>
    <tr><td class="his i2 u4"><b>Address:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $payment->account ?></td></tr>
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