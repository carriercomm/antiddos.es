<div class="title liberty"><?php t('Liberty Reserve')?></div>



<div style="padding: 20px 40px 0px 40px;">

    <table><tr><td width=120 align=left><img src="<?php echo solar_image_url('liberty_payment.gif') ?>" width=100 border=0></td><td><?php t('liberty_text')?></td></tr></table>

</div>








<div class="content">



    <table border="0" width="100%" cellpadding="8" cellspacing="2">
        <tbody><tr>
            <td class="his i1 u6" style="padding: 10px 12px;" nowrap="" colspan="6"><b>Payment details</b></td></tr>
        <tr><td class="his i2 u4" width="200"><b>Amount:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $amount ?> CHF (<?php echo usd($amount) ?> USD)</td></tr>
        <tr><td class="his i2 u4" width="200"><b>Extra fee:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $method->getCommission()*100 ?> %</td></tr>
        <tr><td class="his i2 u4"><b>Rate:</b></td><td nowrap="" class="his i2 u4" align="left">1 CHF = <?php echo sfConfig::get('solar_usd_rate') ?> USD</td></tr>
        <tr><td class="his i2 u4"><b>Address:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $method->getPaymentAccount() ?></td></tr>
        </tbody></table>

    <div style="padding: 20px 10px;">

        <table border=0 cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top">
                    <div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
                </td>
                <td valign="top">
                    <a class="zbutton blue" href="<?php echo url_for('@payment_processing_ticket_new?method_id='.$method_id.'&invoice_id='.$invoice->getId()) ?>"><?php t('Request for payment processing')?></a>
                    <a class="zbutton gray" href="<?php echo url_for('@invoice_list') ?>"><?php t('Back to invoice lists')?></a>
                </td>
            </tr>
        </table>

    </div>

</div>