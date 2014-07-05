<div class="title history"><?php t('Referral payout history') ?></div>
<div class="content" align=left>
    <table border=0 width=100%  cellpadding="10" cellspacing="3">
        <tr>
            <th class="histitle" width=200 align=left><b><?php t('Date') ?></b></th>
            <th class="histitle" width=100 align=left><b><?php t('Amount') ?></b></th>
            <th class="histitle" align=left><b><?php t('Payout through') ?></b></th>
            <th class="histitle" width=120 align=left><b><?php t('Status') ?></b></th>
            <th width=50>&nbsp;</th>
        </tr>
      <?php if (count($history) > 0) : ?>
      <?php foreach($history as $record): ?>
            <tr>
                <td class="his s1"><?php echo format_date($record->getCreatedAt(), 'f') ?></td>
                <td class="his s2"><?php echo $record->getAmount() ?> CHF</td>
                <td class="his s2"><?php echo $record->getPayoutThrough() ?></td>
                <td class="his s2" align=center><font class="status <?php echo status(referral_payout_status($record->getStatus())) ?>"><?php echo status(referral_payout_status($record->getStatus())) ?></font></td>
              <?php if ($record->getStatus() == 'processing'): ?>
                <td class="his s2">
                  <?php echo link_to(__('Cancel', array(), 'partner_panel'), '@referral_cancel_payout?id=' . $record->id, array('class' => 'zbutton small blue')); ?>
                </td>
              <?php else: ?>
                <td></td>
              <?php endif ?>
            </tr>
        <?php endforeach ?>
      <?php else: ?>
        <tr><td class="his" align=left colspan=10><b><?php t('No items to show') ?></b></td></tr>
      <?php endif ?>
    </table>
</div>