<?php $sf_response->addMeta("title", __("Adding Product to Shopping Cart - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<?php include_partial('orderConfiguration', array('product' => $product, 'form' => $form)) ?>

