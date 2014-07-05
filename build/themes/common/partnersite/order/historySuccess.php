<?php $sf_response->addMeta("title", __("Account History - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title history"><?php t('Transaction history')?></div>
<div class="content">

<div style="padding: 10px;"><?php t('history_text') ?></div>

<?php include_partial('order/historyFilterForm', array('form' => $form)) ?>

<br>

<div style="padding: 8px 0px;" align=right>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>

<table border=0 width=100%  cellpadding="10" cellspacing="2">
<tr>
<th width=24></th>
  <th align=left width=150 class="histitle"><?php t('Date')?></th>  
  <th align=right width=120 class="histitle"><?php t('Amount') ?></th>
  <th align=left class="histitle"><?php t('Comment')?></th>
  <th align=right width=120 class="histitle"><?php t('Balance') ?></th>
</tr>



<?php foreach($history as $record): ?>

<tr>
<td class="his s2"><div style="width: 24px; height: 24px;" class="div_history <?php echo 'client_history_' . $record->type ?>"></td>
  <td height=18 class="his s1"  nowrap style="white-space: nowrap;"><?php echo format_datetime($record->created_at,'f') ?></td>
  <td class="his s2 amount_<?php echo $record->type ?>" align=right><?php echo price($record->amount) ?> CHF</td>
  <td class="his s2"><?php echo t('client_history_' . $record->type, unserialize(html_entity_decode($record->comment_params)), 'history_customer') ?></td>
  <td class="his s2" align=right><?php echo price($record->balance) ?> CHF</td>
</tr>

<?php endforeach ?>
</table>


<div style="padding: 8px 0px;" align=right>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>

</div>

