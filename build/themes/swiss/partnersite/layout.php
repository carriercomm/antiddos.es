<!DOCTYPE html>
<html>
<head>
	
	<?php include_http_metas(); ?>
    <?php include_metas(); ?>
    <?php include_title(); ?>
	
	<?php //solar_include_stylesheets() ?>
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/global.base.css">
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/global.styles.css">
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/camera.css">
	<link rel="shortcut icon" type="image/x-icon" href="/css/partner/swiss/images/favicon.ico">
	
	<?php //include_javascripts() ?>
	<script src="/js/jquery-1.7.1.min.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/camera.js"></script>
	<script src="/js/jquery.responsiveTabs.js"></script>
	<script type="text/javascript" language="javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<!--  <script type="text/javascript" language="javascript" src="/js/jquery.carouFredSel-6.1.0-packed.js"></script>  -->
	
	<!-- optionally include helper plugins -->
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" language="javascript" src="/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	<script src="/js/antiddos.script.js"></script>
	
	<!-- Google Analytics counter -->
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-35541482-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<!-- Google Analytics counter -->
	
	<!-- Yandex.Metrika counter -->
	<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
	<script type="text/javascript">
	try { var yaCounter19318336 = new Ya.Metrika({id:19318336,
          webvisor:true,
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true});
	} catch(e) { }
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/19318336" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	
</head>

<body>
<h1 style="border: 1px solid red;">Warning, development in progress - Feeria</h1>
<? sfWebDebugToggleMenu(); ?> <!-- ??? What is this -->

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
		<?php include_partial('welcome/mainmenu') ?>
		<!-- end block: Menu -->
</header>
<!-- end region: Header -->	
		
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
							<p class="copyright"><?php t('Anti DDoS España © 2013 - 2014 Authorised Cloudcom Partner')?></p>
						</div>
					</div>
				</div>
						
				<!-- block: antiddos-footer-menu-second -->
				<div id="block-antiddos-footer-menu-second" class="block clearfix">
					<div class="block-inner">
						<div class="block-content">
							<ul class="footer-menu-second">
								<li class="first">
									<a href="<?php echo url_for('@show_page?name=termsofservice') ?>"><?php t('Terms of Service')?></a>
								</li>
								<li class="last">
									<a href="<?php echo url_for('@show_page?name=privacypolicy') ?>"><?php t('Privacy Policy')?></a>
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
	<?php include_partial('welcome/businessinnumbers') ?> <!-- Design? -->


</div><!-- /end #page -->
</body>
</html>