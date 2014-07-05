<div style="float: right; border: 1px solid">
<ul>
<?php foreach($endpoints as $name => $url): ?>
<li><?php echo link_to($name, $url) ?> - <?php echo $url ?>
<?php endforeach ?>
</ul>
</div>

