<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />

    <?php include_javascripts() ?>
    	<link rel="stylesheet" type="text/css" media="screen" href="/css/partner/swiss/css/style-servers.css" />
    



		<script type="text/javascript" src="/css/partner/swiss/js/jquery.ui.core.js"></script>
		<script type="text/javascript" src="/css/partner/swiss/js/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="/css/partner/swiss/js/jquery.ui.rcarousel.js"></script>
		
	
		
		
		
		<script type="text/javascript" src="/css/partner/swiss/js/jquery.carouFredSel-6.1.0-packed.js"></script>
		<script type="text/javascript" language="javascript" src="/css/partner/swiss/js/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" language="javascript" src="/css/partner/swiss/js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" language="javascript" src="/css/partner/swiss/js/jquery.ba-throttle-debounce.min.js"></script>
		<script type="text/javascript" src="/css/partner/swiss/js/jscript.servers.js"></script>
		
		
		
	
				
	
		
		  <?php solar_include_stylesheets() ?>
		  	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/style2.css" />
		  		<link type="text/css" rel="stylesheet" href="/css/partner/swiss/css/business.css" />
		

		
</head>
<script>

$(document).ready(function () {
<?php if(sfConfig::get('sf_web_debug')): ?>
  sfWebDebugToggleMenu();
<?php endif ?>
	inboxLivechat('<?php echo url_for("@livechat_inbox")?>');
	openLivechat("#group");
});

</script>



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

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php include_partial('global/inbox') ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr bgcolor="#4b8ac4"> 
		<td height="10">
				<img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1"></td>
		<td align=right>

<?php include_component('welcome', 'language') ?>

</td>
		<td>
			<img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1" alt=""></td>

	</tr>
	<tr>
		<td class="tdbar_st1_left">
			<img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1" alt=""></td>
		<td class="tdbar_st1_center">

<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td>
<div class="logotype">
											<div class="logotype">
														<a href="<?php echo url_for('@localized_homepage') ?>" alt="Cloudcom">
																<img src="<?php echo solar_template_image_url('logo.png') ?>" alt="<?php t('DDoS Protected') ?> Cloudcom" border=0>
																<div class="slogan"><b><?php t('text_head_product_1') ?></b></div>
														</a>
												</div>
										</div>
</td><td align=right>
<?php include_component('auth', 'login') ?>
</td></tr></table>

</td>
		<td class="tdbar_st1_right">
			<img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1" alt=""></td>
	</tr>

<?php $current_route = sfContext::getInstance()->getRouting()->getCurrentRouteName(); ?>

	<tr>
		<td class="tdbar_st3_left" valign=top><?php if($current_route == 'localized_homepage'): ?><div class="dark_slider1" style="width: 100%; height: 76px;"></div><?php endif ?></td>
		<td class="tdbar_st3_center" valign=top> 








<?php if($current_route == 'localized_homepage'): ?>

<table width=100%  cellpadding="0" cellspacing="0" border="0" class="dark"><tr>			
<td align=center width=20%>

<?php if($current_route == 'server_config_list'): ?>
<font class="productmenu_active"><?php t('Dedicated Server')?></font>
<?php else: ?>
<a alt="<?php t('Protected Dedicated Server')?>" href="<?php echo url_for('@server_config_list') ?>" class="productmenu"><?php t('Dedicated Servers')?></a>
<?php endif ?>


</td><td align=center width=20%>

<?php if($current_route == 'cloud_config_list'): ?>
<font class="productmenu_active"><?php t('Cloud Server')?></font>
<?php else: ?>
<a alt="<?php t('Protected Cloud Hosting')?>" href="<?php echo url_for('@cloud_config_list') ?>" class="productmenu"><?php t('Cloud Hosting')?></a>
<?php endif ?>



</td><td align=center width=20%>


<?php if($current_route == 'protection_config_list'): ?>
<font class="productmenu_active"><?php t('DDoS protection')?></font>
<?php else: ?>
<a alt="<?php t('DDoS protection')?>" href="<?php echo url_for('@protection_config_list') ?>" class="productmenu"><?php t('DDoS Protection')?></a>
<?php endif ?>


