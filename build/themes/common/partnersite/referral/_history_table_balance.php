<div class="title history"><?php t('Referral balance history') ?></div>
<div class="content" align=left>
    <table border=0 width=100%  cellpadding="10" cellspacing="3">
        <tr>
            <th class="histitle" width=200 align=left><b><?php t('Date') ?></b></th>
            <th class="histitle" align=left><b><?php t('Comment') ?></b></th>
            <th class="histitle" width=120 align=left><b><?php t('Amount') ?></b></th>
            <th class="histitle" align=left><b><?php t('Customer') ?></b></th>
        </tr>
      <?php if (count($history) > 0) : ?>
      <?php foreach($history as $record): ?>
            <tr>
                <td class="his s1"><?php echo format_date($record->getCreatedAt(), 'f') ?></td>
                <td class="his s2"><?php echo $record->getPublicMemo() ?></td>
                <td class="his s2"><?php echo $record->getAmount() ?> CHF</td>
                <td class="his s2"><?php echo $record->getCustomer() ?></td>
            </tr>
        <?php endforeach ?>
      <?php else: ?>
        <tr><td class="his" align=left colspan=10><b><?php t('No items to show') ?></b></td></tr>
      <?php endif ?>
    </table>
</div>