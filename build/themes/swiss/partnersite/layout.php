<!DOCTYPE html>
<html>
<head>
	
	<?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
	
	<?php //solar_include_stylesheets() ?>
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/global.base.css">
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/global.styles.css">
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/camera.css">
	<link rel="shortcut icon" type="image/x-icon" href="/css/partner/swiss/images/favicon.ico">
	
	<?php include_javascripts() ?>
	<script src="/js/jquery-1.7.1.min.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/camera.js"></script>
	<script src="/js/jquery.responsiveTabs.js"></script>
	<script type="text/javascript" language="javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<!--<script type="text/javascript" language="javascript" src="/js/jquery.carouFredSel-6.1.0-packed.js"></script>-->
	<!-- optionally include helper plugins -->
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	<script src="/js/index.script.js"></script>
	<script src="/js/antiddos.script.js"></script>
	
</head>
<body>
<h1 style="border: 1px solid red;">Warning, development in progress - Feeria</h1>
<? sfWebDebugToggleMenu(); ?> <!-- ??? What is this -->
<?php// include_partial('global/inbox') ?> <!-- ??? What is this -->

<div id="page" class="container page">
	<!-- region: Header -->
	<header id="header" class="clearfix" role="banner">
		<!-- start: Branding -->
		<div id="branding" class="branding-elements clearfix">
			<!-- start: Site name and Slogan hgroup -->
			<hgroup id="name-and-slogan">
				<div id="logo">
		              <a href="<?php echo url_for('@localized_homepage') ?>" alt="Cloudcom"><img class="site-logo" alt="<?php t('DDoS Protected') ?>" src="<?php echo solar_template_image_url('logo.png') ?>"></a>
		           </div>
				<h2 id="site-slogan" ><?php t('text_head_product_1') ?></h2>
			</hgroup><!-- /end #name-and-slogan -->

			<!-- block: User login -->
			<div id="block-antiddos-login" class="block clearfix">
				<div class="block-inner">
					<div class="block-content">
						<?php include_component('auth', 'login') ?>
					</div>
				</div>
			</div>
			<!-- end block: User login -->

			<!-- block: Select language -->
			<div id="block-antiddos-languages" class="block clearfix">
				<div class="block-inner">
					<div class="block-content">
					<div class="block-title"><?php t('Select language') ?></div>
					<ul class="list-languages">
						<li class="en active"><a></a></li>
						<?php include_component('welcome', 'language') ?>
					</ul>
					</div>
				</div>
			</div>
			<!-- end block: Select language -->

		</div><!-- /end #branding -->
		
		<!-- block: Menu -->
		<?php $current_route = sfContext::getInstance()->getRouting()->getCurrentRouteName(); ?>
		
		<div id="primary-menu-bar" class="nav clearfix">
			<ul class="menu clearfix">
				<li class="first">
					<a href="<?php url_for('@localized_homepage') ?>" title="<?php t('Home') ?>"><?php t('Home') ?></a>
				</li>
				<li class="expanded">
					<a href="<?php echo url_for('@show_page?name=about-us') ?>" title="<?php t('About us') ?>"><?php t('About us') ?></a>
					<ul class="menu clearfix">
						<li class="first">
							<a href="#" title="<?php t('FAQ') ?>"><?php t('FAQ') ?></a>
						</li>
						<li>
							<a href="#" title="<?php t('Terms of Service') ?>"><?php t('Terms of Service') ?></a>
						</li>
						<li>
							<a href="#" title="<?php t('Privacy Policy') ?>"><?php t('Privacy Policy') ?></a>
						</li>
						<li class="last">
							<a href="#" title="<?php t('Reviews') ?>"><?php t('Reviews') ?></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>"><?php t('DDoS Protection')?></a>
					<ul class="menu information clearfix">
						<li>
							<h4><?php t('Powerful bare metal servers with optional DDoS protection on demand.') ?></h4>
							<div>
								<ol>
									<li><?php t('KVM/IPMI available') ?></li>
									<li><?php t('High on-site security') ?></li>
									<li><?php t('Full redundancy') ?></li>
									<li><?php t('DDoS protection') ?></li>
									<li><?php t('24/7 phone support') ?></li>
								</ol>
								<p><s><span><?php t('Starting from') ?></span><b><?php t('0.24438090 B') ?></b></s></p>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>"><?php t('Dedicated Servers')?></a>
					<ul class="menu information clearfix">
						<li>
							<h4><?php t('Powerful bare metal servers with optional DDoS protection on demand.') ?></h4>
							<div>
								<ol>
									<li><?php t('KVM/IPMI available') ?></li>
									<li><?php t('High on-site security') ?></li>
									<li><?php t('Full redundancy') ?></li>
									<li><?php t('DDoS protection') ?></li>
									<li><?php t('24/7 phone support') ?></li>
								</ol>
								<p><s><span><?php t('Starting from') ?></span><b><?php t('0.24438090 B') ?></b></s></p>
							</div>
						</li>
					</ul>
				</li>
				<li class="expanded">
					<a href="#" title=""><?php t('All products')?></a>
					<ul class="menu clearfix">
						<li class="first">
							<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>"><?php t('Dedicated Servers')?></a>
						</li>
						<li>
							<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>"><?php t('DDoS Protection')?></a>
						</li>
						<li>
							<a href="<?php echo url_for('@cloud_config_list') ?>" title="<?php t('Protected Cloud Hosting')?>"><?php t('Cloud Hosting')?></a>
						</li>
						<li>
							<a href="<?php echo url_for('@colocation_config_list') ?>" title="<?php t('Collocation in Switzerland')?>"><?php t('Hardware colocation')?></a>
						</li>
						<li>
							<a href="#" title=""><?php t('Control panels')?></a>
						</li>
						<li>
							<a href="#" title=""><?php t('BitTorrent Sync')?></a>
						</li>
						<li>
							<a href="#" title=""><?php t('Content Delivery Network')?></a>
						</li>
						<li class="last">
							<a href="<?php echo url_for('@gameservers_config_list') ?>" title="<?php t('DDoS Protected Game Servers')?>"><?php t('Game Servers')?></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" title=""><?php t('Contacts')?></a>
				</li>
				<li class="last">
					<a href="#" title=""><?php t('Blog')?></a>
				</li>
			</ul>
		</div>
		<!-- end block: Menu -->
		
		<?php //include_partial('global/flashes') ?> <!-- ??? -->
	
		<!-- block: Content -->
		<?php echo $sf_content ?>
		<!-- end block: Content -->
		
