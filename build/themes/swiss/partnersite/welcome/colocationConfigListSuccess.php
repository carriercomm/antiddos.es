
<style>

.tdbar_st3_left { background:url('/images/partner/swiss/slider2_01.jpg') repeat-x right top; height:372px;}
.tdbar_st3_center { background:url('/images/partner/swiss/slider2_02.jpg') repeat-x 0 0; height:372px; width: 980px;}
.tdbar_st3_right { background:url('/images/partner/swiss/slider2_03.jpg') repeat-x left top; height:372px;}

.menubarleft { background: url('/images/partner/swiss/slider2_04.jpg') repeat-x right top; width: 100%; height: 29px;}
.menubarright { background: url('/images/partner/swiss/slider2_06.jpg') repeat-x left top;  width: 100%; height: 29px; }

</style>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_location_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_02"><?php echo t('text_head_location_2') ?></font><?php end_slot() ?>


<div class="content">
<?php t('colocation_textbox_01',array('%site%'=>$site->getName())) ?>
<br><br>

</div>
<div class="endcontent white"></div>
<div class="content2">




<font class="addontitle">Select Colocation package</font><br><br>


<table border="0"  cellpadding="0" cellspacing="0" width=100%>
<tr>


<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>
<?php if(!$config->available) continue; ?>
<td width=32% align=center valign=top>





<table  width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
	 <td align=center class="ddos_name"><?php echo $config->name ?></td>
	</tr>

<tr><td bgcolor="#3484af" align=left class="ddos_box_2">



<table width=100% height=150 cellpadding="0" cellspacing="0" border=0 >

<tr><td colspan=2 height=24 align=left><font size="3" color="#BADBE8"><strong><?php t('Price')?></strong></font></td></tr>
<tr><td  align=left width=100 valign=top height=50><font color="#BADBE8"><?php t('Monthly fee')?></font></td><td align=right> 
<font class="chf"><?php echo eur($config->price) ?> EUR</font></font><br>
<font class="usd"><font color="#CCCCCC"><?php echo usd($config->price)?> USD<br><?php echo price_ex($config->price) ?> CHF</font></font>

</td></tr>
<tr><td  colspan=2> </td></tr>
<tr><td  align=left valign=top  height=50><font color="#BADBE8"><?php t('Setup fee')?></font></td><td align=right valign=top>
<font class="chf"><?php echo price_ex(eur($config->setup_fee), 'EUR') ?></font></font><Br>
<font class="usd"><font color="#CCCCCC"><?php echo price_ex(usd($config->setup_fee), 'USD') ?></font></font><br>
<font class="usd"><font color="#CCCCCC"><?php echo price_ex($config->setup_fee) ?></font></font>


</td></tr>
</table>




</td></tr>


	<tr>
		<td bgcolor="#eefbff" align=center background="/images/partner/fresh/boxbg2.png">
		
		
<br>
<table width=86% cellpadding="0" cellspacing="0" border=0>

<tr><td colspan=2 height=40 align=left><b><font size="3" face="Arial"><?php t('Configuration')?></font></b></td></tr>

<tr><td width=120 align=left><b><?php t('Space')?></b><br> <?php echo limit($config->space) ?></td></tr>

<tr><td height=2 colspan=2><hr class="hr_colo_line"></td></tr>

<tr><td height=70 align=left valign=top><b><?php t('Bandwidth')?></b><br> <?php echo product_field($config->bandwidth) ?></td></tr>

<tr><td height=2 colspan=2><hr class="hr_colo_line"></td></tr>

<tr><td align=left valign=top><b><?php t('Overage fee each Mb/s')?></b> <br>

<font class="usd"><?php echo price_ex($config->getAddonPriceBySlug('bandwidth-overage')) ?></font><br>
<font class="chf"><?php echo price_ex(eur($config->getAddonPriceBySlug('bandwidth-overage')), 'EUR') ?></font><br>
<font class="usd"><?php echo price_ex(usd($config->getAddonPriceBySlug('bandwidth-overage')), 'USD') ?></font>

