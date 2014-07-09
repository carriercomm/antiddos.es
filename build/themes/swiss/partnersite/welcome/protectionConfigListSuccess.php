<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-ddos-protection">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('DDoS protection') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('DDoS protection') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/ddos-protection.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix charts">
										
										<div class="chart-text">
											<p><?php t('21% growth of Distributed Denial of Service attacks over 1 Gb/s has been reported in Q3 2013. DDoS continues to be a global threat with alarming increases in attack size and duration. Nowadays efficient protection against web threats is as important as high quality hardware and network, especially if you run a mission critical service or application. Based on our vast experience in fighting against online threats, CoinsHost have developed a solution that is capable of mitigating against all types of DDoS attacks with SLA guaranteed result. If you are unsure which DDoS protection plan will meet your requirements best, contact us for <a class="blue" href="#">live help.</a>') ?></p>
										</div>
										
										<div class="charts-box">
											<ul class="ddos-list">
												<li class="title-list"><?php t('Mitigation against attacks up to 200 Gb/s') ?></li>
												<li class="title-list"><?php t('Emergency setup with free technical assistance') ?></li>
												<li class="title-list"><?php t('No need to change your current hosting') ?></li>
												<li class="title-list"><?php t('Attack mitigation SLA guarantee') ?></li>
												<li class="title-list"><?php t('Real-time automatic filter adjustment') ?></li>
												<li class="title-list"><?php t('Extremely fast filter reaction time') ?></li>
												<li class="title-list"><?php t('Free protection within our network') ?></li>
											</ul>
										</div>
									</div>
									<div class="row clearfix billing-selector">
										<!-- Block slider discount-->
										<div class="block discount-counter">
											<div class="slider-body">
												<h2 class="billing-titile"><?php t('Billing period & discount selector') ?></h2>
												<p class="some-description"><?php t('CoinsHost encourages its clients to choose longer billing periods for their convenience. Longer billing period will also allow you to save considerable amount of money as maximum discount for a 12-month period is 22%.') ?></p>
											</div>
											<div class="mail-amount-mail-wrp">
												<div id="dis-scale">
													<div class="size-item1" ></div>
													<div class="size-item2" ></div>
													<div class="size-item3" ></div>
													<div class="size-item4"></div>
													<div class="size-item5"></div>
													<div class="size-item6"></div>
													<div class="size-item7"></div>
													<div class="size-item8"></div>
													<div class="size-item9"></div>
													<div class="size-item10"></div>
												</div>
												<div id="billing-slider"></div>
												<div class="monthinner">
													<span id="month_number_order">6</span><?php t('month(s)') ?>
												</div>
												<ul class="b-designation-of-mailboxes">
															<li class="e-item-designation-of-mailboxes e-item-designation_1"><?php t('0%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_2"><?php t('2%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_3"><?php t('4%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_4"><?php t('6%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_5"><?php t('8%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_6 active"><?php t('10%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_7"><?php t('12%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_8"><?php t('14%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_9"><?php t('16%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_10"><?php t('18%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_11"><?php t('20%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_12"><?php t('22%') ?></li>
													</ul>
												<input id="month-vallue" type="hidden" name="month" VALUE="6">
												<input id="discount-vallue" type="hidden" name="discount" VALUE="10">
											</div>
										</div>
									</div>
									<div class="row clearfix protect-plan">
										<div class="protect-block-title">
											<h2 class="billing-titile"><?php t('Protection type plan') ?></h2>
											<p><?php t('Please, select following protection type plan. Plan details you will see on hover.') ?></p>
										</div>
										<ul class="products-grid">
													
													<!-- Preloading billing plans -->
													<?php $i = 0 ?>
													<?php foreach($configs as $config): ?>
													<?php $i++; ?>
													<?php if(!$config->available) continue; ?>
													
													<li class="biling-plan">
														<div class="border-inner">
															
															<div class="title-group">
																<span class="servers-title"><?php echo $config->name; ?></span>
																<span class="fish1"></span>
																<span class="servers-title-pseudo"><?php t($config->name . ' DDoS billing plan') ?></span>
															</div>
															
															<div class="about-group">
																<p><?php t('Full-scale protection from all types of') ?></p>
																<p><?php t('DDoS attacks for a single website. Pick') ?></p>
																<p><?php t('this plan if you are sure about type and') ?></p>
																<p><?php t('rate of the attack that your site is under.') ?></p>
															</div>
															
															<div class="price-group">
																	<div class="price-euro">
																		<span class="price">0.00 <?php t('฿') ?></span>
																		<span class="period"><?php t('/month') ?></span>
																	</div>
																	<div class="price-other">
																		<span class="price"><?php echo price_ex($config->price) ?></span>
																		<span class="price"><?php echo usd($config->price) ?> <?php t('$') ?></span>
																		<span class="price"><?php echo eur($config->price) ?> <?php t('€') ?></span>
																	</div>
															</div>
															
															<div class="price-group-second">
																	<div class="price-euro">
																		<span class="price">0.00 <?php t('฿') ?></span>
																		<span class="period"><?php t('/setup') ?></span>
																	</div>
																	<div class="price-other">
																		<span class="price"><?php echo price_ex($config->setup_fee) ?></span>
																		<span class="price"><?php echo price_ex(usd($config->setup_fee), '$') ?></span>
																		<span class="price"><?php echo price_ex(eur($config->setup_fee), '€') ?></span>
																	</div>
															</div>
															
															<div class="billing-order form">
																	<form>
																		<div class="submit-container">
																			<input type="button" id="add-cart-submit" value="<?php t('Place order') ?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';">
																		</div>
																	</form>
																	<div class="read-item">
																		<a href="#"><?php t('Live help') ?></a>
																	</div>
															</div>
															
														</div>
														<div class="cpecification">
															<h2><?php t('Protection plan configuration') ?></h2>
															<div class="spac-box">
																<ul class="cpec-list">
																	<li class="cpec-inner-list first">
																		<table class="addons main">
																				<tbody>
																				<tr>
																					<td><?php t('Max. websites') ?></td>
																					<td><?php echo limit($config->max_websites) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Max. domains') ?></td>
																					<td><?php echo limit($config->max_domains) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Max. subdomains') ?></td>
																					<td><?php echo limit($config->max_subdomains) ?></td>
																				</tr>	
																				<tr>
																					<td><?php t('Protocols') ?></td>
																					<td><?php echo str_replace(', ', '<br>', $config->protocols) ?></td>
																				</tr>
																								
																				<tr>
																					<td><?php t('Protected DNS hosting') ?></td>
																					<td><span class="boolin <?php include_partial('global/check', array('value' => $config->dns_hosting)) ?>"></span></td>
																				</tr>
																				<tr>
																					<td><?php t('Content caching') ?></td>
																					<td><span class="boolin <?php include_partial('global/check', array('value' => $config->content_caching)) ?>"></span></td>
																				</tr>
																				<tr>
																					<td><?php t('SMTP protection') ?></td>
																					<td><span class="boolin <?php include_partial('global/check', array('value' => $config->smtp_protection)) ?>"></span></td>
																				</tr>
																			</tbody>
																		</table>
																	</li>
																	<li class="cpec-inner-list last">
																		<table class="addons second">
																				<tbody>
																				<tr>
																					<td><?php t('Max. packets/s') ?></td>
																					<td><?php echo limit($config->limit_packets) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Max. requests/s') ?></td>
																					<td><?php echo limit($config->limit_requests) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Max. attack bandwidth') ?></td>
																					<td><?php echo limit($config->limit_attack_bandwidth) ?></td>
																				</tr>	
																				<tr>
																					<td><?php t('Max. clean bandwidth') ?></td>
																					<td><?php echo limit($config->limit_clean_bandwidth) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Attack bandwidth upgrade') ?></td>
																					<td><?php echo price_ex($config->getAddonPriceBySlug('attack-bandwidth-overage')) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->getAddonPriceBySlug('attack-bandwidth-overage')), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->getAddonPriceBySlug('attack-bandwidth-overage')), '€') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Clean bandwidth upgrade') ?></td>
																					<td><?php echo price_ex($config->getAddonPriceBySlug('clean-bandwidth-overage')) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->getAddonPriceBySlug('clean-bandwidth-overage')), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->getAddonPriceBySlug('clean-bandwidth-overage')), '€') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Add extra website') ?></td>
																					<td><?php echo price_ex($config->getAddonPriceBySlug('extra-websites')) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->getAddonPriceBySlug('extra-websites')), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->getAddonPriceBySlug('extra-websites')), '€') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Add extra domain') ?></td>
																					<td><?php echo price_ex($config->getAddonPriceBySlug('extra-domains')) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->getAddonPriceBySlug('extra-domains')), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->getAddonPriceBySlug('extra-domains')), '€') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Add SMTP protection') ?></td>
																					<td><?php echo price_ex($config->getAddonPriceBySlug('smtp-protection')) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->getAddonPriceBySlug('smtp-protection')), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->getAddonPriceBySlug('smtp-protection')), '€')?></td>
																				</tr>
																			</tbody>
																		</table>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<?php if ($i<count($configs)): ?>
													<?php endif ?>
													<?php endforeach ?>
										</ul>
									</div>
									<div class="row last clearfix list">
										<ul>
											<li>
												<p class="title-list"><?php t('Mitigation Techniques') ?></p>
												<p class="list-content"><?php t('CoinsHost has a vast experience in protecting against application-level and network-level attacks. We host hundreds of servers on our protected network and mitigate against dozens of DDoS attacks every day. Our engineers have developed a custom built self-learning solution based on highly efficient hardware, proven mitigation techniques and proprietary software. CoinsHost will detect, automatically analyse and mitigate against HTTP, UDP, SYN, ICMP floods and all other types of DDoS attacks that scale up to 200 Gb/s.') ?></p>
											</li>
											<li>
												<p class="title-list"><?php t('Protection Setup') ?></p>
												<p class="list-content"><?php t('There is no rocket science knowledge required on your side to set DDoS protection up. All you need to do is to point your domains DNS A zones to the protected IP address that we will provide you with, or just change your name servers to our name servers and let us do the rest. If you need assistance with this, we will adjust your DNS free of charge, as well as add any custom rules to the firewall. Although we start filtering traffic from the very first packet, please be advised that new DNS entries still take from few minutes to several hours to get propagated across all DNS servers on the web.') ?></p>
											</li>
											<li>
												<p class="title-list"><?php t('Low Latency and Free DDoS Protection') ?></p>
												<p class="list-content"><?php t('For some applications, services and websites latency is of paramount importance. Unfortunately, remote proxies and tunnels add extra latency as long as they work as a middleman between your site and the web. If latency is important for your online business, please consider moving to one of our Dedicated Servers with free DDoS protection that are hosted on a low-latency redundant network with 15 TB of premium bandwidth included in the price. There are over 20 different hardware configurations for you to choose from.') ?></p>
											</li>
											<li>
												<p class="title-list"><?php t('Payment Methods') ?></p>
												<p class="list-content"><?php t('Without any doubt you can pay for CoinsHost products and services with Bitcoin (BTC), Litecoin (LTC) and Nextcoin (NXT). We treat decentralized currencies based on encryption as completely legit payment methods and encourage our clients to pay with them. Besides these P2P currencies, we accept a wide range of other payment methods and digital currencies. These include but are not limited to: PayPal, VISA, MasterCard, American Express, Discover, Bank Wire, WebMoney and Perfect Money.') ?></p>
											</li>
										</ul>	
									</div>
								</div>
							</article>
						</div>	
					</div>
			           <!-- end region: Main Content -->
				</section><!-- /end #main-content -->
			</div><!-- /end .content-inner -->
		</div><!-- /end #content-column -->
	</div><!-- /end #columns -->
<!-- end region: Content -->