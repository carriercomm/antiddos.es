<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>

	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/style2.css" />
		
		<script type="text/javascript" src="/css/partner/swiss/js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="/css/partner/swiss/js/jquery.ui.core.js"></script>
    
		<script type="text/javascript" src="/css/partner/swiss/js/jscript.js"></script>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_ddos_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_ddos_2') ?></font><?php end_slot() ?>
<div class="startcontent"></div>
<div class="bodycontent">


<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top>
<?php t('network_text_01')?>
<br><br>
<div class="imagebox c542"><?php t('network_text_02')?></div>
</td><td width=20> </td><td width=280 valign=top>

<?php include_partial('welcome/adv') ?>

</td></tr></table>

<Br>

<table><tr><td align=left>
<br>
<div style="height: 40px;">  
<a href="<?php echo url_for('@show_page?name=product-features') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Product Features')?></a>
<a href="<?php echo url_for('@show_page?name=hardware-platform') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Hardware Platform')?></a>
<a href="<?php echo url_for('@show_page?name=data-center-location') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Data Center Location')?></a>
<a href="<?php echo url_for('@show_page?name=network-connectivity') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Network Connectivity')?></a>
</div>
</td><td align=right>

<?php include_partial('welcome/social', array('site' => $site)) ?>

</td></tr></table>


</div>
