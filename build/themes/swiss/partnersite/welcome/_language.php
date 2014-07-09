<?php use_helper('Solar') ?>
<?php $route = getCurrentRoute();?>

<?php foreach (sfConfig::get('global_cultures') as $lang => $descr):?>
	<?php echo $lang; ?>
<?php if (($lang=='en')||($lang=='es')||($lang=='ru')||($lang=='fr')||($lang=='de')||($lang=='ch')):?>
<?php
	  $route['parameters']['sf_culture'] = $lang;      
	  $url = sfContext::getInstance()->getController()->getActionStack()->getFirstEntry()->getActionInstance()->generateUrl($route['name'], $route['parameters']);
?>	
	  <li class="<?php echo $lang; ?>"><a href="<?php echo url_for($url)?>"><?php echo $lang; ?></a></li>
<?php endif; ?>
<?php endforeach; ?>