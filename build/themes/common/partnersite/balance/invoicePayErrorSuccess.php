<div class="title price"><?php echo t('Pay with a Paypal') ?></div>
<div class="content">
    <form method="post">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="https" width="56" height="48">&nbsp; </td>
                <td> <?php echo t('Something wrong has occurred in payment process. Please, contact support team. ') ?> </td>
            </tr>
            </tbody>
        </table>
        <br/>
        <br/>
        <div class="forarea">
            <table>
                <tr>
                    <td width="120" align="right"><strong><?php echo t('Amount') ?></strong></td>
                    <td><?php echo price($invoice->getAmount()) ?> CHF</td>
                </tr>
                <tr>
                    <td width="120" align="right"><strong><?php t('Invoice')?></strong></td>
                    <td>#<?php echo $invoice->getId()?></td>
                </tr>
                <tr>
                    <td width="120" align="right"><strong><?php t('Date')?></strong></td>
                    <td><?php echo format_date($invoice->getDate(), 'D') ?></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <table width="100%">
            <tbody>
            <tr>
                <td align="left">
                    <a class="zbutton" href="<?php echo url_for('@invoice_show?id=' . $invoice->getId()) ?>">Back</a>
                </td>
                <td align="right"></td>
            </tr>
            </tbody>
        </table>
    </form>
</div>