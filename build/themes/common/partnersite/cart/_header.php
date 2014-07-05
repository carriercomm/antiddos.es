<div class="title neworder">
<?php if($form->isNew()): ?>
<?php t('cart_new_order')?> (<?php t(product_type($form->getProduct()->type)) ?>)
<?php else: ?>
<?php t('cart_edit_order')?>
<?php endif ?>
</div>



