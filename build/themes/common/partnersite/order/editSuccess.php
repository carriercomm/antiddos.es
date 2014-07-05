<div class="content">




<?php include_partial('cart/' . $product->type . 'Details', array('product' => $product, 'text_new' => false, 'trial' => false, 'order' => $form->getObject())) ?>



</div>

<?php include_partial('cart/orderForm', array('form' => $form, 'pricebox_url' => url_for('@order_pricebox?id=' . $form->getObject()->id))) ?>