</td>
<td align=center width=20%>


<?php if($current_route == 'Minecraft_config_list'): ?>
<font class="productmenu_active"><?php t('Game Servers')?></font>
<?php else: ?>
<a alt="<?php t('DDoS Protected Game Servers')?>" href="<?php echo url_for('@gameservers_config_list') ?>" class="productmenu"><?php t('Game Servers')?></a>
<?php endif ?>

</td>

<td align=center width=20%>

<?php if($current_route == 'colocation_config_list'): ?>
<font class="productmenu_active"><?php t('Colocation')?></a></font>
<?php else: ?>
<a alt="<?php t('Collocation in Switzerland')?>" href="<?php echo url_for('@colocation_config_list') ?>" class="productmenu"><?php t('Colocation Switzerland')?></a>
<?php endif ?>

</td>
</table>

<?php else: ?>

<?php endif ?>

<div class="slider_box" style="" align=right>
<div align=right class="slider_pre">

<font class="slider_title"><?php if(!include_slot('slider_title')): ?><font class="hh_01"><?php echo sfContext::getInstance()->getResponse()->getTitle() ?></font><?php endif ?></font>
<br><br>
<font class="slider_text"><?php include_slot('slider_text') ?></font>
</div>
</div>





 </td>
		<td class="tdbar_st3_right" valign=top><?php if($current_route == 'localized_homepage'): ?><div class="dark_slider1" style="width: 100%; height: 76px;"></div><?php endif ?></td>
	</tr>

	<tr>
		<td class="tdbar_st4_left" valign=top>
			<div class="menubarleft"><img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1" alt=""></div></td>
		<td class="tdbar_st4_center" height=600 valign=top>


<?php include_menu('top') ?>			

    <?php include_partial('global/flashes') ?>

<?php echo $sf_content ?>

<div class="divbottommenu">





<?php include_menu('bottom') ?>			



</div>
<div class="endsite">

<table width=100% cellpadding="0" cellspacing="0"><tr><td><span class="business-text"><b><font size="3"><?php t('protected_net_stat')?>:</b></span>
</td><td align=right>
<a href="<?php echo url_for('@show_page?name=business-safety-guarantee') ?>" class="bottommenu"><?php t('Business Safety Guarantee')?></a><a href="<?php echo url_for('@show_page?name=terms-of-service') ?>" class="bottommenu"><?php t('Terms of Service')?></a>
<a href="<?php echo url_for('@show_page?name=privacy-policy') ?>" class="bottommenu"><?php t('Privacy Policy')?></a>
</td></tr><tr><td colspan=2><!-- Block with business in number -->
										<div class="business-number-footer">
												
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
										</div>
										<!-- End block with business in number --></td></tr><tr><td align="left">
<font style="margin-left: 2px; margin-right: 10px;" colspan="2">&copy;2013<a href="<?php echo url_for('@show_page?name=about-us') ?>" class="bottommenu">Cloudcom Sociedad Limitada</font></a>
<div class="g-plusone" data-size="small"></div>
<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</td><td align="right"><font class="wh" style="margin-right: 5px;"><?php t('Mobile Cloudcom')?>:</font><a href="http://cloudc.nl" style="margin-left: 5px;">
<img src="/images/partner/swiss/en.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.be/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/de.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.it/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/it.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.fr/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/fr.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.es/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/es.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.eu/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/ru.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.pt/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/pt.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudc.pro/index.html" style="margin-left: 5px;">
<img src="/images/partner/swiss/ar.png" border=0 style="margin: 0px;" width=24 height=16></a>
<a href="http://cloudcom.asia/index.html" style="margin-left: 5px;margin-right: 5px;">
<img src="/images/partner/swiss/cn.png" border=0 style="margin: 0px;" width=24 height=16></a>
</td></tr></table>

</div>
</td>
		<td class="tdbar_st4_right" valign=top>
			<div class="menubarright"><img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1" alt=""></div></td>
	</tr>



</table>
</body>
</html>




</body>
</html>