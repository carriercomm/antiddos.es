<?php foreach($items as $item): ?>
<?php echo link_to($item->name, '@debug_site_show?id=' . $item->id) ?>
<?php endforeach ?>

