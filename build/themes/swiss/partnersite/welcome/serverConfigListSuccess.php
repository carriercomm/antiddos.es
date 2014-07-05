
</div></div>


<script>
    $('#discount-slider').discountSlider({
        'servers' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= strtolower("'".str_replace(' ','_',$config->name)."', "); } echo trim($s, ', '); ?>),
        'prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= "'$config->price', "; } echo trim($s, ', '); ?>),
        'usd' : <?php echo sfConfig::get('solar_usd_rate') ?>,
        'eur' : <?php echo sfConfig::get('solar_eur_rate') ?>,
        'discount_per_month' : <?php echo $basic_discount ?>,
        'eco' : true,
        'hide_eco' : false,
        'eco_servers' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !$config->only_eco || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= strtolower("'".str_replace(' ','_',$config->name)."', "); } echo trim($s, ', '); ?>),
        'eco_prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available || !in_array($config->group, array('light','classic','game','business'))) continue; $s .= "'$config->eco_price', "; } echo trim($s, ', '); ?>)
    })

    $(document).ready(function (){
        var sp1 = $("#div_s_1").height();
        $("#div1").animate({height: sp1})
    })

</script>



<link type="text/css" rel="stylesheet" href="/css/partner/swiss/css/minecraft-1.css" />
			<script type="text/javascript" src="/css/partner/swiss/js/jscript.minecraft-1.js"></script>




<?php slot('slider_title') ?><?php echo t('text_head_server_1') ?><?php end_slot() ?>
<?php slot('slider_text') ?><?php echo t('text_head_server_2') ?><?php end_slot() ?>


						<div class="main-top-inner">
								
								<div class="major-tabs">
										
										<div class="major links-group">
											<div class="tab active first" id="tab-1"><span><?php t('Shop Servers')?></span></div>
											
												<div class="tab last" id="tab-2"><span><?php t('Compare Servers')?></span></div>
										</div>
										
										<div class="major content-group">
												
												<!-- Content of first tab - Table server configurations -->
												<div class="content active tab-1">
														<div class="servers-slider">
																<div class="servers-slider-background">
																		<div class="back-1"></div>
																</div>
																<div class="list_carousel">
																		<ul id="servers-carousel">
		
																				<!-- Server products -->
																				
																			
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">
																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title"><?php if ($config->getInstock() < 1): ?>

																						<font color="#cccccc"><?php endif ?><?php echo $config->name ?></font></span>
																								<span class="servers-title-pseudo"><?php echo t('Dedicated Server')?> <?php echo t('in Europe')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/server.png" alt="Cloudcom Dedicated Server" height="65">
																						
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->eco_price) ?></span>
																										<span class="period">/<?php echo t('month')?></span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo $config->eco_price ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->eco_price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php include_partial('productfield', array('value' => $config->cpu)) ?> - <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM - <?php include_partial('productfield', array('value' => $config->storage)) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<?php if ($config->getInstock() < 1): ?>

																						<font size="1px" color="darkorange">out of stock!</font><?php endif ?>
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM<br><?php include_partial('productfield', array('value' => $config->storage)) ?> HDD<br> <?php include_partial('productfield', array('value' => $config->raid)) ?><br>No DDoS Protection<span></span></span>
																						</div>
																						<div class="servers-order form">
																								<div class="back-item"></div>
																								<form>
																										<div class="submit-container">
																												<input type="button" id="add-cart-submit" value="<?php t('Buy')?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>?bill=1&eco=1';" />
																										</div>
																								</form>
																						</div>
																						<div class="server-item-shadow"></div>
																						<div class="server-item-border"></div>
																				</li>
																				
																				<?php endforeach ?>
																				
																				
																				<!-- END server products -->
															
																		
																		
														
																				<!-- Server products -->
																				
																			
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available || $config->only_eco) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">

																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title">
