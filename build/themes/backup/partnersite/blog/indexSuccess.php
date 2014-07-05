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
														<a href="<?php echo url_for('@localized_homepage') ?>" class="logo" alt="Cloudcom">
																<img src="<?php echo solar_template_image_url('logo.png') ?>" alt="<?php t('DDoS Protected') ?> Cloudcom" border=0>
																<div class="slogan"><b><?php t('DDoS News') ?></b></div>
														</a>
												</div>
								
</td><td align=right>
<?php include_component('auth', 'login') ?>
</td></tr></table>

</td>
		<td class="tdbar_st1_right">
			<img src="<?php echo solar_template_image_url('t.png') ?>" width="1" height="1" alt=""></td>
	</tr></table>

<table width="" border="0" cellpadding="5" cellspacing="0"><tr>
<td width=240 valign=top align=center>
</td>
</td>
<td width=800 valign=top>
&nbsp;
</td>
<td width=250 valign=bottom align=right>

  <?php include_partial('blog/search_form') ?>

</td>
</tr><tr>
<td width=240 valign=top>



<?php include_partial('blog/mainmenu') ?>




</td>
<td width=800 valign=top>

<div class="div_content">


            <?php if (count($posts)): ?>
            <?php foreach($posts as $n): ?>



<div class="subject"><?php echo $n->title ?></div>
<font class="time"><?php t('Published on:')?> <font class="date"><?php echo format_date($n->created_at, 'D') ?></font> by <font class="autor"><?php echo $n->author ?></font></font>
<br><br>
<table class="text" border="0" cellpadding="0" cellspacing="0"><tr><td>

<?php echo html_entity_decode(get_teaser($n->content)) ?>

</td></tr></table>
<br>
<a class="readmore" href="<?php echo url_for('@blog_view?id='.$n->getId())?>"><?php t('Read More')?></a>
<a href="<?php echo url_for('@blog_view?id='.$n->getId())?>" class="readmore">Read comments</a>



<hr>
                              <div style="padding: 0px 0px 0px 0px">
                                  <table>
                                      <tr>
                                          <td>

                                              <!-- Place this tag where you want the +1 button to render -->
                                              <g:plusone size="medium"></g:plusone>

                                              <!-- Place this render call where appropriate -->
                                              <script type="text/javascript">
                                                  (function() {
                                                      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                      po.src = 'https://apis.google.com/js/plusone.js';
                                                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                                  })();
                                              </script>
                                          </td>
                                          <td>
                                              <div class="fb-like" data-send="false" data-href="<?php echo url_for('@blog_view?id='.$n->getId(), true)?>" data-send="false" data-layout="button_count" data-show-faces="true"></div>
                                          </td>
                                          <td>
                                              <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_for('@blog_view?id='.$n->getId(), true)?>">Tweet</a>
                                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                          </td>
                                      </tr>
                                  </table>
                              </div>



<hr><br>


              <?php endforeach ?>
            <?php else: ?>
              <h3><?php t('Results') ?></h3>

              <table width=100%>
                  <tr><td valign=top>
                    <?php t('Posts not found') ?>
                  </td></tr>
              </table>
            <?php endif ?>




</div>


</td>
<td width=250 valign=top>

<?php include_component('blog', 'sidebar') ?>

</td>
</tr></table>






