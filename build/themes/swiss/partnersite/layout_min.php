<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php solar_include_stylesheets() ?>
    <?php include_javascripts() ?>
    <?php include_partial('welcome/tooltipScript') ?>
  </head>
<script type="text/javascript">	
$(document).ready(function(){
	parent.$("#fancybox-content").height($('#wrapper').height());
});
</script>
<body>
<div id="wrapper">
<?php echo $sf_content ?>
</div>
</body>
</html>

