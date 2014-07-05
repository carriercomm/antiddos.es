<?php if($product->short_name != 'enterprise' && $order->getStatus() == 'active'): ?>
<a href="<?php echo url_for('@order_upgrade?id=' . $order->id) ?>" class="zbutton"><?php t('Upgrade')?></a>
<?php endif ?>

