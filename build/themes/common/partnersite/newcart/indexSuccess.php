<?php $sf_response->addMeta("title", __("View Shopping Cart - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title cart"><?php t('My Cart')?></div>

<div class="content">


<div style="padding: 20px;"><?php t('cart_div_1')?></div>

<div id="cart_loader" style="display: none"><center><img src="<?php echo solar_image_url('loader.gif') ?>"></center></div>
<div id="cart_contents">
<?php include_partial('cart', array('cart' => $cart)); ?>
</div>

</div>

<script>

function reloadCart() {
  $("#cart_loader").show();
  $("#cart_contents").html('').load(
    '<?php echo url_for('@newcart_list') ?>',
    function() { $("#cart_loader").hide(); }
  );
}

$(document).ready(function () {
<?php if(sfConfig::get('sf_web_debug')): ?>
  sfWebDebugToggleMenu();
<?php endif ?>
});	
</script>