</td></tr>

<tr><td height=2 colspan=2><hr class="hr_colo_line"></td></tr>

<tr><td align=left><b><?php t('Power')?></b> <br><?php echo product_field($config->power) ?></td></tr>

<tr><td height=2 colspan=2><hr class="hr_colo_line"></td></tr>

<tr><td height=70 align=left valign=top><b><?php t('Overage fee each Amp')?></b> <br>

<font class="usd"><?php echo price_ex($config->power_overage) ?></font><br>
<font class="chf"><?php echo price_ex(eur($config->power_overage), 'EUR') ?></font><br>
<font class="usd"><?php echo price_ex(usd($config->power_overage), 'USD') ?></font>

</td></tr>

<tr><td height=2 colspan=2><hr class="hr_colo_line"></td></tr>

<tr><td align=left><b><?php t('Network')?></b> <br><?php product_field($config->network) ?></td></tr>

<tr><td height=2 colspan=2><hr class="hr_colo_line"></td></tr>

<tr><td align=left><b><?php t('Contract')?></b><br> <?php echo $config->min_billing_cycle ?> <?php echo (string)$config->min_billing_cycle > 1 ? __('months') : __('month') ?></td></tr>


</td></tr>
</table>


<br>
</td></tr>
<tr><td align=center bgcolor="#D9DCE9" height=3> </td></tr>
<tr><td align=center bgcolor="#EDEDEB"><br><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow"><?php t('Buy')?></a><br></td></tr>

</table>

</td>


<td width=20>&nbsp;</td>


<?php endforeach ?>

</tr></table>



<br>

</div>
<div class="endcontent"></div>
<div class="content-clear" style="text-align: center; float: center;">

<center>




<?php slot('kf_server_0') ?>


<div class="ft colo">

<font class="point big"><?php t('Smooth setup')?></font>
<div style="height: 16px; font-size: 0px;"></div>

<font class="point bigg"><?php t('Custom handling')?></font><br>
<font class="point bigg"><?php t('Expedited setup')?></font><br>
<font class="point bigg"><?php t('No presence required')?></font><br>
<font class="point bigg"><?php t('Equipment purchase')?></font><br>

</div>

<?php end_slot() ?>


<?php slot('kf_server_1') ?>

<div class="ft colo colo2">

<font class="point big"><?php t('Power')?></font>
<div style="height: 16px; font-size: 0px;"></div>

<font class="point bigg"><?php t('Fully Redundant AC/DC')?></font><br>
<font class="point bigg"><?php t('Dual-Power Source')?></font><br>
<font class="point bigg"><?php t('UPS + Diesel Power Backup')?></font><br>

</div>

<?php end_slot() ?>

<?php slot('kf_server_2') ?>

<div class="ft colo colo3">

<font class="point big"><?php t('Bandwidth')?></font>
<div style="height: 16px; font-size: 0px;"></div>
<font class="point small"><?php t('Burstable billing')?></font><br>
<font class="point small"><?php t('15 TB bandwidth')?></font><Br>
<font class="point small"><?php t('Multiple Tier 1 Carriers')?></font><Br>
<font class="point small"><?php t('Fully redundant')?></font><Br>
<font class="point small"><?php t('100% Uptime')?></font><Br>
</div>

<?php end_slot() ?>



<?php slot('kf_server_title_0') ?>
<?php t('Smooth setup')?>
<?php end_slot() ?>

<?php slot('kf_server_title_1') ?>
<?php t('Power')?>
<?php end_slot() ?>

<?php slot('kf_server_title_2') ?>
<?php t('Bandwidth')?>
<?php end_slot() ?>



<table><tr><td>
<?php include_partial('welcome/kf_server') ?>
</td></tr></table>


</center>

</div>


<div class="content">
<?php t('colocation_textbox_02')?>

</div>
