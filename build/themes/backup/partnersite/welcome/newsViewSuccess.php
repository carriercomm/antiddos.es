<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>
<?php slot('slider_title') ?><font class="hh_01"><?php echo t('text_head_about_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_02"><?php echo $news->title ?></font><?php end_slot() ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<Br>
<div class="content">
<h3><?php echo $news->title ?></h3>

<div style="width: 700px"><p align="justify"><?php echo prepare_news($news->content) ?></div>
</p><br>

<table width=100% cellpadding="2" cellspacing="0" ><tr>
<td colspan=10><hr color=#cccccc size=1></td></tr>
<tr>

<td nowrap width=15%><div style="padding: 0px 20px 0px 0px"><a class="minic" href="<?php echo url_for('@news')?>" class="link">&laquo; Read all news</a><font class="minic"></font></div></td>
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
<div class="fb-like" data-send="false" data-href="<?php echo url_for('@news_view?id='.$news->getId(), true)?>" data-send="false" data-layout="button_count" data-show-faces="true"></div>
</td>
<td>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_for('@news_view?id='.$news->getId(), true)?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td>
</tr>
</table>
</div>

</td>
<td align=right width=30%><?php t('Published on:')?> <xi><?php echo format_date($news->created_at, 'D') ?></xi></td></tr></table>

<br><br><div class="fb-comments" data-href="<?php echo url_for('@news_view?id='.$news->getId(), true)?>" data-num-posts="10" data-width="835"></div>

</div>
</div>
