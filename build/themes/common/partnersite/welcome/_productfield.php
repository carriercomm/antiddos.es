<?php $temp = explode(':', $value); $main = array_shift($temp); ?>
<?php t($main) ?>
<?php if(count($temp) > 0): ?>
<br>
<?php foreach($temp as $k=>$v) $temp[$k] = __($v,array(),'partner_panel');?>
<?php echo join('<br>', $temp) ?>
<?php endif ?>


