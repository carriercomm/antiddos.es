<div class="title period"><?php t('IPMI ACL control')?></div>
<div class="content">
  <div style="padding:10px 10px;">



    <?php t('ipmi_acl_text')?>

    <br><br>
    <div class="whitelist_block">
      <?php t('Server ID')?>: <?php echo $order->item['name'] ?><br>
      <?php t('Maximum number of records')?>: <?php echo $order->max_ipmi_acl ?>
    </div>

  </div>
  <form method="post">
    <?php echo $form->renderHiddenFields() ?>
    <table border="0" width="100%" cellspacing="3" cellpadding="10">
      <tr>
        <th class="histitle" width="120">IP</th>
        <th style="width: 100px;">&nbsp;</th>
      </tr>
      <?php if ($order->ipmi_acl): ?>
        <?php foreach ($order->ipmi_acl as $ipmi_acl): ?>
          <tr>
            <td class="his s2"><?php echo $ipmi_acl['ip'] ?></td>
            <td class="">
              <a class="zbutton red" href="<?php echo url_for('@order_server_ipmi_delete?order_id='.$order->id.'&id='.$ipmi_acl['id'])?>" ><?php t('Delete') ?></a>
            </td>
          </tr>
        <?php endforeach ?>
      <?php else: ?>
        <tr>
          <td class="his s2"><?php t('There are no entries')?></td>
          <td></td>
        </tr>
      <?php endif ?>
      <?php if (count($order->ipmi_acl) <= $order->max_ipmi_acl):?>
        <tr>
          <td class="his s2">
            <?php echo $form['ip']->render(array('class' => 'inputt', 'style'=>'width: 90%;')) ?>
            <?php echo $form['ip']->renderError() ?>
          </td>
          <td class="">
            <input class="zbutton green" type="submit" value="Save">
          </td>
        </tr>
      <?php endif ?>
    </table>
  </form>
</div>



