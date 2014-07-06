<?php $mkeys = array_keys($sf_data->getRaw('menu')); ?>
<?php $lastkey = array_pop($mkeys); ?>

<?php foreach($menu as $link => $title): ?>
<li><a href="<?php echo url_for($link) ?>"><?php t($title) ?></a></li>
<?php endforeach ?>