<?php if ($config->getInstock() < 1): ?>

																						<font color="#cccccc"><?php endif ?><?php t('DDoS Protected')?> <?php echo $config->name ?></span>
																								<span class="servers-title-pseudo"><?php echo t('DDoS Protection Server')?></font></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/server.png" alt="DDOS Protected Server" height="65">
																						
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/<?php echo t('month')?></span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo $config->price ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php include_partial('productfield', array('value' => $config->cpu)) ?> - <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM - <?php include_partial('productfield', array('value' => $config->storage)) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a><?php if ($config->getInstock() < 1): ?>

																						<font size="1px" color="darkorange">out of stock!</font><?php endif ?>
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM<br><?php include_partial('productfield', array('value' => $config->storage)) ?> HDD<br> <?php include_partial('productfield', array('value' => $config->raid)) ?><br><font color=green>DDoS Protection: 10000 MBPS, 4000000 PPS, TCP, UDP, ICMP packet filtering<span></span></span>
																						</div>
																						<div class="servers-order form">
																								<div class="back-item"></div>
																								<form>
																										<div class="submit-container">
																												<input type="button" id="add-cart-submit" value="<?php t('Buy')?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';" />
																										</div>
																								</form>
																						</div>
																						<div class="server-item-shadow"></div>
																						<div class="server-item-border"></div>
																				</li>
																				
																				<?php endforeach ?>
																				
																				
																				<!-- END server products -->
															
																				
																		</ul>
																		</ul>
																		<a id="prev" class="prev" href="#">&lt;</a>
																		<a id="next" class="next" href="#">&gt;</a>
																</div>
														</div>
												</div>
												<!-- End content of first tab -->
												
												<!-- Content of second tab - servers slider -->
												
												
												<div class="content tab-2">
<div class="overview-table">



<table width="940" border="0" cellpadding="1" cellspacing="1">
		<tbody>	
<tr class="price">
	<td class="benefits top">Leading DDoS Protected Hostings</td>
<td class="cmp-co-name">Cloudcom</td>  
<td class="cmp-co-name">Another Leading Anti-DDoS Hosting</td> 
<td class="cmp-co-name">Yet Another Leading Anti-DDoS Hosting</td>  
</tr>
<tr class="cmp_tr">
	<td class="benefits">DDoS Mitigation</td>
	<td class="cmp-info ben green cc">Free DDoS Protection 10Gbps / 4Mpps<br><font size="1">over 500 Gbps available by request</font></td>
<td class="cmp-info ben red cc">10Gbps / 2Mpps Protection Original Price: $499<br>
Now on sale $349.99</td>
<td class="cmp-info ben green cc">Free DDos Mitigation 15 Gbps (12Mpps)</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">Sample config</td>
<td class="cmp-info ben cc"><table style="width:230px;"><tbody><tr><td class="cmp_td_cfg param">CPU</td><td class="cmp_td_cfg green cc">E5-2630</td></tr>
	<tr><td class="cmp_td_cfg"></td><td class="cmp_td_cfg green cc">Intel Xeon Hexa core 2.3 GHz</td></tr>
	<tr><td class="cmp_td_cfg"></td><td class="cmp_td_cfg">Sandy Bridge EP<br>	6 Cores / 12 HyperThreads</td></tr>
	<tr><td class="cmp_td_cfg param">RAM</td><td class="cmp_td_cfg">24 GB DDR3-1600 ECC/REG</td></tr>
	<tr><td class="cmp_td_cfg param">Storage<br>Space</td><td class="cmp_td_cfg green">4 TB SAS 6 Gb/s<br>4 TB SAS 6 Gb/s<br>4 TB SAS 6 Gb/s<br></td></tr>
	<tr><td class="cmp_td_cfg">RAID</td><td class="cmp_td_cfg green">LSI 2008 SAS 2</td></tr></tbody></table></td>
<td class="cmp-info ben cc"><table style="width:230px;"><tbody><tr><td class="cmp_td_cfg param">CPU</td><td class="cmp_td_cfg red">E5-2620</td></tr>
		<tr><td class="cmp_td_cfg"></td><td class="cmp_td_cfg red">Intel Xeon Hexa core 2 GHz</td></tr>
		<tr><td class="cmp_td_cfg"></td><td class="cmp_td_cfg">Sandy Bridge EP<br> 6 Cores / 12 HyperThreads</td></tr>
		<tr><td class="cmp_td_cfg param cc">RAM</td><td class="cmp_td_cfg">24 GB DDR3-1600 ECC/REG</td></tr>
		<tr><td class="cmp_td_cfg param cc">HDD</td><td class="cmp_td_cfg red">4000GB (4TB) SATA3 (+$75.00)<br>
		4000GB (4TB) SATA3 (+$75.00)<br>
		4000GB (4TB) SATA3 (+$75.00)</td></tr>
		<tr><td class="cmp_td_cfg">RAID</td><td class="cmp_td_cfg red cc">Raid 5 [ Hardware ] (+$49.00)</td></tr></tbody></table></td>
		<td class="cmp-info ben cc"><table style="width:230px;"><tbody><tr><td class="cmp_td_cfg param">CPU</td><td class="cmp_td_cfg red">Intel Core i3-2100</td></tr>
				<tr><td class="cmp_td_cfg"></td><td class="cmp_td_cfg red">Dual 3.1 GHz</td></tr>
				<tr><td class="cmp_td_cfg"></td><td class="cmp_td_cfg">Dual Core / Quad HyperThreads</td></tr>
				<tr><td class="cmp_td_cfg param cc">RAM</td><td class="cmp_td_cfg">8 GB DDR3-1600 ECC/REG</td></tr>
				<tr><td class="cmp_td_cfg param cc">HDD</td><td class="cmp_td_cfg red">1TB SATA3 <br>
				1TB SATA3 (+$35.00)</td></tr>
				<tr><td class="cmp_td_cfg">RAID</td><td class="cmp_td_cfg red cc">No Raid 5 Hardware</td></tr></tbody></table></td>
