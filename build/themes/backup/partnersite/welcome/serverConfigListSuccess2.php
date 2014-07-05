


</div></div>
<style>

.tdbar_st3_left { background:url('/images/partner/swiss/slider3_01.jpg') repeat-x right top; height:372px;}
.tdbar_st3_center { background:url('/images/partner/swiss/slider3_02.jpg') repeat-x 0 0; height:372px; width: 980px;}
.tdbar_st3_right { background:url('/images/partner/swiss/slider3_03.jpg') repeat-x left top; height:372px;}

.menubarleft { background: url('/images/partner/swiss/slider3_04.jpg') repeat-x right top; width: 100%; height: 29px;}
.menubarright { background: url('/images/partner/swiss/slider3_06.jpg') repeat-x left top;  width: 100%; height: 29px; }
.block.dedicated-servers .title {
font-family: "Arial";
font-size: 16px;}
h3 {
margin-top: 10px;
font-size: 18px;
}
.block.freeddos-servers .description {
font-family: "Arial";
font-size: 13px;}

.content, .bodycontent { margin-top: 15px; line-height: 22px;
padding-left: 15px;
padding: 1px 1px 1px 1px;
color: #3c3c3c;
font-size: 12px;
font-family: "Arial";
text-shadow: 0px 0px 0px rgba(161, 162, 163, 0.75);	
background: url('/images/partner/swiss/startcontent.png') no-repeat left top;  
background: url('/images/partner/swiss/startcontent.png') no-repeat left top, url('/images/partner/swiss/contentbar.png') repeat-x 0px 10px;  
width: 100%; height: 27px; width: auto; height: auto; 
padding: 0px 0px 0px 0px; 
text-align: left;
color: #39628c; 
color: #000000;

line-height: 17px;}
</style>

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
												
												<!-- Content of thecond tab - servers slider -->
												
												
												<div class="content tab-2">
<div class="overview-table">
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
												<!-- End content of thecond tab -->
												
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
				
		
				<!-- Region main-central -->
				<div class="main-bottom">
						<div class="main-bottom-inner">	
</div>
<div class="endcontent"></div>
<div class="content">
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
