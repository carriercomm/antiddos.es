<?php $mkeys = array_keys($sf_data->getRaw('menu')); ?>
<?php $lastkey = array_pop($mkeys); ?>

<table cellpadding="0" cellspacing="0" border="0"><tr>
<?php foreach($menu as $link => $title): ?>

<td nowrap><a href="<?php echo url_for($link) ?>" class="bottommenu"><?php t($title) ?></a></td>
</center>

<?php endforeach ?>
</tr></table>