</tr>

<tr class="cmp_tr">
	<td class="benefits">Bandwidth allocation</td>
<td class="cmp-info ben green cc">15 TB</td>
<td class="cmp-info ben red cc">10 TB</td>
<td class="cmp-info ben red cc">15TB ($85.00 price)</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">IPKVM</td>
<td class="cmp-info ben green cc">YES, <font size="2">options available</td>
<td class="cmp-info ben green cc">YES</td>
<td class="cmp-info ben green cc">YES</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">Points of Presence
(BGP Anycast)</td>
<td class="cmp-info ben green cc shadowed">Zurich, Switzerland<br>Moscow, Russia</td>
<td class="cmp-info ben green cc shadowed">Amsterdam, Netherlands</td>
<td class="cmp-info ben green cc shadowed">Queensland, Australia</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">Setup Fee</td>
<td class="cmp-info price green cc">free</td>
<td class="cmp-info price green cc">free</td>
<td class="cmp-info price red cc">$150</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">Sample config monthly payment</td>
<td class="cmp-info price green cc">828.60 CHF / $925.33</td>
<td class="cmp-info price red cc">$943.93</td>
<td class="cmp-info price red cc">$979.90</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">Sample config 3 months payment</td>
<td class="cmp-info price green cc">$2316.69</td>
	<td class="cmp-info price red cc">$2831.79</td>
	<td class="cmp-info price red cc">$3089.70</td>
</tr>
<tr class="cmp_tr">
	<td class="benefits">Sample config 1 year payment</td>
<td class="cmp-info price green cc">$7259.28<br><font size="1">(22% discount for 12 months and 10% for voucher code FEB2014)</font></td>
<td class="cmp-info price red cc">$11,327.60</td>

<td class="cmp-info price red cc">$11908.80</td>
</tr>

</tbody></table>
<table width="940" border="0" cellpadding="1" cellspacing="1">
	<tbody>
		<tr class="main_tr">
			<td class="bottom-text">
				Cloudcom occupies a leading position in the industry in the provision of protective services for the entire life cycle of the system security, and no matter what corner of the globe it works!
			</td>
		</tr>
	</tbody>
</table>


															<br><table>
																	<thead>
																				<tr>
																					<th class="price" colspan="9" width="940" align="center">Dedicated Servers in Europe. On-site DDoS Protection. Same day setup. Connected and ready. </th></tr></thead></table><table><thead>
																				<tr>
																						<th class="name" width="120"><?php t('Ready Servers')?></th>
																						<th class="cpu" width="200"><?php t('CPU') ?></th>
																						<th class="cores" width="80"><?php t('Cores')?></th>
																						<th class="ram" width="110"><?php t('RAM') ?></th>
																						<th class="storage" width="110" ><?php t('Storage') ?></th>
																						<th class="raid" width="130" ><?php t('Raid') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																			</thead>
																		<tbody>	
																					<!-- Server products -->	
																			
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>
<?php if(!$config->available || $config->only_eco || $config->getInstock() < 1) continue; ?>																				<tr class="even">
																						<td class="server-info name"><font color="green"><?php echo $config->name ?> <?php t('Server')?></font>

																				<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
																						<td class="server-info cores"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
																						<td class="server-info ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td>
																						<td class="server-info storage"><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
																						<td class="server-info raid"><?php include_partial('productfield', array('value' => $config->raid)) ?></td>
																						<td class="server-info price">
																								<div class="price-euro">
																										<span class="badge">&#8364 <?php echo eur($config->eco_price) ?></span>
																								</div>
																								<div class="price-other">
																									
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																		</tbody></table><br>		
														<div class="overview-table">
																		<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">DDoS Protected Dedicated Servers. 10 GBPS TCP/UDP DDoS Protection included. 4MPPS Unlimited DDoS Mitigation. </th>
																				</tr></thead></table>
																				<table>
																		<thead>
																				
																				<tr>
																						<th class="name" width="120"><?php t('DDoS Protected')?></th>
																						<th class="cpu" width="200"><?php t('CPU') ?></th>
																						<th class="cores" width="80"><?php t('Cores')?></th>
																						<th class="ram" width="110"><?php t('RAM') ?></th>
																						<th class="storage" width="110" ><?php t('Storage') ?></th>
																						<th class="raid" width="130" ><?php t('Raid') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																			</thead>
																		<tbody>	
																					<!-- Server products -->	
																			
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>