<!-- region: Footer -->
	<footer id="footer" class="clearfix" role="contentinfo">
		<div class="region region-footer">
			<div class="region-inner clearfix">
				
				<!-- block: antiddos-footer-menu-first -->
				<div id="block-antiddos-footer-menu-first" class="block clearfix">
					<div class="block-inner">
						<div class="block-content">
							<ul class="footer-menu-first">
								<?php include_menu('bottom') ?>		
							</ul>	
						</div>
					</div>
				</div>
				<!-- end block: antiddos-footer-menu-first -->

				<div id="block-antiddos-copyright" class="block clearfix">
					<div class="block-inner">
						<div class="block-content">
							<p class="copyright">Anti DDoS España © 2013 - 2014 Authorised Cloudcom Partner</p>
						</div>
					</div>
				</div>
						
				<!-- block: antiddos-footer-menu-second -->
				<div id="block-antiddos-footer-menu-second" class="block clearfix">
					<div class="block-inner">
						<div class="block-content">
							<ul class="footer-menu-second">
								<li class="first">
									<a href="<?php echo url_for('@show_page?name=terms-of-service') ?>"><?php t('Terms of Service')?></a>
								</li>
								<li class="last">
									<a href="<?php echo url_for('@show_page?name=privacy-policy') ?>"><?php t('Privacy Policy')?></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end block: antiddos-footer-menu-second -->				

				<!-- block: antiddos-footer-partners -->
				<div id="block-antiddos-footer-partners" class="block clearfix">
					<div class="block-inner">
						<div class="block-content">
							<div class="partners">
								<a href="#" class="visa"></a>
								<a href="#" class="mastercard"></a>
								<a href="#" class="two_cc"></a>
								<a href="#" class="paypal"></a>
								<a href="#" class="litecoin"></a>
								<a href="#" class="bitcoin"></a>
							</div>
						</div>
					</div>
				</div>
				<!-- end block: antiddos-footer-partners -->

			</div>
		</div>              
	</footer>
	<!-- end region: Footer -->
	<h3 style="border: 1px solid red;">Temp block: business-numer-inner</h3>
	<?php t('protected_net_stat')?>
	<div class="business-numer-inner">
														<div class="right-zone">
																<div class="right-zone-inner">
																		<div class="first-zone link">
																				<span><a alt="<?php t('dedicated_stats')?>" href="<?php echo url_for('@server_config_list') ?>" class="minia" style="color: rgb(255, 255, 255);"><?php t('dedicated_stats')?></a>: 745</span>
																				<span><a alt="<?php t('cloud_stats')?>" href="<?php echo url_for('cloud_config_list') ?>" class="minia" style="color: rgb(255, 255, 255);"><?php t('cloud_stats')?></a>: 1026</span>
																				<span><a alt="<?php t('colo_stats')?>" href="<?php echo url_for('@colocation_config_list') ?>" class="minia" style="color: rgb(255, 255, 255);"><?php t('colo_stats')?></a>: 118</span>
																		</div>
																		<div class="second-zone link">
																				<span><a alt="<?php t('camfrog_stats')?>" href="<?php echo url_for('@camfrog_config_list') ?>" class="minia" style="color: rgb(255, 255, 255);"><?php t('camfrog_stats')?></a>: 450</span>
																				<span><a alt="<?php t('minecraft_stats')?>" href="<?php echo url_for('@minecraft_config_list') ?>" class="minia" style="color: rgb(255, 255, 255);"><?php t('minecraft_stats')?></a>: 234</span>
																				<span><a alt="<?php t('ddos_stats')?>" href="<?php echo url_for('@protection_config_list') ?>" class="minia" style="color: rgb(255, 255, 255);"><?php t('ddos_stats')?></a>: 417</span>
																		</div>
																		<div class="third-zone link">
																				<span><?php t('total_stats')?>: 3453</span>
																				<div class="payment"></div>
																		</div>
																</div>
														</div>
														<div class="left-zone">
																<div class="left-zone-inner">
																		<div class="first-zone link"><a href="http://facebook.com/protected.hosting"></a></div>
																		<div class="second-zone link"><a href="http://lnkd.in/wU8kMu"></a></div>
																		<div class="third-zone link"><a href="http://twitter.com/Cloudcomhosting"></a></div>
																</div>
														</div>
												</div>
</div><!-- /end #page -->
</body>
</html>