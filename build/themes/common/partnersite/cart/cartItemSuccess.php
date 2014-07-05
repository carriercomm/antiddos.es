<?php include_partial('order/priceboxScript', array('product' => $product)); ?>
<?php include_partial('order/' . $product->type . 'Form', array('product' => $product, 'form' => $form)); ?>

