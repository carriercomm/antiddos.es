<b>Template list</b>
<ul>
<?php foreach($templates as $template => $schemes): ?>
<?php foreach($schemes as $scheme): ?>
<li><?php echo link_to($template . ' - ' . $scheme, '@set_template?template=' . $template . '&scheme=' . $scheme) ?>
<?php endforeach ?>
<?php endforeach ?>
</ul>