<?php if(!$config->available || $config->only_eco) continue; ?>

																				<tr class="even">
																						<td class="server-info name"><?php if ($config->getInstock() < 1): ?>

																						<font color="#cccccc"><?php endif ?><?php echo $config->name ?> <?php t('Server')?></font>
<?php if ($config->getInstock() < 1): ?>

																					<br>	<font size="1px" color="darkorange">out of stock!</font><?php endif ?>
																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
																						<td class="server-info cores"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
																						<td class="server-info ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td>
																						<td class="server-info storage"><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
																						<td class="server-info raid"><?php include_partial('productfield', array('value' => $config->raid)) ?></td>
																						<td class="server-info price">
																								<div class="price-euro">
																										<span class="badge">&#8364 <?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																									
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- end Server products -->	
																				<tr class="odd"><td colspan=9></td></tr>
																				</tbody>
																</table><br><br><div class="overview-table">
																				<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Dedicated Servers in Zurich, Switzerland. Can be upgraded with DDoS Protection. Unmetered 1Gbps Ports. </th>
																				</tr></thead></table>
<table>
																		<thead>
																				
																				<tr>
																						<th class="name" width="120"><?php t('Dedicated Server')?></th>
																						<th class="cpu" width="200"><?php t('CPU') ?></th>
																						<th class="cores" width="80"><?php t('Cores')?></th>
																						<th class="ram" width="110"><?php t('RAM') ?></th>
																						<th class="storage" width="110" ><?php t('Storage') ?></th>
																						<th class="raid" width="130" ><?php t('Raid') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																			</thead>
																		<tbody>	
																					<!-- Server products -->	
																			
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>
<?php if(!$config->available) continue; ?>																				<tr class="even">
																						<td class="server-info name"><?php if ($config->getInstock() < 1): ?>

																						<font color="#cccccc"><?php endif ?><?php echo $config->name ?> <?php t('Server')?></font><?php if ($config->getInstock() < 1): ?>

																					<br>	<font size="1px" color="darkorange">out of stock!</font><?php endif ?><?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
																						<td class="server-info cores"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
																						<td class="server-info ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td>
																						<td class="server-info storage"><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
																						<td class="server-info raid"><?php include_partial('productfield', array('value' => $config->raid)) ?></td>
																						<td class="server-info price">
																								<div class="price-euro">
																										<span class="badge">&#8364 <?php echo eur($config->eco_price) ?></span>
																								</div>
																								<div class="price-other">
																									
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>?bill=1&eco=1" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- end Server products -->	
																				<tr class="odd"><td colspan=9></td></tr>
																			</tbody>
																</table></div><br><br>
																				
																				
																			<div class="overview-table">
																<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center"><?php t('Each Dedicated')?></th>
																				</tr></thead>
																		<tbody>
																
																
																			<tr class="odd"><td colspan=9><img src="/images/partner/swiss/linux_windows_freebsd.gif" width=940></td></tr>
																				
																		</tbody>
																		
																		
																		
																</table>

																<br>
																<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Our Protected Servers and Instant Clouds are equipped with top performing hardware</th>
																				</tr></thead>
																		<tbody>
																
																
																					<tr class="odd"><td colspan=9><img src="/images/partner/swiss/cloudcom_hardware.gif" width=940></td></tr>
																						
																		</tbody>
																		
																		
																		
																</table><br>
																	<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Each Cloudcom Server and Protected Cloud Server comes with free administration tools</th>
																				</tr></thead>
																		<tbody>
																
																
																						
																							<tr class="odd"><td colspan=9><img src="/images/partner/swiss/remote_administer.jpg" width=940></td></tr>
																		</tbody>
																		
																		
																		
																</table>
																
																<br>
																							
																							
														</div>
												</div>
												<!-- End content of second tab -->
												
										</div>
										
								</div>
								
						</div>
				</div></div>
				<!-- End region main-top -->
				
				<!-- Region main-central -->
				<div class="main-central">
						<div class="main-central-inner">

