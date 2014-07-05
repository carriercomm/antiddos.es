<?php $sf_response->addMeta("title", __("DDoS Protection and Attack Mitigation- %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title ddos"><?php t('defend_business')?></div>
<div class="content">


<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">

<h3><?php t('cart_ddos_protection')?></h3>
<?php t('cart_about_ddos',array('%site%'=>$site->getName()))?><br><br>

<b><?php t('cart_security_solution')?>:</b><br>

<ul>
<font class="poi"><?php t('cart_security_solution_list1')?></font><br>
<font class="poi"><?php t('cart_security_solution_list2')?></font><br>
<font class="poi"><?php t('cart_security_solution_list3')?></font><br>
<font class="poi"><?php t('cart_security_solution_list4')?></font><br>
<font class="poi"><?php t('cart_security_solution_list5')?></font><br>
</ul>

<?php t('cart_below_you_find')?><br><br>
<div align="left">
<a class="minic" href="<?php echo url_for('@protection_config_list') ?>"><?php t('read_more_ddos')?></a> &raquo;
</div>

</td>
<td width=10>&nbsp;</td>
<td width=180 class="productpic">
<img src="<?php echo solar_image_url('ddos.png') ?>" border=0 width=180>
</td>
</tr></table>
<br><br><br>

<div style="padding: 0px 0px 0px 20px"><font class="addontitle"><?php t('select_ddos_package')?></font></div><br>


<table border=0 width=100% cellpadding="6" cellspacing="0"><tr>

<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>
<?php if(!$config->available) continue; ?>
<td width=33% align=center valign=top>


<table  width="100%" border="0" cellpadding="0" cellspacing="1">
	<tr>
	 	<td align=center style="padding: 12px 0px;" bgcolor="#dddddd"  background="<?php echo solar_image_url('td_bar.png') ?>">
<font size="3"><b><?php echo $config->name ?></b></font>

</td>
	</tr>

<tr><td bgcolor="#284C70" align=center background="/images/partner/fresh/boxbg.png">

<table width=88% cellpadding="5" cellspacing="1" border=0 ><tr><td>

<tr><td colspan=2 height=30 align=left><font size="3" color="#BADBE8"><b><?php t('Price')?></b></font></td></tr>

<tr><td  align=left width=100 valign=top><font color="#BADBE8"><?php t('Monthly fee')?></font></td><td align=right> 

<font class="chf"><font color="#FFFFFF"><?php echo price_ex($config->price) ?></font></font><br>
<font class="usd"><font color="#CCCCCC"><?php echo usd($config->price) ?> USD<br><?php echo eur($config->price) ?> EUR </font></font>

</td></tr>

<tr><td  align=left valign=top height=60><font color="#BADBE8"><?php t('Setup fee')?></font></td><td align=right valign=top>
<font class="chf"><font color="#FFFFFF"><?php t(price_ex($config->setup_fee)) ?></font></font><Br>
<font class="usd"><font color="#CCCCCC"><?php echo price_ex(usd($config->setup_fee), 'USD') ?></font></font><br>
<font class="usd"><font color="#CCCCCC"><?php echo price_ex(eur($config->setup_fee), 'EUR') ?></font></font>


</td></tr>
</table>

<br>
</td></tr>


	<tr>
		<td bgcolor="#EDEDEB" align=center background="/images/partner/fresh/boxbg2.png">
		
<br>
<table width=88% cellpadding="5" cellspacing="0" border=0 >

<tr><td colspan=2 height=40 align=left ><b><font size="3"><?php t('Configuration')?></font></b></td></tr>


<tr><td  align=left width=120><?php t('Max websites')?></td><td align=right ><?php echo limit($config->max_websites) ?></td></tr>
<tr><td align=left ><?php t('Max domains')?></td><td align=right ><?php t(limit($config->max_domains)) ?></td></tr>
<tr><td align=left ><?php t('Max subdomains')?></td><td align=right ><?php t(limit($config->max_subdomains)) ?></td></tr>
<tr><td  align=left valign=top height=54><?php t('Protocols')?> </td><td valign=top align=right ><?php echo str_replace(', ', '<br>', $config->protocols) ?></td></tr>
<tr><td align=left ><?php t('DNS hosting')?></td><td align=right ><img src="/images/partner/fresh/<?php include_partial('global/check', array('value' => $config->dns_hosting)) ?>.png"></td></tr>
<tr><td align=left ><?php t('Content caching')?></td><td align=right ><img src="/images/partner/fresh/<?php include_partial('global/check', array('value' => $config->content_caching)) ?>.png">
<tr><td  align=left valign=top><?php t('Incoming SMTP protection')?></td><td valign=top align=right ><img src="/images/partner/fresh/<?php include_partial('global/check', array('value' => $config->smtp_protection, 'translate' => false)) ?>.png">

</table>
<br>
</td></tr><tr><td bgcolor="#D9DCE9" align=center background="/images/partner/fresh/boxbg3.png">

<br>
<table width=88% cellpadding="4" cellspacing="0" border=0>
<tr><td colspan=2 height=40 align=left><b><font size="3"><?php t('Limits')?></font></b></td></tr>
<tr><td align=left><?php t('Max. Packets/s')?></td><td align=right><?php t(limit($config->limit_packets)) ?></td></tr>
<tr><td align=left><?php t('Max. Requests/s')?></td><td align=right><?php t(limit($config->limit_requests)) ?></td></tr>
<tr><td align=left><?php t('Max. Attack Bandwidth')?></td><td align=right><?php echo bandwidth($config->limit_attack_bandwidth) ?></td></tr>
<tr><td align=left><?php t('Max. Clean Bandwidth')?></td><td align=right><?php echo bandwidth($config->limit_clean_bandwidth) ?></td></tr>
</table>
<br>
</td></tr><tr><td bgcolor="#EDEDEB" align=center background="/images/partner/fresh/boxbg2.png">
<br>
<table width=88% cellpadding="4" cellspacing="0" border=0>
<tr><td colspan=2 height=50 align=left><b><font size="3"><?php t('Upgrades')?></font></b></td></tr>
<tr><td valign=top align=left height=60><?php t('Attack Bandwidth')?><br>100 mbit/s</td><td align=right valign=top>
<font class="chf"><?php t(price_ex($config->getAddonPriceBySlug('attack-bandwidth-overage'))) ?></font><Br>
<font class="usd"><?php echo price_ex(usd($config->getAddonPriceBySlug('attack-bandwidth-overage')), 'USD') ?></font><br>
<font class="usd"><?php echo price_ex(eur($config->getAddonPriceBySlug('attack-bandwidth-overage')), 'EUR') ?></font>

</td></tr>
<tr><td valign=top align=left><?php t('Clean  Bandwidth')?><br>100 mbit/s</td><td align=right>
<font class="chf"><?php t(price_ex($config->getAddonPriceBySlug('clean-bandwidth-overage'))) ?></font><br>
<font class="usd"><?php echo price_ex(usd($config->getAddonPriceBySlug('clean-bandwidth-overage')), 'USD') ?></font><br>
<font class="usd"><?php echo price_ex(eur($config->getAddonPriceBySlug('clean-bandwidth-overage')), 'EUR') ?></font>


</td></tr>
<tr><td valign=top align=left height=60><?php t('Extra website')?></td><td align=right valign=top>
<font class="chf"><?php t(price_ex($config->getAddonPriceBySlug('extra-websites'))) ?></font><Br>
<font class="usd"><?php echo price_ex(usd($config->getAddonPriceBySlug('extra-websites')), 'USD') ?></font><br>
<font class="usd"><?php echo price_ex(eur($config->getAddonPriceBySlug('extra-websites')), 'EUR') ?></font>

</td></tr>

<tr><td valign=top align=left><?php t('Extra domain')?></td><td align=right>
<font class="chf"><?php t(price_ex($config->getAddonPriceBySlug('extra-domains'))) ?></font><br>
<font class="usd"><?php echo price_ex(usd($config->getAddonPriceBySlug('extra-domains')), 'USD') ?></font><br>
<font class="usd"><?php echo price_ex(eur($config->getAddonPriceBySlug('extra-domains')), 'EUR') ?></font>

</td></tr>

<tr><td valign=top align=left height=60><?php t('Incoming SMTP protection')?></td><td align=right valign=top>
<font class="chf"><?php t(price_ex($config->getAddonPriceBySlug('smtp-protection'))) ?></font><br>
<font class="usd"><?php echo price_ex(usd($config->getAddonPriceBySlug('smtp-protection')), 'USD') ?></font><br>
<font class="usd"><?php echo price_ex(eur($config->getAddonPriceBySlug('smtp-protection')), 'EUR') ?></font>
</td></tr>
</table>
<br>
</td></tr>
<tr><td align=center bgcolor="#D9DCE9" height=3></td></tr>
<tr><td align=center bgcolor="#eeeeee" height=50><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Choose')?></a></td></tr>

</table>

</td>

<?php endforeach ?>

</tr></table>
<br>



<br>
<table width=100% border="0"  cellpadding="0" cellspacing="0"><tr>
<td width=50% class="box1 b7">
                           
<font class="poititle"><?php t('Your business protected')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('Instant setup')?></font><br>
<font class="poi"><?php t('Setup assistance')?></font><br>
<font class="poi"><?php t('Stay with your current ISP')?></font><br>
<font class="poi"><?php t('No changes required')?></font><br>

</td>
<td width=10>&nbsp;</td>
<td  class="box1 b8">

<font class="poititle"><?php t('DDoS Mitigation')?></font>
<div style="height: 12px; font-size: 0px;"></div>
<font class="poi"><?php t('All types of attacks')?></font><Br>
<font class="poi"><?php t('Innovative technology')?></font><br>
<font class="poi"><?php t('Automatic detection')?></font><br>
<font class="poi"><?php t('Fully transparent')?></font><br>
<font class="poi"><?php t('Remote protection')?></font><br>
<font class="poi"><?php t('99.9% uptime SLA')?></font><br>


</td>

</tr></table>


</div>

