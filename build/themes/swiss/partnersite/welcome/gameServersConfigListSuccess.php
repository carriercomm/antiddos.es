<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-game-servers">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Game servers') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Game servers') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/game-servers.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix">
										<p class="game-title"><?php t('There are considerable reasons why one should choose Cloud Hosting over traditional VPS</p>
										<p>Here are just some of them. With data mirroring, multiple tier-1 upstream providers, redundant power sources with automatic switch-over and free DDoS protection Cloud Hosting is the best solution to host a mission-critical front-end website or service. Cloud hosting architecture guarantees highest uptime and makes data loss virtually impossible - all for a very reasonable budget. If you are new to Cloud hosting solutions, try one of our servers for a whole calendar week free of charge! Please be advised that ID and phone verification may be required to process a free trial order. Click on the right to request free 7-day trial.') ?></p>
									</div>
									<div class="row clearfix game-content">
										<div>
											<p class="game-title"><?php t('Billing period & discount selector') ?></p>
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
										<div>
											<p class="game-title"><?php t('Server types') ?></p>
											<p><?php t('Please, select server group and type from table.') ?></p>
											<div id="dedicated-tab" class="tab-container vertical">
												<ul class='etabs'>
													<li class='tab'><a href="#game-tabs1"><?php t('Protected game servers') ?></a></li>
												</ul>
												<div id="game-tabs1" class="table-shadow">
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
										<div class="game-hosting reliable-game">
											<p class="game-title"><?php t('Reliable Game Server Hosting') ?></p>
											<p class="reliable-game-text"><?php t('Cloudcom offer affordable Dedicated Servers for gaming with DDoS Protection included. We use Intel Xeon processors, SSD hard drives, 1 gigabit lan ports and top server hardware by Supermicro, Cisco and Juniper in order to provide the best ddos protected game server hosting possible. Enjoy your Dedicated Game Server with DDoS Protection by Cloudcom.') ?></p>
											<p class="game-title"><?php t('Powerful and Safe Lineage Servers') ?></p>
											<p class="reliable-game-text"><?php t('We offer most powerful hardware to host your Lineage Server. Our Magma servers are made especially for Lineage and high load gaming. Cloudcom offer you complete no-lag and hassle free ddos protection along with top speed gaming and lowest latency and ping possible. Build your Lineage world with Cloudcom Magma Servers.') ?></p>
											<p class="game-title"><?php t('DDoS Protection for RPG and MMORPG servers') ?></p>
											<p class="reliable-game-text"><?php t('Cloudcom DDoS Protected Dedicated Game Servers are great for every online multiplayer game you can think of. The Free DDoS Protection provided gives you a complete protection from all ddos attack types up to 10 gigabit per second or 4 million packets per second. We can provide you with RAM and HDD upgrades also. Get up to 96GB of RAM in your Dedicated Server or several SSD hard drives for a low surcharge. Build your Game Empire with Cloudcom DDoS Protection Hosting.') ?></p>
										
										</div>
										<div class="game-hosting">
											<p class="game-title"><?php t('Great for Minecraft') ?></p>
											<p class="game-text"><?php t('All of our Dedicated Game Servers are great for Minecraft lovers. Since our start we have hosted hundreds of servers for Minecraft Server owners, providing best DDoS Protection along with Minecraft-ready servers for free. All of our Minecraft server owners are happy and completely satisfied by our service. We guarantee your complete Minecraft satisfaction with our Gamma S or Magma Servers or get your money back!') ?></p>
											<p class="game-title"><?php t('DDoS Protected Counter Strike servers') ?></p>
											<p class="game-text"><?php t('Cloudcom offer top of the line hardware for your Counter Strike server. We offer Quad-core and Six-core processors, Solid-State or SAS Hard Drives and Supermicro servers with top of the line hardware in order to manage your server remotely. We also install the OS of your choice, the setup is completely free. And of course, the 10 gigabit ddos protection included with every Dedicated Server.') ?></p>
											<p class="game-title"><?php t('Save money with Light mode') ?></p>
											<p class="game-text"><?php t('Eco mode is a special order configuration intended to get a discount up to 40% off server price due to intended purchase without DDoS Protection. It is always possible to upgrade your server back to ddos protection included in case if you have issues with attacks when running your server in Eco mode.') ?></p>
										</div>
									</div>

									<div class="row clearfix servers-features">
										<div>
											<p class="game-title"><?php t('Game server features') ?></p>
											<ul>
												<li><?php t('Virtualization ready') ?></li>
												<li><?php t('Private networking') ?></li>
												<li><?php t('Multi Interface Connections') ?></li>
												<li><?php t('Multiple Upstream Carriers') ?></li>
												<li><?php t('Fully Redundant') ?></li>
												<li><?php t('99% Uptime') ?></li>
												<li><?php t('Free DDoS Mitigation') ?></li>
												<li><?php t('Fast Delivery') ?></li>
												<li><?php t('Reliable Servers') ?></li>
												<li><?php t('IPMI included') ?></li>
												<li><?php t('RAM Upgrades') ?></li>
												<li><?php t('Low costs') ?></li>
											</ul>
										</div>
										<div>
											<p class="game-title"><?php t('Game servers includes') ?></p>
											<ul>
												<li><?php t('DDoS Mitigation') ?></li>
												<li><?php t('Server IPMI Control') ?></li>
												<li><?php t('Best Hardware') ?></li>
												<li><?php t('15 TB of Bandwidth') ?></li>
												<li><?php t('1 GBPS Lan Ports') ?></li>
											</ul>
										</div>
										<div>
											<p class="game-title"><?php t('Game servers protected') ?></p>
											<ul>
												<li><?php t('No Lag and DDoS safe technologies') ?></li>
												<li><?php t('Minecraft ready') ?></li>
												<li><?php t('BuyCraft Friendly') ?></li>
											</ul>
										</div>
									</div>
									<div class="row last clearfix">
										<p class="title-bitcoin"><?php t('Bitcoin, Litecoin and Nextcoin Accepted') ?></p>
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