<div style="height: 130px; display: block;">								
								<div class="block free-servers" style="position: absolute; width: 100%; left: 0;">
										<img src="/css/partner/swiss/images/PP-blockall-back.png" height="134"/>
										<div class="title"><?php t('100 Dedicated')?></div>
										<div class="description"><?php t('DDoS any Dedicated')?></div>
								</div>
</div>
								
						</div>
		
				<!-- End region main-central -->



	<!-- Region main-top -->
				<div class="main-top">
						<div class="main-top-inner">
								
								<!-- Block  main four link -->
								<div class="four-links four-div">
																
										<!-- Block four link inner-->
										<div class="four-div-inner links-group">
												<div class="first-link link" id="link-1">
																<div class="inner-link">	
																<a href>Top Hardware</a>
																</div>
												</div>
												<div class="second-link link" id="link-2">
																<div class="inner-link">
																<a href>DDoS Bulletproof</a>
																</div>
												</div>
												<div class="third-link link" id="link-3">
																<div class="inner-link">
																<a href>Full Control</a>
																</div>
												</div>
												<div class="four-link link" id="link-4">
																<div class="inner-link">
																<a href>Free Upgrades</a>
																</div>
												</div>
												
										</div>
										<!-- End block  main four link inner -->
										
								</div>
								<!-- End block four link -->
								
								<!-- Block slider discount-->
					            <table width="970" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td>


					                        <div class="dis_pro" id="div1" style="height: 89px;"><b><span id="discount">10 %</span></b>
					                            <div style="height: 12px; font-size: 0px;"></div>
					                            Discount</div>


					                    </td><td width="10"><div style="width: 10px;"></div></td><td>

					                        <div align="center">
					                            <div class="dis_div" id="div_s_1">

					                                <table width="820" border="0" cellpadding="0" cellspacing="0">
					                                    <tbody><tr>
					                                        <td>

					                                            <div style="width: 820px; margin-left: 4px;" align="left">
					                                                <style>
					                                                    #switch_eco{
					                                                        color: black;
					                                                    }
					                                                    #switch_eco.checked{
					                                                        color: green;
					                                                    }
					                                                </style>
					                                                <div style="padding: 0px 0px 0px 0px; font-size: 14px;"><b>Select billing period</b>: <span id="calculated-month">6</span> months</div>

					                                                <style>.td_w { width: 70px; font-size: 12px; }</style>

					                                                <div style="padding: 10px 0px 14px 0px;">
					                                                    <table width="830" border="0" cellpadding="0" cellspacing="0"><tbody><tr>

					                                                            <td class="td_w" style="width:68px;">1</td>
					                                                            <td class="td_w">2</td>
					                                                            <td class="td_w">3</td>
					                                                            <td class="td_w" style="">4</td>
					                                                            <td class="td_w" style="">5</td>
					                                                            <td class="td_w">6</td>
					                                                            <td class="td_w" style="">7</td>
					                                                            <td class="td_w" style="">8</td>
					                                                            <td class="td_w" style="width: 66px;">9</td>
					                                                            <td class="td_w">10</td>
					                                                            <td class="td_w">11</td>
					                                                            <td style="font-size: 12px;">12</td>
					                                                            <td></td>
					                                                        </tr></tbody></table>
					                                                </div>

					                                                <div style="width:772px; margin-left: 1px;"><div id="dis-scale"><div style="width: 1px; height: 28px; position: absolute; left: 9.090909090909092%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 18.181818181818183%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 27.272727272727273%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 36.36363636363637%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 45.45454545454546%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 54.54545454545455%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 63.63636363636364%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 72.72727272727273%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 81.81818181818183%; top: 0px; background: #999999; "></div><div style="width: 1px; height: 28px; position: absolute; left: 90.90909090909092%; top: 0px; background: #999999; "></div></div><div id="discount-slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable"><a class="ui-slider-handle ui-state-default ui-corner-all" href="https://cloudc.me/en/dedicated#" style="left: 45.45454545454545%;"></a></div></div>

					                                                <br>

					                                            </div>



					                                        </td>
					                                    </tr>
					                                </tbody></table>

					                            </div>
					                        </div>

					                    </td></tr></tbody></table>


 <br><br>

