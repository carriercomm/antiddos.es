<?php echo $item->getName() ?>

<hr>

Customers:
<ul>
<?php foreach($customers as $customer): ?>
<li><?php echo $customer->getFullName() ?>
<?php endforeach ?>
</ul>

Products:
<ul>
<?php foreach($products as $product): ?>
<li><?php echo $product->getName() ?>
<?php endforeach ?>
</ul>


<?php if(isset($cur_customer)): ?>
<?php echo link_to('', '@debug_customer_show?id=' . $cur_customer->getId()) ?>
<?php endif ?>

