<?php $sf_response->addMeta("title", __("Dedicated Servers - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title server"><?php t('high_perf_bare_metal')?></div>
<div class="content">


<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">
<h3><?php t('cart_dedicated_servers')?></h3>
<?php t('cart_about_servers',array('%site%'=>$site->getName()))?><br><br>
<div align="left">
<a class="minic" href="<?php echo url_for('@server_config_list') ?>"><?php t('read_more_servers')?></a> &raquo;
</div>

</td>
<td width=10>&nbsp;</td>
<td width=180 class="productpic">
<img src="<?php echo solar_image_url('server.png') ?>" border=0 width=180>
</td>
</tr></table>



<br><br><br>
<div style=""><font class="addontitle"><?php t('select_dedicated_configuration')?></font></div>




<table border="0"  cellpadding="8" cellspacing="1" width=100%><tbody>





<div style="font-size: 0px; height: 7px;">
    <?php include_partial('cart/tr_server', array('configs' => $configs, 'group' => 'light'))?>

<tr><td colspan=20>
        <br><?php t('light_mode_about')?>

        <br><br>
<a id="switch_eco_off" class="zbutton grey blue" style="margin-right: 10px; cursor: pointer;"><?php t('light_mode_on')?></a>
<a id="switch_eco_on" class="zbutton grey" style="cursor: pointer;"><?php t('light_mode_off')?></a>
<br>
</td></tr>

    <?php include_partial('cart/tr_server', array('configs' => $configs, 'group' => 'classic'))?>
    <?php include_partial('cart/tr_server', array('configs' => $configs, 'group' => 'game'))?>
    <?php include_partial('cart/tr_server', array('configs' => $configs, 'group' => 'business'))?>
</div>


<script>
    $('#discount-slider').discountSlider({
        'servers' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= strtolower("'".str_replace(' ','_',$config->name)."', "); } echo trim($s, ', '); ?>),
        'prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= "'$config->price', "; } echo trim($s, ', '); ?>),
        'usd' : <?php echo sfConfig::get('solar_usd_rate') ?>,
        'eur' : <?php echo sfConfig::get('solar_eur_rate') ?>,
        'discount_per_month' : <?php echo $basic_discount ?>,
        'eco_enable_class': 'blue',
        'eco' : true,
        'hide_eco' : false,
        'eco_servers' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !$config->only_eco || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= strtolower("'".str_replace(' ','_',$config->name)."', "); } echo trim($s, ', '); ?>),
        'eco_prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= "'$config->eco_price', "; } echo trim($s, ', '); ?>)
    })
</script>



</table>

<br><br>
<table width=100% border="0"  cellpadding="0" cellspacing="0"><tr>
<td width=50% class="box1 b1">

<font class="poititle"><?php t('Key Features')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('Rapid provision')?></font><br>
<font class="poi"><?php t('Reliable hardware')?></font><br>
<font class="poi"><?php t('Hardware RAID')?></font><br>
<font class="poi"><?php t('KVM/IPMI included for free')?></font><br>
<font class="poi"><?php t('Virtualization ready')?></font><br>
<font class="poi"><?php t('Private networking')?></font><br>

</td>
<td width=10>&nbsp;</td>
<td  class="box1 b2">

<font class="poititle"><?php t('Bandwidth')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('15 TB bandwidth')?></font><Br>
<font class="poi"><?php t('1 gbit/s port')?></font><br>
<font class="poi"><?php t('Multi-homed connection')?></font><br>
<font class="poi"><?php t('Fully redundant')?></font><br>
<font class="poi"><?php t('99.9% Uptime SLA')?></font><br>


</td>

</tr></table>


</div>
