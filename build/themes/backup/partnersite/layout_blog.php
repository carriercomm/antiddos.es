<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.00 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
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

