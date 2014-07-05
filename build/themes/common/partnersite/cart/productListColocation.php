<?php $sf_response->addMeta("title", __("Colocation in Switzerland, Zurich - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title colocation"><?php t('locating_colo')?></div>
<div class="content">



<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">


<h3><?php t('cart_colocation_options')?></h3>

<?php t('cart_about_colocation',array('%site%'=>$site->getName()))?><br><br>

<div align="left">
<a class="minic" href="<?php echo url_for('@colocation_config_list') ?>"><?php t('read_more_colocation')?></a> &raquo;
</div>

</td>
<td width=10>&nbsp;</td>
<td width=180 class="productpic">
<img src="<?php echo solar_image_url('colocation.png') ?>" border=0 width=256 height=180 alt="colocation">
</td>
</tr></table>


<br><br><br>
<div style="padding: 0px 0px 0px 20px"><font class="addontitle"><?php t('select_colocation_package')?>  </font></div><br>

<table border="0" cellpadding="8" cellspacing="1" width=100%><tbody>

<tr>
<td bgcolor="#F7F7F7" width="25%" xbackground="<?php echo solar_image_url('td_bar.png') ?>">&nbsp;</td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>                                                 
<td bgcolor="#F7F7F7" width="25%" xbackground="<?php echo solar_image_url('td_bar.png') ?>"><font class="category" ><b><?php echo $config->name ?></b></font></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Space')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php include_partial('welcome/productfield', array('value' => $config->space)) ?></font></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Bandwidth')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php include_partial('welcome/productfield', array('value' => $config->bandwidth)) ?></font></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Overage fee each Mb/s')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee">
<font class="chf"><?php echo price($config->bandwidth_overage) ?> CHF</font><br>
<font class="usd"><?php echo usd($config->bandwidth_overage) ?> USD</font><Br>
<font class="usd"><?php echo eur($config->bandwidth_overage) ?> EUR</font>
</td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Power')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php include_partial('welcome/productfield', array('value' => $config->power)) ?></font></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Overage fee each Amp')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php include_partial('welcome/productfield', array('value' => $config->power_overage)) ?></font></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Network')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php include_partial('welcome/productfield', array('value' => $config->network)) ?></font></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Contract')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php echo $config->min_billing_cycle?> <?php if ($config->min_billing_cycle > 1) t('months'); else t('month') ?></font></td>
<?php endforeach ?>
</tr>

<tr><td> </td><td colspan=10><b><br><font size="3" color="#2f2f2f"><?php t('Price')?> <?php t('per month')?></font></b></td></tr>

<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Setup fee')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee">

<font class="chf"><?php echo price($config->setup_fee) ?> CHF</font><br>
   <font class="usd"><?php echo usd($config->setup_fee) ?> USD<br>
   <?php echo eur($config->setup_fee) ?> EUR</font></font></td>

<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Price per month')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee">

<font class="chf"><?php echo price($config->price) ?> CHF</font><br>
     <font class="usd"><?php echo usd($config->price) ?> USD<br>
     <?php echo eur($config->price) ?> EUR</font></font></td>
<?php endforeach ?>
</tr>


<tr><td bgcolor="#cccccc" valign="top" width="25%" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('cart_remote_hands')?></strong></td><td colspan="3" valign="TOP" bgcolor="#eeeeee">

<font color="#000000"><?php echo price($configs[0]->getAddonPriceBySlug('remote-hands')); ?> CHF</font>

</td>
</tr>
<tr><td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Additional IPv4 per month')?></strong></td>
<td colspan="3" valign="TOP" bgcolor="#eeeeee">

<font color="#000000"><?php echo price($configs[0]->getAddonPriceBySlug('additional-ips')); ?> CHF</font>

</td>
</tr>
<tr>
 <td align=center bgcolor="#FFFFFF" height=50>&nbsp;</td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
 <td align=center  bgcolor="#eeeeee"><font color="#000000"><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Choose')?></a></font></td>
<?php endforeach ?>
</tr>
</tbody></table>


<br><br><br>
<table width=100% border="0"  cellpadding="0" cellspacing="0"><tr>
<td width=33% class="box1 b3">

<font class="poititle b3"><?php t('Smooth setup')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('Custom handling')?></font><br>
<font class="poi"><?php t('Expedited setup')?></font><br>
<font class="poi"><?php t('No presense required')?></font><br>
<font class="poi"><?php t('Equipment purchase')?></font><br>

</td>
<td width=10>&nbsp;</td>
<td  width=33%  class="box1 b4">

<font class="poititle b4"><?php t('Power')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('Fully Redundant AC/DC')?></font><br>
<font class="poi"><?php t('Dual-Power Source')?></font><br>
<font class="poi"><?php t('UPS + Diesel Power Backup')?></font><br>
</td>

<td width=10>&nbsp;</td>
<td  class="box1 b9">

<font class="poititle b5"><?php t('Bandwidth')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('Burstable billing')?></font><Br>
<font class="poi"><?php t('Tier-1 bandwidth providers only')?></font><br>
<font class="poi"><?php t('Multi-homed connection')?></font><br>
<font class="poi"><?php t('Fully redundant')?></font><br>
<font class="poi"><?php t('99.9% Uptime')?></font><br>

</td>


</tr></table>



</div>
