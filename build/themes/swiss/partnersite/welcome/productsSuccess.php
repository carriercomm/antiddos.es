<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-all-products">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('All products')?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home')?></a></li>
								<li class="crumb crumb-last"><?php t('All products')?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/img_about_us.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix charts">
										<?php include_partial('welcome/aboutuschart') ?>
										<div class="chart-text">
											<p><?php t('ANTIDDoS will keep your web infrastructure safe from all types of DDoS attacks. Our DDoS Protected Hosting is located in Zurich, Switzerland, with the top performing and delivering constant stability in website security, ANTIDDoS offer DDoS Protection along with Dedicated and Cloud Servers with Onsite DDoS Protection.')?></p>

											<p><?php t('All services include free DDoS protection service and guaranteed for DDoS attack mitigation up to 10 Gbit per sec or 4 million packets per second.')?></p>

											<p><?php t('ANTIDDoS Network is protected behind the top performing Cisco and Juniper hardware and innovative live multilayer DDoS Attack Protection engine. All servers are connected to 1Gbit/s and 10Gbit/s LAN ports for lowest latency possible. Try the 100% guaranteed DDoS Mitigation by ANTIDDoS experts.')?></p>
										</div>
									</div>
									<div class="row clearfix products">
										<div>
											<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>"><img src="/images/products-one.jpg"></a>
											<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>"><h2><?php t('Dedicated Servers')?></h2></a>
											<p><?php t('CoinsHost offers 20+ Dedicated Server configurations that can meet requirements of any client. Professional protection against all types of DDoS attacks can be ordered as an option. DDoS protection is also available on demand and can be enabled at any time.')?></p>
											<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@cloud_config_list') ?>" title="<?php t('Protected Cloud Hosting')?>"><img src="/images/products-two.jpg"></a>
											<a href="<?php echo url_for('@cloud_config_list') ?>" title="<?php t('Protected Cloud Hosting')?>"><h2><?php t('Cloud Hosting')?></h2></a>
											<p><?php t('With data mirroring, multiple tier-1 upstream providers, redundant power sources with automatic switch-over and free 10 Gbps DDoS protection On-App powered Cloud Hosting is the best solution to host a mission-critical front end website or service.')?></p>
											<a href="<?php echo url_for('@cloud_config_list') ?>" title="<?php t('Protected Cloud Hosting')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>"><img src="/images/products-three.jpg"></a>
											<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>"><h2><?php t('DDoS Protection')?></h2></a>
											<p><?php t('Based on our vast experience in fighting against online threats, CoinsHost have developed a solution that is capable of detecting, automatically analysing and mitigating against HTTP, UDP, SYN, ICMP floods and all other types of DDoS attacks with SLA guaranteed result.')?></p>
											<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@colocation_config_list') ?>" title="<?php t('Collocation in Switzerland')?>"><img src="/images/products-four.jpg"></a>
											<a href="<?php echo url_for('@colocation_config_list') ?>" title="<?php t('Collocation in Switzerland')?>"><h2><?php t('Hardware colocation')?></h2></a>
											<p><?php t('If you are looking to co-locate your equipment in a secure Data Center in Europe that accepts Bitcoin as a payment method, CoinsHost is at your service. We provide colocation for equipment up to 4 units in size in a secure and sophisticated DC in Zurich, Switzerland.')?></p>
											<a href="<?php echo url_for('@colocation_config_list') ?>" title="<?php t('Collocation in Switzerland')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@show_page?name=cdn') ?>" title="<?php t('Content Delivery Network')?>"><img src="/images/products-five.jpg"></a>
											<a href="<?php echo url_for('@show_page?name=cdn') ?>" title="<?php t('Content Delivery Network')?>"><h2><?php t('Content Delivery Network')?></h2></a>
											<p><?php t('Improve your site performance, load speed and availability by distributing your content across multiple servers in different locations all over the globe. CoinsHost Content Delivery Network consists of 170+ points of presence in 113 cities across 43 countries.')?></p>
											<a href="<?php echo url_for('@show_page?name=cdn') ?>" title="<?php t('Content Delivery Network')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@show_page?name=bitsync') ?>" title="<?php t('BitTorrent Sync')?>"><img src="/images/products-six.jpg"></a>
											<a href="<?php echo url_for('@show_page?name=bitsync') ?>" title="<?php t('BitTorrent Sync')?>"><h2><?php t('BitTorrent Sync')?></h2></a>
											<p><?php t('CoinsHost offers secure BTsync containers that are hosted on a Cloud server with 99.9% guaranteed uptime and 10 Gb/s AES-256 encrypted data transfer. With this Cloud container you can securely & anonymously sync, backup and exchange files across all your devices.')?></p>
											<a href="<?php echo url_for('@show_page?name=bitsync') ?>" title="<?php t('BitTorrent Sync')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@show_page?name=control-panels') ?>" title="<?php t('Control panels')?>"><img src="/images/products-seven.jpg"></a>
											<a href="<?php echo url_for('@show_page?name=control-panels') ?>" title="<?php t('Control panels')?>"><h2><?php t('Control panels')?></h2></a>
											<p><?php t('With a Control Panel of your choice you will significantly harden your server and protect it from known vulnerabilities and common hacking practices, receive notifications on server status and control Apache, Perl and PHP modules via a user-friendly GUI.')?></p>
											<a href="<?php echo url_for('@show_page?name=control-panels') ?>" title="<?php t('Control panels')?>" class="products-read"><?php t('Read more')?></a>
										</div>
										<div>
											<a href="<?php echo url_for('@gameservers_config_list') ?>" title="<?php t('DDoS Protected Game Servers')?>"><img src="/images/minecraft.jpg"></a>
											<a href="<?php echo url_for('@gameservers_config_list') ?>" title="<?php t('DDoS Protected Game Servers')?>"><h2><?php t('Game Servers')?></h2></a>
											<p><?php t('Here are just some of them. With data mirroring, multiple tier-1 upstream providers, redundant power sources with automatic switch-over and free DDoS protection Cloud Hosting is the best solution to host a mission-critical front-end website or service.')?></p>
											<a href="<?php echo url_for('@gameservers_config_list') ?>" title="<?php t('DDoS Protected Game Servers')?>" class="products-read"><?php t('Read more')?></a>
										</div>
									</div>
									<div class="row last clearfix products-text">
										<p class="products-text-title"><?php t('Bitcoin, Litecoin and Nextcoin Accepted')?></p>
										<p><?php t('Without any doubt you can pay for CoinsHost products and services with Bitcoin (BTC), Litecoin (LTC) and Nextcoin (NXT). We treat decentralized currencies based on encryption as completely legit payment methods and encourage our clients to pay with them. Besides these P2P currencies, we accept a wide range of other payment methods and digital currencies. These include but are not limited to: PayPal, VISA, MasterCard, American Express, Discover, Bank Wire, WebMoney and Perfect Money.')?></p>
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