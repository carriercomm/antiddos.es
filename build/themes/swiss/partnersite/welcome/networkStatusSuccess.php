
<style>
.slider_pre { margin-top: 87px; margin-right: 140px; }
</style>
<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_status_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_status_2') ?></font><?php end_slot() ?>

<div class="content">

<h3><?php t('Network Status')?></h3>

<table><tr><td valig=top>
<?php t('pages_site_network',array('%site%'=>$site->getName()))?>
<br><br>
<img src="https://share.pingdom.com/banners/8faff86a" border=0> &nbsp; &nbsp; &nbsp; &nbsp; <img src="https://share.pingdom.com/banners/a3ae47a6" border=0 style="margin-left: 20px;">

</td></tr></table>
</div>

<div class="endcontent white"></div>
<div class="content2">

<div class="content_clear">
<?php if (count($network)):?>
<?php foreach ($network as $current):?>
<table><tr><td><img src="data:image/jpg;base64,<?php echo $current->getIcon()?>"></td>
<td width=10></td><td>
<font class="net_status_title"><b><?php echo $current->getTitle()?></b></font><br>
<div style="height: 5px; font-size: 0px;"></div>
<font class="net_status_text"><?php echo $current->getMaintenance()?></font>
</td></tr></table>
<?php endforeach?>
<?php else:?>
<?php t('pages_no_maintenances')?>
<?php endif?>

<br>
</div>
</div>