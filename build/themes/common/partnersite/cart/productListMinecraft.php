<?php $sf_response->addMeta("title", __("Dedicated Servers - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title server"><?php t('title_minefraft_conf')?></div>
<div class="content">


<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">
<h3><?php t('Minecraft servers')?></h3>
<?php t('about_minecraft',array('%site%'=>$site->getName()))?><br><br>
<div align="left">
<a class="minic" href="<?php echo url_for('@minecraft_config_list') ?>"><?php t('read_more_minecraft')?></a> &raquo;
</div>

</td>
<td width=10>&nbsp;</td>
<td width=180 class="productpic">
<img src="<?php echo solar_image_url('minecraft.png') ?>" border=0 width=180>
</td>
</tr></table>



<br><br><br>
<div style="padding: 0px 0px 0px 20px"><font class="addontitle"><?php t('select_minecraft_configuration')?></font></div><br>

<table border="0"  cellpadding="8" cellspacing="1" width=100%><tbody><tr>
<td><span class="style1"><font class="category"><b><?php t('CPU')?></font></span></td>
<td width="100"><span class="style1"><font class="category"><b><?php t('Cores')?></font></span></td>
<td width="140"><span class="style1"><font class="category"><b><?php t('RAM')?></font></span></td>
  <td width="100"><span class="style1"><font class="category"><b><?php t('Storage')?></font></span></td>
  <td width="110"><span class="style1"><font class="category"><b><?php t('RAID')?></font></span></td>
  <td width="130"><span class="style1" align=right><font class="category"><b><?php t('Price')?> <?php t('per month')?></font></td>
  </tr>

<?php foreach($configs as $config): ?>

  <?php if(!$config->available) continue; ?>

    <tr>
      <td colspan="6"  bgcolor="#dddddd" background="<?php echo solar_image_url('td_bar.png') ?>"> 

	<table width=100% cellpadding="0" cellspacing="0" height=40>
	<tr>
	<td width=5>&nbsp;</td><td nowrap width=30 style="color: #000000; font-size: 14px;"><b><font size="3"><?php echo $config->name ?></font></b></td><td width=5>&nbsp;</td>
	<?php if($config->hot): ?><td width=10><div style="padding: 0px 0px 0px 20px"><img src="<?php echo solar_image_url('hot.png') ?>"></div></td><?php endif ?>
	<?php if($config->new): ?><td width=10 align="right"><div style="padding: 0px 0px 0px 20px"><img src="<?php echo solar_image_url('new.png') ?>"></div></td><?php endif ?>
	</td><td align=right><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Choose') ?></a></td>
	</tr>
	</table>


</td>

    </tr>

    <tr><td  bgcolor="#F7F7F7">

<table border="0"  cellpadding="0" cellspacing="0"><Tr><td width=90>
<img src="<?php echo solar_image_url('minicraft.png') ?>">
</td>
<td>
<xstrong><font color="#042F75" size="2"><?php include_partial('welcome/productfield', array('value' => $config->cpu)) ?></font></xstrong>
</td></tr></table>

</td>
<td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->cores)) ?></td>
<td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->ram)) ?></td>
<td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->storage)) ?></td>
<td  bgcolor="#eeeeee" width=120><?php include_partial('welcome/productfield', array('value' => $config->raid)) ?></td>
<td bgcolor="#eeeeee" align=right>
<font class="chf"><?php t(price_ex($config->price)) ?></font><br>
<font class="usd"><?php echo price_ex(usd($config->price), 'USD')?></font><br>
<font class="usd"><?php echo price_ex(eur($config->price), 'EUR')?></font></td>
    </tr>

    <tr>
      <td colspan="6" valign="TOP" height=1></td>
    </tr>

<?php endforeach ?>


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
