<div class="title period"><?php t('Whitelists control')?></div>
<div class="content">
  <div style="padding:10px 10px;">



<?php t('whitelist_text')?>

<br><br>
<div class="whitelist_block">
<?php t('Server ID')?>: <?php echo $order->item['name'] ?><br>
<?php t('Maximum number of records')?>: <?php echo $order->max_whitelists ?>
</div>

  </div>
  <form method="post">
  <?php echo $form->renderHiddenFields() ?>
  <table border="0" width="100%" cellspacing="3" cellpadding="10">
    <tr>
        <th class="histitle" width="120">IP</th>
        <th class="histitle"><?php t('Traffic type')?></th>
        <th class="histitle"><?php t('Description')?></th>
        <th class="histitle" width="220"><?php t('Status')?></th>
        <th>&nbsp;</th>
    </tr>
    <?php if ($order->whitelists): ?>
      <?php foreach ($order->whitelists as $whitelist): ?>
        <tr>
            <td class="his s2"><?php echo $whitelist['ip'] ?></td>
            <td class="his s2"><?php echo strtoupper($whitelist['traffic_type']) ?></td>
            <td class="his s2"><?php echo $whitelist['description'] ?></td>
            <td class="his s2" style="text-align: center"><font class="status <?php echo $whitelist['status'] ?>"><?php echo ucfirst($whitelist['status']) ?></font>&nbsp;</td>
            <td class="">
              <?php if ($whitelist['read_only'] != true): ?>
                <?php if ($whitelist['status'] == 'removing'): ?>
                  <a class="zbutton gray"><?php t('Delete') ?></a>
                <?php else: ?>
                  <a class="zbutton red" href="<?php echo url_for('@order_whitelists_delete?order_id='.$order->id.'&id='.$whitelist['id'])?>" ><?php t('Delete') ?></a>
                <?php endif ?>
              <?php endif ?>
            </td>
        </tr>
      <?php endforeach ?>
    <?php else: ?>
      <tr>
          <td class="his s2" colspan="4"><?php t('There are no entries')?></td>
      </tr>
    <?php endif ?>
    <?php if (count($order->whitelists) <= $order->max_whitelists):?>
      <tr>
        <td class="his s2">
<?php echo $form['ip']->render(array('class' => 'inputt', 'style'=>'width: 90%;')) ?>
          <?php echo $form['ip']->renderError() ?>
        </td>
        <td class="his s2">
          <?php echo $form['traffic_type']->render() ?>
        </td>
        <td class="his s2">
          <?php echo $form['description']->render(array('class' => 'inputt', 'style'=>'width: 90%;')) ?>
          <?php echo $form['description']->renderError() ?>
        </td>
        <td></td>
        <td class="">
            <input class="zbutton green" type="submit" value="Save">
        </td>
      </tr>
    <?php endif ?>
  </table>
  </form>
</div>



