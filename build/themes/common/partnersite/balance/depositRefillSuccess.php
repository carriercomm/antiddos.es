<?php $sf_response->addMeta("title", __("Add Funds - Create New Invoice - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title price"><?php t('Billing')?></div>
<div class="content">


  <div style="width: 600px;">

    <div style="padding: 10px;"><?php t('deposit_refill_instructions')?></div>

    <br>

    <div class="forarea">

      <form method="post">
        <?php echo $form->renderGlobalErrors() ?>


        <table width="100%" border="0" cellpadding="0" cellspacing="10">
          <tr>
            <td nowrap>

              <table border="0" cellpadding="0" cellspacing="0">
                <tr><td><div class="ppm"><?php t('Amount')?></div></td></tr>
                <tr><td><?php echo $form['amount']->render(array('class'=>"inputt",'style'=>'text-align: right; width: 240px;')) ?></td><td style="padding-left: 6px;">CHF</td><td style="padding-left: 6px;"><?php echo $form['amount']->renderError() ?></td></tr>
              </table>

            </td>
          </tr>
          <tr><td colspan="2"><input type="submit" value="<?php t('Create invoice')?>" class="zbutton green sub" style="width: auto;"></td></tr>
        </table>
        <?php echo $form->renderHiddenFields() ?>
      </form>
    </div>


  </div>


</div>