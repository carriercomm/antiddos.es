<div class="title profile"><?php t('Withdraw profile') ?></div>
<div class="content" align=left>
<?php t('referral_profile_brief') ?>
<form method="post">
<?php echo $form->renderHiddenFields() ?>
<table width=600 cellpadding="6" cellspacing="0" border=0>
  <tr>
      <td colspan="2" style="padding: 0">
          <br><div class="title balance"><?php t('bank_profile') ?></div><br>
      </td>
  </tr>
  <tr>
    <th width=140 nowrap><?php echo $form['receiver_bank_account_name']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_bank_account_name']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['receiver_bank_iban']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_bank_iban']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['receiver_bank_name']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_bank_name']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['receiver_bank_address']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_bank_address']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['receiver_bank_swift']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_bank_swift']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['receiver_note']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_note']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
      <td colspan="2" style="padding: 0">
          <br><div class="title balance"><?php t('paypal_profile') ?></div><br>
      </td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['receiver_paypal_account']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['receiver_paypal_account']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr>
      <td colspan="2" style="padding: 0">
          <br><div class="title balance"><?php t('default_profile') ?></div><br>
      </td>
  </tr>
  <tr>
    <th nowrap><?php echo $form['payout_through']->renderLabel(null,array('class'=>'')) ?> :</th>
    <td><?php echo $form['payout_through']->render(array('class'=>'inputt')) ?></td>
  </tr>
  <tr><td style="text-align: center;" colspan="2"><br><input type="submit" value="Save profile" class="zbutton blue"></td></tr>
</table>
</form>


</div>	