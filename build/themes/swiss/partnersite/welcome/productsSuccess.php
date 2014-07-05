</div></div>
<style>
.hrdash { color: #999999;height:1px;border-top:0px;border-style:dashed; border-left: 0px; border-right: 0px; }
.content, .bodycontent { margin-top: 15px; line-height: 22px;
padding-left: 15px;
color: #3c3c3c;
font-size: 12px;
font-family: "Arial";
text-shadow: -1px 0px 2px rgba(161, 162, 163, 0.75);	
background: url('/images/partner/swiss/startcontent.png') no-repeat left top;  
background: url('/images/partner/swiss/startcontent.png') no-repeat left top, url('/images/partner/swiss/contentbar.png') repeat-x 0px 10px;  
width: 100%; height: 27px; width: auto; height: auto; 
padding: 0px 0px 0px 0px; 
text-align: left;
color: #39628c; 
color: #000000;
line-height: 17px;}

</style>

<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_product_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_product_2') ?></font><?php end_slot() ?>




						
						
				<!-- Region main-top -->
			
						<div class="main-top-inner">
								
								<div class="major-tabs">
										
										<div class="major links-group">
												<div class="tab active first" id="tab-1"><span><?php t('Shop Products')?></span></div>
												<div class="tab last" id="tab-2"><span><?php t('View All')?></span></div>
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
		
																					
		
		
																		
																			<li class="item-slider">
																						<div class="title-group">
									<span class="servers-title"><font color="#F57815"><?php t('Free')?><?php t('Cloud')?> </font></span>
																								<span class="servers-title-pseudo"><?php t('Free')?> <?php t('VPS')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/cloud_server.jpg" alt="DDOS Protected Cloud" height="65">
																								<div class="price-euro">
																									<span class="badge"></span>
																									
																									<span class="price">7 days trial</span>
																										<span class="period"></span>
																								</div>
																								<div class="price-other">
																										<span class="price">-</span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price">-</span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php echo t('CPU')?> 2.4 Ghz Intel Xeon - 512 MB <?php echo t('RAM')?> - 10 GB <?php echo t('HDD')?> - 500 TB <?php echo t('Bandwidth')?>, 10 Gbit/s, <?php echo t('Instant',array('%site%'=>$site->getName())) ?> <?php t('Setup',array('%site%'=>$site->getName())) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<span class="hint" style="display: none;">
																								<?php echo t('CPU')?>: 2.4 Ghz Intel Xeon	<br>
																								<?php echo t('Cores')?>:	1 <br>
																								Processing Power: 2.4 GHz  <br>
																								Maximum Servers:	1 <br>
																								More CPU Cores: available<br>
<?php echo t('RAM')?>:	512 MB<br>
<?php echo t('Storage')?>:	10 GB <br>
Storage Grade: High-Availability SAN<br>
<?php echo t('Bandwidth')?>:	500GB <br>  
<?php echo t('Network')?>: 10 Gigabit Public & Private Networks <br>
<?php t('Anti DDOS')?>: yes<br>
<?php echo t('DDoS Protection')?>: 10 Gigabit multi layer (4mpps)<span></span></span>
																						</div>
																						<div class="servers-order form">
																								<div class="back-item"></div>
																								<form>
																										<div class="submit-container">
																												<input type="button" id="add-cart-submit" value="<?php t('Free')?> <?php t('VPS')?>" onclick="location.href='<?php echo url_for('@show_page?name=free-vps') ?>';" />
																										</div>
																								</form>
																						</div>
																						<div class="server-item-shadow"></div>
																						<div class="server-item-border"></div>
																				</li>
									<!-- Cloud products -->					
																				<?php $i = 0 ?>
<?php foreach($configs['cloud'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">
																						
																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title"><?php echo $config->name ?></span>
																								<span class="servers-title-pseudo"><?php t('DDOS Protected Cloud')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/cloud_server.jpg" alt="DDOS Protected Cloud" height="65">
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo price($config->price) ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php include_partial('productfield', array('value' => $config->cpu)) ?> - <?php include_partial('productfield', array('value' => $config->ram)) ?> MB RAM - <?php include_partial('productfield', array('value' => $config->storage)) ?> GB HDD - <?php include_partial('productfield', array('value' => $config->bandwidth)) ?> TB <?php t('Bandwidth')?>, 10 Gbit/s, <?php echo t('Instant',array('%site%'=>$site->getName())) ?> <?php t('Setup',array('%site%'=>$site->getName())) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php t('CORES')?>:<?php include_partial('productfield', array('value' => $config->cores)) ?><br><?php t('RAM')?>:<?php include_partial('productfield', array('value' => $config->ram)) ?>  MB<br> <?php t('Storage')?>:<?php include_partial('productfield', array('value' => $config->storage)) ?> TB<br><?php t('Bandwidth')?>:<?php include_partial('productfield', array('value' => $config->bandwidth)) ?> TB, 10 Gbit/s<br><?php t('DDoS Protection')?>: 10 Gb/s, 4MPPS<br>OnApp<span></span></span>
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
																				
																					<!-- END Cloud products -->	
																						<!-- Server products -->
																				
																			
																		<?php $i = 0 ?>
<?php foreach($configs['server'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">
																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title"><font color="gray"><?php echo $config->name ?></font></span>
																								<span class="servers-title-pseudo"><?php echo t('Dedicated Server')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/server.png" alt="Dedicated Server" height="65">
																						
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
																								<a href=""><?php t('Configuration')?></a><?php if ($config->getInstock() < 1): ?>

																						<font size="1px" color="darkorange">out of stock!</font><?php endif ?>
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM<br><?php include_partial('productfield', array('value' => $config->storage)) ?> HDD<br> <?php include_partial('productfield', array('value' => $config->raid)) ?><br> <?php echo t('No Protection')?><span></span></span>
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
																				<!-- Server products -->
																				
																				<?php $i = 0 ?>
<?php foreach($configs['server'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available || $config->only_eco) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">

																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title"><?php echo $config->name ?></span>
																								<span class="servers-title-pseudo"><?php t('Protected Dedicated Server')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/server.png" alt="DDOS Protected Server" height="65">
																						
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
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
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM<br><?php include_partial('productfield', array('value' => $config->storage)) ?> HDD<br> <?php include_partial('productfield', array('value' => $config->raid)) ?><br><?php t('DDoS Protection')?>: 10 Gb/s, 4MPPS<br>KVM over IP / IPMI, <?php echo t('10 Gbps DDoS Protection')?><span></span></span>
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
																					
																				
																															<!-- Camfrog products -->		
																		
																		<?php $i = 0 ?>
<?php foreach($configs['camfrog'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				<li class="item-slider">
																						<div class="title-group">
																						
																								
																								<span class="servers-title">Camfrog</span>
																								<span class="servers-title-pseudo"><?php echo $config->name ?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/camfrog_icon.gif" alt="DDOS Protected Camfrog Rooms">
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo $config->price ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php t('Max Users',array('%site%'=>$site->getName())) ?>: <?php include_partial('productfield', array('value' => $config->max_users)) ?><br><?php t('Protection',array('%site%'=>$site->getName())) ?>: <?php t('Up to 30',array('%site%'=>$site->getName())) ?><br><?php echo t('Instant',array('%site%'=>$site->getName())) ?> &
<?php echo t('Free',array('%site%'=>$site->getName())) ?> <?php t('Setup',array('%site%'=>$site->getName())) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a><font size="1px" color="darkorange">out of stock!</font>
																								<span class="hint" style="display: none;"><?php t('Max Users',array('%site%'=>$site->getName())) ?>:<?php include_partial('productfield', array('value' => $config->max_users)) ?><br><?php t('Camfrog WebPanel',array('%site%'=>$site->getName())) ?><br><?php t('Yes',array('%site%'=>$site->getName())) ?><br><?php t('Protection',array('%site%'=>$site->getName())) ?>: <?php t('Up to 30',array('%site%'=>$site->getName())) ?><br><?php t('Setup',array('%site%'=>$site->getName())) ?>:<?php echo t('Instant',array('%site%'=>$site->getName())) ?> &
<?php echo t('Free',array('%site%'=>$site->getName())) ?><span></span></span>
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
																				
																				<!-- END Camfrog products -->

																						<!-- Collocation products -->		
																									
																				<?php $i = 0 ?>
<?php foreach($configs['colocation'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">
																								<span class="servers-title"><?php echo $config->name ?></span>
																								<span class="servers-title-pseudo"><?php t('Colocation')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/colocation.png" alt="DDOS Protected Collocation" height="65">
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo price($config->price) ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																								
																						</div>
																						<div class="servers-description"><?php t('Space')?>: <?php echo limit($config->space) ?><br> <?php t('Contract')?>: <?php echo $config->min_billing_cycle ?><br> <?php t('Protection')?>: <?php t('up to 10 Gbit/s') ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a><?php if ($config->getInstock() < 1): ?>

																						<font size="1px" color="darkorange">out of stock!</font><?php endif ?>
																								<span class="hint" style="display: none;"><?php t('Space')?>: <?php echo limit($config->space) ?><br><?php t('Bandwidth')?>:<?php echo product_field($config->bandwidth) ?><br><?php t('Overage fee each Mb/s')?>:<?php echo price_ex(eur($config->getAddonPriceBySlug('bandwidth-overage')), 'EUR') ?><br><?php t('Power')?>: <?php echo product_field($config->power) ?><br><?php t('Overage fee each Amp')?>: <?php echo price_ex(eur($config->power_overage), 'EUR') ?><br><?php t('Network')?>: <?php product_field($config->network) ?><br><?php t('Contract')?>: <?php echo $config->min_billing_cycle ?> <?php echo (string)$config->min_billing_cycle > 1 ? __('months') : __('month') ?><br><?php t('Setup') ?>: <?php echo '&#8364; ',price_ex(eur($config->setup_fee), '') ?><span></span></span>
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
																				
																					<!-- END Collocation products -->	
																					
																					
																						<!-- DDOS products -->		
																					
																				<?php $i = 0 ?>
<?php foreach($configs['protection'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				
																				<li class="item-slider">
																						<div class="title-group">
																								<span class="servers-title"><?php echo $config->name ?></span>
																								<span class="servers-title-pseudo"><?php t('DDoS Protection')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/p3.png" alt="DDOS Protection" height="65">
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo price($config->price) ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php t('Max websites')?>: <?php echo limit($config->max_websites) ?><br>
<?php t('Max domains')?>: <?php echo limit($config->max_domains) ?><br><?php t('DNS hosting')?>: <?php include_partial('global/check', array('value' => $config->dns_hosting)) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<span class="hint" style="display: none;"><?php t('Max websites')?>: <?php echo limit($config->max_websites) ?><br>
<?php t('Max domains')?>: <?php echo limit($config->max_domains) ?><br>
<?php t('Max subdomains')?>: <?php echo limit($config->max_subdomains) ?><br>
<?php t('Protocols')?>: <?php echo str_replace(', ', '<br>', $config->protocols) ?> <br>
<?php t('DNS hosting')?>: <?php include_partial('global/check', array('value' => $config->dns_hosting)) ?><br>
<?php t('Content caching')?>: <?php include_partial('global/check', array('value' => $config->content_caching)) ?><br>
<?php t('cart_incoming_smtp')?>: <?php include_partial('global/check', array('value' => $config->smtp_protection)) ?><br><?php t('Setup') ?>: <?php echo '&#8364; ',price_ex(eur($config->setup_fee), '') ?><span></span></span>
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
																					<!-- END DDOS products -->	
																					
																					
																					
																					<!-- minecraft -->	
																					
																					<?php $i = 0 ?>
<?php foreach($configs['minecraft'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>

<li class="item-slider">
																						<div class="title-group">

																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title"><?php echo $config->name ?></span>
																								<span class="servers-title-pseudo"><?php t('Minecraft Server')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/minecraft.png" alt="DDOS Protected Minecraft" height="65">
																						
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
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
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php include_partial('productfield', array('value' => $config->ram)) ?> RAM<br><?php include_partial('productfield', array('value' => $config->storage)) ?> HDD<br> <?php include_partial('productfield', array('value' => $config->raid)) ?><br><?php t('DDoS Protection')?>: 10 Gb/s, 4MPPS<br>KVM over IP / IPMI<span></span></span>
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
																				<!-- END minecraft -->		
																					
																				
																				
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
<table>
																		<thead>
																				
																				<tr>
																						<th class="name" width="160"><?php t('Dedicated Servers')?></th>
																						<th class="cpu" width="160"><?php t('CPU') ?></th>
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
<?php foreach($configs['server'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?> <?php t('Server')?><?php if ($config->getInstock() < 1): ?>

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
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- end Server products -->	
																				<tr class="odd"><td colspan=9></td></tr>
																				</tbody>
																</table></div>
																
																<br><br>
														<div class="overview-table">
																			
																					<table>
																		<thead>
																				
																				<tr>
																						<th class="name" width="160"><?php t('Protected Servers')?></th>
																						<th class="cpu" width="160"><?php t('CPU') ?></th>
																						<th class="cores" width="50"><?php t('Cores')?></th>
																						<th class="ram" width="110"><?php t('RAM') ?></th>
																						<th class="storage" width="110" ><?php t('Storage') ?></th>
																						<th class="raid" width="130" ><?php t('Raid') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																			</thead>
																		<tbody>	
																					<!-- Server products -->	
																				<?php $i = 0 ?>
<?php foreach($configs['server'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available || $config->only_eco) continue; ?>

																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?> <?php t('Server')?><?php if ($config->getInstock() < 1): ?><br>

																						<font size="1px" color="darkorange">out of stock!</font><?php endif ?><?php if($config->hot): ?>

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
																</table></div> <br><br>
														<div class="overview-table">
																				
																				<!-- cloud products -->		<table>
																		<thead>
																				<tr>
																						<th class="name" width="190"><?php t('Cloud Server')?></th>
																						<th class="cpu" width="140" ><?php t('CPU') ?></th>
																						<th class="cores" width="60" > <?php t('Cores')?> </th>
																						<th class="ram" width="80" ><?php t('RAM')?></th>
																						<th class="storage" width="100" ><?php t('Storage')?></th>
																						<th class="raid" width="130" ><?php t('Bandwidth')?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr></thead>
																		<tbody>
																				<?php $i = 0 ?>
<?php foreach($configs['cloud'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>

																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?> <?php t('VPS')?><?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
																						<td class="server-info cores"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
																						<td class="server-info ram" ><?php include_partial('productfield', array('value' => $config->ram)) ?>  MB</td>
																						<td class="server-info storage" ><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
																						<td class="server-info raid" ><?php include_partial('productfield', array('value' => $config->bandwidth)) ?> TB, 10 Gbit/s</td>
																						<td class="server-info price" colspan="2">
																								<div class="price-euro">
																										<span class="badge">&#8364</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																								
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- end cloud products -->
																				
																				<tr class="odd"><td colspan=9></td></tr>
																				
																				</tbody>
																</table></div> <div class="overview-table">
															<br>	<table>
																		<thead>
															

																				<tr>
																						<th class="name" width="260" ><?php t('Protected Camfrog')?></th>
																						<th class="cpu" width="100" ><?php t('Max Users',array('%site%'=>$site->getName())) ?></th>
																						<th class="cores" width="100" ><?php t('Panel') ?></th>
																						<th class="storage" width="120" ><?php t('Protection',array('%site%'=>$site->getName())) ?></th>
																						<th class="raid" width="130" ><?php t('Setup') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																		</thead>
																		<tbody>
																					<!-- Camfrog products -->		
																		
																		<?php $i = 0 ?>
<?php foreach($configs['camfrog'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->max_users)) ?> users</td>
																						<td class="server-info cores"><?php t('Camfrog WebPanel',array('%site%'=>$site->getName())) ?></td>
																					
																						<td class="server-info storage"><?php t('Up to 30',array('%site%'=>$site->getName())) ?></td>
																						<td class="server-info raid"><?php echo t('Instant',array('%site%'=>$site->getName())) ?> &
<?php echo t('Free',array('%site%'=>$site->getName())) ?></td>
																						<td class="server-info price" colspan="2">
																								<div class="price-euro">
																										<span class="badge">&#8364</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																										
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- End Camfrog products -->	
																				<tr></tr>
																				</tbody>
																</table></div>  <br><br>
														<div class="overview-table">
																				
																					
																				<!-- ddos products -->		<table>
																		<thead>
																				<tr>
																						<th class="name" width="110"><?php t('Protection')?></th>
																						<th class="cpu" width="95" ><?php t('Max websites')?></th>
																						<th class="cores" width="95" ><?php t('Max domains')?></th>
																						<th class="ram" width="90" ><?php t('Max subdomains')?></th>
																						<th class="storage" width="180" ><?php t('Protocols')?></th>
																						<th class="raid" width="120" ><?php t('Setup')?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																				<?php $i = 0 ?>
<?php foreach($configs['protection'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
</thead>
																		<tbody>
																				<tr class="even">
																						<td class="server-info name">
																					
																								<?php echo $config->name ?></td>  
																						<td class="server-info cpu"><?php echo limit($config->max_websites) ?> website</td>
																						<td class="server-info cores"><?php echo limit($config->max_domains) ?> domain</td>
																						<td class="server-info ram" ><?php echo limit($config->max_subdomains) ?> subdomain</td>
																						<td class="server-info storage" ><?php echo limit($config->protocols) ?></td>
																						<td class="server-info raid" ><?php echo '&#8364; ',price_ex(eur($config->setup_fee), '') ?></td>
																						<td class="server-info price" colspan="2">
																								<div class="price-euro">
																										<span class="badge">&#8364</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																										
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- end ddos products -->
																				
																				
																				
																				
																				<tr class="even"></tr>
																				
																				</tbody>
																</table></div> <br><br>
														<div class="overview-table">
																				
																					
																				<!-- collocation products -->		<table>
																		<thead>
																				<tr>
																						<th class="name" width="120"><?php t('Colocation')?></th>
																						<th class="cpu" width="150" ><?php t('Network')?></th>
																						<th class="cores" width="150"  ><?php t('Bandwidth')?></th>
																						<th class="ram" width="80"  ><?php t('Contract')?></th>
																						<th class="storage" width="110"  ><?php t('Power')?></th>
																						<th class="raid" width="90" ><?php t('Setup')?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr></thead>
																		<tbody>
																				<?php $i = 0 ?>
<?php foreach($configs['colocation'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>

																				<tr class="even">
																						<td class="server-info name">
																					
																								<?php echo $config->name ?>
																						
																						</td>
																						<td class="server-info cpu" ><?php product_field($config->network) ?></td>
																						<td class="server-info cores" ><?php echo product_field($config->bandwidth) ?></td>
																						<td class="server-info ram" ><?php echo $config->min_billing_cycle ?> <?php echo (string)$config->min_billing_cycle > 1 ? __('months') : __('month') ?></td>
																						<td class="server-info storage" ><?php echo product_field($config->power) ?></td>
																						<td class="server-info raid" ><?php echo '&#8364; ',price_ex(eur($config->setup_fee), '') ?></td>
																						<td class="server-info price" colspan="2">
																								<div class="price-euro">
																										<span class="badge">&#8364</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																									
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr></div><br>
																				<?php endforeach ?>	
																				
																				<!-- end collocation products -->
																				
																				<!-- minecraft products -->	
																				
																				<div class="overview-table">
																			
																					<table>
																		<thead>
																				
																				<tr>
																						<th class="name" width="60"><?php t('Minecraft Server')?></th>
																						<th class="cpu" width="240"><?php t('CPU') ?></th>
																						<th class="cores" width="50"><?php t('Cores')?></th>
																						<th class="ram" width="110"><?php t('RAM') ?></th>
																						<th class="storage" width="110" ><?php t('Storage') ?></th>
																						<th class="raid" width="130" ><?php t('Raid') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																			</thead>
																		<tbody>	
																					
																				<?php $i = 0 ?>
<?php foreach($configs['minecraft'] as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?><?php if ($config->getInstock() < 1): ?><br>

																						<font size="1px" color="darkorange">out of stock!</font><?php endif ?><?php if($config->hot): ?>

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
																				
																				<!-- end minecraft products -->	
																				<tr class="odd"><td colspan=9></td></tr>
																				</tbody>
																</table>
																				
																				
																				
																			<br><br>
															
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
																						
																						<th class="price" colspan="9" width="940" align="center">Each Cloudcom Server and Protected Cloud comes with free administration tools</th>
																				</tr></thead>
																		<tbody>
																
																
																						
																							<tr class="odd"><td colspan=9><img src="/images/partner/swiss/remote_administer.jpg" width=940></td></tr>
																		</tbody>
																		
																		
																		
																</table>
																
																<br>
																							
													
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
										<div class="title"><?php t('Products Banner1')?></div>
										<div class="description"><?php t('Products Banner2')?></div>
								</div>
</div>
								
						</div>
		
				<!-- End region main-central -->
				
		
				<!-- Region main-central -->
				<div class="main-bottom">
						<div class="main-bottom-inner">	

<table><tr><td>
								<!-- Block key features -->				
								
												
												<div class="block dedicated-servers">
										<div class="title"><?php t('Dedicated Servers')?></div>
										<div class="description"><?php t('welcome_fully_managed_servers')?></div>
<br><br>
<a href="<?php echo url_for('@server_config_list') ?>" class="xbutton blue"><?php t('Learn more')?></a></div>

</div>
								</div>

</td><td>


<div class="block colocation-servers">
										<div class="title"><?php t('Colocation')?></div>
										<div class="description"><?php t('welcome_place_your_own_equipment',array('%site%'=>$site->getName()))?></div>
<br><br>
<a href="<?php echo url_for('@colocation_config_list') ?>" class="xbutton blue"><?php t('Learn more')?></a></div>

</div>
								</div>

</td><td>


<div class="block cloud-servers">
										<div class="title"><?php t('Cloud Solutions')?></div>
										<div class="description"><?php t('welcome_the_world_never',array('%site%'=>$site->getName()))?></div>
<br><br>
<a href="<?php echo url_for('@cloud_config_list') ?>" class="xbutton blue"><?php t('Learn more')?></a></div>

</div></td></tr><tr><td>
								<div class="block camfrog-servers">
										<div class="title"><?php t('Camfrog')?></div>
										<div class="description"><?php t('camfrog_block_products',array('%site%'=>$site->getName()))?></div>
<br><br>
<a href="<?php echo url_for('@camfrog_config_list') ?>" class="xbutton blue"><?php t('Learn more')?></a></div>

</div>
					</div></td>
					<td>


<div class="block ddos-servers">
										<div class="title"><?php t('DDoS Protection')?></div>
										<div class="description"><?php t('ddos_block_products',array('%site%'=>$site->getName()))?></div>
<br>
<a href="<?php echo url_for('@protection_config_list') ?>" class="xbutton blue"><?php t('Learn more')?></a></div>

</div></td><td>

<div class="block freeddos-servers">
										<div class="title"><?php t('Free DDoS Protection')?></div>
										<div class="description"><?php t('freeddos_block_products',array('%site%'=>$site->getName()))?></div> 
<br><br>
<a href="<?php echo url_for('@show_page?name=free-ddos-protection') ?>" class="xbutton blue"><?php t('Learn more')?></a></div>

</div>
								</div>

</td></tr>
<tr>
    <td>
    <!-- Block key features -->
    <div class="block key-featurs">

            <div class="features content-group">
                <div class="features-content active feature-1-1">
                    <div class="title"><?php t('Powerful Hardware')?></div>
                    <div class="description">
                        <ul class="list-features">
                        <?php t('platformf_block_products',array('%site%'=>$site->getName()))?>
                        </ul>
                    </div>
                </div>
                <div class="features-content feature-1-2">
                    <div class="title"><?php t('Perfect Hosting')?></div>
                    <div class="description">
                       <?php t('platform_block_products',array('%site%'=>$site->getName()))?>
                    </div>
                </div>
            </div>

            <div class="features features-links">
                    <div class="feature active" id="feature-1-1"><span><?php t('Pro Platform')?></span></div>
                    <div class="feature" id="feature-1-2"><span><?php t('Details')?></span></div>
            </div>

    </div>
    <!-- End block key features -->
    </td>
    <td>
        <div class="block onapp-servers">
            <div class="title"><?php t('Mobile Friendly')?></div>
            <div class="description"><?php t('onapp_block_products',array('%site%'=>$site->getName()))?></div> <br><br>
               &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; <img src="/images/partner/swiss/certified_onapp.png"></div>
            </div>
       
    </td>
    <td>
	<!-- Block key features -->				
    <div class="block key-featurs2">

            <div class="features content-group">
                <div class="features-content active feature-2-1">
                    <div class="title"><?php t('24/7 Attack Protection')?></div>
                    <div class="description">
                        <ul class="list-features">
                       <?php t('protectionf_block_products',array('%site%'=>$site->getName()))?>

                        </ul>
                    </div>
                </div>
                <div class="features-content feature-2-2">
                    <div class="title"><?php t('100% Protected')?></div>
                    <div class="description">
                       <?php t('protection_block_products',array('%site%'=>$site->getName()))?></div>
                </div>
            </div>

            <div class="features features-links">
                <div class="feature active" id="feature-2-1"><span><?php t('100% Protected')?></span></div>
                <div class="feature" id="feature-2-2"><span><?php t('Details')?></span></div>
            </div>

    </div>
    <!-- End block key features -->
    </td>
</tr>
</table>

						</div>
				</div>
				<!-- End region main-central -->
				
		<!-- End main group -->
