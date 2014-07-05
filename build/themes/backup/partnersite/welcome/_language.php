<?php use_helper('Solar') ?>
<?php $route = getCurrentRoute();?>

<table border="0" cellpadding="2" cellspacing="0"  class="divlang" style="margin-right: 4px;"><tr><td>
<font class="wh" style="margin-right: 5px;"><?php t('Language')?>:</font></td>
<td nowrap style="white-space:nowrap; font-size: 0px;" nowrap="nowrap">
<?php foreach (sfConfig::get('global_cultures') as $lang => $descr):?>
<?php if (($lang=='en')||($lang=='es')||($lang=='ru')||($lang=='fr')||($lang=='de')||($lang=='ch')):?>
<?php 
$route['parameters']['sf_culture'] = $lang;      
$url = sfContext::getInstance()->getController()->getActionStack()->getFirstEntry()->getActionInstance()->generateUrl($route['name'], $route['parameters']);
?>
<a href="<?php echo url_for($url)?>" style="margin-right: 5px;">
<img src="<?php echo solar_image_url('langs/'.$lang.'.png') ?>" border=0 style="margin: 0px;" width=24 height=24></a>
<?php else:?>
<?php endif?>
<?php endforeach ?>


</td></tr></table>


