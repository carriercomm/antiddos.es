


<table width="" border="0" cellpadding="5" cellspacing="0"><tr>
<td width=240 valign=top align=center>
<a href="" class="logo"><img src="<?php echo solar_main_theme_image_url('commonlogo.png') ?>" border=0 width=200></a>
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



<div class="subject"><?php echo $post->title ?></div>
<font class="time"><?php t('Published on:')?> <font class="date"><?php echo format_date($post->created_at, 'D') ?></font> by <font class="autor"><?php echo $post->author ?></font></font>
<br><br>

<table class="text"  border="0" cellpadding="0" cellspacing="0"><tr><td>

<?php echo html_entity_decode($post->content) ?>

</td></tr></table>

<br>
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
                                              <div class="fb-like" data-send="false" data-href="<?php echo url_for('@blog_view?id='.$post->getId(), true)?>" data-send="false" data-layout="button_count" data-show-faces="true"></div>
                                          </td>
                                          <td>
                                              <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_for('@blog_view?id='.$post->getId(), true)?>">Tweet</a>
                                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                          </td>
                                      </tr>
                                  </table>
                              </div>



<hr>

  <?php include_partial('blog/blogComments', array('comments' => $comments, 'form' => $form, 'post'=> $post)) ?>


        

</div>


</td>
<td width=250 valign=top>

<div class="div_menu">

  <?php include_component('blog', 'sidebar') ?>

</div>

</td>
</tr></table>