<div class="server_name_font">Ready servers (available in two hours):</div><br>
            <div style="font-size: 0px; height: 7px;"></div>
			
            <?php include_partial('welcome/tr_server', array('configs' => $configs, 'group' => 'light'))?>


            <br><br>

            <div style="width: 860px; height: 40px; text-align: left;">

              <a id="switch_eco_off" class="lightmode_classic on"><?php t('With DDoS Protection')?></a><a id="switch_eco_on" class="lightmode_eco off"><?php t('No DDoS Protection (Light Mode)')?></a>

            </div>


    <div align="center">

            <?php include_partial('welcome/tr_server', array('configs' => $configs, 'group' => 'classic'))?>
            <?php include_partial('welcome/tr_server', array('configs' => $configs, 'group' => 'game'))?>
            <?php include_partial('welcome/tr_server', array('configs' => $configs, 'group' => 'business'))?>
            </div>



            <br>

			<div class="server_name_font">Out of stock:</div><br>
			            <div style="font-size: 0px; height: 7px;"></div>
			            <?php include_partial('welcome/tr_server_na', array('configs' => $configs, 'group' => 'light'))?>


			            <br><br>

    <div align="center">



			            <?php include_partial('welcome/tr_server_na', array('configs' => $configs, 'group' => 'classic'))?>
			            <?php include_partial('welcome/tr_server_na', array('configs' => $configs, 'group' => 'game'))?>
			            <?php include_partial('welcome/tr_server_na', array('configs' => $configs, 'group' => 'business'))?>
			            </div>



			            <br>

<br>





</div>






<br><table width=940><tr><td>
<div class="block freeddos-servers">
										<div class="description"><br>
<?php t('server_textbox_01',array('%site%'=>$site->getName())) ?>
</div></div>
</td><td width="65%">
<div class="block text-servers">
										<div class="description">
<br>
<?php t('server_textbox_02',array('%site%'=>$site->getName())) ?>
</div></div>
</td></tr></table>
<br><br>
<div class="content" style="padding: 20px 0px 0px 0px">


<font class="addontitle"><?php t('welcome_prices_for_upgrades')?></font><br><br>

<table  border="0"  cellpadding="0" cellspacing="0"  width=100%><tr><td width=400 valign=top>
<?php include_partial('welcome/addons', array('addons' => $addons)) ?>

</td><td valign="top">

</td></tr></table>
                            

<Br>

<?php slot('kf_server_0') ?>

<div class="ft server">

<font class="point big"><?php t('Key Features')?></font>
<div style="height: 10px; font-size: 0px;"></div>	
<font class="point middle"><?php t('Rapid provisionin')?></font><Br>
<font class="point middle"><?php t('Reliable hardware')?></font><Br>
<font class="point middle"><?php t('Hardware RAID')?></font><Br>
<font class="point middle"><?php t('KVM/IPMI included for free')?></font><Br>
<font class="point middle"><?php t('Virtualization ready')?></font><Br>
<font class="point middle"><?php t('Private networking')?></font><Br>

</div>

<?php end_slot() ?>

<?php slot('kf_server_1') ?>

<div class="ft server2">

<font class="point big"><?php t('Bandwidth')?></font>
<div style="height: 10px; font-size: 0px;"></div>	
<font class="point middle" ><?php t('15 TB bandwidth')?></font><br>
<font class="point middle" ><?php t('1 gbit/s port')?></font><br>
<font class="point middle" ><?php t('Multi-homed connection')?></font><br>
<font class="point middle" ><?php t('Multiple Tier 1 Carriers')?></font><br>
<font class="point middle" ><?php t('Fully redundant')?></font><br>
<font class="point middle" ><?php t('99.9% Uptime SLA')?></font><br>


</div>

<?php end_slot() ?>


<?php slot('kf_server_title_0') ?>
<?php t('Key features')?>
<?php end_slot() ?>

<?php slot('kf_server_title_1') ?>
<?php t('Bandwidth')?>
<?php end_slot() ?>

<div class="content_clear" align=left style="width: 100%;">

<table  border="0"  cellpadding="0" cellspacing="0"  width="100%"><tr><td width="450" height="164">

<?php include_partial('welcome/kf_server') ?>


</td><td width=10> </td><td valign=top>


<div class="content" style="width:320px; margin-top: 0px; padding: 20px 0px 0px 0px;">

<h4><?php t('welcome_amazing_features')?></h4>
<?php t('welcome_it_is_impossible')?>
</div>
<div class="endcontent"></div>

</td></tr></table>

</div>
<br>
</div>
