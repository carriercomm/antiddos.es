<div class="title neworder">
<?php if($form->isNew()): ?>
<?php t('cart_new_order')?> (<?php t(product_type($form->getObject()->getProduct()->getType())) ?>)
<?php else: ?>
<?php t('cart_edit_order')?>
<?php endif ?>
</div>


<div class="content">




<?php include_partial('cart/' . $form->getObject()->getProduct()->type . 'Details', array('product' => $form->getObject()->getProduct(), 'text_new' => true, 'trial' => $form->getObject()->getIsTrial(), 'order' => $form->getObject())) ?>



</div>

<?php echo $form->renderFormTag(url_for($sf_request->getUri()), array('method' => 'POST', 'enctype'=>'multipart/form-data')) ?>
<?php echo $form->renderGlobalErrors() ?>


<?php include_partial('newcart/addonsForm', array('form' => $form)) ?>

<?php include_partial('newcart/slaForm', array('form' => $form)) ?>


<?php include_partial('newcart/' . $form->getObject()->getProduct()->getType() . 'Form', array('form' => $form)) ?>

<?php if (!$form['billing_cycle']->getWidget()->getOption('is_hidden')): ?>
  <div class="title period"><?php t('Billing period')?></div>

  <div style="<?php echo ($form->getObject()->getIsTrial()) ? 'opacity:0.5;' : '' ?>">
  <div class="content">

  <div class="ordiv">
  <table><tr><td>
  <?php if(!$form['billing_cycle']->isHidden()): ?>
  <?php echo $form['billing_cycle']->renderError() ?><?php echo $form['billing_cycle']->render(array('style' => 'width:100px')) ?>
  <?php else: ?>
  <?php echo $form['billing_cycle']->getValue() ?>
  <?php endif ?>
  </td><td><?php t('months')?></td></tr></table>

  </div>
  </div>
  </div>
<?php endif ?>
<?php if(!$form->getObject()->getIsTrial()): ?>
<?php include_partial('cart/priceboxScript', array('url' => url_for('@cart_pricebox?product_id=' . $form->getObject()->getProduct()->getId() . '&loyalty=' . $form->getObject()->getPayViaLoyalty()))); ?>
<?php endif ?>

<?php echo $form->renderHiddenFields() ?>


<div align="left" class="content" style="margin: 0px; padding-top: 5px; padding-bottom: 5px;">
<div style="padding: 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">


<?php t('terms_link_cart', array(
	'%link1%' => link_to(tr('Terms of Service Agreement'), '@show_page?name=terms-of-service'),
	'%link2%' => link_to(tr('Privacy Policy'), '@show_page?name=privacy-policy'),
 ))?>



<?php if ($form->getObject()->getProduct()->getInstock() < 1 && $form->getObject()->getProduct()->getType() == 'server'): ?>


</div></div>



<div align="left" style="margin: 0px;" class="content">
<div style="padding: 15px; border: 1px solid #F6A2A2; background-color: #F8EAEA;">


  <?php t('terms_out_of_stock')?>
  <br>
  <table border=0 cellpadding=0 sellspacing=0>
      <tbody>
      <tr>
          <td width="25" height="40">
              <input type="checkbox" id="out_of_stock">
          </td>
          <td><?php t('terms_out_of_stock_agree')?></td>
      </tr>
      </tbody>
  </table>

<?php else: ?>

<br><br>

<?php endif ?>



<input type="submit" value="<?php if ($form->isNew()) t('Order now'); else t('Save') ?>" class="zbutton green sub" style="width: auto;">

</div>
</div>

</form>

<br><br>