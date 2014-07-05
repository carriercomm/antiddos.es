<?php $temp = explode(':', $value); $main = array_shift($temp); ?>
<?php t($main) ?>
<?php if(count($temp) > 0): ?>
 <?php echo join('<br>', $temp) ?>
<?php endif ?>


