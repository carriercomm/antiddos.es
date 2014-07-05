
<?php echo $form->renderFormTag(url_for($sf_request->getUri()), array('method' => 'POST', 'enctype'=>'multipart/form-data')) ?>
<?php echo $form->renderGlobalErrors() ?>


<?php include_partial('cart/addonsForm', array('form' => $form)) ?>

<?php include_partial('cart/' . $form->getProduct()->type . 'Form', array('form' => $form)) ?>

<?php include_partial('newcart/slaForm', array('form' => $form)) ?>
<?php if (!$form['billing_cycle']->getWidget()->getOption('is_hidden')): ?>
<div class="title period"><?php t('Billing period')?></div>

<div style="">
<div class="content">

<div class="ordiv" <?php if ($form['is_trial']->getValue() ) { echo 'style="opacity:0.5;"';} ?>>
<table><tr><td>
<?php if(!$form['billing_cycle']->isHidden()): ?>
<?php echo $form['billing_cycle']->renderError() ?><?php echo $form['billing_cycle']->render(array('style' => 'width:100px')) ?>
<?php else: ?>
<?php echo $form['billing_cycle']->getValue() ?>
<?php endif ?>
</td><td> &nbsp; <?php t('months')?></td></tr></table>

</div>
</div>
</div>
<?php endif ?>

<?php if ( ! $form['is_trial']->getValue() && $form->getObject()->getProduct()->getType() != 'cdn' ): ?>
    <?php  include_partial('cart/priceboxScript', array('url' => $pricebox_url)); ?>
<?php endif ?>
<?php echo $form->renderHiddenFields() ?>


<div align="left" style="padding: 0px 31px">
<div style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">


<?php t('terms_link_cart', array(
	'%link1%' => link_to(tr('Terms of Service Agreement'), '@show_page?name=terms-of-service'),
	'%link2%' => link_to(tr('Privacy Policy'), '@show_page?name=privacy-policy'),
 ))?>


<br><br>
<input type="submit" value="<?php if ($form->isNew()) t('Order now'); else t('Save') ?>" class="zbutton green sub" style="width: auto;">
</div>
</div>

</form>

<br><br>
