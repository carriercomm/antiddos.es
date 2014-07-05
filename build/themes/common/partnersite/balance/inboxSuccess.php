<div class="title inbox"><?php t('Inbox')?></div>
<div class="content">


<div style="margin: 0px 0px 20px 10px;"><?php t('inbox_block_text')?></div>


  <table width=100%  cellpadding="0" cellspacing="0">
  <?php if (count($messages) > 0): ?>
    <?php foreach ($messages as $msg): ?>
      <?php $unread_class = isset($msg->read) ? 's2' : 's1'; ?>
      <tr class="his5_tr">
          <td class="his5_flag" width=16>
            <div class="inbox_flag"> </div>
          </td>

          <td class="his5 <?php echo $unread_class ?>">
              <?php echo $msg->subject ?>
          </td>

          <td class="his5 <?php echo $unread_class ?>" align=right width=200 nowrap>
            <?php echo format_date($msg->created_at,'f') ?>
          </td>
          <td width=10 class="his5">
              <a class="zbutton green small" href="<?php echo url_for('@inbox_read?id=' . $msg->id) ?>"><?php t('Read')?></a>
          </td>
      </tr>
<tr><td colspan=10 class="inbox_line"></td></tr>
    <?php endforeach ?>
  <?php else:?>
    <tr>
        <td><?php t('You have no incoming messages') ?></td>
    </tr>
  <?php endif ?>
  </table>
</div>