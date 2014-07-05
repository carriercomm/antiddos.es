

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_news_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_02"><?php echo t('text_head_news_2') ?></font><?php end_slot() ?>

<div class="content">

<table border="0" cellpadding="0" cellspacing="0" width=100%><tr><td width="90%">
<h3 style="margin: 0px;"><?php t('News')?></h3>
</td><td align="right" nowrap>
<table cellpadding="0" cellspacing="0" border=0>
<tr>
<td align=left nowrap>
<a href="<?php echo url_for('@news_rss')?>" class="link"><img src="<?php echo solar_template_image_url('rss_32.png') ?>" width=32 height=32 alt="RSS News" border=0></a>&nbsp;
<?php include_partial('welcome/social', array('site' => $site)) ?></td>
<td>&nbsp;</td>
</tr>
</table>

</td>
</tr>
</table>

<?php t('News-Intro', array('%site%'=>$site->getName()))?>
</div>


<?php foreach($news as $n): ?>

<div class="content">

<h3><?php echo $n->title ?></h3>

<div style="width: 100%"><p align="justify" class="classnews"><?php echo prepare_news(get_teaser($n->content)) ?> ...</div>
<br>
<table width=100% cellpadding="2" cellspacing="0" ><tr>
<td colspan=10><hr color=#cccccc size=1></td></tr>
<tr>

<td nowrap width=15%><div style="padding: 0px 20px 0px 0px"><a class="link" href="<?php echo url_for('@news_view?id='.$n->getId())?>"><?php t('Read More')?></a></div></td>
<td width=55% background="/images/partner/fresh/bgnews.png" STYLE="background-repeat: no-repeat;">
<div style="padding: 0px 0px 0px 20px">
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
<div class="fb-like" data-send="false" data-href="<?php echo url_for('@news_view?id='.$n->getId(), true)?>" data-send="false" data-layout="button_count" data-show-faces="true"></div>
</td>
<td>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_for('@news_view?id='.$n->getId(), true)?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td>
</tr>
</table>
</div>

</td>
<td align=right width=30%><?php t('Published on:')?> <xi><?php echo format_date($n->created_at, 'D') ?></xi></td></tr></table>

</div>
<?php endforeach ?>

<div style="padding: 8px 0px;" align=center>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>

</div>
