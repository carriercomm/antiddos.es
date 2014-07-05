<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php solar_include_stylesheets() ?>
		<?php use_javascript('jquery.simpletip-1.3.1.min.js') ?>
    <?php include_javascripts() ?>
		<?php include_partial('welcome/tooltipScript') ?>
    <style type="text/css">
    <!--
    html { height: 100%; margin: 0; padding: 0; }         
    body { height: 100%; margin: 0; padding: 0; padding: 0 0px; }
    .page {  min-height: 100%; height: 100%; margin: 0 auto; }
    -->
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#outlogin').height($(window).height());
			
			$(".lang_nonactive").each(function() {
				$(this).simpletip({
				content: $(this).attr('tip'),
				position: 'top',
				offset: [0,-20]});
			});

			if (parent.$('#fancybox-frame').length > 0)
			{
				parent.$.fancybox.close();
				parent.window.location.reload();
			}	
    });
    </script>

  </head>


 <body>

<center>

<table class="page"  style="width:470px;" id="outlogin" border=0><tr><td align=left valign=top>
<br><br><br><br>
<center>
<div style="margin: 0px 0px 0px 0px; width:100%; border: 0px solid white;"><img src="<?php echo solar_main_theme_image_url('commonlogo.png') ?>"></div>          <br><br><br>
</center>
<div class="outlogin" style="width:470px;">

   <?php include_partial('global/flashes') ?>
   <?php echo $sf_content ?>

</div>

<br>
<div style="height: 10px; font-size: 0px;"> </div>

<center><?php include_component('welcome', 'language') ?></center>
</td></tr></table>

    </body>




</center>
</body>
</html>

