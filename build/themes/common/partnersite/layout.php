<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.00 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php solar_include_stylesheets() ?>
    <?php include_javascripts() ?>
    <?php include_partial('welcome/tooltipScript') ?>

<script type="text/javascript">

function _getUpdates(){

	$.get("<?php echo url_for('@customer_info') ?>"+'?'+Math.random(), function(data)
	{
		obj = $.parseJSON(data);
		$('#update_tip_menu_tickets').html(obj.tickets);
		
		document.logininfoTick = setTimeout("_getUpdates()", 20000);
	});	
}

var chat_refresh = 0;

$(document).ready(function() {
<?php if(sfConfig::get('sf_web_debug')): ?>
  sfWebDebugToggleMenu();
<?php endif ?>

	inboxLivechat('<?php echo url_for("@livechat_inbox")?>');
	openLivechat("#group");
	
  $(".lang_nonactive").each(function() {
    $(this).simpletip({
    content: $(this).attr('tip'),
    position: 'bottom',
    offset: [0,20]
    })});
		
	<?php if($sf_user->isAuthenticated()) echo '_getUpdates();' ?>
});
</script>

<?php if(sfConfig::get('solar_main_theme') == 'fresh'): // temp, move to partial ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34131399-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php endif ?>

<?php if($sf_user->getFlash('show_conversion_code')) include_partial('welcome/conversion_code') ?>
<?php if($sf_user->getFlash('show_paid_conversion_code')) include_partial('welcome/paid_conversion_code') ?>

</head>

<body topmargin="0" leftmargin="0" rightmargin="0">

<?php include_partial('global/inbox') ?>

<center>

<table cellpadding="0" cellspacing="0" height=100 border=0 class="superwide supertop"><tr><td width=306 align=center valign=top class="s_shad">

<div style="height:10px; font-size: 0px;"></div>
<a href="/"><img src="<?php echo solar_main_theme_image_url('commonlogo.png') ?>" border=0 style="border: 0px solid;"></a>

</td><td valign=bottom class="right_top_td">



<table border=0 width=100% style=""><tr><td align=right></td><td width=10><a href="<?php echo url_for('@homepage')?>" class="commonmenu2 home new"><?php t('Home') ?></a>
<?php if(!$sf_user->isAuthenticated()): ?>
<td width=10><a href="<?php echo url_for('@login')?>" class="commonmenu2 login new"><?php t('Login') ?></a></td>
<?php endif?>
<td align=right width=100><?php include_component('welcome', 'language') ?></td></tr></table>

<div class="split_lang_and_menu"></div>

<table width=100% cellpadding="0" cellspacing="0" border=0  height=44>
<tr><td align=left valign=bottom style="padding: 0px 20px;">




<?php include_component('welcome', 'commonMenu') ?>



</td></tr></table>                            

</td></tr></table>


<table cellpadding="0" cellspacing="0"  border=0 class="superwide"><tr><td width=306 valign=top align=left class="af_bar">

<table cellpadding="0" cellspacing="0" width=306 border=0><tr><td style="s_shad">

<div class="start_menu"></div>

<?php include_component('newcart', 'brief') ?>

<?php if(!$sf_user->isAuthenticated()): ?>

<?php include_component('welcome', 'latestNews') ?>

<?php else: ?>

<?php include_component('welcome', 'membermenu') ?>

<?php include_component('auth', 'briefProfile') ?>

<?php endif ?>


<div class="title_menu helpcustomer s_shad"><?php t('HELP ONLINE')?></div>

<div class="af_title_menu" align=center style="

-webkit-border-radius: 1px;
-webkit-border-bottom-left-radius: 16px;
-moz-border-radius: 1px;
-moz-border-radius-bottomleft: 16px;
border-radius: 1px;
border-bottom-left-radius: 16px;">
<br>
<a style="cursor:pointer" target='chat1' class="iframe helpbox" id="group" href="<?php echo url_for('@livechat') ?>"><b><?php t('LIVE ASSISTANT')?></b>
<div style="height: 6px; font-size: 0px;"></div>
<?php t('assistant_text')?>
</a>
<br><br>

</div>

<div align=center style="margin-top: 13px; color: #ccc;"><?php t('We accept')?></div>
<div align=center style="margin: 0px;"><img src="<?php echo solar_image_url('credit_cards.png') ?>" width=270 height=52 style="margin-top: 7px; opacity: 0.7;"></div>
<div align=center style="margin: 0px;"><img src="<?php echo solar_image_url('credit_cards2.png') ?>" width=270 height=52 style="margin-top: 0px; opacity: 0.6;"></div>

<br><br><br>

</td></tr></table>

</td><td class="bar_content" valign=top align=left>




   <?php include_partial('global/flashes') ?>


   <?php echo $sf_content ?>




</td></tr></table>


<table cellpadding="0" cellspacing="0" class="superwide" height=40 border=0 style="margin-top: 10px;">
<tr>
<td width=320>&nbsp;</td>
	<td align="left" nowrap>
	<div style="padding: 0px 0px 0px 0px"><img src="<?php echo solar_image_url('sm1.png') ?>"></div>
	</td>

	<td width=69% align="right">
	<font class="bottommenu nolink" style=""><?php echo sfConfig::get('app_site_name').' &copy; '.date('Y')?> <font class="bottommenu  nolink">Ver 2.20</font></font>
	<a href="<?php echo url_for('@show_page?name=terms-of-service') ?>" class="bottommenu"><?php t('Terms of Service')?></a>
	<a href="<?php echo url_for('@show_page?name=privacy-policy') ?>" class="bottommenu"><?php t('Privacy policy')?></a>


	
</td></tr></table>



<br><br>

</body>
</html>
