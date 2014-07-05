<div class="title period"><?php t('Billing period')?></div>
<div class="content">

<form method="post">

<?php echo $form->renderGlobalErrors()?>

<div class="forarea"><?php t('div_edit_period')?></div>
<Br>

<div class="forarea">

<table><tr><td>
<?php if(!$form['billing_cycle']->isHidden()): ?>
<?php echo $form['billing_cycle']->renderError() ?><?php echo $form['billing_cycle']->render(array('style' => 'width:100px')) ?>
<?php else: ?>
<?php echo $form['billing_cycle']->getValue() ?>
<?php endif ?>
</td><td> <?php t('months')?></td></tr></table>

</div>

<?php echo $form->renderHiddenFields()?>


</div></div></div>

<?php include_partial('cart/priceboxScript', array('url' => url_for('@order_billing_pricebox?id=' . $form->getObject()->id))); ?>

</div>


<div style="padding: 10px 30px 30px 30px;" align=right>
<table><tr><td><input type="submit" class="zbutton blue sub" value="<?php t('Update')?>"></td></tr></table>
</div>

</form>

<br><br>



