<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>
<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_location_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_location_2') ?></font><?php end_slot() ?>

	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/style2.css" />
		

		<script type="text/javascript" src="/css/partner/swiss/js/jscript.js"></script>
<div class="startcontent"></div>
<div class="bodycontent">

<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top>
<div class="imagebox r1" style="padding: 0px 0px 0px 180px;"><?php t('data_center_01')?>
<br><br>
<iframe width="410" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=Badenerstrasse+569,+8048+Z%C3%BCrich,+Switzerland&aq=&sll=49.738682,-130.627441&sspn=11.294693,33.815918&ie=UTF8&hq=&hnear=Badenerstrasse+569,+Kreis+9,+8048+Z%C3%BCrich,+Switzerland&t=m&view=map&ll=45.336702,9.580078&spn=22.241559,36.123047&z=4&output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=Badenerstrasse+569,+8048+Z%C3%BCrich,+Switzerland&aq=&sll=49.738682,-130.627441&sspn=11.294693,33.815918&ie=UTF8&hq=&hnear=Badenerstrasse+569,+Kreis+9,+8048+Z%C3%BCrich,+Switzerland&t=m&view=map&ll=45.336702,9.580078&spn=22.241559,36.123047&z=4" style="color:#0000FF;text-align:left">View Larger Map</a></small>
<br><br>
<?php t('block_data_center_address')?>
</div>
<br><br>
<div class="imagebox r0202"><?php t('data_center_02')?></div>






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
