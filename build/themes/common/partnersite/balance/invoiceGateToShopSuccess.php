<div class="title price"><?php t('Pay with a %app%', array('%app%'=>'Gate2Shop')) ?></div>
<div class="content">
    <form method="post">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="https" width="56" height="48">&nbsp; </td>
                <td><?php t('You will be redirected to %app% site.', array('%app%'=>'Gate2Shop'))  ?></td>
            </tr>
            </tbody>
        </table>
        <br/>
        <br/>
        <table border="0" width="100%" cellpadding="8" cellspacing="2">
            <tbody><tr>
                <td class="his i1 u6" style="padding: 10px 12px;" nowrap="" colspan="6"><?php t('Payment details')?></td></tr>
            <tr><td class="his i2 u4" width="200"><b><?php t('Invoice')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $invoice->getAmount() ?> CHF</td></tr>
            <tr><td class="his i2 u4"><b><?php t('Extra fee')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $method->getCommission()*100 ?> %</td></tr>
            <tr><td class="his i2 u4"<b><?php t('Amount')?>:</b></td><td nowrap="" class="his i2 u4" align="left"><?php echo $amount ?> CHF</td></tr>
            </tbody></table>

        <div style="padding: 20px 10px;">
        <br>
        <br>
        <table width="100%">
            <tbody>
            <tr>
                <td align="left">
                    <a class="zbutton" href="<?php echo url_for('@invoice_show?id=' . $invoice->getId()) ?>"><?php t('Back')?></a>
                </td>
                <td align="right">
                    <input type="submit" name="confirm" class="zbutton green" value="<?php t('Click here to continue') ?>"/>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
