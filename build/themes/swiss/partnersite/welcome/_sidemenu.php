
<?php foreach($menu as $link => $title): ?>

<?php $mkeys = array_keys($sf_data->getRaw('menu')); ?>
<?php $lastkey = array_pop($mkeys); ?>


<div><a href="<?php echo url_for($link) ?>" title="" class="leftmenu"><?php t($title) ?></a></div>

  <?php if($link != $lastkey): ?>
<hr class="hrgrey">
  <?php endif ?>




<?php endforeach ?>

