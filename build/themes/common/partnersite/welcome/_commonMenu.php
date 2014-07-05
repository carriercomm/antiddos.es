<table cellpadding="0" cellspacing="0" border=0>
<tr>

<?php $current_route = sfContext::getInstance()->getRouting()->getCurrentInternalUri(true) ?>

<?php foreach($menu as $link => $title): ?>

<?php if($current_route == $link): ?>

<td nowrap valign=bottom><font class="commonmenuactive <?php echo $title ?>"><?php t($title) ?></font></td>

<?php else: ?> 

<td nowrap valign=bottom><a href="<?php echo url_for($link) ?>" class="commonmenu <?php echo $title ?>"><?php t($title) ?></a></td>

<?php endif ?>

<?php endforeach ?>



<td> </td>



</tr>
</table>
