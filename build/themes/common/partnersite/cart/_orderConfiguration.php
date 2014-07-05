<?php include_partial('header', array('product' => $product, 'form' => $form)); ?>
<div class="content">




<?php include_partial($product->type . 'Details', array('product' => $product, 'text_new' => true, 'trial' => (isset($form['is_trial']) && $form['is_trial']->getValue()), 'order' => $form->getObject() )) ?>



</div>

<?php include_partial('orderForm', array('form' => $form, 'pricebox_url' => url_for('@cart_pricebox?product_id=' . $product->id))); ?>
