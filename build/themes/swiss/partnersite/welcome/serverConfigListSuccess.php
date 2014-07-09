<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-dedicated-seevers">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Dedicated servers') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Dedicated servers') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/dedicated-seevers.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix dedicated-seevers-text">
										<p><?php t('20+ Dedicated Server configurations are available below. For your convenience we have divided servers into categories. If you are having a hard time picking up the right configuration and options, please contact our live chat operators. We will help you to select a server that meets your requirements best.') ?></p>
										<ul>
											<li><?php t('Rapid & free server provisioning') ?></li>
											<li><?php t('1 Gbit/s dedicated LAN port') ?></li>
											<li><?php t('Hardware RAID') ?></li>
											<li><?php t('Private networking') ?></li>
											<li><?php t('Virtualization ready') ?></li>
											<li><?php t('99.9% uptime SLA guarantee') ?></li>
											<li><?php t('DDoS protection up to 200 Gb/s') ?></li>
										</ul>
										<ul>
											<li><?php t('KVM/IPMI provided with every server') ?></li>
											<li><?php t('15 TB of monthly bandwidth') ?></li>
											<li><?php t('Multi-homed network with multiple tier-1 providers') ?></li>
											<li><?php t('Redundant power source with auto-switchover') ?></li>
											<li><?php t('Reliable hardware by top vendors') ?></li>
										</ul>
									</div>
									<div class="row clearfix dedicated-seevers-ddos">
										<div class="ddos-attack">
											<div class="basic-ddos">
												<p class="basic-ddos-title"><?php t('Basic DDoS attack protection with every server') ?></p>
												<p><?php t('Protection against all types of DDoS attacks can be enabled for any server except Epsilon and Lambda configurations. When enabled, server price will slightly increase. DDoS protection is also available on demand, feel free to order it when needed. You can enable or disable DDoS protection by clicking switch on the right.') ?></p>
											</div>
											<div class="dedicated-seevers-radio-buttons">
												<div>
													<label for="dedicated-with-protection" class="with-protection"><?php t('With protection') ?><input type="radio" id="dedicated-with-protection" checked="checked" name="dedicated-radio-one" id="dedicated-radio-one"/></label>
												</div>
												<div>
													<label for="dedicated-without-protection" class="without-protection"><?php t('Without protection') ?><input type="radio" id="dedicated-without-protection" name="dedicated-radio-one" id="dedicated-radio-two"/></label>
												</div>
											</div>
										</div>
										<div>
										<p class="basic-ddos-title"><?php t('Billing period & discount selector') ?></p>
										<p><?php t('CoinsHost encourages its clients to choose longer billing periods for their convenience. Longer billing period will also allow you to save considerable amount of money as maximum discount for a 12-month period is 22%.') ?></p>
										<div class="billing-selector">
										<!-- Block slider discount-->
										<div class="block discount-counter">
											
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
										</div>
										<div class="dedicated-servers-type">
											<p class="basic-ddos-title"><?php t('Dedicated servers types') ?></p>
											<p><?php t('Please, select server group and type from table.') ?></p>
											<div id="dedicated-tab" class="tab-container vertical">
												<ul class='etabs'>
													<li class='tab'><a href="#dedicated-tabs1"><?php t('Dedicated servers in Europe') ?></a></li>
													<li class='tab'><a href="#dedicated-tabs2"><?php t('Decicated servers in Zurich, Switzerland') ?></a></li>
													<li class='tab'><a href="#dedicated-tabs3"><?php t('DDoS protected dedicated servers') ?></a></li>
												</ul>
												<div id="dedicated-tabs1" class="table-shadow">
													<table class="servers-table">
														<tr><th class="name"><?php t('Name') ?></th><th><?php t('CPU') ?></th><th class="cores"><?php t('Cores') ?></th><th><?php t('RAM') ?></th><th><?php t('Storage') ?></th><th class="raid"><?php t('RAID') ?></th><th class="protection"><?php t('Protection') ?></th><th><?php t('Monthly price') ?></th><th></th></tr>
														
														<?php $i = 0 ?>
														<?php foreach($configs as $config): ?>
														<?php $i++ ?>
														<?php if(!$config->available || $config->only_eco || $config->getInstock() < 1) continue; ?>
														
														<tr><td class="name"><p class="table-title"><?php if($config->hot): ?><img src="/images/hot.png"><?php endif ?><?php if($config->new): ?><img src="/images/new.png"><?php endif ?><?php echo $config->name ?></p></td><td class="cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td><td><?php include_partial('productfield', array('value' => $config->cores)) ?></td><td class="ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td><td><?php include_partial('productfield', array('value' => $config->storage)) ?></td><td><?php include_partial('productfield', array('value' => $config->raid)) ?></td><td><?php t('DDoS <p>protection on</p> demand') ?></td><td><?php echo eur($config->eco_price) ?> €</td><td class="submit"><input type="button" <?php if ($config->getInstock() > 0): ?> value="Buy" <?php endif ?> <?php if ($config->getInstock() < 1): ?> value="Out" disabled="disabled" <?php endif ?> onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';"/></td></tr>
														
														<?php endforeach ?>	
														
													</table>
												</div>
												<div id="dedicated-tabs2" class="table-shadow">
													<table class="servers-table">
														<tr><th class="name"><?php t('Name') ?></th><th><?php t('CPU') ?></th><th class="cores"><?php t('Cores') ?></th><th><?php t('RAM') ?></th><th><?php t('Storage') ?></th><th class="raid"><?php t('RAID') ?></th><th class="protection"><?php t('Protection') ?></th><th><?php t('Monthly price') ?></th><th></th></tr>
														
														<?php $i = 0 ?>
														<?php foreach($configs as $config): ?>
														<?php $i++ ?>
														<?php if(!$config->available) continue; ?>
														
														<tr><td class="name"><p class="table-title"><?php if($config->hot): ?><img src="/images/hot.png"><?php endif ?><?php if($config->new): ?><img src="/images/new.png"><?php endif ?><?php echo $config->name ?></p></td><td class="cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td><td><?php include_partial('productfield', array('value' => $config->cores)) ?></td><td class="ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td><td><?php include_partial('productfield', array('value' => $config->storage)) ?></td><td><?php include_partial('productfield', array('value' => $config->raid)) ?></td><td><?php t('DDoS <p>protection on</p> demand') ?></td><td><?php echo eur($config->eco_price) ?> €</td><td class="submit"><input type="button" <?php if ($config->getInstock() > 0): ?> value="Buy" <?php endif ?> <?php if ($config->getInstock() < 1): ?> value="Out" disabled="disabled" <?php endif ?> onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>?bill=1&eco=1';"/></td></tr>
														
														<?php endforeach ?>	
														
													</table>
												</div>
												<div id="dedicated-tabs3" class="table-shadow">
													<table class="servers-table">
													<table class="servers-table">
														<tr><th class="name"><?php t('Name') ?></th><th><?php t('CPU') ?></th><th class="cores"><?php t('Cores') ?></th><th><?php t('RAM') ?></th><th><?php t('Storage') ?></th><th class="raid"><?php t('RAID') ?></th><th class="protection"><?php t('Protection') ?></th><th><?php t('Monthly price') ?></th><th></th></tr>
														
														<?php $i = 0 ?>
														<?php foreach($configs as $config): ?>
														<?php $i++ ?>
														<?php if(!$config->available || $config->only_eco) continue; ?>
														
														<tr><td class="name"><p class="table-title"><?php if($config->hot): ?><img src="/images/hot.png"><?php endif ?><?php if($config->new): ?><img src="/images/new.png"><?php endif ?><?php echo $config->name ?></p></td><td class="cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td><td><?php include_partial('productfield', array('value' => $config->cores)) ?></td><td class="ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td><td><?php include_partial('productfield', array('value' => $config->storage)) ?></td><td><?php include_partial('productfield', array('value' => $config->raid)) ?></td><td><?php t('DDoS <p>protection on</p> demand') ?></td><td><?php echo eur($config->eco_price) ?> €</td><td class="submit"><input type="button" <?php if ($config->getInstock() > 0): ?> value="Buy" <?php endif ?> <?php if ($config->getInstock() < 1): ?> value="Out" disabled="disabled" <?php endif ?> onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';"/></td></tr>
														
														<?php endforeach ?>	
														
													</table>
												</div>
											</div>
										</div>
										<div class="dedicated-seevers-selects">
											<div class="operating-system">
												<p class="basic-ddos-title"><?php t('Operating system selection') ?></p>
												<p><?php t('Choose an OS to be installed on your server from a wide list of Windows licenses and Linux distributives. All Linux servers will be deployed with root access via SSH.') ?></p>
											</div>
											<div class="operating-system-select">
												<p class="operating-system-select-text"><?php t('Select OS for server') ?></p>
												<div class="windows-select">
													<div class="windows-select-text">
														<p class="operating-system-select-title text-default"><?php t('Please select OS') ?></p>	
													</div>
												</div>
												<div class="custom-select-list">
													<ul class="custom-select">
																						<li>
																							<div class="custom-select-text">
																								<p class="operating-system-select-title text-default"><?php t('Please select OS') ?></p>					
																							</div>
																						</li>
									                                                    <li>
									                                                    		<div class="custom-select-text">
									                                                    			<p class="operating-system-select-title"><?php t('CentOS 5') ?></p>
									                                                    			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                    		</div>
									                                                    	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('CentOS 6') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Debian 6') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Debian 7') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Ubuntu 10.04 Server (LTS)') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Ubuntu 12.04 Server (LTS)') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Ubuntu 14.04 Server (LTS)') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('FreeBSD 8') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('FreeBSD 9') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('FreeBSD 10') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('OpenBSD 5') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Fedora 19') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Fedora 20') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('VMware ESXi Hypervisor') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('Free') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2003 Standard') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2003 Enterprise') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2008 R2 Standard') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2008 R2 Enterprise') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2008 R2 Web Edition') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2012 Standard') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
									                                                   	<li>
									                                                   		<div class="custom-select-text">
									                                                   			<p class="operating-system-select-title"><?php t('Windows 2012 DTC CPU') ?></p>
									                                                   			<p class="operating-system-select-description"><?php t('85.00 CHF 95.00 USD 69.86 EUR 0.16 ฿') ?></p>
									                                                   		</div>
									                                                   	</li>
								                                                	</ul>
							                                            	</div>
											</div>
										</div>
										<div class="dedicated-seevers-selects">
											<div class="operating-system">
												<p class="basic-ddos-title"><?php t('Control panel selection') ?></p>
												<p><?php t('Control Panel is a web-based software that offers useful tools for running and maintaining your website with ease. Kindly pay attention to the fact that cPanel is available for Linux servers with CentOS on board only.') ?></p>
											</div>
											<div class="operating-system-select control-panel">
												<p class="operating-system-select-text"><?php t('Select control panel') ?></p>
												<div class="windows-select">
													<div class="windows-select-text">
														<p class="operating-system-select-title text-default"><?php t('Please select control panel') ?></p>
													</div>
												</div>
												<div class="custom-select-list">
													<ul class="custom-select">
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title text-default"><?php t('Please select control panel') ?></p>					
															</div>
														</li>
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title"><?php t('cPanel / WHM') ?></p>
																<p class="operating-system-select-description"><?php t('30.00 CHF 33.53 USD 24.66 EUR 0.06 ฿') ?></p>
															</div>
														</li>
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title"><?php t('DirectAdmin') ?></p>
																<p class="operating-system-select-description"><?php t('20.00 CHF 22.35 USD 16.44 EUR 0.04 ฿') ?></p>
															</div>
														</li>
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title"><?php t('Webmin') ?></p>
																<p class="operating-system-select-description"><?php t('Free') ?></p>
															</div>
														</li>
								                    </ul>
								                </div>
											</div>
										</div>
										<div class="dedicated-seevers-selects">
											<div class="operating-system">
												<p class="basic-ddos-title"><?php t('Hardware / Bandwidth / IP') ?></p>
												<p><?php t('Each server is provisioned with 15 TB of monthly bandwidth. Should you need more, please find upgrade price on the right.') ?></p>
											</div>
											<div class="operating-system-select need-select">
												<p class="operating-system-select-text"><?php t('Select if you need') ?></p>
												<div class="windows-select">
													<div class="windows-select-text">
														<p class="operating-system-select-title text-default"><?php t('No additional bandwidth') ?></p>	
													</div>
												</div>
												<div class="custom-select-list">
													<ul class="custom-select">
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title text-default"><?php t('No additional bandwidth') ?></p>
															</div>
														</li>
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title"><?php t('Additional bandwidth') ?></p>
																<p class="operating-system-select-description"><?php t('6.00 CHF 6.71 USD 4.93 EUR 0.01 ฿') ?></p>
															</div>
														</li>
								                    </ul>
								                </div>
											</div>
										</div>
										<div class="dedicated-seevers-selects">
											<div class="operating-system">
												<p class="basic-ddos-title"><?php t('Additional IPs') ?></p>
												<p><?php t('Each server is provisioned with 1 IP address. You may be asked to provide a reason for obtaining extra addresses when ordering more than 3 IPs.') ?></p>
											</div>
											<div class="operating-system-select">
												<p class="operating-system-select-text"><?php t('Select if you need') ?></p>
												<div class="windows-select">
													<div class="windows-select-text">
														<p class="operating-system-select-title text-default"><?php t('No additional IPs') ?></p>	
													</div>
												</div>
												
												<div class="custom-select-list">
													<ul class="custom-select">
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title text-default"><?php t('No additional IPs') ?></p>					
															</div>
														</li>
														<li>
															<div class="custom-select-text">
																<p class="operating-system-select-title"><?php t('Additional IPs') ?></p>
																<p class="operating-system-select-description"><?php t('3.00 CHF 3.35 USD 2.47 EUR 0.01 ฿') ?></p>
															</div>
														</li>
								                    </ul>
								                </div>
											</div>
										</div>
									</div>
									<div class="row last clearfix dedicated-seevers-payment">
										<p class="dedicated-seevers-payment-title"><?php t('Payment methods') ?></p>
										<p><?php t('Without any doubt you can pay for CoinsHost products and services with Bitcoin (BTC), Litecoin (LTC) and Nextcoin (NXT). We treat decentralized currencies based on encryption as completely legit payment methods and encourage our clients to pay with them. Besides these P2P currencies, we accept a wide range of other payment methods and digital currencies. These include but are not limited to: PayPal, VISA, MasterCard, American Express, Discover, Bank Wire, WebMoney and Perfect Money.') ?></p>
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