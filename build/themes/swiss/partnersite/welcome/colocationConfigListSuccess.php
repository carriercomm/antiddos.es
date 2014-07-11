<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-hardware-protection">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Hardware colocation') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Hardware colocation') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/hardware.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix hardware">
										<p>
										<?php t('If you are looking to co-locate your equipment in a secure Data Center in Europe that accepts Bitcoin as a payment method, CoinsHost is at your service. We provide colocation hosting for equipment up to 4 standard units in size in a secure and sophisticated Data Center in Zurich, Switzerland. Our Data Center has been built with redundancy in mind: dual power source with automatic switch-over, dedicated UPSs and diesel generators, multiple tier-1 upstream providers and automatic DDoS mitigation system. When we say Downtime is not an option - we do mean it.') ?>
										</p>
										<ul class="hardware-list">
											<li><?php t('Built with redundancy in mind') ?></li>
											<li><?php t('High on-site security') ?></li>
											<li><?php t('Low-latency multi-homed network') ?></li>
											<li><?php t('Full 24/7 control and DC access') ?></li>
											<li><?php t('Free DDoS protection') ?></li>
										</ul>
									</div>
									<div class="row clearfix protect-plan">
											<p class="hardware-title"><?php t('Colocation package specification') ?></p>
											<p><?php t('Please, select following colocation type specification. Details you will see on hover.') ?></p>
										<ul class="products-grid">
													
													<?php $i = 0 ?>
													<?php foreach($configs as $config): ?>
													<?php $i++ ?>
													<?php if(!$config->available) continue; ?>
													
													<li class="biling-plan">
														<div class="border-inner">
															
															<div class="title-group">
																<span class="servers-title"><?php echo $config->name ?></span>
																<span class="fish1"></span>
																<span class="servers-title-pseudo"><?php echo $config->name ?> <?php t('package') ?></span>
															</div>
															
															<div class="about-group">
																<p class="">
																	<?php t('Colocation space for hardware that fits into two standard rack units. A good deal for dedicated server owners who want to colocate their equipment in a secure DC with free DDoS protection.') ?>
																</p>
															</div>
															
															<div class="price-group">
																	<div class="price-euro">
																			<span class="price">0.00 <?php t('฿') ?></span>
																			<span class="period"><?php t('/month') ?></span>
																	</div>
																	<div class="price-other">
																			<span class="price"><?php echo price_ex($config->price) ?></span>
																			<span class="price"><?php echo usd($config->price)?> <?php t('$') ?></span>
																			<span class="price"><?php echo eur($config->price) ?><?php t('€') ?></span>
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
																					<input type="button" id="add-cart-submit" value="Place order" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';">
																			</div>
																	</form>
																	<div class="read-item">
																		<a href="#"><?php t('Live help') ?></a>
																	</div>
															</div>
														</div>
														<div class="cpecification">
															<h2><?php t('Colocation package specification') ?></h2>
															<div class="spac-box">
																<ul class="cpec-list">
																	<li class="cpec-inner-list first">
																		<table class="addons main">
																				<tbody>
																				<tr>
																					<td><?php t('Space') ?></td>
																					<td><?php echo limit($config->space) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Bandwidth') ?></td>
																					<td><?php echo product_field($config->bandwidth) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Overage fee each Mb/s') ?></td>
																					<td><?php echo price_ex($config->getAddonPriceBySlug('bandwidth-overage')) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->getAddonPriceBySlug('bandwidth-overage')), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->getAddonPriceBySlug('bandwidth-overage')), '€') ?></td>
																				</tr>	
																				<tr>
																					<td><?php t('Power 220v') ?></td>
																					<td><?php echo product_field($config->power) ?></td>
																				</tr>
																								
																				<tr>
																					<td><?php t('Overage fee each Amp') ?></td>
																					<td><?php echo price_ex($config->power_overage) ?>&nbsp;&nbsp;<?php echo price_ex(usd($config->power_overage), '$') ?>&nbsp;&nbsp;<?php echo price_ex(eur($config->power_overage), '€') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Network') ?></td>
																					<td><?php product_field($config->network) ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Min. Billing Cycle') ?></td>
																					<td><?php echo $config->min_billing_cycle ?>&nbsp;&nbsp;<?php echo (string)$config->min_billing_cycle > 1 ? __('months') : __('month') ?></td>
																				</tr>
																			</tbody>
																		</table>
																	</li>
																	<li class="cpec-inner-list last">
																		<table class="addons second">
																				<tbody>
																				<tr>
																					<td><?php t('Support') ?></td>
																					<td><?php t('24/7') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Data Centre Access') ?></td>
																					<td><?php t('24/7') ?></td>
																				</tr>	
																				<tr>
																					<td><?php t('KVM/IPMI') ?></td>
																					<td><?php t('Free of charge') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('Reboots') ?></td>
																					<td><?php t('Free of charge') ?></td>
																				</tr>
																				<tr>
																					<td><?php t('DDoS protection') ?></td>
																					<td><?php t('Up to 10 Gb/s or 4 Mpps free of charge') ?></td>
																				</tr>														
																			</tbody>
																		</table>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													
													<?php endforeach ?>
										</ul>

										<div class="power">
											<p class="hardware-title"><?php t('Power') ?></p>
											<ul class="hardware-list">
												<li><?php t('Dual AC/DC source') ?></li>
												<li><?php t('Auto switch-over in case of outage') ?></li>
												<li><?php t('Fast dedicated UPSs') ?></li>
												<li><?php t('Diesel generators for ultimate redundancy') ?></li>
												<li><?php t('99.9% uptime SLA') ?></li>
											</ul>
										</div>
										<div class="power">
											<p class="hardware-title"><?php t('Network') ?></p>
											<ul class="hardware-list">
												<li><?php t('Cisco routers only') ?></li>
												<li><?php t('Multiple Tier-1 upstream providers') ?></li>
												<li><?php t('Low-latency multi-homed network') ?></li>
												<li><?php t('40Gb redundant fibre connection') ?></li>
												<li><?php t('Free protection against DDoS attacks') ?></li>
											</ul>
										</div>
										<div class="power">
											<p class="hardware-title"><?php t('Control') ?></p>
											<ul class="hardware-list">
												<li><?php t('Easy and fast equipment setup') ?></li>
												<li><?php t('Skilled engineers on site') ?></li>
												<li><?php t('KVM/IPMI available') ?></li>
												<li><?php t('24/7 data centre access') ?></li>
												<li><?php t('24/7 phone support') ?></li>
											</ul>
										</div>
									</div>
									<div class="row last clearfix location">
											<p class="location-title"><?php t('Colocation Setup and Equipment Delivery') ?></p>
											<p class="location-text"><?php t('Colocation setup procedure does not require your physical presence in the Data Center. There are to ways to deliver your equipment to our Data Center in Zurich - you can either bring your equipment to the DC yourself or arrange for a courier to collect and deliver it to us. Once we receive the equipment that you wish to co-locate, our engineers will install and set it up accordingly to your requirements.') ?></p>
											<p class="location-title"><?php t('Free DDoS Protection with every Colocation order') ?></p>
											<p class="location-text"><?php t('CoinsHost provides free protection against all types of DDoS attacks with every equipment colocation order. CoinsHost has a vast experience in protecting against application-level and network-level attacks. We host hundreds of servers on our protected network and mitigate against dozens of DDoS attacks every day. Our engineers have developed a custom built self-learning solution based on highly efficient hardware, proven mitigation techniques and proprietary software. CoinsHost will detect, automatically analyse and mitigate against HTTP, UDP, SYN, ICMP floods and all other types of DDoS attacks.') ?></p>
											<p class="location-title"><?php t('Payment Methods') ?></p>
											<p class="location-text"><?php t('Without any doubt you can pay for CoinsHost products and services with Bitcoin (BTC), Litecoin (LTC) and Nextcoin (NXT). We treat decentralized currencies based on encryption as completely legit payment methods and encourage our clients to pay with them. Besides these P2P currencies, we accept a wide range of other payment methods and digital currencies. These include but are not limited to: PayPal, VISA, MasterCard, American Express, Discover, Bank Wire, WebMoney and Perfect Money.') ?></p>
											<p class="location-title"><?php t('Data Center Location') ?></p>
											<?php include_partial('welcome/colocationmap') ?>
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
<!-- region: Content -->
