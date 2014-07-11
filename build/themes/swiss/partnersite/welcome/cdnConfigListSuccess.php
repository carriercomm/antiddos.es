<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-adn-cdn">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Content Delivery Network') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Content Delivery Network') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/ant-cdn.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix">
										<p><?php t('170+ points of presence across the globe form CoinHost CDN, or Content Delivery Network that delivers data to end users worldwide and guarantees improving page load times and increase of global availability of content. In a nutshell your content will be copied & distributed across multiple servers in different locations all over the globe. Requests for content are algorithmically directed to nodes that are closest to the client location, so as to optimize speed of content delivery, its availability and bandwidth costs. Should you want to try CDN before placing an order, please fell free to sign up for a 7 day trial which comes with a 50 GB/s bandwidth.') ?></p>
										<ul>
											<li><?php t('Ultra-fast content delivery') ?></li>
											<li><?php t('Global PoPs coverage') ?></li>
											<li><?php t('100% availability for all end-users') ?></li>
											<li><?php t('Improved site performance') ?></li>
											<li><?php t('Detailed reports on requested data') ?></li>
										</ul>
									</div>
									<div class="row  clearfix">
										<ul class="product-grid lite-4">
											
											<?php foreach($configs as $config): ?>
											<?php if(!$config->available) continue; ?>
											
											<li class="first cdn-na">
												<p class="name"><?php t('PoPs NA') ?><span><?php t('PoPs in North America') ?></span></p>
												<p class="cost">0.00000000<?php t('฿') ?><br><span><?php t('1 GB per month') ?></span><br><b><?php echo $config->price_n_america ?> <?php t('CHF') ?> </b><b><?php echo usd($config->price_n_america)?> <?php t('$') ?></b><b><?php echo eur($config->price_n_america)?> <?php t('€') ?></b><b> <?php t('per 1Gb') ?></b></p>
												<div class="billing-order form">
													<form>
														<div class="submit-container">
															<input type="button" id="add-cart-submit" value="<?php t('Place order') ?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';">
														</div>
														<div class="read-item">
															<a href="<?php echo url_for('@newcart_item_new_trial?product_id=' . $config->id) ?>"><?php t('Try for free 7 days') ?></a>
														</div>
													</form>
												</div>
												
											</li>
											<li class="cdn-eu">
												<p class="name"><?php t('PoPs EU') ?><span><?php t('PoPs in Europe') ?></span></p>
												<p class="cost">0.00000000<?php t('฿') ?><br><span><?php t('1 GB per month') ?></span><br><b><?php echo $config->price_europa ?> <?php t('CHF') ?> </b><b><?php echo usd($config->price_europa)?> <?php t('$') ?></b><b><?php echo eur($config->price_europa)?> <?php t('€') ?></b><b> <?php t('per 1Gb') ?></b></p>
												<div class="billing-order form">
													<form>
														<div class="submit-container">
															<input type="button" id="add-cart-submit" value="<?php t('Place order') ?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';">
														</div>
														<div class="read-item">
															<a href="<?php echo url_for('@newcart_item_new_trial?product_id=' . $config->id) ?>"><?php t('Try for free 7 days') ?></a>
														</div>
													</form>
												</div>
											</li>
											<li class="cdn-a">
												<p class="name"><?php t('PoPs A') ?><span><?php t('PoPs in Asia') ?></span></p>
												<p class="cost">0.00000000<?php t('฿') ?><br><span><?php t('1 GB per month') ?></span><br><b><?php echo $config->price_asia ?> <?php t('CHF') ?> </b><b><?php echo usd($config->price_asia)?> <?php t('$') ?></b><b><?php echo eur($config->price_asia)?> <?php t('€') ?></b><b> <?php t('per 1Gb') ?></b></p>
												<div class="billing-order form">
													<form>
														<div class="submit-container">
															<input type="button" id="add-cart-submit" value="<?php t('Place order') ?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';">
														</div>
														<div class="read-item">
															<a href="<?php echo url_for('@newcart_item_new_trial?product_id=' . $config->id) ?>"><?php t('Try for free 7 days') ?></a>
														</div>
													</form>
												</div>
											</li>
											<li class="last cdn-sa">
												<p class="name"><?php t('PoPs SA') ?><span><?php t('PoPs in South America') ?></span></p>
												<p class="cost">0.00000000<?php t('฿') ?><br><span><?php t('1 GB per month') ?></span><br><b><?php echo $config->price_s_america ?> <?php t('CHF') ?></b><b><?php echo usd($config->price_s_america)?> <?php t('$') ?></b><b><?php echo eur($config->price_s_america)?> <?php t('€') ?></b><b> <?php t('per 1Gb') ?></b></p>
												<div class="billing-order form">
													<form>
														<div class="submit-container">
															<input type="button" id="add-cart-submit" value="<?php t('Place order') ?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';">
														</div>
														<div class="read-item">
															<a href="<?php echo url_for('@newcart_item_new_trial?product_id=' . $config->id) ?>"><?php t('Try for free 7 days') ?></a>
														</div>
													</form>
												</div>
											</li>
											
											<?php endforeach ?>
											
										</ul>
									</div>
									<div class="row clearfix cdn-hss">
										<ul class="column-3 vertical">
											<li class="first">
												<h3><?php t('Highest availability') ?></h3>
												<p><?php t('We host BitTorrent Sync containers on a high-availability Cloud network with data mirroring and ZFS file system for protection from data corruption to ensure that your data will not be lost under any circumstances. Redundant power-source with auto-switch-over, UPS, diesel generators and multiple upstream providers guarantee 99.9% uptime.') ?></p>
											</li>
											<li>
												<h3><?php t('Security & anonymity') ?></h3>
												<p><?php t('BitTorrent Sync protocol was designed with privacy and security in mind: AES-256 data traffic encryption, protection from unauthorized data modification, read-only secrets and ability to encrypt data on a remote container. BTsync data containers by CoinsHost are absolutely anonymous when paid with decentralized P2P currencies like Bitcoin, Litecoin or Nextcoin.') ?></p>
											</li>
											<li class="last">
												<h3><?php t('Supported platforms') ?></h3>
												<p><?php t('We support: Mac OS X Snow Leopard or later, Windows XP SP3 (32-bit) or newer (32 and 64-bit), Linux with kernel 2.6.16 (glibc 2.4) or newer on ARM/PPC/i386/x86_64, FreeBSD 8.4 and 9.1, Android 2.2 and higher, iOS 5.0 and higher') ?></p>
											</li>
										</ul>
									</div>
									
									<div class="row clearfix map">
										<div class="clearfix ant-cdn-locations">
											<p class="ant-cdn-locations-title"><?php t('CDN map locations') ?></p>
											<p><?php t('CoinsHosts Content Delivery Network consists of 172 points of presence in 113 cities across 43 countries in Europe, Asia and both Americas. CDN is designed to promptly deliver content to end-user from location which is most efficient in terms of latency, performance quality and bandwidth cost.') ?></p>
										</div>
										<?php include_partial('welcome/cdnmap') ?>
									</div>
									<div class="row last clearfix ant-cdn-payment">
										<p class="ant-cdn-payment-title"><?php t('Bitcoin, Litecoin and Nextcoin Accepted') ?></p>
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