<div class="title wm"><?php t('WebMoney')?></div>



<div style="padding: 20px 40px 0px 40px;">

    <table>
      <tr>
        <td width=120 align=left>
          <img src="<?php echo solar_image_url('wm_payment.gif') ?>" width=100 border=0>
        </td>
        <td>
          <?php t('wm_text_temporary')?>
          <br/>
          <br/>
          <a href="<?php echo url_for('@livechat') ?>" class="zbutton green">Contact support</a>
        </td>
      </tr>
    </table>

</div>

<div class="content">

</div>







<!--<div class="content">



    <table border="0" width="100%" cellpadding="8" cellspacing="2">
        <tbody><tr>
            <td class="his i1 u6" style="padding: 10px 12px;" nowrap="" colspan="6"><?php /*t('Payment details')*/?></td></tr>
        <tr><td class="his i2 u4" width="200"><b><?php /*t('Invoice')*/?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php /*echo $invoice->getAmount() */?> CHF</td></tr>
        <tr><td class="his i2 u4"><b><?php /*t('Extra fee')*/?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php /*echo $method->getCommission()*100 */?> %</td></tr>
        <tr><td class="his i2 u4"<b><?php /*t('Amount')*/?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php /*echo $amount */?> CHF</td></tr>
        <tr><td class="his i2 u4"><b><?php /*t('Rate')*/?>:</b></td><td nowrap="" class="his i2 u4" align="left">1 CHF = <?php /*echo sfConfig::get('solar_usd_rate') */?> USD</td></tr>
        <tr><td class="his i2 u4"><b><?php /*t('Converted amount')*/?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php /*echo usd($amount) */?> USD</td></tr>
        <tr><td class="his i2 u4"><b><?php /*t('WMZ purse number')*/?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php /*echo $method->getPaymentAccount() */?></td></tr>
        </tbody></table>

    <div style="padding: 20px 10px;">

        <table border=0 cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top">
                    <div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php /*echo solar_image_url('foo3_.png') */?>"></div>
                </td>
                <td valign="top">
                    <a class="zbutton blue" href="<?php /*echo url_for('@payment_processing_ticket_new?method_id='.$method_id.'&invoice_id='.$invoice->getId()) */?>"><?php /*t('Request for payment processing')*/?></a>
                    <a class="zbutton gray" href="<?php /*echo url_for('@invoice_list') */?>"><?php /*t('Back to invoice lists')*/?></a>
                </td>
            </tr>
        </table>

    </div>

</div>-->