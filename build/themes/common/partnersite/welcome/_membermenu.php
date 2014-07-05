

<div class="title_menu menu s_shad"><?php t('MENU') ?></div>

<div class="af_title_menu" style="padding-right: 0px; padding-left: 0px;">


<?php $current_route = sfContext::getInstance()->getRouting()->getCurrentRouteName(); ?>

<?php foreach($menu as $link => $item): ?>

<?php 
	$info = '';
	if (isset($item['count'])&&$item['count']>0)
	{	
		$info .= ' </td><td align=right> <font class="num_menu'; 
		if (isset($item['tip'])) $info .= ' question" id="update_'.$item['tip'].'" tip="'.__($item['tip'],array(),'partner_panel');
		$info .= '">'.$item['count'].'</font>'; 
	}	
?>

<?php if('@' . $current_route == $link): ?>

<div class="membermenuactive s_shad"><table width=100% border=0 cellpadding=0 cellspacing=0><tr><td><td><div class="menu-img <?php echo $item['title'] ?>"></div><?php t($item['title']) ?><?php echo $info ?></td></tr></table></div>

<?php elseif($link == 'devide'): ?>
</div>
<div class="title_menu menu s_shad" STYLE><?php t('Additional') ?></div>
<div class="af_title_menu" style="padding-right: 0px; padding-left: 0px;">
<?php else: ?>
<div class="membermenu s_shad" style="cursor: pointer;" onclick="location.href='<?php echo url_for($link) ?>';">
<table width=100% border=0 cellpadding="0" cellspacing="0"><tr><td><div class="menu-img <?php echo $item['title'] ?>"></div><?php t($item['title']) ?><?php echo $info ?></td></tr></table>
</div>



<?php endif ?>



<?php endforeach ?>





</div>
</div>

