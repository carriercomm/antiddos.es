	<?php $sf_response->addMeta("title", __('meta_title_index', array('%site%'=>sfConfig::get('app_site_name')), 'partner_public')) ?>
	<?php $sf_response->addMeta("keywords", __("meta_keyword_index", array(), 'partner_public')) ?>
	<?php $sf_response->addMeta("description", __("meta_desc_index", array('%site%'=>sfConfig::get('app_site_name')), 'partner_public')) ?>
	
	<!-- block: Slider -->
	<?php include_partial('welcome/slider') ?>
	<!-- end block: Slider -->
	</header>
	<!-- end region: Header -->
	<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-front">
						<!-- block: Products -->
						<?php include_partial('welcome/pindexslider') ?>
						<!-- end block: Products -->
						
						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<img src="/images/left-mage-index.png">
									<p><?php t('ANTIDDoS will keep your web infrastructure safe from all types of DDoS attacks. Our DDoS Protected Hosting is located in Zurich, Switzerland, with the top performing and delivering constant stability in website security, ANTIDDoS offer DDoS Protection along with Dedicated and Cloud Servers with Onsite DDoS Protection.') ?></p>
									<p><?php t('All services include free DDoS protection service and guaranteed for DDoS attack mitigation up to 10 Gbit per sec or 4 million packets per second.') ?></p>
									<p><?php t('ANTIDDoS Network is protected behind the top performing Cisco and Juniper hardware and innovative live multilayer DDoS Attack Protection engine. All servers are connected to 1Gbit/s and 10Gbit/s LAN ports for lowest latency possible. Try the 100% guaranteed DDoS Mitigation by ANTIDDoS experts.') ?></p>
								</div>
							</article>
						</div>	
						
						<!-- block: Banner -->
						<div id="block-banner-main" class="block clearfix">  
							<div class="block-inner">
								<div class="block-content">
									<h2><?php t('Instant dedicated servers') ?></h2>
									<p><?php t('Dedicated Servers and DDoS Protection') ?></p>
								</div>
							</div>
						</div>
						<!-- end block: Banner -->
						<!-- block: Tabs -->
						<div id="block-antiddos-products-2" class="block clearfix">
							<div class="block-inner">
								<div class="block-content">
									<?php include_partial('welcome/tindextabs') ?>							
								</div>
							</div>
						</div>
						<!-- end block: Tabs -->
					</div>
			    <!-- end region: Main Content -->
				</section><!-- /end #main-content -->
			</div><!-- /end .content-inner -->
		</div><!-- /end #content-column -->	
	</div><!-- /end #columns -->